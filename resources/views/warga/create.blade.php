@extends('layout.master')

@section('content')
    <div class="container">
        <h1>Tambah Warga</h1>
        <form action="/warga/store" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" placeholder="Input Nama">
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input name="nik" type="text" class="form-control" id="nik" placeholder="Input NIK">
            </div>
            <div class="mb-3">
                <label for="no_kk" class="form-label">No KK</label>
                <input name="no_kk" type="text" class="form-control" id="no_kk" placeholder="Input No KK">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamain" class="form-label">Jenis Kelamain</label>
                <select id="jenis_kelamain" class="form-select" name="jenis_kelamin">
                    <option disabled>ilih Jenis Kelamin</option>
                    <option value="L">Laki Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
