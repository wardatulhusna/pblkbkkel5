@extends('layouts.main')

@section('isi')
<h1>Data Tahun Akademik</h1>
{{-- <a href="#" class="btn btn-primary mb-3">Input Data ta</a>
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
        <th scope="col">Semester</th>
        <th scope="col">Tahun Akademik</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($smstahunakademiks as $thnakademik)
      <tr>
          <td>{{ $thnakademik ->id}}</td>
          <td>{{ $thnakademik ->sms_th_ak}}</td>
          <td>{{ $thnakademik->status }}</td>
          <td class="text-nowrap">
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
