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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nomor Buku <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="id_buku" name="id_buku" required="required" placeholder="Masukkan Asal/Pengirim Surat" class="form-control col-md-7 col-xs-12">
                            </div>
    </div>                        

    <div class="form-group">
            <button type="submit" name="input" value="Simpan" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Simpan</button>
    </div>
</form>