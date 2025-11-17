@extends('template.capaian')
@section('title','Capaian Pembelajaran')
@section('css')
@endsection

@section('main-content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <div class="card" id="kotak-CP">
                            <div class="card-body" style="font-size: 20px; color:black; text-align:center; font-weight:bolder;" >
                                Pada akhir fase D peserta didik dapat menyelesaikan masalah kontekstual dengan menggunakan
                                konsep-konsep dan keterampilan matematika yang dipelajari pada fase ini. 
                                <br>Peserta didik dapat menunjukkan kebenaran teorema Pythagoras dan menggunakannya 
                                dalam menyelesaikan masalah dalam kehidupan sehari-hari.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
        </div>
    </div>
</div>
<style>
    #kotak-CP{
        width: 100%;
        box-shadow: 0 0 1rem rgba(0, 0, 0, 15);
    }
</style>
@endsection

@section('js')
@endsection
