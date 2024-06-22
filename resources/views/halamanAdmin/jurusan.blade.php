@extends('layouts.main')

@section('isi')
<h1>Data Jurusan</h1>
<a href="{{route('jurusanController.create')}}" class="btn btn-primary mb-3">Input Data Jurusan</a>
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kode Jurusan</th>
        <th scope="col">Nama Jurusan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($jurusans as $jurusan)
      <tr>
          <td>{{ $loop ->index + 1}}</td>
          <td>{{ $jurusan->kode_jurusan }}</td>
          <td>{{ $jurusan->nama_jurusan }}</td>
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
