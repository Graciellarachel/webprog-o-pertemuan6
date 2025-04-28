<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>

   <h3>Data Mahasiswa</h3>
   <a href="Insertdata.php">Tambah</a>

   <table>
    <thead>
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA</th>
        </tr>
    </thread>

    <tbody>
<?php
$sql = " SELECT NIM,NAMA FROM mhs;";
include_once("konfigurasi.php");
$res = mysqli_query($koneksi,$sql);

$no = 0;
while($row = mysqli_fetch_array($res)){
     $no++;

?>
        <tr>
            <td><?=$no?></td>
            <td><?=$row["NIM"]?></td>
            <td><?=$row["NAMA"]?></td>
            <td><a class="btn btn-warning" href="editdata.php?nim=<?=$row["NIM"]?>">ubah</a> | 
            <a class="btn btn-danger" href="editdata.php?nim=<?=$row["NIM"]?>">hapus</td>
        </tr>

<?php
}
?>
    </tbody>


   </tabel>
    
</body>
</html>