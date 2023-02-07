<?php
$server   = "localhost";
$username = "root";
$password = "";
$database = "db_surat1";

$db = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if (!$db) {
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}

$id	        = mysqli_real_escape_string($db,$_POST['id_buku']);

$sql = "INSERT INTO tb_suratmasuk(tanggalmasuk_suratmasuk, kode_suratmasuk, nomorurut_suratmasuk, nomor_suratmasuk, tanggalsurat_suratmasuk, pengirim, kepada_suratmasuk, perihal_suratmasuk, file_suratmasuk, tanggal_entry)
				values ('$tgl_masuk', '$kode_suratmasuk', '$nomorurut_suratmasuk ', '$nomor_suratmasuk', '$tgl_surat', '$pengirim', '$kepada_suratmasuk', '$perihal_suratmasuk', '$nama_baru', '$tanggal_entry')";
		$execute = mysqli_query($db, $sql);
		
		echo "<Center><h2><br>Terima Kasih<br>Surat masuk Telah Dimasukkan</h2></center>
			<meta http-equiv='refresh' content='2;url=../datasuratmasuk.php'>";
?>