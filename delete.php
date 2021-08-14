<?php<?php
include "pegawai.php";

$id_db_pegawai = $_GET['id'];

$query_delete = "delete from tb_pegawai where no= '$id_db_pegawai'";

$query_delete_ok = mysqli_query($connect,$query_delete);



?>