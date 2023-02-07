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
?>

<form action="proses.php"  name="formsuratmasuk" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
    <div class="form-group">
                           
    </div>                        

    <div class="form-group">
            <button type="submit" name="input" value="Simpan" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Simpan</button>
    </div>
</form>