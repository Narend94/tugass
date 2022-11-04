<?php
include('koneksi.php');

$nik = $_GET['nik'];

$db = new PDO("mysql:host=localhost;dbname=user", 'root', '');
$query = $db->query("DELETE FROM user_form WHERE nama='$nik'");

if($query){
    header("location:index.php");
}
?>