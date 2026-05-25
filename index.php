<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
	<style>
		body{ font-family: 'Segoe UI', sans-serif; background-color: #D8B4F8; display: flex; justify-content: center; padding-top:50px; }
		.from-card {background-color: white; padding: 30px; border-radius: 8px; box-shadow:40px 15px rgba(0,0,0,0.1); width: 350px;}
		h2 {text-align: center; color: #333; margin-bottom: :20px;}
		label {display: block; margin-bottom: 5px; color: #666; font-size: : 14px;}
		input[type="text"] {width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
		button:hover {width: 100%; padding: 10px; background-color: #CDE7FF; border: none; color: white; border-radius: 4px, cursor: pointer; font-size: 16px;}
		button:hover { background-color: #45a049; }
        .back-link { display: block; text-align: center; margin-top: 15px; text-decoration: none; color: #2196F3; font-size: 14px; }
    </style>
</head>
<body>
    <div class="from-card">
        <h2>Form Siswa</h2>
        <h3 align="center"> Al Maira </h3>
            <form method="POST" action="">
            <label> Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukkan Nama..." required>
            
            <label>Nomor HP</label>
            <input type="text" name="nohp" placeholder="Masukkan Nomor HP..." required>

            <label>Jurusan</label>
            <input type="text" name="jurusan" placeholder="Masukkan Jurusan..." required>

            <button type="submit" name="simpan">Simpan Data</button>
            <a href="tampil.php" class="back-link">Lihat Daftar Siswa</a>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $jurusan = $_POST['jurusan'];
    
    $query = "INSERT INTO tabel_siswa (nama, nohp, jurusan) VALUES ('$nama', '$nohp', '$jurusan')";
    
    mysqli_query($koneksi, $query);
    echo "Data berhasil masuk!";
}
?>