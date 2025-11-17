@extends('template.capaian')
@section('title', 'Informasi')
@section('css')
@endsection

@section('main-content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="card" id="infoC">
                    <div class="card-body">
                        <center>
                            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true" style="font-size: 17px">Informasi Aplikasi</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                        type="button" role="tab" aria-controls="profile" aria-selected="false" style="font-size: 17px">Daftar
                                        Pustaka</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                        type="button" role="tab" aria-controls="contact" aria-selected="false" style="font-size: 17px">Petunjuk
                                        Aplikasi</button>
                                </li>
                            </ul>
                        </center>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="card infoApp">
                                    <div class="card-body" style="color :#000; font-size: 15px;">
                                        <center>
                                            <h2><b>Informasi Aplikasi</b></h2>
                                        </center>
                                        <hr>
                                        <h2><b> Perihal:</b></h2>
                                        Media Pembelajaran Interaktif berbasis web dengan topik "Teorema Pythagoras
                                        Berkonteks Lahan Basah" untuk siswa kelas VIII SMP
                                        <hr>
                                        <h2><b> Tentang Pengembang:</b></h2>
                                        <table class="info">
                                            <tbody>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>:</td>
                                                    <td>Nabila Najmi</td>
                                                </tr>
                                                <tr>
                                                    <td>NIM</td>
                                                    <td>:</td>
                                                    <td>2010131220008</td>
                                                </tr>
                                                <tr>
                                                    <td>Dosen Pembimbing 1</td>
                                                    <td>:</td>
                                                    <td>Dr. R. Ati Sukmawati, M.Kom</td>
                                                </tr>
                                                <tr>
                                                    <td>Dosen Pembimbing 2</td>
                                                    <td>:</td>
                                                    <td>Novan Alkhaf Bahraini Saputra, M.Kom</td>
                                                </tr>
                                                <tr>
                                                    <td>Program Studi</td>
                                                    <td>:</td>
                                                    <td>Pendidikan Komputer</td>
                                                </tr>
                                                <tr>
                                                    <td>Fakultas</td>
                                                    <td>:</td>
                                                    <td>Fakultas Keguuruan dan Ilmu Pnedidikan</td>
                                                </tr>
                                                <tr>
                                                    <td>Universitas</td>
                                                    <td>:</td>
                                                    <td>Universitas Lambung Mangkurat</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="card infoApp">
                                    <div class="card-body" style="color :#000; font-size: 15px;">
                                        <center>
                                            <h2><b>Daftar Pustaka</b></h2>
                                        </center>
                                        <hr>
                                        Anam, A.C., As’ari,A.R., Taufiq, I., Tohir, M. (2022). Matematika untuk SMP/MTs
                                        Kelas VIII. Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.
                                        <br>
                                        <br>
                                        As’ari, A.R., Tohir, M., Valentino,E., Imron.Z., Taufiq, I. (2017). Buku Siswa
                                        Matematika Kelas VIII SMP/MTs Kurikulum 2013. Kementerian Pendidikan dan Kebudayaan
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="card infoApp">
                                    <div class="card-body" style="color :#000; font-size: 15px;">
                                        <center>
                                            <h2><b>Petunjuk Penggunaan Aplikasi</b></h2>
                                        </center>
                                        <hr>
                                        <div class="container">
                                            <center><h4>Gambar di bawah ini merupakan tampilan pada halaman awal.</h4></center>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="w3-container">
                                                        <center><p class="ri-information-fill"><i> Klik gambar untuk memperbesar</i></p></center>
                                                        <img src="{{ asset("images/ss1.png")}}" style="width:100%;cursor:zoom-in"
                                                            onclick="document.getElementById('modal01').style.display='block'">
                                                        <div id="modal01" class="w3-modal"
                                                            onclick="this.style.display='none'">
                                                            <span
                                                                class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                                                            <div class="w3-modal-content w3-animate-zoom">
                                                                <img src="{{ asset("images/ss1.png")}}" style="width:100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    Keterangan :<br><br>
                                                    <ul>
                                                        <li>Nomor 1 adalah Navbar</li>
                                                        Navbar memiliki fungsi untuk beralih ke bagian-bagian tertentu secara mudah, dimana pengguna dapat melakukan perpindahan dengan mengklik salah satu tombol.
                                                        <li>Nomor 2 adalah tombol untuk mulai belajar</li>
                                                        Tombol mulai saat diklik maka akan mengarah ke halaman materi.
                                                        <li>Nomor 3 adalah identitas pengguna</li>
                                                        Tersedia identitas pengguna dan tombol logout
                                                    </ul>
                                                </div>
                                            </div>
                                            <hr>
                                            <center><h4>Gambar di bawah ini merupakan tampilan pada halaman menu.</h4></center>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="w3-container">
                                                        <center><p class="ri-information-fill"><i> Klik gambar untuk memperbesar</i></p></center>
                                                        <img src="{{ asset("images/ss2.png")}}" style="width:100%;cursor:zoom-in"
                                                            onclick="document.getElementById('modal02').style.display='block'">
                                                        <div id="modal02" class="w3-modal"
                                                            onclick="this.style.display='none'">
                                                            <span
                                                                class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                                                            <div class="w3-modal-content w3-animate-zoom">
                                                                <img src="{{ asset("images/ss2.png")}}" style="width:100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    Keterangan :<br><br>
                                                    <ul>
                                                        <li>Nomor 1 adalah Navbar</li>
                                                        Navbar memiliki fungsi untuk beralih ke bagian-bagian tertentu secara mudah, dimana pengguna dapat melakukan perpindahan dengan mengklik salah satu tombol.
                                                        <li>Nomor 2 adalah identitas pengguna</li>
                                                        Tersedia identitas pengguna dan tombol logout
                                                        <li>Nomor 3 adalah tombol untuk melihat halaman capaian pembelajaran.</li>
                                                        <li>Nomor 4 adalah tombol untuk melihat halaman materi.</li>
                                                        <li>Nomor 5 adalah tombol untuk melihat halaman informasi aplikasi.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <hr>
                                            <center><h4>Gambar di bawah ini merupakan tampilan pada halaman tentang media.</h4></center>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="w3-container">
                                                        <center><p class="ri-information-fill"><i> Klik gambar untuk memperbesar</i></p></center>
                                                        <img src="{{ asset("images/ss3.png")}}" style="width:100%;cursor:zoom-in"
                                                            onclick="document.getElementById('modal03').style.display='block'">
                                                        <div id="modal03" class="w3-modal"
                                                            onclick="this.style.display='none'">
                                                            <span
                                                                class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                                                            <div class="w3-modal-content w3-animate-zoom">
                                                                <img src="{{ asset("images/ss3.png")}}" style="width:100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    Keterangan :<br><br>
                                                    <ul>
                                                        <li>Nomor 1 adalah Navbar</li>
                                                        Navbar memiliki fungsi untuk beralih ke bagian-bagian tertentu secara mudah, dimana pengguna dapat melakukan perpindahan dengan mengklik salah satu tombol.
                                                        <li>Nomor 2 adalah identitas pengguna</li>
                                                        Tersedia identitas pengguna dan tombol logout
                                                        <li>Nomor 3 adalah kumpulan informasi tentang fitur yang dimiliki media.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <hr>
                                            <center><h4>Gambar di bawah ini merupakan tampilan pada halaman capaian pembelajaran.</h4></center>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="w3-container">
                                                        <center><p class="ri-information-fill"><i> Klik gambar untuk memperbesar</i></p></center>
                                                        <img src="{{ asset("images/ss4.png")}}" style="width:100%;cursor:zoom-in"
                                                            onclick="document.getElementById('modal04').style.display='block'">
                                                        <div id="modal04" class="w3-modal"
                                                            onclick="this.style.display='none'">
                                                            <span
                                                                class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                                                            <div class="w3-modal-content w3-animate-zoom">
                                                                <img src="{{ asset("images/ss4.png")}}" style="width:100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    Keterangan :<br><br>
                                                    <ul>
                                                        <li>Nomor 1 adalah adalah tombol untuk kembali ke halaman sebelumnya.</li>
                                                        <li>Nomor 2 adalah identitas pengguna</li>
                                                        Tersedia identitas pengguna dan tombol logout
                                                        <li>Nomor 3 adalah informasi terkait capaian pembelajaran</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <hr>
                                            <center><h4> Gambar di bawah ini merupakan tampilan pada halaman informasi aplikasi.</h4></center>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="w3-container">
                                                        <center><p class="ri-information-fill"><i> Klik gambar untuk memperbesar</i></p></center>
                                                        <img src="{{ asset("images/ss5.png")}}" style="width:100%;cursor:zoom-in"
                                                            onclick="document.getElementById('modal05').style.display='block'">
                                                        <div id="modal05" class="w3-modal"
                                                            onclick="this.style.display='none'">
                                                            <span
                                                                class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                                                            <div class="w3-modal-content w3-animate-zoom">
                                                                <img src="{{ asset("images/ss5.png")}}" style="width:100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    Keterangan :<br><br>
                                                    <ul>
                                                        <li>Nomor 1 adalah tombol untuk kembali ke halaman sebelumnya.</li>
                                                        <li>Nomor 2 adalah identitas pengguna</li>
                                                        Tersedia identitas pengguna dan tombol logout
                                                        <li>Nomor 3 adalah tombol untuk melihat informasi aplikasi.</li>
                                                        <li>Nomor 4 adalah tombol untuk melihat daftar pustaka.</li>
                                                        <li>Nomor 5 adalah tombol untuk melihat petunjuk aplikasi.</li>
                                                        <li>Nomor 6 adalah tempat untuk menampilkan informasi terkait informasi aplikasi/daftar pustaka/petunjuk aplikasi</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <hr>
                                            <center><h4> Gambar di bawah ini merupakan tampilan pada halaman materi.</h4></center>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="w3-container">
                                                        <center><p class="ri-information-fill"><i> Klik gambar untuk memperbesar</i></p></center>
                                                        <img src="{{ asset("images/ss6.png")}}" style="width:100%;cursor:zoom-in"
                                                            onclick="document.getElementById('modal06').style.display='block'">
                                                        <div id="modal06" class="w3-modal"
                                                            onclick="this.style.display='none'">
                                                            <span
                                                                class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                                                            <div class="w3-modal-content w3-animate-zoom">
                                                                <img src="{{ asset("images/ss6.png")}}" style="width:100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    Keterangan :<br><br>
                                                    <ul>
                                                        <li>Nomor 1 adalah sidebar.</li>
                                                        Sidebar memiliki fungsi yang sama seperti daftar isi pada sebuah buku, dimana pengguna dapat melakukan perpindahan antar materi.
                                                        <li>Nomor 2 adalah identitas pengguna</li>
                                                        Tersedia identitas pengguna dan tombol logout
                                                        <li>Nomor 3 adalah konten</li>
                                                        Konten disini memuat semuanya yaitu materi, contoh, hingga soal-soal pertanyaan.
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
            </div>
        </div>
        <style>
            #infoC {
                background-color: #fff;
                align-items: center;
            }

            .nav-tabs .nav-link {
                background: 0 0;
                border: 1px solid transparent;
                border-radius: .25rem;
                background-color: #2A5D66;
                color: #fff;
                width: 200px;
                font-size: 20px;
                /* padding:10px 100px 10px 100px; */
                margin-left: 50px;
                margin-right: 50px;
            }

            #home-tab:hover,
            #profile-tab:hover,
            #contact-tab:hover {
                background-color: #fff;
                color: #2A5D66;
                border: 1px solid #2A5D66;
            }

            #home,
            #profile,
            #contact {
                margin-top: 30px;
                font-size: 18px;
            }

            .infoApp {
                border: 3px dashed #2A5D66;
                border-radius: 0px !important;
            }
        </style>
    @endsection

    @section('js')
    @endsection
