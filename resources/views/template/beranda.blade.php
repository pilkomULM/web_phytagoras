<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>TeoremaPythagoras | @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico">

        <!-- jquery.vectormap css -->
        <link href="{{ asset('assets') }}/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="{{ asset('assets') }}/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{ asset('assets') }}/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        @yield('css')

    </head>

    <body data-topbar="dark" data-layout="horizontal" class="menu-utama">

        <!-- Begin page -->
        <div id="layout-wrapper">

            {{-- Header --}}
            <header id="page-topbar" style="background-color: #2A5D66;">
                @auth
                <div class="navbar-header" style="background-color: #2A5D66;">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset("images/Teorema.png")}}" alt="logo-sm-light" height="40">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset("images/Teorema.png")}}" alt="logo-light" height="40">
                                </span>
                            </a>
                        </div>
                        <button type="button" class="btn btn-sm px-3 font-size-24 d-lg-none header-item" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>
                    </div>
                    <h1 style="color: #fff">Teorema Pythagoras</h1>
                    <div class="d-flex">
                        @auth
                        <div class="dropdown d-inline-block user-dropdown">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="ms-1">{{ Auth::user()->detail->nama }}</span>
                                <i class="mdi mdi-chevron-down "></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                {{-- <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a> --}}
                                <a class="dropdown-item text-danger" href="/logout" action="{{ route('auth.logout') }}" method="POST">
                                    @csrf
                                    <i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>
                        @endauth

                    </div>
                </div>
                @endauth
            </header>
{{-- navbar --}}
@auth
                <div class="topnav">
                    <div class="container-fluid">
                        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                            <div class="collapse navbar-collapse" id="topnav-menu-content">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/beranda">
                                            <i class=" fas fa-home"></i> Beranda
                                        </a>
                                    </li>
                                </ul>
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#section2">
                                            <i class=" fas fa-clipboard-list"></i> Menu
                                        </a>
                                    </li>
                                </ul>
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#section3">
                                            <i class=" fas fa-info-circle"></i> Tentang
                                        </a>
                                    </li>
                                </ul>
                                @if(Auth::user()->role == 'guru')
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route("halamanguru.beranda")}}">
                                            <i class="fas fa-chalkboard-teacher"></i> Halaman Guru
                                        </a>
                                    </li>
                                </ul>
                                @endif
                            </div>
                        </nav>
                    </div>
                </div>
