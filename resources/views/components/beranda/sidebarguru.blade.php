<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">

            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{Auth::user()->detail->nama}}</h4>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="/beranda" class=" waves-effect">
                        <i class="fas fa-home"></i>
                        <span>Beranda</span>
                    </a>
                </li>
                <li>
                    <a href="{{route("halamanguru.beranda")}}" class=" waves-effect">
                        <i class="ri-database-fill"></i>
                        <span>Data Siswa</span>
                    </a>
                </li>
                <li>
                    <a href="/rekapkuis" class=" waves-effect">
                        <i class="ri-archive-fill"></i>
                        <span>Rekap Kuis</span>
                    </a>
                </li>
                <li>
                    <a href="rekapevaluasi" class=" waves-effect">
                        <i class="ri-archive-fill"></i>
                        <span>Nilai Evaluasi</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="#" class=" waves-effect">
                        <i class="fas fa-home"></i>
                        <span>Data Kelas</span>
                    </a>
                </li> --}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
