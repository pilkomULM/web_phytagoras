<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa as siswaModels;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Services\tepianService;


class siswa extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $service;
    public function __construct(tepianService $tepianService)
    {
        $this->service = $tepianService;
    }
    public function index()
    {
        $siswa = siswaModels::all();
        // dd($siswa);
        return view('pages.beranda.homeguru', compact('siswa'));
    }

    public function rekapkuis($kelas = null)
    {
        if ($kelas != null) {
            $siswa = siswaModels::where('kelas', $kelas)->get();
        } else {
            $siswa = siswaModels::get();
        }

        return view('pages.beranda.rekapkuis', compact('siswa'));
    }
    public function create()
    {
        return view('pages.beranda.tambahsiswa');
    }

    public function getDataSiswa($kelas = null)
    {
        if ($kelas != null) {
            $siswa = siswaModels::where('kelas', $kelas)->get();
        } else {
            $siswa = siswaModels::all();
        }
        return response($siswa, 200);
    }

    /**
     * Store a newly created data
     */
    public function storeDataSiswa(Request $request)
    {

        $validatedData = $request->validate(
            [
                'nama' => 'required|max:255',
                'noinduk' => 'required',
                'email' => 'required|email|unique:siswas',
                'kelas' => 'required',
                'username' => 'required|unique:users',
                'password' => 'required',
            ],
            [
                'nama.required' => "Harap isi nama siswa!",
                "noinduk.required" => "Harap isi nis siswa!",
                "email.required" => "Harap isi email siswa",
                "email.email" => "Isi format email yang benar cth : abc@gmail.com",
                "email.unique" => "Email siswa sudah terdaftar!",
                "username.required" => "Harap isi username siswa cth : nabila12",
                "username.unique" => "Username siswa telah terdaftar!",
                "password.required" => "Harap isi password siswa",
                "kelas.required" => "Harap pilih kelas!"
            ]
        );

        $req = $this->service->createUser(
            $request->nama,
            $request->noinduk,
            $request->email,
            $request->kelas
        );


        if (isset($req->error)) {
            return response(["error" => $req->errors], 422);
        } else {
            // masukan siswa ke kuis yang musti dilakukan
            $this->service->addToKuis($req["peserta"]["id"], "6UU9");
            $this->service->addToKuis($req["peserta"]["id"], "rrQJ");
            $this->service->addToKuis($req["peserta"]["id"], "dsX0");
            $this->service->addToKuis($req["peserta"]["id"], "2ZlM");
            $this->service->addToKuis($req["peserta"]["id"], "DIVg");

            $User = new User();
            $User->username = $request->username;
            $User->password = Hash::make($request->password);
            $User->save();


            $siswa = new siswaModels();
            $siswa->nama = $request->nama;
            $siswa->id_user = $User->id;
            $siswa->noinduk = $request->noinduk;
            $siswa->email = $request->email;
            $siswa->kelas = $request->kelas;
            $siswa->id_tepian_user = $req["peserta"]["id"];
            $siswa->save();

            return response(["message" => "berhasil menambahkan siswa"], 200);
        }


    }

    public function getDataSiswaById($id)
    {
        $siswa["user"] = User::where("id", $id)->first();
        $siswa["siswa"] = siswaModels::where("id_user", $id)->first();
        return response($siswa, 200);
    }

    public function updateDataSiswa(Request $request, $id)
    {

        $validatedData = $request->validate(
            [
                'nama' => 'required|max:255',
                'noinduk' => 'required',
                'email' => 'required|email',
                'kelas' => 'required',
                'username' => 'required',
            ],
            [
                'nama.required' => "Harap isi nama siswa!",
                "noinduk.required" => "Harap isi nis siswa!",
                "email.required" => "Harap isi email siswa",
                "email.email" => "Isi format email yang benar cth : abc@gmail.com",
                "username.required" => "Harap isi username siswa cth : nabila12",
                "kelas.required" => "Harap pilih kelas!"
            ]
        );

        $siswa = siswaModels::where("id_user", $id)->first();
        $user = User::where("id", $id)->first();
        $siswa->nama = $request->nama;
        $siswa->noinduk = $request->noinduk;
        $siswa->email = $request->email;
        $siswa->kelas = $request->kelas;
        $siswa->save();

        $user->username = $request->username;
        if (isset($request->password)) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return response(["message" => "berhasil mengubah siswa"], 200);
    }

    public function deleteDataSiswa($id)
    {
        $siswa = siswaModels::find($id);
        $user = user::where("id", $siswa->id_user);
        $siswa->delete();
        $req = $this->service->deleteUser($siswa->id_tepian_user);
        $user->delete();

        return response(["message" => "berhasil menghapus siswa"], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();

        $siswa = new siswaModels();
        $siswa->nama = $request->nama;
        $siswa->id_user = $user->id;
        $siswa->noinduk = $request->noinduk;
        $siswa->email = $request->email;
        $siswa->kelas = $request->kelas;
        $siswa->save();
        return redirect(route("halamanguru.beranda"));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data["siswa"] = siswaModels::find($id);
        $data["user"] = user::where("id", $data["siswa"]->id_user)->first();
        // dd($data["siswa"], $data["user"]);
        return view('pages.beranda.tambahsiswa', compact("data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $siswa = siswaModels::find($id);
        $user = user::where("id", $siswa->id_user)->first();

        $siswa->nama = $request->nama;
        $siswa->id_user = $user->id;
        $siswa->noinduk = $request->noinduk;
        $siswa->email = $request->email;
        $siswa->kelas = $request->kelas;
        $siswa->save();

        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect(route("halamanguru.beranda"));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = siswaModels::find($id);
        $user = user::where("id", $siswa->id_user);
        $siswa->delete();
        $user->delete();

        return redirect(route("halamanguru.beranda"));
    }
}