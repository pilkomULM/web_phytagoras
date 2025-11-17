<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Services\tepianService;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    protected $service;
    public function __construct(tepianService $tepianService)
    {
        $this->service = $tepianService;
    }
    public function indexL()
    {
        return view("pages.login.login");
    }
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/beranda');
        }

        return back()->withErrors([
            'username' => 'username tidak ditemukan.',
            'password' => 'pasword salah.'
        ])->onlyInput(['username', 'password']);
    }

    public function indexR()
    {
        return view("pages.login.register");
    }
    public function store(Request $request)
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
                'nama.required' => "Harap isi nama anda!",
                "noinduk.required" => "Harap isi nis anda!",
                "email.required" => "Harap isi email anda",
                "email.email" => "Isi format email yang benar cth : abc@gmail.com",
                "email.unique" => "Email anda sudah terdaftar!",
                "username.required" => "Harap isi username anda cth : nabila12",
                "username.unique" => "Username anda telah terdaftar!",
                "password.required" => "Harap isi password anda",
                "kelas.required" => "Harap pilih kelas!"
            ]
        );

        $validatedData['password'] = Hash::make($validatedData['password']);

       

        $req = $this->service->createUser(
            $request->nama,
            $request->noinduk,
            $request->email,
            $request->kelas
        );

        // dd($req);

        if(isset($req->error)){
            return redirect()->back()->withInput()->withErrors($req->errors);
        }else{
            // mendaftarkan peserta ke kuis
           
            $this->service->addToKuis($req["peserta"]["id"],"6UU9");
            $this->service->addToKuis($req["peserta"]["id"],"rrQJ");
            $this->service->addToKuis($req["peserta"]["id"],"dsX0");
            $this->service->addToKuis($req["peserta"]["id"],"2ZlM");
            $data = $this->service->addToKuis($req["peserta"]["id"],"DIVg");

            $User = new User();
            $User->username = $request->username;
            $User->password = Hash::make($request->password);
            $User->save();

            $siswa = new Siswa();
            $siswa->nama = $request->nama;
            $siswa->id_user = $User->id;
            $siswa->noinduk = $request->noinduk;
            $siswa->email = $request->email;
            $siswa->kelas = $request->kelas;
            $siswa->id_tepian_user = $req["peserta"]["id"];
            $siswa->save();
        }
        

        return redirect(route("auth.login"))->with('success', 'Registration Succesfull! Please Login');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}