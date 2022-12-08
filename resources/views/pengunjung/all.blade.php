@extends("layouts.main")
@section("container")
    <h1>pengunjung</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Pengunjung</th>
                <th>Tanggal Pengunjung</th>
                <th>Kamar Pengunjung</th>
                <th>No Handpone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_pengunjung as $tamu)
                        <tr>
                            <td>{{ $tamu->id}}</td>
                            <td>{{ $tamu->nama }}</td>
                            <td>{{ $tamu->tanggal }}</td>
                            <td>{{ $tamu->kamar_id }}</td>
                            <td>{{ $tamu->no_hp }}</td>
                            <td>
                                <a type="button" class="btn btn-primary" href="detail/{{$tamu->id}}">Detail</a>
                                <form action="/pengunjung/delete/{{$tamu->id}}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>                            </td>

                        </tr>
                    @endforeach
        </tbody>
        

        
</table>

@endsection