<nav class="navbar navbar-expand-lg bg-success" data-bs-theme="dark" >
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Manajemen KBK </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              jurusan
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/jurusan">Jurusan</a></li>
              <li><a class="dropdown-item" href="/pimpinanjurusan">Pimpinan Jurusan</a></li>
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="/jurusan">Jurusan</a>
          </li> --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Prodi
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/prodi">Prodi</a></li>
              <li><a class="dropdown-item" href="/pimpinanprodi">Pimpinan Prodi</a></li>
            </ul>
          <li class="nav-item">
            <a class="nav-link" href="/dosen">Dosen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tahunAkademik">Tahun Akademik</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kurikulum">Kurikulum</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Matkuliah
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/matakuliah">Matakuliah</a></li>
                <li><a class="dropdown-item" href="/dosenmatkul">Dosen Matakuliah</a></li>
              </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              KBK
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/kbk">KBK</a></li>
                <li><a class="dropdown-item" href="/penguruskbk">Pengurus KBK</a></li>
                <li><a class="dropdown-item" href="/dosenkbk">Dosen KBK</a></li>
              </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/rps">RPS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/soal">Soal</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Verfikasi
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/verifikasirps">Verifikasi RPS</a></li>
                <li><a class="dropdown-item" href="/verifikasisoal">Verifikasi Soal</a></li>
              </ul>
          </li>



          {{-- <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>  --}}
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
