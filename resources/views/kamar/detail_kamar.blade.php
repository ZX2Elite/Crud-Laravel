@extends("layouts.main")

@section("content")
    <h1>Detail Kamar</h1>
    <p>Jenis kamar: {{$kamars->jenis_kamar}}</p>
    <p>Jumlah kasur : {{$kamars->jumlah_kasur}}</p>
    <p>Harga kamar : {{$kamars->harga}}</p>        =
    <a class="btn btn-primary" href="kamar/all">back</a>
@endsection