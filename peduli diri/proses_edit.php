<?php

$id = $_GET["id"];
$nik = $_POST['nik'];
$password = $_POST['password'];


$db = new PDO("mysql:host=localhost;dbname=user", 'root', '');
$query = $db->query("UPDATE `user_form` SET nama='$nik',password='$password' where id='$id'");

if($query){
    header("location:index.php");
}