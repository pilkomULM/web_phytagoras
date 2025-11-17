@extends('template.materi')
@section('title', 'Rekap Kuis')

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('assets') }}/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets') }}/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets') }}/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets') }}/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
@endsection

@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="">
                        <div class="input-group d-flex align-items-center">
                            <label for="" class="mx-2">Pilih Kuis</label>
                            <select name="kelas" id="pilih_kuis" class="form-select">
                                <option value="DIVg"> Materi 1 - Teorema Pythagoras</option>
                                <option value="rrQJ"> Materi 2 - Triple Pythagoras</option>
                                <option value="6UU9"> Materi 3 - Segitiga Istimewa</option>
                            </select>
                        </div>
                    </div>
                    <h4 class="card-title">Rekap Kuis</h4>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Rekap Nilai Kuis</h4>
                    <table id="table" class="table table-bordered table-striped">
                        <thead style="background-color: #2A5D66; color:#fff">
                            <tr>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>Kelas</th>
                                <th>Nilai</th>
                                <th>Waktu Selesai</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
@section('js')
    <!-- Required datatable js -->


    <!-- Datatable init js -->
    {{-- <script src="{{asset('assets')}}/js/pages/datatables.init.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script>
        const BaseUrl = 'https://tepiankuis.softforge.my.id/api/tepian_quiz/hasil';
        const ourUrl = window.location.origin;
        const headers = {
            'X-Api-Key': 'eEZTrWOYbKuZuBom2UeORutdQdoRnpDx',
        };
        const config = {
            headers: headers
        };
        var siswa = [];

        datasiswa();

        function datasiswa() {
            axios.get(`${ourUrl}/siswa/get`)
                .then(function(response) {
                    var daftarSiswa = response.data;
                    daftarSiswa.forEach(item => {
                        siswa.push(item.id_tepian_user)
                    })

                    console.log(siswa);
                    getDataRekap("DIVg")
                })
                .then(function(err) {

                })
        }

        var dataSiswa = [];

    
        document.getElementById("pilih_kuis").addEventListener("change", function(e) {
            var kuisVal = e.target.value;

            getDataRekap(kuisVal);
        });


        var dataTable = $("#table").DataTable({

            language: {
                loadingRecords: "Harap tunggu, Memuat data Siswa...",
                zeroRecords: "Tidak ada data yang tersedia."
            },
            data: dataSiswa,
            columns: [{
                    data: 'nama'
                },
                {
                    data: 'nisn'
                },
                {
                    data: 'kelas'
                },
                {
                    data: 'nilai'
                },
                {
                    data: 'waktu'
                }
            ]
        });

        function getDataRekap(kuis) {
            dataSiswa = [];
            axios.get(`${BaseUrl}/${kuis}`, config)
                .then(function(response) {
                    // Data yang diterima
                    const data = response.data;
                    console.log(data);
                    data.forEach(element => {
                        if (siswa.includes(parseInt(element.id_peserta, 10))) {
                            quiz = JSON.parse(element.jawaban_kuis_embed);
                            objTemp = {
                                nama: element.peserta.nama,
                                nisn: element.peserta.nis,
                                kelas: element.peserta.kelas,
                                nilai: quiz.nilai == undefined ? "0" : quiz.nilai,
                                waktu: quiz.waktu_selesai == undefined ? "Belum Mengerjakan" : quiz
                                    .waktu_selesai,
                            }
                            dataSiswa.push(objTemp)
                        }
                    });
                    renderReka();

                })
                .catch(function(error) {
                    console.error('Terjadi kesalahan:', error);
                });


        }

        function renderReka() {
            dataTable.clear()
            dataTable.clear().rows.add(dataSiswa).draw();
        }
    </script>
@endsection
