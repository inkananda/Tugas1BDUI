<?php
include "../koneksi.php";
?>
<?php
$nik			= $_POST['nik'];
$nama_karyawan	= $_POST['nama_karyawan'];
$jabatan		= $_POST['jabatan'];
$tgl_masuk		= $_POST['tgl_masuk'];
$alamat			= $_POST['alamat'];
$query_insert= "INSERT INTO tb_karyawan
            (nik,nama_karyawan,jabatan,tgl_masuk,alamat)VALUES ('$nik',
        '$nama_karyawan',
        '$jabatan',
        '$tgl_masuk',
        '$alamat')";
$query_insert_ok =mysqli_query($connect,$query_insert);
if ($query_insert_ok){
	header("location:home.php?pesan=SuksesTambah");
}else{
	header("location:home.php?pesan=GagalTambah");
}
?> 
