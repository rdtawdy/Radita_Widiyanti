<!DOCTYPE html>
<html lang="en">
<head>
 <title>Data Mahasiswa</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="stylenav.css">
 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 <script src="js/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

</head>
<body>

 <?php
 //tambahkan dbconnect
 include('config.php');

 //query
 $query = "SELECT * FROM mahasiswa";

 $result = mysqli_query($conn , $query);

 ?>

 <div style="stylenav">
            <div class="brand">
            </div>
            <ul class="navigation">
                <li><a href="welcome.php" class="active">Home</a></li>
                <li><a href="data_siswa.php">Data Siswa</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><img src="gif.jpg" alt="..."></li>
            </ul>
        </nav>
    </div>
<div class="container bg-info" style="padding-top: 0px; padding-bottom: 20px;">
  <h3>Daftar Mahasiswa</h3>
  <hr>
  <div class="row">
   <div class="col-sm-4">
    <h3>Tambah Mahasiswa</h3>
    <form role="form" action="insert.php" method="post">
        <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama_mh" class="form-control">
        </div>
        <div class="form-group">
            <label>Prodi</label>
            <input type="text" name="prodi_mh" class="form-control">
        </div>
        <div class="form-group">
            <label>Semester</label>
            <input type="text" name="s_mh" class="form-control">   
        </div>
        <div class="form-group">
            <label>Kelas</label>
            <input type="text" name="kls" class="form-control">   
        </div>
        <div class="form-group">
            <label>Angkatan</label>
            <input type="text" name="t_mh" class="form-control">
        </div>
        <button type="submit" class="btn btn-info btn-block">Tambah Mahasiswa</button>
    </form>
    
   </div>
   <div class="col-sm-8">
    <h3>Tabel Daftar Mahasiswa</h3>
    <table class="table table-striped table-hover dtabel">
     <thead>
      <tr>
       <th>No</th>
       <th>Nama </th>
       <th>Prodi</th>
       <th>Sm</th>
       <th>Kelas</th>
       <th>Angkatan</th>
       <th>Aksi</th>
      </tr>
     </thead>
     <tbody> 
      
      <?php
       $no = 1;  
       while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
       <td><?php echo $no++; ?></td>
       <td><?php echo $row['nama']; ?></td>
       <td><?php echo $row['prodi']; ?></td>
       <td><?php echo $row['semester']; ?></td>
       <td><?php echo $row['kelas']; ?></td>
       <td><?php echo $row['tahun']; ?></td>
       <td>
        <a href="editform.php?id=<?php echo $row['id'];?>" class="btn btn-success" role="button">Edit</a>
        <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger" role="button">Delete</a>
        <a href="view.php?id=<?php echo $row['id']?>" class="btn btn-primary" role="button">View</a>
       </td>
      </tr>

      <?php
       }
       mysqli_close($conn); 
      ?>
     </tbody>
    </table>
   </div>
  </div>
 </div>
</body>

 <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
 <script>
 $(document).ready(function() {
  $('.dtabel').DataTable();
 } );
 </script>

</html>