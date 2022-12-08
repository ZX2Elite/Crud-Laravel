@extends("layouts.main")

@section("container")
<div class="card-body">
        <div class="form-group">
            <label for="" class="form-label">Nama Pengunjung</label>
            <input type="text" class="form-control" name="nis" id="nis" value="{{ $pengunjung->nama }}" readonly
                placeholder="NIS">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Tanggal Pesan</label>
            <input type="text" class="form-control" name="nis" id="nis" value="{{ $pengunjung->tanggal }}" readonly
                placeholder="NIS">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Kamar</label>
            <input type="text" class="form-control" name="nis" id="nis" value="{{ $pengunjung->kamar_id }}" readonly
                placeholder="NIS">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Nomor HP</label>
            <input type="text" class="form-control" name="nis" id="nis" value="{{ $pengunjung->np_hp }}" readonly
                placeholder="NIS">
        </div>
        <a type="button" class="btn btn-primary" href="/pengunjung/all">Back</a>
    </div>
@endsection