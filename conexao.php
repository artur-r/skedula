<?php 
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "skedula";


$conn = mysqli_connect($server, $user, $pass, $dbname);
//checa conexão
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}

session_start();