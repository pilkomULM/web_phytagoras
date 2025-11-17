@extends('template.materi')

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('assets') }}/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets') }}/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets') }}/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets') }}/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
@endsection

{{-- @php
    dd($data);
@endphp --}}

@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mt-4">
                                <div class="mb-3">
                                    <a href="index.html" class="auth-logo">
                                        <img src="{{ asset("images/logologin.png")}}" height="30" class="logo-dark mx-auto" alt="">
                                        <img src="{{ asset("images/logologin.png")}}" height="30" class="logo-light mx-auto" alt="">
                                    </a>
                                </div>
                            </div>

                            @if(isset($data))
                            <h4 class="text-muted text-center font-size-30"><b style="color:#2A5D66">Edit Siswa</b></h4>
                            @else
                            <h4 class="text-muted text-center font-size-30"><b style="color:#2A5D66">Tambah Siswa</b></h4>
                            @endif


                            <div class="p-3">
                                <form class="form-horizontal mt-3" action="{{isset($data) ? route("siswa.update", $data["siswa"]->id) : route("siswa.store")}}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3 row">
                                        <div class="col-12">
                                            <input class="form-control" type="text" required="" value="{{isset($data) ? $data["siswa"]->nama : ""}}" placeholder="Nama" name="nama">
                                        </div>
                                        @error('nama')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <div class="col-12">
                                            <input class="form-control" type="text" value="{{isset($data) ? $data["siswa"]->noinduk : ""}}" required="" placeholder="No Induk" name="noinduk">
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <div class="col-12">
                                            <input class="form-control" type="email" value="{{isset($data) ? $data["siswa"]->email : ""}}" required="" placeholder="Email" name="email">
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <div class="col-12">
                                            <select class="form-select" aria-label="Default select example" name="kelas">
                                                @if(isset($data))
                                                <option selected disabled>Kelas</option>
                                                <option value="A" {{$data["siswa"]->kelas=="A"  ? "selected" : ""}}>A</option>
                                                <option value="B" {{$data["siswa"]->kelas=="B"  ? "selected" : ""}}>B</option>
                                                <option value="C" {{$data["siswa"]->kelas=="C"  ? "selected" : ""}}>C</option>
                                                @else
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                @endif
                                              </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <div class="col-12">
                                            <input class="form-control" type="text" required="" value="{{isset($data) ? $data["user"]->username : ""}}" placeholder="Username" name="username">
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <div class="col-12">
                                            <input class="form-control" type="password" required="" placeholder="Password" name="password">
                                        </div>
                                    </div>

                                    <div class="form-group text-center row mt-3 pt-1">
                                        <div class="col-12">
                                            @if(isset($data))
                                            <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Simpan</button>
                                            @else
                                            <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Tambah</button>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                                <!-- end form -->
                            </div>
                        </div>
                        <!-- end cardbody -->
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
@section('js')
    <!-- Required datatable js -->


    <!-- Datatable init js -->
    {{-- <script src="{{asset('assets')}}/js/pages/datatables.init.js"></script> --}}
    <script src="{{ asset('assets') }}/libs/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            var datatable = new DataTable("#table", {
                responsive: true
            })
        });
    </script>
