<?php
include('koneksi.php');

$id = $_GET['id'];

$db = new PDO("mysql:host=localhost;dbname=user", 'root', '');
$query = $db->query("DELETE FROM catatanperjalanan WHERE id='$id'");

if($query){
    header("location:catatan.php");
}
?>
