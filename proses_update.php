<?php
// pemanggilan configuration koneksi.php
require_once 'koneksi.php';
// if isset akan menolak variabel jika text field tidak didefinisikan/NULL
if (isset($_POST['submit'])) {
  $id = $_POST['id_ktm'];
  $a_fakultas = $_POST['asal_fakultas'];
  $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];

  // update semua isi data berdasarkan id_ktm yg dikirimkan
  $q = $conn->query("UPDATE users SET asal_fakultas = '$a_fakultas', f_name = '$f_name', l_name = '$l_name' WHERE id_ktm = '$id'");

  if ($q) {
    // pop-up pesan jika data berubah
    echo "<script>alert('Data produk berhasil diubah'); window.location.href='index.php'</script>";
  } else {
    // pop-up pesan jika data gagal diubah
    echo "<script>alert('Data produk gagal diubah'); window.location.href='index.php'</script>";
  }
} else {
  // pop-up jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}
