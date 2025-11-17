@extends('template.materi')
@section('title', 'Teorema Pythagoras')

@section('css')
@endsection

@section('main-content')

    <div id="kuis"></div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://tepiankuis.softforge.my.id/library/tepian.min.js"></script>

    <script>
        var elementKuis = document.getElementById("kuis");
        var kuis = new tepianKuis(elementKuis, {
            Key: "eEZTrWOYbKuZuBom2UeORutdQdoRnpDx",
            quiz: "6UU9",
            title: "Tripel Pythagoras"
        })
        
        kuis.peserta({
            email: "{{ Auth::user()->detail->email }}",
            nis: "{{ Auth::user()->detail->noinduk }}"
        }).saveAnswer(true);
        
    </script>
@endsection

@section('js')
@endsection
