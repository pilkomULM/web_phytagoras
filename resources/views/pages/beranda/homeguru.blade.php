@extends('template.materi')
@section('title', 'Data Siswa')

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('assets') }}/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets') }}/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets') }}/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.32/sweetalert2.min.js" integrity="sha512-3PL7jW3xI1EjF2Hfqwv5u6nKG/BnUbWytnJDhsY/q5CbIB5XzoHNhJvgmFeVD7xgC9DbKDm+gPP9uDAAfLAZUA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets') }}/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.32/sweetalert2.css" integrity="sha512-eRBMRR/qeSlGYAb6a7UVwNFgXHRXa62u20w4veTi9suM2AkgkJpjcU5J8UVcoRCw0MS096e3n716Qe9Bf14EyQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-baseline">
                    <div class="">
                        <div class="input-group d-flex align-items-center">
                            <label for="" class="mx-2">Pilih Kelas</label>
                            <select name="kelas" id="pilih_kelas" class="form-select">
                                <option value="all">Semua kelas</option>
                                <option value="A"> A</option>
                                <option value="B"> B</option>
                                <option value="C"> C</option>
                            </select>
                        </div>
                    </div>
                    <h4 class="card-title"></h4>
                    <button class="btn text-light" style="background-color:#2A5D66" data-bs-toggle="modal"
                        data-bs-target="#modal-siswa"><i class="fa-solid fa-user-plus"></i> Tambah
                        Siswa</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table id="table-siswa" class="table table-bordered table-striped">
                        <thead style="background-color: #2A5D66; color:#fff">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>Kelas</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="modal fade" id="modal-siswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="label-modal-siswa">Tambahkan Siswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="siswa-form">
                        <input type="hidden" name="id" id="idn">
                        <div class="col-md-12">
                            <label for="validationCustomUsername" class="form-label">Nama</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" ><i
                                        class="fa-solid fa-user-graduate"></i></span>
                                <input type="text" class="form-control" id="form-tambah-nama" name="nama"
                                    aria-describedby="form-tambar-nama">
                                <div class="invalid-feedback" id="validation-tambah-nama">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustomUsername" class="form-label">No Induk Siswa</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text"><i class="fa-solid fa-address-card"></i></span>
                                <input type="text" class="form-control" id="form-tambah-noinduk"
                                    name="noinduk" aria-describedby="form-tambar-noinduk">
                                <div class="invalid-feedback" id="validation-tambah-noinduk">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustomUsername" class="form-label">Email</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                                <input type="email" class="form-control" id="form-tambah-email" name="email"
                                    aria-describedby="form-tambar-email">
                                <div class="invalid-feedback" id="validation-tambah-email">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustomUsername" class="form-label">kelas</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" ><i class="fa-solid fa-landmark"></i></span>
                                <select class="form-select" id="form-tambah-kelas" name="kelas">
                                    <option selected disabled value="">Pilih...</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                </select>
                                <div class="invalid-feedback" id="validation-tambah-kelas">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustomUsername" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" ><i class="fa-solid fa-user-tag"></i></span>
                                <input type="text" class="form-control" id="form-tambah-username" name="username"
                                    aria-describedby="form-tambar-username">
                                <div class="invalid-feedback" id="validation-tambah-username">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustomUsername" class="form-label">Password</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" class="form-control" id="form-tambah-password" name="password"
                                    aria-describedby="form-tambar-password">
                                <div class="invalid-feedback" id="validation-tambah-password">

                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="tombol-tambah" class="btn text-light" style="background-color: #2A5D66;">Simpan</button>
                    <button type="button" id="tombol-edit" class="btn text-light d-none" style="background-color: #2A5D66;">Simpan Perubahan</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- datatable js -->


    <!-- Datatable init js -->
    {{-- <script src="{{asset('assets')}}/js/pages/datatables.init.js"></script> --}}
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/homeguru.js') }}"></script>

@endsection
