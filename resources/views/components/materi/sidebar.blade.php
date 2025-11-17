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
                    <a href="/beranda" class="waves-effect">
                        <i class="fas fa-home"></i>
                        <span>Beranda</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect" >
                        <i class="fas fa-book"></i>
                        <span>Teorema Pythagoras</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/materi1">Materi</a></li>
                        <li><a href="/kuis1">Kuis</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect" >
                        <i class="fas fa-book"></i>
                        <span>Tripel Pythagoras</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/materi2">Materi</a></li>
                        <li><a href="/kuis2">Kuis</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect" >
                        <i class="fas fa-book"></i>
                        <span>Segitiga Istimewa</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/materi3">Materi</a></li>
                        <li><a href="kuis3">Kuis</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect" >
                        <i class="fas fa-book"></i>
                        <span>Penerapan Teorema</span>
                        <span style="padding-left: 28px">Pythagoras</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/materi4">Materi</a></li>
                        <li><a href="kuis4">Kuis</a></li>
                    </ul>
                </li>
                <li>
                    <a href="https://tepiankuis.softforge.my.id/cbt" class=" waves-effect">
                        <i class="fas fa-file-alt"></i>
                        <span>Evaluasi</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
