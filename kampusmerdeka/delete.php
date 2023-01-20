<?php 

$id = $_GET['id'];

//include(dbconnect.php);
include('config.php');

//query hapus
$query = "DELETE FROM mahasiswa WHERE id = '$id' ";

if (mysqli_query($conn , $query)) {
 # redirect ke index.php
 header("location:data_siswa.php");
}
else{
 echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($conn);
?>
