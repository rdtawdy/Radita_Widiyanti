<?php
//add dbconnect

include('config.php');

$nama = $_POST['nama_mh'];
$prodi = $_POST['prodi_mh'];
$semester = $_POST['s_mh'];
$kelas = $_POST['kls'];
$tahun= $_POST['t_mh'];


//query

$query =  "INSERT INTO mahasiswa(nama, prodi, semester, kelas, tahun) VALUES('$nama' , '$prodi' , '$semester', '$kelas', '$tahun')";

if (mysqli_query($conn , $query)) {
 # code redicet setelah insert ke index
 header("location:data_siswa.php");
}
else{
 echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>
