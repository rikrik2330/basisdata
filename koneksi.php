<?php

$dbhost	= 'localhost';
$dbuser	= 'root';

$dbpass	= '';
$dbname	= 'db_pegawai'; /*Database powered By Untoro*/

$connect = new mysqli ($dbhost,$dbuser,$dbpass,$dbname);

if ($connect->connect_error) {
	die ('Mohon maaf koneksi gagal:'. $connect->connect_error);

}


?>