<?php
include 'koneksi.php';
$id = $_GET ['id'];
mysqli_query($koneksi, "DELETE FROM tabel_siswa WHERE id='$id'");
header ("location:tampil.php"); //Otomatis kembali ke daftar
?>