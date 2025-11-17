@extends('template.beranda')
@section('title', 'Beranda')
@section('css')
@endsection

@section('main-content')
    <div>
        <section class="beranda">
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        {{-- box satu --}}
                        <div class="card mb-3 box1">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/Teorema.png') }}" style="width: 400px"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body" style="text-align: center">

                                        <h5 class="card-title" id="satu">Selamat Datang
                                            @auth
                                                {{ Auth::user()->detail->nama }}
                                            @endauth
                                        </h5>

                                        <p class="card-text" id="dua">Di Media Interaktif Berbasis Web Teorema
                                            Pythagoras</p>
                                        @if (Auth::user())
                                            <a href="/materi1" class="btn btn-outline-success belajar" role="button"
                                                id="section2">Mulai Belajar</a>
                                        @else
                                            <a href="{{ route('auth.indexL') }}" class="btn btn-outline-success belajar"
                                                role="button" id="section2">Login</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </section>

    {{-- box dua --}}
    @auth
        <section class="beranda-box2">
            <div class="box-dua">
                <div class="container-fluid">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-sm">
                                <div class="card box-tombol">
                                    <i class=" fas fa-list" style="font-size: 100px; color: #2A5D66"></i>
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <a href="/capaian" class="btn btn-outline-success tombol" role="button">Capaian</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="card box-tombol">
                                    <i class=" fas fa-book" style="font-size: 100px; color:#2A5D66"></i>
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <a href="/materi1" class="btn btn-outline-success tombol" role="button"
                                            id="section3">Materi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="card box-tombol">
                                    <i class=" fas fa-info-circle" style="font-size: 100px; color:#2A5D66"></i>
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <a href="/informasi" class="btn btn-outline-success tombol" role="button">Informasi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endauth
    {{-- box-tiga --}}
    <section class="beranda-box3">
        <div class="box-tiga">
            <div class="card">
                <div class="card-body p-3">
                    <div class="container text-center">
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-2" style="width: 100%">
                                <h2 style="color: #2A5D66">Media ini memiliki fitur</h2>
                            </div>
                        </div>
                    </div>
                    <div class="container text-center mt-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card" style="align-items: center">
                                    <img src="{{ asset('images/BelajarMandiri.png') }}" class="card-img-top" alt="..."
                                        style="width: 150px">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 2rem; color:#2A5D66">Belajar Mandiri
                                        </h5>
                                        <p class="card-text">Belajar secara mandiri dimanapun dan kapanpun sesuai dengan
                                            kecepatan sendiri</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="card" style="align-items: center">
                                    <img src="{{ asset('images/Berlatih.png') }}" class="card-img-top" alt="..."
                                        style="width: 150px">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 2rem; color:#2A5D66">Berlatih</h5>
                                        <p class="card-text">Terdapat latihan untuk menguji dan mengasah pemahaman
                                            terhadap materi pada setiap sub pembahasan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="card" style="align-items: center">
                                    <img src="{{ asset('images/Evaluasi.png') }}" class="card-img-top" alt="..."
                                        style="width: 150px">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 2rem; color:#2A5D66">Evaluasi</h5>
                                        <p class="card-text">Terdapat ujian keseluruhan untuk mengukur pemahaman peserta
                                            didik tentang Teorema Pythagoras</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    </div>
@endsection

@section('js')
@endsection
