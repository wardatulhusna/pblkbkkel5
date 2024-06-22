@extends('layouts.main')

@section('isi')
<body>
  <!-- Introduction -->
  <section class="bg-light py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-9">
          <h2>Form Jurusan</h2><br>
          @if (session()->has('error'))
                        <div>
                            {{ session('error') }}
                        </div>
                    @endif
                    <p><a href="/jurusan" class="btn btn-primary">Go Back</a></p>
                    <form action="{{ route('admin/jurusan/save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <div class="block">
                                <div class="title"><strong></strong></div>
                                <div class="block-body">
                                    <form class="form-horizontal">
                                        <div class="form-group row mb-3">
                                            <label class="col-sm-3 form-control-label">Kode Jurusan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="kode_jurusan">
                                                @error('kode_jurusan')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-3">
                                            <label class="col-sm-3 form-control-label">Nama Jurusan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="nama_jurusan">
                                                @error('nama_jurusan')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="line"></div>
                                        <div class="form-group row">
                                            <div class="col-sm-9 ml-auto">
                                                <button type="cancel" class="btn btn-secondary">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            </form>

        </div>
      </div>
    </div>
  </section>

</body>

@endsection
