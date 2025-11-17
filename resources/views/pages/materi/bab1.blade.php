@extends('template.materi')
@section('title', 'Teorema Pythagoras')

@section('css')
@endsection

@section('main-content')
    {{-- <p class="d-inline-flex gap-1">
    <div class="card tujuan1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
        aria-controls="collapseExample"> --}}
    <div class="card-body">
        <div class="kotak-tujuan">
            <div id="tombol-tujuan">Tujuan Pembelajaran (Klik untuk membuka / menutup)</div>
            <div id="isi-tujuan">
                <ul style="font-size: 15px">
                    <li>Menganalisis beberapa informasi untuk membuktikan teorema Pythagoras</li>
                    <li>Membuat pembuktian berupa skema atau prosedur terhadap rumus teorema Pythagoras</li>
                    <li>Menentukan panjang sisi segitiga menggunakan teorema Pythagoras</li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="card">
            <div class="card-body" style="text-align: center">
                <div class="card-page" id="materi1-page1">
                    <div class="card-body materi" style="text-align: left">
                        <center>
                            <button type="button" style="margin-bottom: 5px" class="btn btn-modal" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
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
                                                <li>Isilah kolom kosong yang disediakan dengan jawaban kamu</li>
                                                <li>Klik tombol cek jawaban untuk mencek jawaban</li>
                                                <li>Jika jawaban Kamu benar maka kotak akan berwarna hijau</li>
                                                <li>Jika jawaban salah, kolom akan berubah warna menjadi merah dan untuk
                                                    menjawab
                                                    kembali bisa mengisi jawaban yang benar
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn-primary"
                                                data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                        <div class="card mb-3" style="width:auto; box-shadow:none!important;">

                            <div class="card-body">
                                <p class="card-text">Pernahkah kalian memperhatikan bagaimana bentuk dari sisi samping atap
                                    Rumah Adat Banjar Bumbungan Tinggi?
                                    Apakah bentuknya segitiga atau trapesium?</p>
                                <input type="text" id="contohM1S1I1" class="styled-input M1S1" placeholder="-----">
                            </div>
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-6">
                                        <figure>
                                            <center><img src="{{ asset('images/Ruang Banjar Fix.png') }}"
                                                    class="img-fluid rounded-start" alt="..."
                                                    style="width: 500px; max-height:250px">
                                                <figcaption>Gambar Rumah Adat Bumbungan Tinggi
                                                    <br>
                                                    Sumber : Dokumentasi Pribadi
                                                </figcaption>
                                            </center>
                                        </figure>
                                    </div>
                                    <div class="col-6">
                                        <figure>
                                            <center><img src="{{ asset('images/Samping rumah.png') }}"
                                                    class="img-fluid rounded-start" alt="..."
                                                    style="width: 500px; max-height:250px">
                                                <figcaption>Gambar Samping Atap Rumah Adat Bubungan Tinggi <br>
                                                    Sumber : Dokumentasi Pribadi</figcaption>
                                            </center>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <Button type="submit" value="M1S1" class="cekjawaban" style="width: 150px">Cek
                                Jawaban</Button>
                        </div>
                        <div class="kotak-cek d-none penjelasan_M1S1" id="penjelasan_M1S1">
                            <div class="row">
                                <div class="col-6">
                                    <figure>
                                        <center><img src="{{ asset('images/Samping rumah.png') }}"
                                                class="img-fluid rounded-start" alt="..."
                                                style="width: 500px; max-height:250px">
                                            <figcaption>Gambar Samping Atap Rumah Adat Bubungan Tinggi <br>
                                                Sumber : Dokumentasi Pribadi</figcaption>
                                        </center>
                                    </figure>
                                </div>
                                <div class="col-6">
                                    <figure>
                                        <center> <img src="{{ asset('images/SegitigaAtap.png') }}"
                                                class="img-fluid rounded-start" alt="..." style="width: 250px">
                                            <figcaption>Gambar Ilustrasi Atap</figcaption>
                                        </center>
                                    </figure>
                                </div>
                            </div>
                            <p>Bentuk atap rumah adat bumbungan tinggi Banjar berbentuk segitiga. Pernahkah kalian terpikir
                                untuk mengetahui panjang sisi miring atap rumah adat tersebut? Dalam bidang Arsitektur dan
                                Konstruksi menghitung sisi kemiringan terhadap bangunan sangat berguna pada perhitungan
                                bidang yang memiliki bentuk segitiga siku-siku, misalnya atap bangunan. Bagaimana cara kita
                                menghitungnya?
                            </p>
                            <p>Untuk mengetahui sisi miring atau hipotenusa dari atap rumah tersebut, kita menghitungnya
                                menggunakan rumus Teorema Pythagoras. Mari belajar teorema pythagoras agar kita bisa
                                menerapkan rumus tersebut dalam kehidupan kita sehari-hari.
                            </p>
                        </div>

                        <img src="{{ asset('images/Mari Mengingat.png') }}" class="img-fluid rounded-start" alt="..."
                            style="width: 0px">
                        <div class="kotak-teks">
                            <ol>
                                <li>Kuadrat suatu bilangan
                                    Perhatikan bentuk perkalian berikut : <br>
                                    \(2 \cdot 2 = 2^2 = 4\) <br>
                                    \(4 \cdot 4 = 4^2 = 16\) <br>
                                    \(6 \cdot 6 = 6^2 = 36\) <br>
                                    Bentuk perkalian di atas merupakan bentuk kuadrat yang biasanya ditulis \(\alpha^2\) =
                                    \(\alpha \cdot \alpha\). Bilangan kuadrat adalah bilangan yang dihasilkan dari hasil
                                    perkalian dua bilangan yang sama dua kali atau bilangan hasil pengkuadratan, seperti 4,
                                    9, 16, 25, 36, dan seterusnya.
                                </li>
                                <li>Akar kuadrat suatu bilangan
                                    Akar kuadrat dari \(\alpha\) (dilambangkan\(\sqrt{α}\)) merupakan suatu bilangan positif
                                    yang jika dikuadratkan sama dengan \(\alpha\). Jika kuadrat dari 4 adalah 16 maka akar
                                    kudarat dari 16 sama dengan 4 dan ditulis \(\sqrt{16}=4\). <br>
                                    Pembahasan teorema Pythagoras berfokus pada pengukuran panjang, sehingga akar kuadrat
                                    yang berlaku berada pada akar positif.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                {{-- halaman2 --}}
                <div class="card-page" id="materi1-page2">
                    <div class="card-body materi" style="text-align: left">
                        <div class="card mb-3" style="width:auto; box-shadow:none!important;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-6">
                                            <figure>
                                                <center><img src="{{ asset('images/SEbagian rumah banjar.png') }}"
                                                        class="img-fluid rounded-start" alt="..."
                                                        style="width: 300px; max-height:250px">
                                                    <figcaption>Rumah Adat Banjar Bumbungan Tinggi <br>
                                                        Sumber : www.helloindonesia.id</figcaption>
                                                </center>
                                            </figure>
                                        </div>
                                        <div class="col-6">
                                            <figure>
                                                <center><img src="{{ asset('images/segitiga1.png') }}"
                                                        class="img-fluid rounded-start" alt="..."
                                                        style="width: 300px; max-height:250px">
                                                    <figcaption>Gambar Ilustrasi Atap</figcaption>
                                                </center>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <p class="card-text">Perhatikan segitiga siku-siku ABC berikut pada gambar beserta
                                            bagian-bagiannya.
                                            Keterangan :
                                        </p>
                                        <ul>
                                            <li>Segitiga <em>ABC</em> adalah segitiga dengan siku-siku di <em>B</em> dan
                                                besar sudutnya adalah 90°.</li>
                                            <li>Sisi depan sudut siku-siku atau sisi <em>AC</em> adalah sisi terpanjang yang
                                                disebut sisi miring <em>(hipotenusa)</em>.</li>
                                            <li>Sisi-sisi lain yang membentuk sudut siku-siku (sisi AB dan sisi BC ) disebut
                                                sisi siku-siku.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <center>
                                        <button type="button" style="margin-bottom: 5px" class="btn btn-modal"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop10">
                                            Petunjuk Pengerjaan (Klik untuk membuka)
                                        </button>
            
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop10" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Petunjuk :</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <ol style="text-align: left">
                                                            <li>Silahkan klik bendera hijau untuk memulai</li>
                                                            <li>Selanjutnya klik tombol "mulai"</li>
                                                            <li>Lalu klik tombol "klik"</li>
                                                            <li>Jawablah pertanyaan yang disediakan diadalam kolom jawaban</li>
                                                            <li>Apabila jawaban salah, maka isi kembali sampai jawaban benar</li>
                                                        </ol>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </center>
                                    <p class="card-text">Untuk mempelajari Teorema Pythagoras dan memverifikasi
                                        kebenarannya, simaklah video berikut!</p>
                                    <center><iframe src="https://scratch.mit.edu/projects/887822996/embed"
                                            allowtransparency="true" width="485" height="402" frameborder="0"
                                            scrolling="no" allowfullscreen id="scratch"></iframe></center>
                                    <p class="card-text">Pembuktian teorema Pythagoras erat kaitannya dengan luas persegi
                                        dan segitiga. Pythagoras menunjukkan bahwa kuadrat dari panjang sisi miring suatu
                                        segitiga siku-siku sama dengan jumlah kuadrat dari panjang sisi lainnya.
                                        Dari video pembuktian di atas, jawablah pertanyaan berikut
                                    <ol>
                                        <li>Segitiga apakah yang terbentuk ?
                                            <input type="text" id="contohM1S2I1" class="styled-input M1S2"
                                                placeholder="..."><br>
                                        </li>
                                        <li>Apakah luas persegi yang terbesar sama dengan jumlah dua luas persegi yang lebih
                                            kecil ?
                                            <input type="text" id="contohM1S2I2" class="styled-input M1S2"
                                                placeholder="..."><br>
                                        </li>
                                        <Button type="submit" value="M1S2" class="cekjawaban"
                                            style="width: 150px">Cek Jawaban</Button>
                                        <div class="kotak-cek d-none penjelasan_M1S2" id="penjelasan_M1S2">
                                            <p>Pada video diatas terbentuk 3 persegi seperti gambar dibawah.</p>
                                            <figure>
                                                <center> <img src="{{ asset('images/tigapersegi.png') }}"
                                                        class="img-fluid rounded-start" alt="..."
                                                        style="width: 250px">
                                                    <figcaption>Gambar Tiga Persegi</figcaption>
                                                </center>
                                            </figure>
                                            <p>Tiga buah persegi dengan panjang sisi setiap persegi adalah a = 3 satuan (3
                                                kotak), b = 4 satuan (4 kotak), dan c = 5 satuan (5 Kotak).
                                                Jika BC, AC, dan AB adalah panjang sisi pada gambar ΔABC dari masing-masing
                                                sisi 3 persegi.
                                            </p>
                                        </div>
                                    </ol>
                                    </p>
                                </div>
                                <div class="card-body">
                                    <p>Lengkapi tabel berikut berdasarkan sisi persegi yang telah diketahui</p>
                                    <center>
                                        <button type="button" style="margin-bottom: 5px" class="btn btn-modal"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                            Petunjuk Pengerjaan (Klik untuk membuka)
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Petunjuk :
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <ol style="text-align: left">
                                                            <li>Isilah kolom kosong yang disediakan dengan jawaban kamu</li>
                                                            <li>Klik tombol cek jawaban untuk mencek jawaban apabila semua kolom sudah terisi</li>
                                                            <li>Jika jawaban Kamu benar maka kotak akan berwarna hijau</li>
                                                            <li>Jika jawaban salah, kolom akan berubah warna menjadi merah
                                                                dan untuk menjawab
                                                                kembali bisa mengisi jawaban yang benar
                                                            </li>
                                                        </ol>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </center>
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered"
                                            style="text-align: center; border:1px solid #2A5D66">
                                            <thead style="background-color:#00B8A9; color:#fff">
                                                <tr>
                                                    <th>Segitiga ABC</th>
                                                    <th>BC</th>
                                                    <th>AC</th>
                                                    <th>BC<sup>2</sup></th>
                                                    <th>AC<sup>2</sup></th>
                                                    <th>AB<sup>2</sup></th>
                                                    <th>AB</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>a</td>
                                                    <td>5</td>
                                                    <td>12</td>
                                                    <td><input type="text" id="contohM1S3I1" class="styled-input M1S3"
                                                            placeholder="..."></td>
                                                    <td><input type="text" id="contohM1S3I2" class="styled-input M1S3"
                                                            placeholder="..."></td>
                                                    <td><input type="text" id="contohM1S3I3" class="styled-input M1S3"
                                                            placeholder="..."></td>
                                                    <td><input type="text" id="contohM1S3I4" class="styled-input M1S3"
                                                            placeholder="..."></td>
                                                </tr>
                                                <tr>
                                                    <td>b</td>
                                                    <td>8</td>
                                                    <td>15</td>
                                                    <td><input type="text" id="contohM1S3I5" class="styled-input M1S3"
                                                            placeholder="..."></td>
                                                    <td><input type="text" id="contohM1S3I6" class="styled-input M1S3"
                                                            placeholder="..."></td>
                                                    <td><input type="text" id="contohM1S3I7" class="styled-input M1S3"
                                                            placeholder="..."></td>
                                                    <td><input type="text" id="contohM1S3I8" class="styled-input M1S3"
                                                            placeholder="..."></td>
                                                </tr>
                                                <tr>
                                                    <td>c</td>
                                                    <td>9</td>
                                                    <td>12</td>
                                                    <td><input type="text" id="contohM1S3I9" class="styled-input M1S3"
                                                            placeholder="..."></td>
                                                    <td><input type="text" id="contohM1S3I10"
                                                            class="styled-input M1S3" placeholder="..."></td>
                                                    <td><input type="text" id="contohM1S3I11"
                                                            class="styled-input M1S3" placeholder="..."></td>
                                                    <td><input type="text" id="contohM1S3I12"
                                                            class="styled-input M1S3" placeholder="..."></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    
                                    <p>Pernyataan yang benar berdasarkan tabel diatas adalah...</p>
                                    <p>
                                        A. \(AC^2 - AB^2 = BC^2\) <br>
                                        B. \(BC^2 + AC^2 = AB^2\) <br>
                                        C. \(AB^2 + BC^2 = AC^2\) <br>
                                        Jawaban : <input type="text" id="contohM1S3I13"
                                        class="styled-input M1S3" placeholder="...">
                                    </p>
                                    <Button type="submit" value="M1S3" class="cekjawaban" style="width: 150px">Cek
                                        Jawaban</Button>

                                    <p class="d-none penjelasan_M1S3" id="penjelasan_M1S3">Berdasarkan tabel di atas kita dapat menyimpulkan bahwa ΔABC memiliki sisi tegak pada
                                        sisi BC dan AC, dan sisi miring atau hepotenusa di sisi AB.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-page" id="materi1-page3">
                    <div class="card-body materi" style="text-align: left">
                        <div class="kotak-teks">
                            <h5 style="color: #2A5D66; font-weight:bolder">Dalil Pythagoras</h5>
                            <p>Pada suatu segitiga siku-siku, luas persegi pada sisi miringnya sama dengan jumlah luas
                                persegi lain pada kedua sisi siku-sikunya, hal ini juga berarti jumlah dari kuadrat kedua
                                sisi siku-siku segitiga pada segitiga siku-siku sama dengan kuadrat panjang sisi miringnya
                                (hipotenusa).
                            </p>
                        </div>
                        <br>
                        <div class="kotak-teks">
                            <h5 style="color: #2A5D66; font-weight:bolder">Teorema Pythagoras</h5>
                            <p>Pada ΔABC siku-siku dengan siku-siku di C, berlaku: </p>
                            <div class="container text-center">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                    <div class="col"><img src="{{ asset('images/segitiga2.png') }}"
                                            class="img-fluid rounded-start" alt="..." style="max-height: 200px">
                                    </div>
                                    <div class="col">
                                        <div class="rumus">
                                            \(c^2 = a^2 + b^2\)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="width:auto; box-shadow:none!important;">
                            <img src="{{ asset('images/tahukah Kalian.png') }}" class="img-fluid rounded-start"
                                alt="..." style="max-width: 200px">
                        </div>
                        <p>Secara matematis, Seperti apakah Teorema Pythagoras?<br>Berikut adalah salah satu pembuktian
                            untuk memeriksa
                            kebenaran Teorema Pythagoras. Perhatikan Pembuktian Teorema Pythagoras.</p>
                        <div class="kotak-teks">
                            <p> Petunjuk : <br>
                            <ol>
                                <li>Klik tombol start, setelah 4 segitiga berada di masing-masing sudut persegi klik tombol
                                    stop.</li>
                                <li>Geser teks \(c^2\) keseluruh sisi miring di dalam persegi.</li>
                                <li>Geser slide Transformasi ke arah kanan</li>
                                <li>Analisis perubahan apa saja yang terjadi, kemudian simpulkan !</li>
                            </ol>

                            </p>
                        </div>
                        <br>
                        <center>
                            <iframe scrolling="no" id="geogebra" title="Pembuktian Teorema Pythagoras"
                                src="https://www.geogebra.org/material/iframe/id/y7xvz2fh/width/1366/height/651/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/false/ctl/false"
                                width="800px" height="400px" style="border:0px;"> </iframe>
                        </center>
                        <div class="kotak-teks">
                            <p>Berdasarkan pembuktian di atas kita dapat menyimpulkan bahwa untuk pembuktian teorema pythagoras secara matematis dinyatakan sebagai berikut : </p>
                            <p style="text-align: center">
                            \( Luas Sebelum = Luas Sesudah \) <br>
                            \( 4\triangle + c^{2} = 4\triangle + a^{2} + b^{2} \) <br>
                            \( c^{2} = a^{2} + b^{2} \)
                        </p>
                        </div>
                        
                    </div>
                </div>
                <div class="card-page" id="materi1-page4">
                    <div class="card-body materi" style="text-align: justify">
                        <center>
                            <button type="button" style="margin-bottom: 5px" class="btn btn-modal"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                                Petunjuk Pengerjaan (Klik untuk membuka)
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Petunjuk :</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <ol style="text-align: left">
                                                <li>Isilah kolom kosong yang disediakan dengan jawaban kamu</li>
                                                <li>Klik tombol cek jawaban untuk mencek jawaban</li>
                                                <li>Jika jawaban Kamu benar maka kotak akan berwarna hijau</li>
                                                <li>Jika jawaban salah, kolom akan berubah warna menjadi merah dan untuk
                                                    menjawab
                                                    kembali bisa mengisi jawaban yang benar
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary"
                                                data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                        <p>Berdasarkan pembuktian tersebut kita dapat menyimpulkan bahwa untuk pembuktian teorema
                            pythagoras dintayakan sebagai berikut : <br>
                            Dari ketiga persegi tersebut terbentuk segitiga siku-siku, yang mempunyai sisi a, b dan c
                            sebagai sisi miringnya. Dapat kita lihat bahwa Luas C = luas A + luas B atau Sisi miring
                            kuadrat = Sisi alas kuadrat + Sisi tegak kuadrat
                            <br>diperoleh bahwa \(c^2 = a^2 + b^2\)
                        </p>
                        <p>Dengan demikian, luas persegi pada sisi hipotenusa adalah <input type="text"
                                class="styled-input M1S4" id="contohM1S4I1" placeholder="..."> dan jumlah luas
                            persegi pada kedua sisi
                            tegaknya adalah <input type="text" class="styled-input M1S4" id="contohM1S4I2"
                                placeholder="..."> \(^2 +\)
                            <input type="text" class="styled-input M1S4" id="contohM1S4I3" placeholder="...">
                            \(^2\)
                        </p>
                        <button type="submit" value="M1S4" class="cekjawaban"
                            style="width: 150px; margin-bottom:20px;">Cek Jawaban</button>
                        <div class="kotak-teks">
                            <h5 style="color: #2A5D66; font-weight:bolder; margin-top:10px;">Rumus Pythagoras Segitiga
                                Siku-Siku</h5>
                            <p>Rumus untuk pythagoras sisi tegak dan juga sisi yang mendatar pada ΔABC <br>
                            <ul>
                                <li>\(b^2 = \sqrt{c^2 - a^2} \) (sisi tegak)</li>
                                <li>\(a^2 = \sqrt{c^2 - b^2} \) (sisi mendatar atau alas)</li>
                            </ul>
                            </p>
                            <p>Rumus untuk pythagoras sisi miring (hipotenusa) pada ΔABC <br>
                            <ul>
                                <li>\(c^2 = a^2 + b^2\) (sisi miring)</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-page" id="materi1-page5">
                <div class="card-body materi" style="text-align: justify">
                    <div class="card mb-3">
                        <h5 style="color: #2A5D66; font-weight:bolder; text-align:center;">Contoh 1</h5>
                        <center><img src="{{ asset('images/Teorema (17).png') }}" class="img-fluid rounded-start"
                                alt="..." style="max-width: 200px;"></center>
                        <div class="card-body">
                            <p class="card-text">Sebuah tangga disandarkan pada dinding setinggi 12 m. Tangga tersebut
                                memiliki panjang 15 m. Berapakah jarak antara ujung bawah tangga dengan dinding
                                tersebut?</p>
                            <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                                alt="..." style="max-width: 200px;">
                            <div class="kotak-penyelesaian">
                                <p>Jarak dinding dengan ujung bawah tangga dapat dicari dengan menggunakan teorema
                                    pythagoras: <br>
                                    Diketahui : b = 12 m, c = 15 m <br>
                                    Ditanya : a (jarak dinding dengan tangga)? <br>
                                    Jawab : <br>
                                    \(a^2 = \sqrt{c^2 - b^2} \) <br>
                                    \(a^2 = \sqrt{15^2 - 12^2} \) <br>
                                    \(a^2 = \sqrt{255 - 144} \) <br>
                                    \(a^2 = \sqrt{81} \) <br>
                                    \(a^2 = 9 \) <br>
                                    Jadi jarak dinding dengan ujung bawah tangga tersebut adalah 9 meter.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-page" id="materi1-page6">
                <div class="card-body materi" style="text-align: justify">
                    <div class="card mb-3">
                        <h5 style="color: #2A5D66; font-weight:bolder; text-align:center;">Contoh 2</h5>
                        <div class="card-body">
                            <p class="card-text">Mesjid Sultan Suriansyah merupakan salah satu bangunan bersejarah di
                                Kalimantan Selatan. Salah satu oranamen di langit-langit mesjid tersebut berbentuk
                                segitiga siku-siku. Diketahui panjang sisi ΔAB = 6m dan panjang sisi ΔBC=8 m. Tentukan
                                panjang sisi miring (Hipotenusa) dari segitiga siku-siku ABC tersebut?</p>
                            <div class="row">
                                <div class="col-6">
                                    <figure>
                                        <center><img src="{{ asset('images/ornamen.png') }}"
                                                class="img-fluid rounded-start" alt="..."
                                                style="width: 300px; max-height:250px">
                                            <figcaption>Rumah Adat Banjar Bumbungan Tinggi <br>
                                                Sumber : www.helloindonesia.id</figcaption>
                                        </center>
                                    </figure>
                                </div>
                                <div class="col-6">
                                    <figure>
                                        <center> <img src="{{ asset('images/ilustrasiornamen.png') }}"
                                                class="img-fluid rounded-start" alt="..."
                                                style="width: 300px; max-height:250px">
                                            <figcaption>Gambar Ilustrasi Atap</figcaption>
                                        </center>
                                    </figure>
                                </div>
                            </div>
                            <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                                alt="..." style="max-width: 200px;">
                            <div class="kotak-penyelesaian">
                                <p>Diketahui :AB = 6 cm, BC = 8 cm<br>
                                    Ditanya : Hipotenusa atau panjang AC ? <br>
                                    Jawab : <br>
                                    \(c^2 = a^2 + b^2 \) <br>
                                    \(AC^2 = AB^2 + BC^2 \) <br>
                                    \(AC^2 = 6^2 + 8^2 \) <br>
                                    \(AC^2 = 36 + 64 = 100 \) <br>
                                    \(AC^2 = \sqrt{100}\) <br>
                                    \(AC = 10 \) <br>
                                    Jadi, panjang hipotenusa segitiga siku-siku tersebut adalah 10 cm.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-page" id="materi1-page7">
                <div class="card-body materi" style="text-align: justify">
                    <div class="card mb-3">
                        <h5 style="color: #2A5D66; font-weight:bolder; text-align:center;">Contoh 3</h5>
                        <p>Perhatikan gambar berikut !</p>
                        <center><img src="{{ asset('images/segitiga4.jpg') }}" class="img-fluid rounded-start"
                                alt="..." style="max-width: 300px;"></center>
                        <div class="card-body">
                            <p class="card-text">Segitiga ABC adalah segitiga sama sisi. Jika AB = 4 m, maka berapakah
                                panjang AP ?</p>
                            <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                                alt="..." style="max-width: 200px;">
                            <div class="kotak-penyelesaian">
                                <p>Perhatikan bahwa AP merupakan tinggi dari segitiga ABP dengan hepotenusa AB = 4 m dan
                                    alas BP yang dihitung sebagai berikut.
                                    Karena segitiga ABC adalah segitiga sama sisi, maka BP = BC / 2 = 4 / 2 = 2 m.
                                    Gunakan rumus pythagoras untuk menghitung tinggi AP dari segitiga ABP.
                                    \(AB^2 = AP^2 + BP^2 \) <br>
                                    \(AP^2 = AB^2 + BP^2 \) <br>
                                    \(AP = \sqrt{16 - 4} = \sqrt{12} \) m <br>
                                    \(AP = 2\sqrt{3} \) m <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-page" id="materi1-page8">
                <div class="card-body materi" style="text-align: justify">
                    <div class="card mb-3">
                        <img src="{{ asset('images/Ayoberlatih.png') }}" class="img-fluid rounded-start" alt="..."
                            style="max-width: 200px;">
                        <div class="card-body" style="text-align: center">
                            <center>
                                <button type="button" style="margin-bottom: 5px" class="btn btn-modal"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop8">
                                    Petunjuk Pengerjaan (Klik untuk membuka)
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop8" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Petunjuk :</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <ol style="text-align: left">
                                                    <li>Tentukan nilai variabel pada panjang segitiga sebelah kiri kemudian
                                                        pasangkan pada nilai yang sesuai yang berada di samping kanan.</li>
                                                    <li>Klik tombol cek jawaban untuk mencek jawaban</li>
                                                    <li>Jika jawaban Kamu benar maka kotak akan berwarna hijau</li>
                                                    <li>Jika jawaban salah, kotak akan berubah warna menjadi merah</li>
                                                </ol>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                        <div>
                            <p>Perhatikan gambar berikut!</p>
                            <figure>
                                <center> <img src="{{ asset('images/lantaimesjid.png') }}"
                                        class="img-fluid rounded-start" alt="..."
                                        style="width: 300px; max-height:250px">
                                    <figcaption>Gambar Ilustrasi Atap</figcaption>
                                </center>
                            </figure>
                            <p>Gambar lantai Mesjid Sultan Suriansyah diatas membentuk potongan-potongan segitiga
                                siku-siku, mari kita hitung nilai variabel yang belum diketahui!</p>
                            <div class="d-flex justify-content-between">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <table class="table table-bordered border-primary border-3" id="id_jawaban">
                                            <tr>
                                                <td class=""><img src="{{ asset('images/latihan1.png') }}"
                                                        alt="" class="im-fluid" width="90%">
                                                </td>
                                                <td class="d-flex align-items-center">
                                                    <input class="form-check-input my-auto" onclick="checkPoint(this)"
                                                        type="checkbox" name="exampleRadios" id="jodoh_1"
                                                        value="option1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=""><img src="{{ asset('images/latihan2.png') }}"
                                                        alt="" class="im-fluid" width="90%">
                                                </td>
                                                <td class="d-flex align-items-center">
                                                    <input class="form-check-input my-auto" onclick="checkPoint(this)"
                                                        type="checkbox" name="exampleRadios" id="jodoh_2"
                                                        value="option1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=""><img src="{{ asset('images/latihan3.png') }}"
                                                        alt="" class="im-fluid" width="90%">
                                                </td>
                                                <td class="d-flex align-items-center">
                                                    <input class="form-check-input my-auto" onclick="checkPoint(this)"
                                                        type="checkbox" name="exampleRadios" id="jodoh_3"
                                                        value="option1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=""><img src="{{ asset('images/latihan4.png') }}"
                                                        alt="" class="im-fluid" width="90%">
                                                </td>
                                                <td class="d-flex align-items-center">
                                                    <input class="form-check-input my-auto" onclick="checkPoint(this)"
                                                        type="checkbox" name="exampleRadios" id="jodoh_4"
                                                        value="option1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=""><img src="{{ asset('images/latihan5.png') }}"
                                                        alt="" class="im-fluid" width="90%">
                                                </td>
                                                <td class="d-flex align-items-center">
                                                    <input class="form-check-input my-auto" onclick="checkPoint(this)"
                                                        type="checkbox" name="exampleRadios" id="jodoh_5"
                                                        value="option1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=""><img src="{{ asset('images/latihan6.png') }}"
                                                        alt="" class="im-fluid" width="90%">
                                                </td>
                                                <td class="d-flex align-items-center">
                                                    <input class="form-check-input my-auto" onclick="checkPoint(this)"
                                                        type="checkbox" name="exampleRadios" id="jodoh_6"
                                                        value="option1">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <table class="table table-bordered border-primary border-3">
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <input class="form-check-input my-auto" onclick="drawLine(this)"
                                                        type="checkbox" name="exampleRadios" id="exampleRadios1"
                                                        value="jodoh_3">
                                                </td>
                                                <td class="card1" style="padding: 62px">
                                                    <p class="border border-primary border-2 p-2 text-center">
                                                        \(\sqrt{13,2}\) </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <input class="form-check-input my-auto" onclick="drawLine(this)"
                                                        type="checkbox" name="exampleRadios" id="exampleRadios1"
                                                        value="jodoh_1">
                                                </td>
                                                <td class="card1" style="padding: 62px">
                                                    <p class="border border-primary border-2 p-2 text-center"> 6 </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <input class="form-check-input my-auto" onclick="drawLine(this)"
                                                        type="checkbox" name="exampleRadios" id="exampleRadios1"
                                                        value="jodoh_6">
                                                </td>
                                                <td class="card1" style="padding: 62px">
                                                    <p class="border border-primary border-2 p-2 text-center">
                                                        \(\sqrt{75}\) </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <input class="form-check-input my-auto" onclick="drawLine(this)"
                                                        type="checkbox" name="exampleRadios" id="exampleRadios1"
                                                        value="jodoh_2">
                                                </td>
                                                <td class="card1" style="padding: 62px">
                                                    <p class="border border-primary border-2 p-2 text-center">
                                                        \(\sqrt{96}\) </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <input class="form-check-input my-auto" onclick="drawLine(this)"
                                                        type="checkbox" name="exampleRadios" id="exampleRadios1"
                                                        value="jodoh_5">
                                                </td>
                                                <td class="card1" style="padding: 62px">
                                                    <p class="border border-primary border-2 p-2 text-center">
                                                        \(\sqrt{65}\) </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center">
                                                    <input class="form-check-input my-auto" onclick="drawLine(this)"
                                                        type="checkbox" name="exampleRadios" id="exampleRadios1"
                                                        value="jodoh_4">
                                                </td>
                                                <td class="card1" style="padding: 62px">
                                                    <p class="border border-primary border-2 p-2 text-center"> 12 </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <center>
                                <Button type="submit" id="M1S5" class="cekjawaban" style="width: 250px">Cek
                                    Jawaban</Button>

                                <Button type="submit" id="M1S5_reset" class="cekjawaban" style="width: 250px">Reset
                                </Button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <nav aria-label="...">
                <ul class="pagination justify-content-center">

                    <li class="page-item" id="materi1-page1-link"><a class="page-link" data-target="materi1-page1">1</a>
                    </li>
                    <li class="page-item" id="materi1-page2-link"><a class="page-link" data-target="materi1-page2">2</a>
                    </li>
                    <li class="page-item" id="materi1-page3-link"><a class="page-link" data-target="materi1-page3">3</a>
                    </li>
                    <li class="page-item" id="materi1-page4-link"><a class="page-link" data-target="materi1-page4">4</a>
                    </li>
                    <li class="page-item" id="materi1-page5-link"><a class="page-link" data-target="materi1-page5">5</a>
                    </li>
                    <li class="page-item" id="materi1-page6-link"><a class="page-link" data-target="materi1-page6">6</a>
                    </li>
                    <li class="page-item" id="materi1-page7-link"><a class="page-link" data-target="materi1-page7">7</a>
                    </li>
                    <li class="page-item" id="materi1-page8-link"><a class="page-link" data-target="materi1-page8">8</a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
    <div id='rPaper'></div>
    </div>

@endsection

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        // object jawaban
        let jawaban = {
            "M1S1": ["segitiga"],
            "M1S2": ["siku-siku", "ya"],
            "M1S3": ["25", "144", "169", "13", "64", "225", "289", "17", "81", "144", "225", "15", "b"],
            "M1S4": ["c", "a", "b"]   
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/materi.js') }}"></script>
    <script src="{{ asset('js/menjodohkan.js') }}"></script>
@endsection
