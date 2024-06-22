@extends('layouts.main')

@section('isi')
<h1>Data Matakuliah</h1>
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
        <th scope="col">Kode MataKuliah</th>
        <th scope="col">Nama MataKuliah</th>
        <th scope="col">Nama Prodi</th>
        <th scope="col">Nama kurikulum</th>
        <th scope="col">Tahun Akademik</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($matakuliahs as $matkul)
      <tr>
          <td>{{ $matkul->id}}</td>
          <td>{{ $matkul->kode_matkul}}</td>
          <td>{{ $matkul->nama_matkul}}</td>
          <td>{{ $matkul->prodi->nama_prodi}}</td>
          <td>{{ $matkul->kurikulum->kode_kurikulum}}</td>
          <td>{{ $matkul->smsTahunAkademik->semester}}</td>
          <td class="text-nowrap">
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
