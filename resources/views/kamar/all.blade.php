@extends('layouts.main')
@section('container')
    <h1>pengunjung</h1>
        <table class="table table-striped" style="vertical-align: middle; font-weight: bold; font-size: 20px;">
                <thead>
                    <tr>
                        <th>Jenis kamar</th>
                        <th>Jumlah kasur</th>
                        <th>harga</th>
                    </tr>
                </thead>
                <tbody>
                
                     @foreach ($data_kamar as $kamar)
                        <tr>
                            <td>{{ $kamar->jenis_kamar }}</td>
                            <td>{{ $kamar->jumlah_kasur }}</td>
                            <td>{{ $kamar->no_hp }}</td>
                            <td>
                                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDetail" href="detail_/{{$hotel->nama}}">Detail</a>
                                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDetail" href="/hotel/detail/{{$hotel->id}}">Detail</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
                </table>
                @endsection