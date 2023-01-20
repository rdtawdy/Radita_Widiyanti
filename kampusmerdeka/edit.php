<?php
include('config.php');

$id = $_GET['id'];
$nama = $_GET['nama_mh'];
$prodi = $_GET['prodi_mh'];
$semester = $_GET['s_mh'];
$kelas = $_GET['kls'];
$tahun= $_GET['t_mh'];

//query update
$query = "UPDATE mahasiswa SET nama='$nama', prodi='$prodi', semester='$semester', kelas='$kelas' , tahun='$tahun' WHERE id='$id' ";

if (mysqli_query($conn, $query)) {
 # credirect ke page index
 header("location:data_siswa.php");
 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>
