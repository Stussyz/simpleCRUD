<?php
// pemanggilan configuration koneksi.php
require_once 'koneksi.php';

// cek id dengan menggunakan method get
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // perintah hapus seluruh isi data berdasarkan id yang dikirimkan
  $q = $conn->query("DELETE FROM users WHERE id_ktm = '$id'");

  // cek perintah
  if ($q) {
    // pop-up pesan apabila hapus berhasil
    echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php'</script>";
  } else {
    // pop-up pesan apabila hapus gagal
    echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php'</script>";
  }
} else {
  // pop-up jika mencoba akses langsung ke file ini akan diredirect ke halaman index
  header('Location:index.php');
}
