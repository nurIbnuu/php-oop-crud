<?php
  include 'database.php';

  $db = new Database();

  $aksi = $_GET['aksi'];

  if($aksi == 'tambah')
  {
    $db->tambahData($_POST['nama'], $_POST['alamat'], $_POST['no_hp']);

    header('Location: index.php');
  }
  elseif($aksi == 'ubah')
  {
    $db->ubahData($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['no_hp']);

    header('Location: index.php');
  }
  elseif($aksi == 'hapus')
  {
    $db->hapusData($_GET['id']);

    header('Location: index.php');
  }