@extends('template.materi')
@section('title', 'Rekap Evaluasi')

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
            <div class="card-body">
                <h4 class="card-title">Rekap Nilai Evaluasi</h4>
                <table id="table" class="table table-bordered table-striped">
                    <thead style="background-color: #2A5D66; color:#fff">
                        <tr>
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>Kelas</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div>


@endsection
@section('js')
    <!-- Required datatable js -->


    <!-- Datatable init js -->
    {{-- <script src="{{asset('assets')}}/js/pages/datatables.init.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('assets') }}/libs/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script>
        const BaseUrl = 'https://tepiankuis.softforge.my.id/api/tepian_quiz/hasil';
        const headers = {
            'X-Api-Key': 'eEZTrWOYbKuZuBom2UeORutdQdoRnpDx',
        };
        const config = {
            headers: headers
        };

        var dataSiswa = [];

        getDataRekap("2ZlM")


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
            ]
        });

        function getDataRekap(kuis) {
            dataSiswa = [];
            axios.get(`${BaseUrl}/${kuis}`, config)
                .then(function(response) {
                    // Data yang diterima
                    const data = response.data;
                    data.forEach(element => {
                        quiz = JSON.parse(element.jawaban_kuis_cbt);
                        console.log(element)
                        objTemp = {
                            nama: element.peserta.nama,
                            nisn: element.peserta.nis,
                            kelas: element.peserta.kelas,
                            nilai: quiz.nilai == undefined ? "0" : quiz.nilai,
                        }
                        dataSiswa.push(objTemp)

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
