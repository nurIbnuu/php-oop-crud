<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Connect Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Connect Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <title>PHP OOP - CRUD</title>
</head>
<body>

    <!-- Heading -->
    <nav class="navbar bg-body-tertiary border-bottom mb-4">
      <div class="container">
        <span class="navbar-brand mb-0 h1 fs-1">
          PHP OOP - CRUD
        </span>
      </div>
    </nav>

    <div class="container">

      <div class="row mt-2 mb-2">
        <div class="col">
          <h2>Halaman Tambah Data</h2>
        </div>
        <div class="col text-end">
          <!-- Tambah Data -->
          <a class="btn btn-danger" href="index.php" role="button">
            <i class="bi bi-backspace"></i>
            Kembali
          </a>
        </div>
      </div>

      <!-- Form -->
      <form action="proses.php?aksi=tambah" method="post">

        <div class="mb-3 row">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="alamat" name="alamat" style="height: 100px"></textarea>
            </div>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="no_hp" class="col-sm-2 col-form-label">Nomor Telepon</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="no_hp" name="no_hp">
          </div>
        </div>

        <div class="row">
          <div class="col text-end">
            <button type="submit" class="btn btn-primary">
              <i class="bi bi-floppy"></i>
              Submit
            </button>
          </div>
        </div>

      </form>

    </div>
    
</body>
</html>