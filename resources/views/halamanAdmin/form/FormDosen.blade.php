<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dosen</title>
    <!-- Load Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" />
</head>

<body>
    <!-- Header -->
    <header class="bg-success text-light py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- Introduction -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <h2>Form Dosen</h2><br>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Pengguna</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">Dosen Mata kuliah</option>
                                <option value="2">Dosen KBK</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Dosen</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kode" class="col-sm-2 col-form-label">NIDN</label>
                        <div class="col-sm-10">
                            <input type="kode" class="form-control" id="kode">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nohp" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nohp">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Photo</label>
                        <div class=col-sm-10>
                            <input type="file" class="form-control" id="inputGroupFile02">
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label"></label>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <input class="btn btn-warning" type="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-success text-light py-2">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <p>Copyright &copy;
                        <!-- Display the current year using JavaScript -->
                        <script>
                            document.write(new Date().getFullYear());
                        </script> by ARWAH
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
