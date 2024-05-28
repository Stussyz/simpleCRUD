<?php
// pemanggilan configuration koneksi.php
require_once 'koneksi.php';
// data yang telah di input pada masing2 text field akan di post ke table database
if (isset($_POST['submit'])) {
  $id_ktm = $_POST['id_ktm'];
  $a_fakultas = $_POST['asal_fakultas'];
  $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
// ini relasi ke database agar data di input ke dalam isi table "users"
  $q = $conn->query("INSERT INTO users VALUES ('$id_ktm', '$a_fakultas', '$f_name', '$l_name')");

  if ($q) {
    // pop-up pesan jika data tersimpan
    echo "<script>alert('Data produk berhasil ditambahkan'); window.location.href='index.php'</script>";
  } else {
    // pop-up pesan jika data gagal disimpan
    echo "<script>alert('Data produk gagal ditambahkan'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}
