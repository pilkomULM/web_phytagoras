@extends('template.materi')
@section('title', 'Penerapan Teorema Pythagoras')

@section('css')
@endsection

@section('main-content')
<div class="card tujuan1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
    aria-controls="collapseExample">
    <div class="card-body">
        <div class="kotak-tujuan">
            <div id="tombol-tujuan">Tujuan Pembelajaran (Klik untuk membuka / menutup)</div>
            <div id="isi-tujuan">
                <ul style="font-size: 15px">
                    <li>Menyelesaikan permasalahan dalam kehidupan sehari-hari mengenai penerapan teorema Pythagoras</li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <div>
        <div class="card">
            <div class="card-body" style="text-align: center">
                <br>
                <div class="card-page" id="materi4-page1">
                    <div class="card-body materi" style="text-align: left">

                        <p>Pemanfaatan Teorema Pythagoras sering kali kita jumpai dalam kehidupan sehari-hari, mulai dari aktivitas yang membantu pekerjaan dan juga aktivitas bermain yang dilakukan oleh anak-anak. Pythagoras dapat diterapkan diberbagai bidang, Kita bisa menentukan jarak dari dua titik. Dengan menggunakan teorema Pythagoras kita bisa menentukan panjang diagonal sisi.</p>
                        <p>Pemanfaatan Teorema Pythagoras sering kali kita jumpai dalam kehidupan sehari-hari, aktivitas bermain yang dilakukan oleh anak-anak. Misalkan anak-anak yang sedang bermain permainan tradisional seperti Hadang/Asinan.</p>
                        <center><img src="{{ asset('images/hadangan.png') }}" class="img-fluid rounded-start"
                                alt="..." style="max-width: 250px"></center> <br>
                        <p>Hadang/Asinan adalah salah satu permainan tradisional yang juga dimainkan di Kalimantan Selatan. Permainan ini melibatkan anak-anak sebagai penyerang dengan harus melewati rintangan sekelompok anak-anak lainnya sebagai penjaga yang bertahan. Bagaimanakah menentukan jarak kalian dengan benteng lawan? Masalah ini bisa kalian selesaikan dengan menggunakan Teorema Pythagoras.</p> <br>
                        <p>Perhatikan titik lokasi ilustrasi yang disediakan, Mari kita mencoba menyelesaikan masalah jarak antara dua titik lokasi yang berbeda.</p> <br>

                        <div class="card-body" style="text-align: center">
                            <center>
                                <button type="button" style="margin-bottom: 5px" class="btn btn-modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Petunjuk Pengerjaan (Klik untuk membuka)
                                </button>
            
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Petunjuk :</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <ol style="text-align: left">
                                                    <li>Hitunglah berapa jarak dari lokasi C ke lokasi A</li>
                                                    <li>Isilah kolom kosong yang disediakan dengan jawaban kamu</li>
                                                    <li>Klik tombol cek jawaban untuk mencek jawaban</li>
                                                    <li>Jika jawaban Kamu benar maka kotak akan berwarna hijaur</li>
                                                    <li>Jika jawaban salah, kolom akan berubah warna menjadi merah dan untuk menjawab kembali bisa mengisi jawaban yang benar</li>
                                                </ol>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                        <center><iframe scrolling="no" id="geogebra" title="Jarak 2 Titik" src="https://www.geogebra.org/material/iframe/id/sjyt7ude/width/1512/height/592/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/false/ctl/false"
                            width="800px" height="400px" style="border:0px;"> </iframe>
                        </center>
                        <div>
                            <p>Siti berkendara dari SPBU Sultan Adam kemudian melaju sejauh 4 km, berbelok ke arah utara sejauh 3 km.  Berapakah jarak terdekat yang bisa Siti lewati dari SPBU Sultan Adam ke Meseum Wasaka? </p>
                            <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                            alt="..."style="max-width: 200px;"> <br>
                            \(AC^2 = BC^2 + AB^2\) <br>
                                \(AC^2 =\)<input type="text" class="styled-input-kecil M4S1" id="contohM4S1I1" placeholder="..."> \(^2\) + <input type="text" class="styled-input-kecil M4S1" id="contohM4S1I2" placeholder="..."> \(^2\) <br><br>
                                \(AC^2 =\)<input type="text" class="styled-input-kecil M4S1" id="contohM4S1I3" placeholder="..."> + <input type="text" class="styled-input-kecil M4S1" id="contohM4S1I4" placeholder="..."> <br><br>
                                \(AC = \sqrt{25} \) <br><br>
                                \(AC =\)<input type="text" class="styled-input-kecil M4S1" id="contohM4S1I5" placeholder="..."> <br><br>
                                <button type="submit" value="M4S1" class="cekjawaban" style="width: 150px; margin-bottom:20px;">Cek Jawaban</button>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card-page" id="materi4-page2">
                    <div class="card-body materi" style="text-align: justify">
                        <div class="kotak-teks" style="text-align: center">
                            <img src="{{ asset('images/susursungai.jpg') }}" class="img-fluid rounded-start" alt="..."
                                style="max-width: 400px;">
                                <br><br>
                                <p style="text-align: justify">
                                    Wisata susur sungai yang menyusuri Sungai Martapura, yang dikelola pihak juragan klotok (perahu bermesin) Kota Banjarmasin, Kalimantan Selatan Melalui susur sungai bisa melihat keindahan Jembatan Merdeka, Mesjid Sabilal Muhtadin, taman Bekantan, kampung ketupat, mitra plaza, muara kelayan, taman perkotaan di dekat kantor Pemkot Banjarmasin, dan tempat tempat lainnya.
                                </p>
                        </div>
                        <div class="card mb-3">
                            <p>Dari pemaparan objek wisata yang ada di banjarmasin mari kita terapkan konsep teorema
                                pytagoras !</p>
                            <img src="{{ asset('images/Ayoberlatih.png') }}" class="img-fluid rounded-start" alt="..."
                                style="max-width: 200px;">
                            <div class="card-body" style="text-align: center">
                                
                                <center>
                                    <button type="button" style="margin-bottom: 5px" class="btn btn-modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                                        Petunjuk Pengerjaan (Klik untuk membuka)
                                    </button>
                
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false"
                                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Petunjuk :</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <ol style="text-align: left">
                                                        <li>Isilah kolom kosong yang disediakan dengan jawaban</li>
                                                        <li>Klik tombol cek jawaban untuk mencek jawaban</li>
                                                        <li>Jika jawaban Kamu benar maka kotak akan berwarna hijau</li>
                                                        <li>Jika jawaban salah, kolom akan berubah warna menjadi merah dan untuk
                                                        menjawab kembali bisa mengisi jawaban yang benar</li>
                                                    </ol>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </center>
                            </div>
                            <div id="latihan-tripel">
                                <p>1. Seorang pengunjung berada di atas menara pandang di siring Kota Banjarmasin yang
                                    tingginya 12 meter. Ia melihat kelotok A dan kelotok B yang berada di sungai. Jarak
                                    pengunjung dengan kelotok A dan kelotok B berturut-turut 20 meter dan 13 meter. Posisi
                                    kelotok A, kelotok B, dan kaki menara terletak segaris. Jarak kelotok A dan kelotok B
                                    adalah . . . <br></p>
                                <img src="{{ asset('images/Penyelesaian.png') }}"
                                    class="img-fluid rounded-start"alt="..." style="max-width: 200px;"> <br>
                                <center><img src="{{ asset('images/soalmenara.png') }}"
                                        class="img-fluid rounded-start"alt="..." id="imgmenara"
                                        style="max-width: 500px;"></center>
                            </div>
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-sm" style="text-align: left">
                                        Jarak menara dengan Kelotok A yaitu jarak AC : <br>
                                        \(AP^2 = AC^2 + CP^2 \) <br><br>
                                        <input type="text" class="styled-input-kecil M4S2" id="contohM4S2I1" placeholder="...">
                                        \(^2\) =
                                        \(AC^2\) + <input type="text" class="styled-input-kecil M4S2" id="contohM4S2I2" placeholder="...">\(^2\)
                                        <br><br>
                                        <input type="text" class="styled-input-kecil M4S2" id="contohM4S2I3" placeholder="..."> =
                                        \(AC^2\) + <input type="text" class="styled-input-kecil M4S2" id="contohM4S2I4" placeholder="...">
                                        <br><br>
                                        \(AC^2\) = <input type="text" class="styled-input-kecil M4S2" id="contohM4S2I5" placeholder="..."> -
                                        <input type="text" class="styled-input-kecil M4S2" id="contohM4S2I6" placeholder="..."> <br><br>
                                        \(AC\) = \( \sqrt{256} \) = <input type="text" class="styled-input-kecil M4S2" id="contohM4S2I7" placeholder="..."> <br><br>
                                    </div>
                                    <div class="col-sm" style="text-align: left">
                                        Jarak menara dengan Kelotok B yaitu jarak BC : <br>
                                        \(BP^2 = BC^2 + CP^2 \) <br><br>
                                        <input type="text" class="styled-input-kecil M4S2" id="contohM4S2I8" placeholder="...">
                                        \(^2\) =
                                        \(BC^2\) + <input type="text" class="styled-input-kecil M4S2" id="contohM4S2I9"
                                            placeholder="...">\(^2\) <br><br>
                                        <input type="text" class="styled-input-kecil M4S2" id="contohM4S2I10" placeholder="..."> =
                                        \(BC^2\) + <input type="text" class="styled-input-kecil M4S2" id="contohM4S2I11" placeholder="...">
                                        <br><br>
                                        \(BC^2\) = <input type="text" class="styled-input-kecil M4S2" id="contohM4S2I12" placeholder="..."> -
                                        <input type="text" class="styled-input-kecil M4S2" id="contohM4S2I13" placeholder="..."> <br><br>
                                        \(BC\) = \( \sqrt{25} \) = <input type="text" class="styled-input-kecil M4S2" id="contohM4S2I14" placeholder="..."><br><br>
                                    </div>
                                </div>
                            </div>
                            <p>
                                Jarak Kelotok A dan Kelotok B adalah AB. Panjang AB yaitu: <br>
                                <input type="text" class="styled-input-kecil M4S2" id="contohM4S2I15" placeholder="..."> - <input
                                    type="text" class="styled-input-kecil M4S2" id="contohM4S2I16" placeholder="..."> = <input type="text"
                                    class="styled-input-kecil M4S2" id="contohM4S2I17" placeholder="..."> <br>
                                    <button type="submit" value="M4S2" class="cekjawaban" style="width: 150px; margin-bottom:20px;">Cek Jawaban</button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-page" id="materi4-page3">
                    <div class="card-body materi" style="text-align: justify">
                        <div class="card mb-3">
                            <img src="{{ asset('images/Ayoberlatih.png') }}" class="img-fluid rounded-start"
                                alt="..." style="max-width: 200px;">
                            <div id="latihan-tripel">
                                <p>2. Amang anang dan rombongan melaju menggunakan kelotok dari sungai martapura sejauh 8 km
                                    ke arah timur, kemudian berbelok kearah selatan menuju pulau kembang sejauh 15 km. <br>
                                </p>
                                <img src="{{ asset('images/Penyelesaian.png') }}"
                                    class="img-fluid rounded-start"alt="..." style="max-width: 200px;"> <br>
                            </div>
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-sm">
                                        <img src="{{ asset('images/Pulau Kembang.jpg') }}"
                                            class="img-fluid rounded-start"alt="..." id="imgmenara"
                                            style="max-width: 300px;">
                                    </div>
                                    <div class="col-sm">
                                        <img src="{{ asset('images/segitiga5.jpg') }}"
                                            class="img-fluid rounded-start"alt="..." id="imgmenara"
                                            style="max-width: 500px;">
                                    </div>
                                </div>
                            </div>
                            <p>
                                Hitunglah jarak dari titik awal keberangkatan kelotok hingga sampai ke titik akhir : <br>
                                \(AC^2 = BC^2 + AB^2 \) <br><br>
                                \(AC^2\) = <input type="text" class="styled-input-kecil M4S3" id="contohM4S3I1" placeholder="...">\(^2\) +
                                <input type="text" class="styled-input-kecil M4S3" id="contohM4S3I2" placeholder="...">\(^2\) <br><br>
                                \(AC^2\) = <input type="text" class="styled-input-kecil M4S3" id="contohM4S3I3" placeholder="..."> +
                                <input type="text" class="styled-input-kecil M4S3" id="contohM4S3I4" placeholder="..."> <br><br>
                                \(AC\) = \( \sqrt{289} \) = <input type="text" class="styled-input-kecil M4S3" id="contohM4S3I5" placeholder="..."><br><br>
                                <button type="submit" value="M4S3" class="cekjawaban" style="width: 150px; margin-bottom:20px;">Cek Jawaban</button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-page" id="materi4-page4">
                    <div class="card-body materi" style="text-align: justify">
                        <div class="card mb-3">
                            <img src="{{ asset('images/Ayoberlatih.png') }}" class="img-fluid rounded-start"
                                alt="..." style="max-width: 200px;">
                            <div id="latihan-tripel">
                                <p>3. Udin pergi ke kebun untuk memetik kelapa. Dengan sebuah tangga udin menaiki pohon
                                    kelapa. Tangga dengan panjangnya 5 meter bersandar pada pohon, Jarak ujung bawah tangga
                                    terhadap pohon = 3 meter. Hitunglah tinggi pohon yang dicapai naiki udin dengan
                                    tangga.<br>
                                </p>
                                <img src="{{ asset('images/Penyelesaian.png') }}"
                                    class="img-fluid rounded-start"alt="..." style="max-width: 200px;"> <br>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('images/pohonkelapa.png') }}"
                                            class="img-fluid rounded-start"alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <p>
                                                Berdasarkan gambar disamping, tinggi pohon dapat diukur dengan memanfaatkan Teorema Pythagpras : <br>
                                                Tinggi = <input type="text" class="styled-input-kecil M4S4" id="contohM4S4I1" placeholder="...">\(^2\) +
                                                <input type="text" class="styled-input-kecil M4S4" id="contohM4S4I2" placeholder="...">\(^2\) <br><br>
                                                Tinggi = <input type="text" class="styled-input-kecil M4S4" id="contohM4S4I3" placeholder="..."> +
                                                <input type="text" class="styled-input-kecil M4S4" id="contohM4S4I4" placeholder="..."> <br><br>
                                                Tinggi = \( \sqrt{25} \) = <input type="text" class="styled-input-kecil M4S4" id="contohM4S4I5" placeholder="..."><br><br>
                                                <button type="submit" value="M4S4" class="cekjawaban" style="width: 150px; margin-bottom:20px;">Cek Jawaban</button>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <nav aria-label="...">
                    <ul class="pagination justify-content-center">
                        <li class="page-item" id="materi4-page1-link"><a class="page-link" data-target="materi4-page1">1</a></li>
                        <li class="page-item" id="materi4-page2-link"><a class="page-link" data-target="materi4-page2">2</a></li>
                        <li class="page-item" id="materi4-page3-link"><a class="page-link" data-target="materi4-page3">3</a></li>
                        <li class="page-item" id="materi4-page4-link"><a class="page-link" data-target="materi4-page4">4</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    @endsection

    @section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        // object jawaban
        var jawaban = {
            "M4S1": ["4", "3", "16", "9", "5"],
            "M4S2": ["20", "12", "400", "144", "400", "144", "16", "13", "12", "169", "144", "169", "144", "5", "16", "5", "11"],
            "M4S3": ["15", "8", "225", "64", "17"],
            "M4S4": ["4", "3", "16", "9", "5"]
        }
    </script>
    <script src="{{ asset('js/materi.js') }}"></script>
    @endsection
