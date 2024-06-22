@extends('layouts.main')

@section('isi')
<h1>Data Verifikasi RPS</h1>
{{-- <a href="#" class="btn btn-primary mb-3">Input Data Mahasiswa</a>
@if (session('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('pesan') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif --}}
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kode RPS</th>
        <th scope="col">Status</th>
        <th scope="col">Komentar</th>
        <th scope="col">Pimpinan Prodi</th>
        <th scope="col">Pimpinan KBK</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($verifikasirpss as $verrps)
      <tr>
          <td>{{ $loop ->index + 1}}</td>
          <td>{{ $verrps->rpsMatkul->kode_rps }}</td>
          <td>{{ $verrps->status }}</td>
          <td>{{ $verrps->komentar }}</td>
          <td>{{ $verrps->pimpinanProdi->jabatan }}</td>
          <td>{{ $verrps->pengurusKbk->jabatan}}</td>
          </td>
          <td class="text-nowrap">
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
