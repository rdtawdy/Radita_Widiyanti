<!DOCTYPE html>
<html lang="en">
<head>
 <title>Daftar Mahasiswa</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 <script src="js/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$id = $_GET['id']; 
//koneksi database
include('config.php');
//query
$query = "SELECT * FROM mahasiswa WHERE id='$id'";
$result = mysqli_query($conn, $query);
?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
 <h3>Update Data Mahasiswa</h3>
 <form role="form" action="edit.php" method="get">
 <?php
 while ($row = mysqli_fetch_assoc($result)) {
 ?>

 <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

 <div class="form-group">
    <label>Nama Mahasiswa</label>
    <input type="text" name="nama_mh" class="form-control" value="<?php echo $row['nama']; ?>">   
 </div>
 <div class="form-group">
    <label>Prodi</label>
    <input type="text" name="prodi_mh" class="form-control" value="<?php echo $row['prodi']; ?>">   
 </div>
 <div class="form-group">
    <label>Semester</label>
    <input type="text" name="s_mh" class="form-control" value="<?php echo $row['semester']; ?>">   
 </div>
 <div class="form-group">
    <label>Kelas</label>
    <input type="text" name="kls" class="form-control" value="<?php echo $row['kelas']; ?>">   
 </div>
 <div class="form-group">
    <label>Angkatan</label>
    <input type="text" name="t_mh" class="form-control" value="<?php echo $row['tahun']; ?>">   
 </div>
 <button type="submit" class="btn btn-success btn-block">Update Mahasiswa</button>

 <?php 
 }
 mysqli_close($conn);
 ?>    
 </form>
</div>
</body>
</html>