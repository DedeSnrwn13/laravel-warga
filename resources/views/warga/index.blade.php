@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Daftar Warga') }}</div>

                    <div class="card-body">
                        <a href="{{ url('/warga/create') }}" class="btn btn-primary mb-3">Add Warga</a>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>No KK</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($wargas as $warga)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $warga->nama }}</td>
                                        <td>{{ $warga->nik }}</td>
                                        <td>{{ $warga->no_kk }}</td>
                                        <td>{{ $warga->jenis_kelamin }}</td>
                                        <td>{{ $warga->alamat }}</td>
                                        <td class="d-flex">
                                            <a href="/warga/{{ $warga->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="/warga/{{ $warga->id }}/destroy" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-sm btn-danger ms-3">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
