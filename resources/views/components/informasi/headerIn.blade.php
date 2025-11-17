<header id="page-topbar" style="background-color: #2A5D66;">
    <div class="navbar-header" style="background-color: #2A5D66;">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="/beranda" class="btn btn-outline-success tombol" role="button" id="tombol-kembali">
                    <i class="fas fa-arrow-circle-left" style="font-size: 15px; color:#fff">  Kembali</i>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-24 d-lg-none header-item" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="ri-menu-2-line align-middle"></i>
            </button>
        </div>
        <h1 style="color: #fff">@yield('title')</h1>
        <div class="d-flex">
            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class=" ms-1">{{Auth::user()->username}}</span>
                    <i class="mdi mdi-chevron-down "></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                    <a class="dropdown-item text-danger" href="/logout" action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        <i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    #tombol-kembali{
        border: 1px solid #fff;
    }
    #tombol-kembali:hover{
        background-color: #00B8A9;
        border: 1px solid #00B8A9;
    }
</style>
