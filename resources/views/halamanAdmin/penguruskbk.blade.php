@extends('layouts.main')

@section('isi')
<h1>Data Pengurus KBK</h1>
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
        <th scope="col">Nama Pengurus</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Periode</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($penguruskbks as $pengkbk)
      <tr>
          <td>{{ $loop ->index + 1}}</td>
          <td>{{ $pengkbk->dosen->nama_dosen }}</td>
          <td>{{ $pengkbk->jabatan}}</td>
          <td>{{ $pengkbk->periode}}</td>
          <td>
            @if ($pengkbk->status == 1)
              {{ 'aktif' }}
            @else
              {{ 'tidak aktif' }}
            @endif
          </td>
          <td>{{ $$pimjur->jurusan->nama_jurusan}}</td>



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
