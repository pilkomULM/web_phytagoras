<header id="page-topbar">
    <div class="navbar-header" style="background-color: #2A5D66;">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-light" style="padding-top: 12px">
                    <span class="logo-sm">
                        <img src="{{ asset("images/Teorema.png")}}" alt="logo-sm-light" height="40">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset("images/Teorema.png")}}" alt="logo-light" height="40">
                    </span>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>
        </div>

        <div class="judul-materi">
            <h1 style="color: #fff">@yield('title')</h1>
        </div>

        <div class="d-flex">
            {{-- <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
            </div> --}}

            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <span class="ms-1">{{Auth::user()->detail->nama}}</span>
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    {{-- <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a> --}}
                    <a class="dropdown-item text-danger" href="/logout" action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        <i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>
