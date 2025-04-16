<?php
    include_once("konfigurasi.php");

    $sql = "INSERT INTO mhs(NIM, NAMA, ALAMAT, TGL_LAHIR, JENIS_KELAMIN) VALUES ('1122331122', 'kimja', 'Jl. Tukad Pakerisan', '1999-01-01', 'P');";

    $res = mysqli_query($koneksi, $sql);
    if(!$res){
        die("Penambahan data gagal");
    }

    echo "Penambahan data sukses";

    mysqli_close($koneksi);