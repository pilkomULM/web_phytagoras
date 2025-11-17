@extends('template.materi')
@section('title', 'Tripel Pythagoras')

@section('css')
@endsection

@section('main-content')
    <p class="d-inline-flex gap-1">
    <div class="card tujuan1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
        aria-controls="collapseExample">
        <div class="card-body">
            <div class="kotak-tujuan">
                <div id="tombol-tujuan">Tujuan Pembelajaran (Klik untuk membuka / menutup)</div>
                <div id="isi-tujuan">
                    <ul style="font-size: 15px">
                        <li>Menghitung hipotenusa dan sisi segitiga siku-siku lainnya dengan teorema Pythagoras</li>
                        <li>Menemukan tripel Pythagoras</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>    
    <div>
        <div class="card">
            <div class="card-body" style="text-align: center">
                <br>
                <div class="card-page" id="materi2-page1">
                    <div class="card-body materi" style="text-align: left">
                        <div class="card mb-3" style="width:auto; box-shadow:none!important;">
                            <p>Sebelum membahas lebih detail terkait tripel Pythagoras, kita perlu mengingat kembali terkait teorema Pythagoras. Tiga bilangan yang menunjukan panjang dari  setiap sisi segitiga siku-siku disebut Tripel Pythagoras.</p>
                            <h5 style="color: #2A5D66; font-weight:bolder">Kebalikan Teorema Pythagoras</h5>
                            <div class="kotak-teks">
                                <p><strong><em>Teorema Pythagoras</em></strong> menyatakan : <br>
                                    Pada ΔABC jika ∟C siku-siku dan AB = c, BC = a, CA = b
                                </p>
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('images/segitiga2.png') }}" class="img-fluid rounded-start"
                                            alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="col">
                                                <div class="rumus">
                                                    \(AB^2 = BC^2 + AC^2 \) <br>
                                                    \(c^2 = a^2 + b^2 \)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>Pada kebalikan dari teorema Pythagoras dapat dinyatakan bahwa dalam ΔABC, jika \(c^2=a^2+b^2\), maka ∟C siku-siku.
                                Dengan demikian, dapat disimpulkan hal berikut ini.
                                Pada ΔABC , apabila a, b, dan c adalah sisi-sisi dihadapan sudut A, B, dan C maka berlaku kebalikan teorema Pythagoras, yaitu:

                            </p>
                            <table class="table table-bordered" style="text-align: center; border:1px solid #2A5D66">
                                <thead style="background-color:#00B8A9; color:#fff">
                                    <tr>
                                        <th>Gambar Segitiga</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="{{ asset('images/tripelsatu.jpg') }}" class="img-fluid rounded-start"
                                            alt="..." style="max-width: 150px">
                                        </td>
                                        <td>Untuk b < c < a <br>
                                            Jika \(a^2=b^2+c^2\) <br>
                                            Maka ΔABC siku-siku di ∟A
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('images/tripeldua.jpg') }}" class="img-fluid rounded-start"
                                            alt="..." style="max-width: 150px">
                                        </td>
                                        <td>Untuk  a < c < b <br>
                                            Jika \(b^2=a^2+c^2\) <br>
                                            Maka ΔABC siku-siku di ∟B
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('images/tripeltiga.jpg') }}" class="img-fluid rounded-start"
                                            alt="..." style="max-width: 150px">
                                        </td>
                                        <td>Untuk  a < b < c <br>
                                            Jika \(c^2=a^2+b^2\) <br>
                                            Maka ΔABC siku-siku di ∟C
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>Sehingga, tiga bilangan a, b, c dengan a < b < c dikatakan tripel pythagoras jika memenuhi hubungan persamaan \(c^2=a^2+b^2\). <br>
                                Tripel Pythagoras merupakan tiga bilangan yang tepat untuk menyatakan panjang sisi-sisi suatu segitiga siku-siku. Jadi, ketiga bilangan dalam tripel Pythagoras menyatakan sisi miring, sisi depan, dan sisi alas pada segitiga siku-siku.
                            </p>
                            <div class="kotak-teks">
                                <p>Untuk ΔABC dengan panjang sisi - sisinya a, b, c  : <br>
                                <ul>
                                    <li>Jika \(c^2 = a^2 + b^2\), maka ∆ACB merupakan segitiga siku-siku.</li>
                                    <li>Jika \(c^2 < a^2 + b^2\), maka ∆ACB merupakan segitiga lancip.</li>
                                    <li>Jika \(c^2 > a^2 + b^2\), maka ∆ACB merupakan segitiga tumpul.</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-page" id="materi2-page2">
                    <div class="card-body materi" style="text-align: justify">
                        <div class="card mb-3">
                            <h5 style="color: #2A5D66; font-weight:bolder; text-align:center;">Contoh 1</h5>
                            <div class="card-body">
                                <p class="card-text">Perhatikan gambar berikut!</p>
                                <figure>
                                    <center> <img src="{{ asset('images/mesjid ulm.png') }}" class="img-fluid rounded-start"
                                            alt="..." style="width: 250px; height:150px">
                                        <figcaption>Gambar Tiga Persegi</figcaption>
                                    </center>
                                </figure>
                                <p>Burhan berkuliah di Universitas Lambung Mangkurat, ketika memasuki waktu sholat burhan pergi ke Mesjid ULM. Dia memperhatikan setiap bentuk-bentuk yang ada disekitarnya, dan dia memperhatikan bentuk sebagian atap Mesjid tersebut. Diketahui bahwa ukuran bagian atap tersebut memiliki panjang setiap sisi 15,20,25.
                                    Apakah bilangan 15, 20, 25 adalah Tripel Pythagoras?
                                </p>
                                <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                                    alt="..." style="max-width: 200px;">
                                <div class="kotak-penyelesaian">
                                    <p>Sisi terpanjang = 25 <br>
                                        \(15^2 + 20^2 = 25^2 \) <br>
                                        \(225 + 400 = 625 \) <br>
                                        \(625 = 625 \) <br>
                                        Jadi 15, 20, 25 adalah Tripel Pythagoras
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <h5 style="color: #2A5D66; font-weight:bolder; text-align:center;">Contoh 2</h5>
                            <div class="card-body">
                                <p class="card-text">Apakah 7, 12, 13 adalah Tripel Pythagoras? </p>
                                <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                                    alt="..." style="max-width: 200px;">
                                <div class="kotak-penyelesaian">
                                    <p>Sisi terpanjang = 13 <br>
                                        \(7^2 + 12^2 = 13^2 \) <br>
                                        \(49 + 144 = 169 \) <br>
                                        \(193 \ne 169 \) <br>
                                        Jadi 7, 12, 13 adalah bukan Tripel Pythagoras
                                    </p>
                                </div>
                            </div>
                            <h5 style="color: #2A5D66; font-weight:bolder; text-align:center;">Contoh 3</h5>
                            <div class="card-body">
                                <p class="card-text">Apakah sisi segitiga 8, 12, 17 membentuk segitiga siku-siku, lancip,
                                    atau tumpul? </p>
                                <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                                    alt="..." style="max-width: 200px;">
                                <div class="kotak-penyelesaian">
                                    <p>Sisi terpanjang = 17 <br>
                                        \(17^2 = 8^2 + 12^2 \) <br>
                                        \(289 = 64 + 144 \) <br>
                                        \(289 > 208 \) <br>
                                        Jadi 8, 12, 17 merupakan segitiga tumpul
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-page" id="materi2-page3">
                    <div class="card-body materi" style="text-align: justify">
                        <div class="card mb-3">
                            <img src="{{ asset('images/Ayoberlatih.png') }}" class="img-fluid rounded-start" alt="..."
                                style="max-width: 200px;">
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
                                                        <li>Isilah kolom kosong yang disediakan dengan jawaban kamu</li>
                                                    <li>Klik tombol cek jawaban untuk mencek jawaban</li>
                                                    <li>Jika jawaban Kamu benar maka kotak akan berwarna hijau</li>
                                                    <li>Jika jawaban salah, maka akan ada pemberitahuan.</li>
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
                            <div id="latihan-tripel">
                                <p>Periksalah apakah tiga bilangan di bawah ini merupakan Tripel Pythagoras? <br>
                                    a. 12, 16, 20
                                    <label style="padding:10px;">
                                        <input type="text" class="styled-input-kecil M2S1" id="contohM2S1I1" placeholder="..."> (ya/tidak) <br>
                                    </label>
                                    <button type="submit" value="M2S1" class="cekjawaban" style="width: 150px; margin-bottom:20px;">Cek Jawaban</button><br>
                                    <div class="kotak-cek d-none penjelasan_M2S1" id="penjelasan_M2S1">
                                        <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                                            alt="..." style="max-width: 200px;">
                                        <div class="kotak-penyelesaian">
                                            <p>20 merupakan bilangan terbesar <br>
                                                \(12^2 + 16^2 = 20^2 \) <br>
                                                \(144 + 256 = 400 \) <br>
                                                \(400 = 400 \) (terpenuhi)<br>
                                                Terlihat bahwa nilai dari \(12^2 + 16^2 \) sama dengan nilai dari \( 20^2 \). Jadi
                                                bilangan 12, 16, 20 merupakan Tripel Pythagoras
                                            </p>
                                        </div>
                                    </div>
                                <br>
                                b. 9, 15, 18
                                <label style="padding:10px;">
                                    {{-- <input type="radio" name="pilihan2 M2S2" id="contohM2S2I1" value="1"> Ya --}}
                                    {{-- <input type="radio" name="pilihan2 M2S2" id="contohM2S2I2" value="2"> Tidak --}}
                                    <input type="text" class="styled-input-kecil M2S2" id="contohM2S2I1" placeholder="..."> (ya/tidak) <br>
                                </label>
                                <button type="submit" value="M2S2" class="cekjawaban" style="width: 150px; margin-bottom:20px;">Cek Jawaban</button> <br>
                                <div class="kotak-cek d-none penjelasan_M2S2" id="penjelasan_M2S2">
                                    <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                                    alt="..." style="max-width: 200px;">
                                    <div class="kotak-penyelesaian">
                                        <p>18 merupakan bilangan terbesar <br>
                                            \(9^2 + 15^2 = 18^2 \) <br>
                                            \(81 + 225 = 325 \) <br>
                                            \(306 \ne 325 \) (tidak terpenuhi)<br>
                                            Terlihat bahwa nilai dari \(9^2 + 15^2 \) tidak sama dengan nilai dari \( 18^2 \).
                                            Jadi bilangan 9, 15, 18 bukan Tripel Pythagoras
                                        </p>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                Perhatikan kelompok angka berikut : <br>
                                1). (5, 12, 13) <br>
                                2). (6, 8, 9) <br>
                                3). (7, 10, 12) <br>
                                c. Manakah dari kelompok angka diatas yang membentuk tripel Pythagoras? <br>
                                <input type="text" class="styled-input-kecil M2S3" id="contohM2S3I1" placeholder="..."> (1/2/3)<br>
                                <button type="submit" value="M2S3" class="cekjawaban" style="width: 150px; margin-bottom:20px;">Cek Jawaban</button> <br>
                                <div class="kotak-penyelesaian d-none penjelasan_M2S3" id="penjelasan_M2S3">
                                    <p>(5, 12, 13) <br>
                                        Tripel Pythagoras terdiri dari tiga bilangan bulat positif (a, b, c) yang memenuhi
                                        persamaan Pythagoras, yaitu \(a^2 + b^2 = c^2 \). Dalam pilihan yang diberikan, kita
                                        perlu memeriksa setiap pasangan angka untuk melihat apakah mereka memenuhi persamaan
                                        tersebut. <br>

                                        (5, 12, 13) <br>
                                        13 merupakan bilangan terbesar <br>
                                        \(5^2 + 12^2 = 13^2 \) <br>
                                        \(25 + 144 = 169 \) <br>
                                        \(169 = 169 \) (terpenuhi)<br>
                                        Terlihat bahwa nilai dari \(5^2 + 12^2 \) sama dengan nilai dari \( 13^2 \). Jadi
                                        bilangan 5, 12, 13 merupakan Tripel Pythagoras
                                    </p>
                                </div>
                                <br>
                                <hr>
                                </p>
                                d. Apakah sisi segitiga 10, 24, 26 membentuk segitiga siku-siku, lancip, atau tumpul! <br>
                                Sisi terpanjang <input type="text" class="styled-input-kecil M2S4" id="contohM2S4I1" placeholder="..."> <br><br>
                                <input type="text" class="styled-input-kecil M2S4" id="contohM2S4I2" placeholder="..."> \(^2\) = <input type="text" class="styled-input-kecil M2S4" id="contohM2S4I3" placeholder="..."> \(^2\) + <input type="text" class="styled-input-kecil M2S4" id="contohM2S4I4" placeholder="..."> \(^2\) <br><br>
                                <input type="text" class="styled-input-kecil M2S4" id="contohM2S4I5" placeholder="..."> = <input type="text" class="styled-input-kecil M2S4" id="contohM2S4I6" placeholder="..."> + <input type="text" class="styled-input-kecil M2S4" id="contohM2S4I7" placeholder="..."> <br><br>
                                <input type="text" class="styled-input-kecil M2S4" id="contohM2S4I8" placeholder="..."> = <input type="text" class="styled-input-kecil M2S4" id="contohM2S4I9" placeholder="..."> <br><br>
                                Jadi segitiga <input type="text" class="styled-input M2S4" id="contohM2S4I10" placeholder="..."> (Siku-siku/Lancip/Tumpul) <br>
                                <button type="submit" value="M2S4" class="cekjawaban" style="width: 150px; margin-bottom:20px;">Cek Jawaban</button> <br><br>
                                <hr>
                                e. Apakah sisi segitiga 11, 13, 15 membentuk segitiga siku-siku, lancip, atau tumpul! <br>
                                Sisi terpanjang <input type="text" class="styled-input-kecil M2S5" id="contohM2S5I1" placeholder="..."> <br><br>
                                <input type="text" class="styled-input-kecil M2S5" id="contohM2S5I2" placeholder="..."> \(^2\) = <input type="text" class="styled-input-kecil M2S5" id="contohM2S5I3" placeholder="..."> \(^2\) + <input type="text" class="styled-input-kecil M2S5" id="contohM2S5I4" placeholder="..."> \(^2\) <br><br>
                                <input type="text" class="styled-input-kecil M2S5" id="contohM2S5I5" placeholder="..."> = <input type="text" class="styled-input-kecil M2S5" id="contohM2S5I6" placeholder="..."> + <input type="text" class="styled-input-kecil M2S5" id="contohM2S5I7" placeholder="..."> <br><br>
                                <input type="text" class="styled-input-kecil M2S5" id="contohM2S5I8" placeholder="..."> = <input type="text" class="styled-input-kecil M2S5" id="contohM2S5I9" placeholder="..."> <br><br>
                                maka <input type="text" class="styled-input-kecil M2S5" id="contohM2S5I10" placeholder="..."> < <input type="text" class="styled-input-kecil M2S5" id="contohM2S5I11" placeholder="..."> <br><br>
                                Jadi segitiga <input type="text" class="styled-input M2S5" id="contohM2S5I12" placeholder="..."> (Siku-siku/Lancip/Tumpul) <br>
                                <button type="submit" value="M2S5" class="cekjawaban" style="width: 150px; margin-bottom:20px;">Cek Jawaban</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <nav aria-label="...">
                    <ul class="pagination justify-content-center">
                        {{-- <li class="page-item d-none"><a class="page-link" data-target="">Sebelumnya</a></li> --}}
                        <li class="page-item" id="materi2-page1-link"><a class="page-link" data-target="materi2-page1">1</a></li>
                        <li class="page-item" id="materi2-page2-link"><a class="page-link" data-target="materi2-page2">2</a></li>
                        <li class="page-item" id="materi2-page3-link"><a class="page-link" data-target="materi2-page3">3</a></li>
                        {{-- <li class="page-item"><a class="page-link" href="#">Berikutnya</a></li> --}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        // object jawaban
        let jawaban = {
            "M2S1": ["ya"],
            "M2S2": ["tidak"],
            "M2S3": ["1"],
            "M2S4": ["26", "26", "10", "24", "676", "100", "576", "676", "676", "siku-siku"],
            "M2S5": ["15", "15", "11", "13", "225", "121", "169", "225", "290", "225", "290", "lancip"]
        }
    </script>
    <script src="{{ asset('js/materi.js') }}"></script>
@endsection
