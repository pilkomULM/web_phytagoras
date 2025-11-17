@extends('template.login')
@section('title','login')
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
                                <img src="{{ asset("images/logologin.png")}}" height="30" class="logo-dark mx-auto" alt="">
                                <img src="{{ asset("images/logologin.png")}}" height="30" class="logo-light mx-auto" alt="">
                            </a>
                        </div>
                    </div>

                    <h4 class="text-muted text-center font-size-30"><b style="color:#2A5D66">Login</b></h4>

                    <div class="p-3">
                        <form class="form-horizontal mt-3" action="{{route("auth.login")}}" method="POST">
                        @csrf
                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control @error('username') is-invalid @enderror" type="text"  placeholder="Username" name="username">
                                </div>
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control @error('password') is-invalid @enderror" type="password"  placeholder="Password" name="password" >
                                </div>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 text-center row mt-3 pt-1">
                                <div class="col-12">
                                    <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Masuk</button>
                                </div>
                            </div>

                            <div class="form-group mb-0 row mt-2">
                                <center>
                                <div class="col-sm-7 mt-3">
                                    <a></i> Belum punya akun?</a>
                                    <a href="/register" class="text-muted"><i class="mdi mdi-account-circle"></i><ins> Buat Akun</ins></a>
                                </div>
                                </center>
                            </div>
                        </form>
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

