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
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Pimpinan Jurusan</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Periode</th>
        <th scope="col">Status</th>
        <th scope="col">Nama Jurusan</th>
        <th scope="col">Nama Prodi</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pimpinanprodis as $pimjur)
      <tr>
          <td>{{ $loop ->index + 1}}</td>
          <td>{{ $$pimjur->dosen->nama_dosen }}</td>
          <td>{{ $$pimjur->jabatan}}</td>
          <td>{{ $$pimjur->periode}}</td>
          <td>
            @if ($pimjur->status == 1)
              {{ 'aktif' }}
            @else
              {{ 'tidak aktif' }}
            @endif
          </td>
          <td>{{ $$pimjur->jurusan->nama_jurusan}}</td>
          <td>{{ $$pimjur->prodi->nama_prodi}}</td>



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
