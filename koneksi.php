<?php
$koneksi = mysqli_connect("localhost","root", "", "alma");
if (!$koneksi) {
	die("Koneksi ke Gudang Data Gagal: " . mysqli_connect_error());
}
?>