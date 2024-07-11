<?php
$server   = "localhost";
$user     = "root";
$password = "";
$dbname   = "sistema";


$conn = mysqli_connect($server, $user, $password, $dbname);
// Checa conexão
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
