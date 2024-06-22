@extends('layouts.main')

@section('isi')
<h1>Data Prodi</h1>
{{-- <a href="#" class="btn btn-primary mb-3">Input Data Mahasiswa</a>
@if (session('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('pesan') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif --}}
{{-- <form action="{{ route('prodiController.filter') }}" method="GET" class="mb-3">
    <div class="input-group">
      <input type="text" name="nama_prodi" class="form-control" placeholder="Cari Nama Prodi...">
      <button type="submit" class="btn btn-primary input-group-append">Cari</button>
    </div>
  </form> --}}
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama jurusan</th>
        <th scope="col">kode prodi</th>
        <th scope="col">Nama Prodi</th>
        <th scope="col">jenjang</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($prodis as $prodi)
      <tr>
        ` <td>{{ $loop ->index + 1}}</td>
          <td>{{ $prodi->jurusan->nama_jurusan}}</td>
          <td>{{ $prodi->kode_prodi}}</td>
          <td>{{ $prodi->nama_prodi }}</td>
          <td>{{ $prodi->jenjang }}</td>
          <td class="text-nowrap">
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
