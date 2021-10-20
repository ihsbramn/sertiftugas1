<?php

// $server = "127.0.0.1";
// $user = "root";
// $password = " ";
// $nama_database = "dbpus";

// $db = mysqli_connect($server, $user, $password, $nama_database);

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'dbpus';

$conn = mysqli_connect($host, $user, $pass, $db);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>

