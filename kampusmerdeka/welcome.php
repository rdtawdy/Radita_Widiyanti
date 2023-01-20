<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylenav.css">
    <link rel="stylesheet" href="styletab.css">
    <title>Sistem Pengolaan Data Mahasiswa</title>
</head>
<body>
    <div class="fContainer">
        <nav class="wrapper">
            <div class="brand">
                <div class="firstname">Sistem</div>
                <div class="lastname"> Pengelolaan Data Mahasiswa</div>
            </div>
            <ul class="navigation">
                <li><a href="welcome.php" class="active">Home</a></li>
                <li><a href="data_siswa.php">Data Siswa</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><img src="gif.jpg" alt="..."></li>

            </ul>
        </nav>
    </div>

                <center><img src="logo.png" style=padding:30px;width:150px;height:150px;></center>            
                <h4 style="padding:10px;color:#004080"><center>Informasi Sekolah</h4></center>

                <table class="table1" style="margin-left:auto;margin-right:auto;" border="1">
                    <tr>
                        <th>Nama Universitas</th>
                        <td>UNIVERSITAS DIPA MAKASSAR</td>
                    </tr>
                        <th>Profil Kampus</th>
                        <td>Universitas Dipa Makassar berdiri pada tanggal 7 Juli 1994 berdasarkan Surat Keputusan Menteri Pendidikan dan Kebudayaan 
                            dengan status terdaftar. Pada awal berdirinya, hanya memiliki dua program studi pada saat itu. Seiring perkembangan zaman, 
                            STMIK Dipanegara akhirnya berubah Bentuk Menjadi Universitas Dipa Makassar Pada tahun 2021.</td>
                    </tr> 
                        <th>Jenjang</th>
                        <td>S1/Diploma III</td>
                    </tr>
                        <th>Jurusan</th>
                        <td><li>Sistem Informasi</li>
                        <li>Teknik Informatika</li>
                        <li>Rekayasa Perangkat Lunak</li>
                        <li>Bisnis Digital</li>
                        <li>Kewirausahaan </li>
                        <li>Manajemen Informatika </li></td>
                    </tr>
                        <th>Akreditas</th>
                        <td>Akreditasi B</td>
                    </tr>
                        <th>Alamat</th>
                        <td>Jl. Perintis Kemerdekaan No.KM.9, Kota Makassar, Sulawesi Selatan</td>
                    </tr>
                    
                </table>	
                        
                
    <footer>
        <div class="footer-bottom">
            <p>copyright &copy;2023 Sistem Pengelolaan Data Mahasiswa. designed by <span>Radita</span></p>
        </div>
    </footer>

</body>
</html>
