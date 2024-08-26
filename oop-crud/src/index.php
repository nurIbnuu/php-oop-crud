<?php

  include 'database.php';

  $db = new Database();

  $data_data = $db->tampilData();
?>

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
          <h2>Halaman Utama</h2>
        </div>
        <div class="col text-end">
          <!-- Tambah Data -->
          <a class="btn btn-primary" href="tambah.php" role="button">
            <i class="bi bi-person-plus"></i>
            Tambah
          </a>
        </div>
      </div>


      
      <!-- Table -->
      <div class="table-responsive">
        <table class="table table-hover table-bordered text-center">
          <thead>
            <tr>
              <th scope="col">Nomor</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Nomor Telepon</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php
              $i = 1;
              foreach($data_data as $data) :
            ?>
              <tr>
                <td><?= $i; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['alamat']; ?></td>
                <td><?= $data['no_hp']; ?></td>
                <td>
                  <a class="btn btn-warning btn-sm" href="ubah.php?id=<?= $data['id']; ?>" role="button">
                    <i class="bi bi-pen"></i>
                    Ubah
                  </a>

                  <a class="btn btn-danger btn-sm" href="proses.php?id=<?= $data['id']; ?>&aksi=hapus" role="button">
                    <i class="bi bi-trash"></i>
                    Hapus
                  </a>
                </td>
              </tr>
            <?php
              $i++;
              endforeach;
            ?>
          </tbody>
        </table>
      </div>
    </div>

</body>
</html>