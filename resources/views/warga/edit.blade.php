@extends('layout.master')

@section('content')
    <div class="container">
        <h1>Edit warga</h1>
        <form action="/warga/{{ $warga->id }}/update" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" placeholder="Input Nama"
                    value="{{ $warga->nama }}">
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input name="nik" type="text" class="form-control" id="nik" placeholder="Input NIK"
                    value="{{ $warga->nik }}">
            </div>
            <div class="mb-3">
                <label for="no_kk" class="form-label">No KK</label>
                <input name="no_kk" type="text" class="form-control" id="no_kk" placeholder="Input No KK"
                    value="{{ $warga->no_kk }}">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamain" class="form-label">Jenis Kelamain</label>
                <select id="jenis_kelamain" class="form-select" name="jenis_kelamin">
                    <option disabled>ilih Jenis Kelamin</option>
                    <option value="L" @if ($warga->jenis_kelamin == 'L') selected @endif>Laki Laki</option>
                    <option value="P" @if ($warga->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ $warga->alamat }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
