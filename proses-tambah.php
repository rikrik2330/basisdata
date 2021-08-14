<?php
include "../koneksi.php";
?>

<?php

$nik			= $_POST['nik'];
$nama_pegawai= $_POST['nama_pegawai'];
$jabatan		= $_POST['jabatan'];
$gaji	= $_POST['gaji'];
$divisi			= $_POST['divisi'];

$query_insert= "INSERT INTO tb_pegawai
            (nik,nama_pegawai,jabatan,gaji,divisi)VALUES ('$nik',
        '$nama_pegawai',
        '$jabatan',
        '$gaji',
        '$divisi')";


$query_insert_ok =mysqli_query($connect,$query_insert);


if ($query_insert_ok){
	
	header("location:pegawai.php?pesan=SuksesTambah");
}else{
	header("location:pegawai.php?pesan=GagalTambah");
}

?> 