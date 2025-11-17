@extends('template.login')
@section('title', 'register')
@section('css')
@endsection

@section('main-content')

    <body class="auth-body-bg bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="index.html" class="auth-logo">
                                    <img src="{{ asset('images/logologin.png') }}" height="30" class="logo-dark mx-auto"
                                        alt="">
                                    <img src="{{ asset('images/logologin.png') }}" height="30" class="logo-light mx-auto"
                                        alt="">
                                </a>
                            </div>
                        </div>

                        <h4 class="text-muted text-center font-size-30"><b style="color:#2A5D66">Register</b></h4>

                        <div class="p-3">
                            <form class="form-horizontal mt-3" action="{{ route('auth.register') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control  @error('nama') is-invalid @enderror" type="text"
                                            value="{{ old('nama') }}" placeholder="Nama" name="nama">
                                    </div>
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control @error('noinduk') is-invalid @enderror @error('nis') is-invalid @enderror" type="text"
                                            value="{{ old('noinduk') }}" placeholder="No Induk" name="noinduk">
                                    </div>
                                    @error('noinduk')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    @error('nis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control @error('email') is-invalid @enderror" type="email"
                                            value="{{ old('email') }}" placeholder="Email" name="email">
                                    </div>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <select class="form-select @error('kelas') is-invalid @enderror"
                                            aria-label="Default select example" name="kelas">
                                            <option disabled selected>Pilih Kelas</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                        </select>
                                    </div>
                                    @error('kelas')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control  @error('username') is-invalid @enderror" type="text"
                                            placeholder="Username" value="{{ old('username') }}" autocomplete="off"
                                            name="username">
                                    </div>
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control @error('username') is-invalid @enderror" type="password"
                                            placeholder="Password" autocomplete="off" name="password">
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light"
                                            type="submit">Daftar</button>
                                    </div>
                                </div>

                                <div class="form-group mt-2 mb-0 row">
                                    <div class="col-12 mt-3 text-center">
                                        <a href="/login" class="text-muted">Sudah punya akun?</a>
                                    </div>
                                </div>
                            </form>
                            <!-- end form -->
                        </div>
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->
    @endsection

    @section('js')
    @endsection