@endauth
@yield('main-content')
            
        {{-- Header --}}
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            {{-- progress --}}
            {{-- footer --}}
            <center>
            <footer class="footer" style="background-color: #2A5D66";>
                <div class="container-fluid">
                        <div class="col-sm-6">
                            <span style="color: #fff" class="text"> Copyright © Nabila Najmi
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            </span>
                        </div>
                </div>
            </footer>
        </center>
            {{-- footer --}}

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets') }}/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets') }}/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('assets') }}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('assets') }}/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="{{ asset('assets') }}/libs/apexcharts/apexcharts.min.js"></script>

        <!-- jquery.vectormap map -->
        <script src="{{ asset('assets') }}/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="{{ asset('assets') }}/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

        <!-- Required datatable js -->
        <script src="{{ asset('assets') }}/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('assets') }}/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

        <!-- Responsive examples -->
        <script src="{{ asset('assets') }}/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ asset('assets') }}/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <script src="{{ asset('assets') }}/js/pages/dashboard.init.js"></script>

        <script src="{{ asset('assets') }}/js/app.js"></script>
        {{-- <script>
            let bulat1 = document.querySelector('.bulat1'),
            progressValue1 = document.querySelector('.p-value1');

            let progressStartValue1 = 0,
                progressEndValue1 = 50,
                speed1 = 50;

            let progress1 = setInterval(() =>{
                progressStartValue1++;

                progressValue1.textContent = `${progressStartValue1}%`
                bulat1.style.background = `conic-gradient(#2A5D66 ${progressStartValue1 * 3.6}deg, #fff 0deg)`

                if(progressStartValue1 == progressEndValue1){
                    clearInterval(progress1);
                }
            }, speed1);

            /*progress dua*/
            let bulat2 = document.querySelector('.bulat2'),
            progressValue2 = document.querySelector('.p-value2');

            let progressStartValue2 = 0,
                progressEndValue2 = 70,
                speed2 = 50;

            let progress2 = setInterval(() =>{
                progressStartValue2++;

                progressValue2.textContent = `${progressStartValue2}%`
                bulat2.style.background = `conic-gradient(#2A5D66 ${progressStartValue2 * 3.6}deg, #fff 0deg)`

                if(progressStartValue2 == progressEndValue2){
                    clearInterval(progress2);
                }
            }, speed2);

            /*progress tiga*/
            let bulat3 = document.querySelector('.bulat3'),
            progressValue3 = document.querySelector('.p-value3');

            let progressStartValue3 = 0,
                progressEndValue3 = 100,
                speed3 = 50;

            let progress3 = setInterval(() =>{
                progressStartValue3++;

                progressValue3.textContent = `${progressStartValue3}%`
                bulat3.style.background = `conic-gradient(#2A5D66 ${progressStartValue3 * 3.6}deg, #fff 0deg)`

                if(progressStartValue3 == progressEndValue3){
                    clearInterval(progress3);
                }
            }, speed3);
        </script> --}}
        @yield('js')

    </body>
    <style>
        .belajar{
            border: 3px solid #fff;
            color: #fff;
            width: 200px;
            height: 50px;
            font-size: 20px;
            font-weight: bold;
        }
        .belajar:hover{
            background-color: #00B8A9;
            color: #fff;
            border: 3px solid #00B8A9;
            transform: scale(1.2) translateY(10px);
            transition: .4s;
        }
        #satu{
            /* font-size: 5rem; */
            color: #fff;
            font-size: 4rem;
            font-weight: bold;
        }
        #dua{
            font-size: 2rem;
            color: #fff;
        }
        .menu-utama{
            background-color: #2A5D66;
        }
        .footer{
            position: fixed;
        }
        .box1{
            max-width: 100%;
            padding: 20px;
            box-shadow: none;
            background: transparent;
        }
        .box-dua{
            left: 0!important;
            right: 0!important;
            padding: 20px;
        }
        .box-tombol{
            box-sizing: border-box;
            box-shadow: 7px 7px 0px 0px #162938;
            width: 18rem;
            padding: 20px;
            background: #fff;
            margin-top: 20px;
        }
        .tombol{
            border: 3px solid #2A5D66;
            color: #2A5D66;
            width: 200px;
            height: 50px;
            font-size: 20px;
            font-weight: bold;
            background-color: #fff;
        }
        .tombol:hover{
            background-color: #00B8A9;
            color: #fff;
            border: 3px solid #00B8A9;
            transform: scale(1.2) translateY(10px);
            transition: .4s;
        }
        .beranda{
            background-image: url("/images/bgbaru.png");
        }
        .beranda-box2{
            background-color: #2A5D66;
        }
        .beranda-box3{
            background-color: #2A5D66;
            margin: 20px 40px 20px 40px;
            color: #2A5D66;
            box-sizing: border-box;
            box-shadow: 7px 7px 0px 0px #162938;
        }
        .box3{
            background: transparent;
            box-shadow: none;
        }
        .box3:hover{
            box-sizing: border-box;
            box-shadow: 2px 2px 2px 2px #2A5D66;
            opacity: 100;
            transform: scale(1.0) translateY(2px);
            transition: .4s;
        }

        /* progres */
        /* .progres-container{
            display: grid;
            padding: 50px;
            grid-template-columns: repeat(auto-fit, minmax(220px, auto));
            grid-gap: 2.5rem;
            align-items: center;
        }

        .p-box{
            position: relative;
            height: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: #feeee7;
            padding: 20px;
            border-radius: 0.5rem;
            box-sizing: border-box;
            box-shadow: 10px 10px 0px 0px #162938;
            row-gap: 30px;
        }

        .p-box:hover{
            transform: scale(1.1) translateY(10px);
            transition: .4s;
        }

        .bulat1{
            position: relative;
            height: 100px;
            width: 100px;
            border-radius: 50%;
            background:conic-gradient(#2A5D66 3.6deg, #fff 0deg);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bulat1::before{
            content: "";
            position: absolute;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: #feeee7;
        }

        .p-value1{
            position: relative;
            font-size: 20px;
            font-weight: 600;
            color: #2A5D66;
        }

        .bulat2{
            position: relative;
            height: 100px;
            width: 100px;
            border-radius: 50%;
            background:conic-gradient(#2A5D66 3.6deg, #fff 0deg);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bulat2::before{
            content: "";
            position: absolute;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: #feeee7;
        }

        .p-value2{
            position: relative;
            font-size: 20px;
            font-weight: 600;
            color: #2A5D66;
        }

        .bulat3{
            position: relative;
            height: 100px;
            width: 100px;
            border-radius: 50%;
            background:conic-gradient(#2A5D66 3.6deg, #fff 0deg);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bulat3::before{
            content: "";
            position: absolute;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: #feeee7;
        }

        .p-value3{
            position: relative;
            font-size: 20px;
            font-weight: 600;
            color: #2A5D66;
        } */
    </style>
</html>
