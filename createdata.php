<?php
    include_once("konfigurasi.php");
    if(!isset($_POST["SIMPANDATA"])){
        die();
    }
#kalau tidak ada ! maka page ini diakses ya stop

    $txNIM = $_POST["NIM"];
    $txNAMA = $_POST["NAMA"];
    $txALAMAT = $_POST["ALAMAT"];
    $txTGL = $_POST["TGL_LAHIR"];
    $txJK = $_POST["JENISKEL"];

    $sql = "INSERT INTO mhs(NIM, NAMA, ALAMAT, TGL_LAHIR, JENISKEL) VALUES ('$txNIM', '$txNAMA', '$txALAMAT', '$txTGL', '$txJK');";

    $res = mysqli_query($koneksi, $sql);
    if(!$res){
        die("Penambahan data gagal");
    }

    echo "Penambahan data sukses";

    mysqli_close($koneksi);