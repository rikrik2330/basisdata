<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>


	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>EDIT DATA PEGAWAI</title>



	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<meta charset="utf-8">

</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-6">
	<h3 class="text-center">Edit Data pegawai</h3>
	<a class="btn btn-primary" href="pegawai.php" role="button">Kembali</a>

<?php



$id_db_pegawai = $_GET['id'];

	$query_nilai ="select * from tb_pegawai where no='$id_db_pegawai'";
	$query_nilai_ok = mysqli_query($connect, $query_nilai);
	if (!$query_nilai_ok){
		printf("eror: %s\n",mysqli_error($connect));
		exit();
	}

	while ($query_result = mysqli_fetch_array($query_nilai_ok))
	
	{ 

	$nik_ok = $query_result['nik'];
	$nama_pegawai_ok = $query_result['nama_pegawai'];
	$jabatan_ok = $query_result['jabatan'];
	$gaji_ok = $query_result['gaji'];
	$divisi_ok = $query_result['divisi'];


?>

	<form method="POST" action="">
		<div class="form-group">
		<label for="nik">NIK</label>
			<input type="text" class="form-control" name="nik" id="nik_ok" value="<?php echo $nik_ok;?>">
		</div>

		<div class="form-group">
		<label for="nama_pegawai">Nama pegawai</label>
			<input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai_ok" value="<?php echo $nama_pegawai_ok;?>">
		</div>

		<div class="form-group">
		<label for="jabatan">Jabatan</label>
			<input type="text" class="form-control" name="jabatan" id="jabatan_ok" value="<?php echo $jabatan_ok;?>">
		</div>

		<div class="form-group">
		<label for="tgl_masuk">Gaji</label>
			<input type="numeric" class="form-control" name="gaji" id="gaji_ok" value="<?php echo $gaji_ok;?>">
		</div>

		<div class="form-group">
		<label for="divisi">Divisi</label>
			<input type="text" class="form-control" name="divisi" id="divisi_ok" value="<?php echo $divisi_ok;?>">
		</div>

		<div>
		<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>

</div>
</div>

<?php
}

?>

<?php
if (isset($_POST['nik'])){

$nik	= $_POST['nik'];
$nama_pegawai	= $_POST['nama_pegawai'];
$jabatan		= $_POST['jabatan'];
$gaji	= $_POST['gaji'];
$divisi			= $_POST['divisi'];



$query_update= "
update tb_pegawai
set

	nik 			= '$nik',
	nama_pegawai 	= '$nama_pegawai',
	jabatan 		= '$jabatan',
	gaji 		= '$gaji',
	divisi 			= '$divisi'

	where no ='$id_db_pegawai'
	";

$query_update_ok = mysqli_query($connect, $query_update);
	
if ($query_update_ok){

	header("location:pegawai.php");
}else{

	header("location:pegawai.php");

}

}
else{
}
?>

</body>

</html>