<?php

    $nama = $_POST['nama'];
    $password = $_POST['password'];

    $database = new PDO("mysql:host=localhost;dbname=user", 'root', '');
    $query = $database->query("INSERT INTO user_from values('$nama','$password')");

    if($query){
        header("Location:index.php");
     }