@extends('template.materi')
@section('title', 'Segitiga Istimewa')

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
                        <li>Menentukan panjang sisi segitiga menggunakan teorema Pythagoras </li>
                        <li>Membandingkan sisi pada segitiga siku-siku istimewa </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>  

    <div class="card">
        <div class="card-body">
            <div class="card-page" id="materi3-page1">
                <div class="card-body materi" style="text-align: justify">
                    <div class="card mb-3">
                        <h5 style="color: #2A5D66">Segitiga Istimewa dengan sudut 45˚, 45˚, dan 90˚</h5>
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/segitiga6.jpg') }}"
                                    class="img-fluid rounded-start"alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="kotak-penyelesaian" style="max-width: 150px; border-radius:2px; text-align:center">
                                        \(a^2 + a^2 = c^2\) <br>
                                        \(2a^2 = c^2\) <br>
                                        \(c = a \sqrt{2}\)
                                    </div>
                                    Pada segitiga siku-siku, perbandingqn antara sisi di hadapan sudut 45°, sisi di hadapan
                                    sudut 45°, dan panjang sisi miring adalah 1 : 1 : \(\sqrt{2} \) <br>
                                    Diperoleh perbandingan sisi – sisinya adalah alas : tinggi : miring = \(a : a :\sqrt{2}
                                    \)
                                </div>
                            </div>
                        </div>
                        <p>Sehingga, pada segitiga istimewa dengan sudut 45˚, 45˚, dan 90˚ memiliki panjang sisi miring
                            \(\sqrt{2}\) kali panjang dari sisi yang lain.</p>
                        <hr>
                        <h5 style="color: #2A5D66; font-weight:bolder; text-align:center;">Contoh 1</h5>
                        <div class="row g-0">
                            <p>Perhatikan gambar segitiga siku – siku dibawah ini :</p>
                            <img src="{{ asset('images/segitiga8.jpg') }}"
                            class="img-fluid rounded-start"alt="..." style="max-width: 200px;">
                            <p>Tentukan panjang AB , apabila diketahui panjang AC = 20 cm </p>
                            <div class="card-body">
                                <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                                    alt="..." style="max-width: 200px;">
                                <p>Diketahui : AC = 20cm <br>
                                    Ditanya : Panjang AB ? <br>
                                    Jawab : <br>
                                    \(AB = \frac{1}{2} . a\sqrt{2} \) <br>
                                    \(AB = \frac{1}{2} . 20\sqrt{2} \) <br>
                                    \(AB = 10\sqrt{2} \) <br>
                                    Jadi Panjang AB adalah \(10\sqrt{2} \)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-page" id="materi3-page2">
                <div class="card-body materi" style="text-align: justify">
                    <div class="card mb-3">
                        <h5 style="color: #2A5D66">Segitiga Istimewa dengan sudut 30˚, 60˚, dan 90˚</h5>
                        <p>Pada segitiga istimewa dengan sudut 30˚, 60˚, dan 90 panjang sisi miring adalah 2 kali sisi terpendek dan panjang sisi lain adalah \(\sqrt{3}\)  kali sisi terpendek.</p>
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/segitiga9.jpg') }}"
                                    class="img-fluid rounded-start"alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="kotak-penyelesaian" style="max-width: auto; border-radius:2px; text-align:center">
                                        Pada segitiga siku-siku, perbandingsn antara sisi di hadapan sudut 30°, sisi di hadapan
                                        60°, dan panjang sisi miring adalah 1 : \(\sqrt{3} \) : 2 <br>
                                        Diperoleh perbandingan sisi – sisinya adalah alas : tinggi : miring = 1 : \(\sqrt{3} \)
                                        : 2
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p> Jadi , perbandingan segitiga istimewa dengan sudut 30°, 90°, 60° adalah alas : tinggi : sisi miring = 1 : \(\sqrt{3}\) : 2</p>
                        <hr>
                        <h5 style="color: #2A5D66; font-weight:bolder; text-align:center;">Contoh 1</h5>
                        Diketahui ΔPQR Siku-siku di P dengan ∟PQR = 30° dan panjang PQ = 12 cm. Tentukan panjang PR dan QR!
                        <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start" alt="..."
                            style="max-width: 200px;">
                        <center><img src="{{ asset('images/segitiga11.png') }}" class="img-fluid rounded-start"
                                id="segitiga11" alt="..." style="max-width: 400px;"></center>
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-sm">
                                    Panjang PR :
                                    \(\frac{PR}{1} = \frac{12}{\sqrt{3}}\) <br>
                                    \(PR = \frac{12}{\sqrt{3}}\) x \(\frac{\sqrt{3}}{\sqrt{3}}\) =
                                    \(\frac{12\sqrt{3}}{\sqrt{3}}\) = \(4\sqrt{3}\) <br>
                                    Jadi panjang PR pada ΔPQR adalah \(4\sqrt{3}\) cm.
                                </div>
                                <div class="col-sm">
                                    Panjang QR :
                                    \(\frac{QR}{2} = \frac{12}{\sqrt{3}}\) <br>
                                    \(QR = \frac{2 \times 12}{\sqrt{3}}\) = \(\frac{24}{\sqrt{3}}\) x
                                    \(\frac{\sqrt{3}}{\sqrt{3}}\) = \(\frac{24\sqrt{3}}{\sqrt{3}}\) = \(8\sqrt{3}\) <br>
                                    Jadi panjang QR pada ΔPQR adalah \(8\sqrt{3}\) cm.
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5 style="color: #2A5D66; font-weight:bolder; text-align:center;">Contoh 2</h5>
                        <center><img src="{{ asset('images/menarapandang.jpg') }}" class="img-fluid rounded-start"
                            id="segitiga12" alt="..." style="max-width: 400px;"></center>
                        <p>Jarak lantai dasar dan lantai 2 Menara Pandang Banjarmasin adalah 4 m. Jika kemiringan tangga tersebut 30°, berapakah panjang tangga dari lantai dasar ke lantai 2 Menara Pandang Banjarmasin tersebut?</p>
                        <img src="{{ asset('images/Penyelesaian.png') }}" class="img-fluid rounded-start"
                            alt="..."style="max-width: 200px;">
                        <center><img src="{{ asset('images/segitiga12.png') }}" class="img-fluid rounded-start"
                            id="segitiga12" alt="..." style="max-width: 400px;"></center>
                        <p>Dinyatakan panjang eskalator atau sisi miring \((x) \) <br>
                            \(\frac{x}{2} = \frac{4}{1}\) <br>
                            \(x = \frac{2 \times 4}{1} = 8\) <br>
                            Jadi sisi panjang eskalator pada bangunan tersebut adalah 8 m.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-page" id="materi3-page3">
                <div class="card-body materi" style="text-align: justify">
                    <div class="card mb-3">
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
                                                    <li>Isilah kolom kosong dengan salah satu jawaban yang disediakan</li>
                                                    <li>Tarik jawaban dan drop kebagian kotak kosong</li>
                                                    <li>Klik tombol cek jawaban untuk mencek jawaban</li>
                                                    <li>Jika jawaban kamu benar maka kotak akan berwarna hijau</li>
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
                        <div class="card mb-3" style="width:auto; box-shadow:none!important;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/segitiga13.jpg') }}" class="img-fluid rounded-start"
                                        alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text">Perhatikan segitiga berikut! <br>
                                            Pada ΔABC , ∟B = 60° dan ∟A = 300. Panjang BC = 12 cm, hitunglah panjang AB dan
                                            AC <br>
                                            Menggunakan perbandingan pada segitiga istimewa yaitu panjang sisi miring adalah 2 kali sisi terpendek dan panjang sisi lainnya adalah \(\sqrt{3}\) kali sisi tegak.
                                            <div class="container text-center">
                                                <div class="row">
                                                    <div class="col-sm" style="text-align: left">
                                                        Panjang AC : <br>
                                                        \(\frac{AC}{BC} = \frac{\sqrt{3}}{1}\) <br>
                                                        \(\frac{AC}{12}\) = \(\frac{\sqrt{3}}{1}\) <br>
                                                        \(AC = \frac{12\sqrt{3}}{1} =\) <br>
                                                        <div class="card-drop" data-jawaban="contohM3S1I1" ondragover="allowDrop(event)" ondrop="drop(event,this)">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm" style="text-align: left">
                                                        Panjang AB : <br>
                                                        \(\frac{AB}{BC} = \frac{2}{1}\) <br>
                                                        \(\frac{AB}{12}\) = \(\frac{2}{1}\) <br>
                                                        \(AB = \frac{12\times2}{1} =\) <br>
                                                        <div class="card-drop" data-jawaban="contohM3S1I2" ondragover="allowDrop(event)" ondrop="drop(event,this)">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card mb-3" style="width:auto; box-shadow:none!important;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/segitiga14.jpg') }}" class="img-fluid rounded-start"
                                        alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text">
                                            Gambar di samping menunjukkan ∆PQR dengan siku-siku di P dan QR = 8 cm dan ∠Q = 60°. Tentukan panjang PQ dan PR <br>
                                            <div class="container text-center">
                                                <div class="row">
                                                    <div class="col-sm" style="text-align: left">
                                                        Panjang PQ : <br>
                                                        \(\frac{QR}{PQ} = \frac{2}{1}\) <br>
                                                        \(\frac{8}{PQ}\) = \(\frac{2}{1}\) <br>
                                                        \(PQ = \frac{8\times 1}{2} = \frac{8}{2} =\)
                                                        <div class="card-drop" data-jawaban="contohM3S2I5" ondragover="allowDrop(event)" ondrop="drop(event,this)"></div>
                                                    </div>
                                                    <div class="col-sm" style="text-align: left">
                                                        Panjang PR : <br>
                                                        \(\frac{PR}{QR} = \frac{\sqrt{3}}{2}\) <br>
                                                        \(\frac{PR}{8} = \frac{\sqrt{3}}{2}\) <br>
                                                        \(AB = \frac{8\times \sqrt{3}}{2} =\)
                                                        <div class="card-drop" data-jawaban="contohM3S2I4" ondragover="allowDrop(event)" ondrop="drop(event,this)"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                                    <div class="container drag-jawaban">
                                        <div class="row row-cols-auto" style="margin-left:10px">
                                            <div class="col card-drag"><div class="" draggable="true" value="1" id="contohM3S1I1" ondragstart="drag(event)">\(12\sqrt{3}\)</div></div>
                                            <div class="col card-drag"><div class="" draggable="true" value="2" id="contohM3S1I2" ondragstart="drag(event)">\(24\)</div></div>
                                            <div class="col card-drag"><div class="" draggable="true" value="3" id="contohM3S3I3" ondragstart="drag(event)">\(15\sqrt{3}\)</div></div>
                                            <div class="col card-drag"><div class="" draggable="true" value="4" id="contohM3S2I4" ondragstart="drag(event)">\(4\sqrt{3}\)</div></div>
                                            <div class="col card-drag"><div class="" draggable="true" value="5" id="contohM3S2I5" ondragstart="drag(event)">\(4\)</div></div>
                                            <div class="col card-drag"><div class="" draggable="true" value="6" id="contohM3S2I6" ondragstart="drag(event)">\(8\sqrt{3}\)</div></div>
                                            <div class="col card-drag"><div class="" draggable="true" value="7" id="contohM3S2I7" ondragstart="drag(event)">\(8\)</div></div>
                                            <div class="col card-drag"><div class="" draggable="true" value="8" id="contohM3S2I8" ondragstart="drag(event)">\(8\)</div></div>
                                        </div>
                                    </div>
                                </div>
                                <center><button  onclick="checkJawabanDrag()" class="cekjawaban" style="width: 150px; margin-bottom:20px;">Cek Jawaban</button></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <nav aria-label="...">
                <ul class="pagination justify-content-center">
                    <li class="page-item" id="materi3-page1-link"><a class="page-link" data-target="materi3-page1">1</a></li>
                    <li class="page-item" id="materi3-page2-link"><a class="page-link" data-target="materi3-page2">2</a></li>
                    <li class="page-item" id="materi3-page3-link"><a class="page-link" data-target="materi3-page3">3</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
        var hasil = [];

function allowDrop(ev) {
    ev.preventDefault();
  }

  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
  }

  function drop(ev,element) {
    ev.preventDefault();
    if(element.childElementCount == 0){
        var data = ev.dataTransfer.getData("text");
       if(data == element.getAttribute('data-jawaban')){
            hasil.push(true);
        }else{
            hasil.push(false)
       }
        ev.target.appendChild(document.getElementById(data));
    }
    // console.log(element,ev,data);
    console.log(element.childElementCount);
  }

  function checkJawabanDrag(){
        if(hasil.length === 4){
            if(hasil[0] && hasil[1]){
                Swal.fire(
                    'Kerja Bagus!',
                    'Jawaban anda Benar!',
                    'success'
                )
            }else{
                Swal.fire(
                    'Upss!',
                    'Jawaban anda belum tepat!',
                    'error'
                )
            }
        }else{
            Swal.fire(
                    'Upss!',
                    'Jawaban anda belum tepat!',
                    'error'
            )
        }
  }
</script>
{{-- <script src="{{ asset('js/materi.js') }}"></script> --}}
@endsection
