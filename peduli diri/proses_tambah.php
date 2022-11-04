<?php

    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $lokasi= $_POST['lokasi'];
    $suhu = $_POST['suhu_tubuh'];

    $database = new PDO("mysql:host=localhost;dbname=user", 'root', '');
    $query = $database->query("INSERT INTO `catatanperjalanan` VALUES(null,'$tanggal','$waktu','$lokasi','$suhu')");

    if($query){
        header("Location:catatan.php");
     }