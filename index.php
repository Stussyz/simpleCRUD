<?php
// panggil koneksinya
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Fadhol DEV</title>
  <!-- INI LINK RELATION KE STYLE.CSS SEBAGAI DESAIN INDEX.PHP -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- INI LINK PEMANGGILAN FONT PADA GOOGLE -->
  <link href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body>
  <!-- INI FORM BENTUK CARD -->
  <div id="card">
  <div id="card-title">
    <h2>INPUT DATA</h2>
  </div>
  <div class="underline-title">
  </div>
  <br>
  <br>
  <!--DISINI ACTION ADD.PHP BERGUNA UNTUK MENAMBAHKAN/UPDATE DATA BARU LALU DI INPUT KE DATABASE-->
  <!-- FORM METHOD DIATUR KE POST AGAR DATA YANG BARU DIBUAT DAPAT DIPOSTING KE DATABASE MELALUI JALUR ADD.PHP -->
  <form method="post" action="add.php">
    <label for="id_ktm">Nomor KTM</label>
    <input type="number" name="id_ktm" placeholder="Id KTM"><br><br>

    <label for="asal_fakultas">Fakultas</label>
    <input type="text" name="asal_fakultas" placeholder="Asal Fakultas"><br><br>

    <label for="f_name">First Name</label>
    <input type="text" name="f_name" placeholder="First Name"><br><br>

    <label for="l_name">Last Name</label>
    <input type="text" name="l_name" placeholder="Last Name"><br><br><br>

    <center><input type="submit" name="submit" value="Tambah Data"></center>
  </form>
  </div>
  <br/>

  <!-- DISINI FORMAT TABLE SAMA YG DENGAN TABLE DATABASE UNTUK WADAH SAAT DILAKUKAN PEMANGGILAN DATA-->
<center>
<table style="background-color:#52b788" border="1">
      <tr style="background-color:#1b4332; color:#ffffff;">
      <th>No.</th>
      <th>ID KTM</th>
      <th>Asal Fakultas</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th colspan="2">Aksi</th>
      </tr>
</center>
    <?php

    // MENAMPILKAN SEMUA DATA YANG TERSIMPAN PADA ikidatabase > Table 'users'
    $q = $conn->query("SELECT * FROM users");

    $no = 1; // NOMOR URUT DATA
    while ($dt = $q->fetch_assoc()) :
    ?>
<!-- DISINI PROSES READING DAN PEMANGGILAN DATA PADA DATABASE -->
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $dt['id_ktm'] ?></td>
      <td><?= $dt['asal_fakultas'] ?></td>
      <td><?= $dt['f_name'] ?></td>
      <td><?= $dt['l_name'] ?></td>
      <td><a href="update.php?id=<?= $dt['id_ktm'] ?>">Ubah</a></td>
      <td><a href="delete.php?id=<?= $dt['id_ktm'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>

    <?php
    endwhile;
    ?>

  </table>
</body>
</html>
