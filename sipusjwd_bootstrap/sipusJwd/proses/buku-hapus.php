<?php
include'../koneksi.php';
$id_buku=$_GET['id'];

$sql = 
"DELETE FROM tbbuku
WHERE idbuku='$id_buku'";

header("location:../index.php?p=buku");
?>