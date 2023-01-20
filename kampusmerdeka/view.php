<?php
include("config.php");

$res=$koneksi->query ("SELECT * FROM mahasiswa WHERE id = $id"); 

if($res->num_rows){
    while($row=$res->fetch_assoc()){
        echo '
        <table class="table table-condensed table-striped">
            <tr>
                <th width="180"> Nama Mahasiswa</th>
                <th width="10">:</th>
                <td>'.$row['nm_mh'].'</td>
            </tr>
            <tr>
                <th width="150">Prodi</th>
                <th width="10">:</th>
                <td>'.$row['prodi_mh'].'</td>
            </tr>
            <tr>
                <th>Semester</th>
                <th>:</th>
                <td>'.$row['s_mh'].'</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <th>:</th>
                <td>'.$row['kls'].'</td>
            </tr>
            <tr>
                <th>Angkatan</th>
                <th>:</th>
                <td>'.$row['t_mh'].'</td>
            </tr>
            <tr>
                <th>Potongan</th>
                <th>:</th>
                <td>'.$row['potongan'].'</td>
            </tr>
            <tr>
                <th>Total</th>
                <th>:</th>
                <td>'.$row['total'].'</td>
            </tr>
            ';
    }
}else{
        echo 'Belum Ada Data';
}

?>
<a class="btn-primary btn-sm" href="data_siswa.php">Kembali</a></p>
</td>
</div>
</body>
</html>
