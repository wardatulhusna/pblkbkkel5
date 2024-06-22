@extends('layouts.main')

@section('isi')
<h1>Data Dosen</h1>
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
        <th scope="col">NIDN</th>
        <th scope="col">Nama Dosen</th>
        <th scope="col">Email</th>
        <th scope="col">NoTel</th>
        <th scope="col">foto</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
      <tr>
        <td>{{ $loop ->index + 1}}</td>
        <td>{{ $item->NIDN }}</td>
        <td>{{ $item->nama_dosen }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->no_telp }}</td>
        <td>{{ $item->foto }}</td>
          <td class="text-nowrap">
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
