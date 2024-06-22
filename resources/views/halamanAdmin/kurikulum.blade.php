@extends('layouts.main')

@section('isi')
<h1>Data Kurikulum</h1>
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
        <th scope="col">kode kurikulum</th>
        <th scope="col">tahun</th>
        <th scope="col">nama Prodi</th>
        <th scope="col">status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($kurikulums as $krklm)
      <tr>
          <td>{{ $krklm ->id}}</td>
          <td>{{ $krklm->kode_kurikulum }}</td>
          <td>{{ $krklm->tahun }}</td>
          <td>{{ $krklm->prodi_id }}</td>
          <td>{{ $krklm->status }}</td>
          <td class="text-nowrap">
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
