<?php

  include 'database.php';

  $db = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>PHP OOP - CRUD</title>
</head>
<body>

    <!-- Heading -->
    <nav class="navbar bg-body-tertiary">
      <div class="container">
        <span class="navbar-brand mb-0 h1">
          PHP OOP - CRUD
        </span>
      </div>
    </nav>

    <!-- Table -->
    <div class="container">
      <div class="table-responsive">
        <table class="table table-hover">
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
              foreach($db->tampilData() as $data) :
            ?>
              <tr>
                <td><?= $i; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['alamat']; ?></td>
                <td><?= $data['no_hp']; ?></td>
                <td>
                <a class="btn btn-warning btn-sm" href="#" role="button">Edit</a>
                <a class="btn btn-danger btn-sm" href="#" role="button">Hapus</a>
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