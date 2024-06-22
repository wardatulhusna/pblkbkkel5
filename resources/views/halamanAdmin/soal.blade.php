@extends('layouts.main')

@section('isi')
<h1>Data Soal</h1>
<a href="#" class="btn btn-primary mb-3">Input Data Mahasiswa</a>
@if (session('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('pesan') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Matakuliah</th>
        <th scope="col">Nama Dosen</th>
        <th scope="col">Dokumen</th>
        <th scope="col">Tahun</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($soals as $item)
      <tr>
        <td>{{ $loop ->index + 1}}</td>
        <td>{{ $item->kode_rps}}</td>
        <td>{{ $item->matakuliah->nama_matkul}}</td>
        <td>{{ $item->dosen->nama_dosen}}</td>
        <td>{{ $item->dokumen}}</td>
        <td>{{ $item->tahun}}</td>
          <td class="text-nowrap">
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
