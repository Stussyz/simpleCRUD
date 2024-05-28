<?php
// pemanggilan configuration koneksi.php
require_once 'koneksi.php';

// melakukan cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // ambil data berdasarkan id_ktm
  $q = $conn->query("SELECT * FROM users WHERE id_ktm = '$id'");

  foreach ($q as $dt) :
  ?>

  <h1>PlajariKode - CRUD dengan PHP MySQL</h1>
  <h2>Halaman Ubah Data</h2>
<!-- setelah di update data akan diposting ke database via poses_update.php -->
  <form action="proses_update.php" method="post">
    <input type="number" name="id_ktm" value="<?= $dt['id_ktm'] ?>">
    <input type="text" name="asal_fakultas" value="<?= $dt['asal_fakultas'] ?>">
    <input type="text" name="f_name" value="<?= $dt['f_name'] ?>">
    <input type="text" name="l_name" value="<?= $dt['l_name'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>

  <?php
  endforeach;
}
