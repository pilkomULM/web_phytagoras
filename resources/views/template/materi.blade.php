<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TeoremaPythagoras | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets') }}/css/materi.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script type="text/javascript" async
        src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML" async></script>
    <script src="https://www.geogebra.org/apps/deployggb.js"></script>

    @yield('css')
</head>

<body data-topbar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        {{-- header --}}
        @include('components.materi.header')
        {{-- header --}}
        @php
            $routesekarang=Route::getCurrentRoute()->getAction('middleware');
        @endphp

        @if(in_array('guru', $routesekarang))
        @include('components.beranda.sidebarguru')
        @else

        <!-- ========== Left Sidebar Start ========== -->
        @include('components.materi.sidebar')
        @endif
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    @yield('main-content')
                    <!-- end page title -->
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        {{-- footer --}}
        @include('components.materi.footer')
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- JAVASCRIPT -->
    {{-- <script src="{{ asset('assets') }}/libs/jquery/jquery.min.js"></script> --}}
    <script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('assets') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('assets') }}/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('assets') }}/js/app.js"></script>
    @yield('js')
    {{-- pagination --}}
    <script>
        const pageLinks = document.querySelectorAll('.page-link');
        const pages = document.querySelectorAll('.card-page');
        var allLinkItem = document.querySelectorAll('.page-item')
       allLinkItem[0].classList.add("active")
        pages[0].style.display = 'block';
        pageLinks.forEach(link => {
            link.addEventListener('click', () => {
                var allLinkItem = document.querySelectorAll('.page-item')
                
                allLinkItem.forEach(element => {
                    element.classList.remove("active");
                });
                const targetPage = link.getAttribute('data-target');
                pages.forEach(page => {
                    page.style.display = 'none';
                });
                document.getElementById(targetPage).style.display = 'block';
                const link_item = document.getElementById(targetPage+'-link');
                link_item.classList.add('active')

            });
        });
    </script>


</body>

</html>
