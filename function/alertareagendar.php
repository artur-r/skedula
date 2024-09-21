<?php 

include_once '../conexao.php';


date_default_timezone_set('America/Sao_Paulo');

$usuario = $_SESSION['usuario'];
$dataMinima =  date('Y-m-d');


$sql = "SELECT * FROM agenda WHERE cliente = '$usuario' AND data = '$dataMinima' OR cliente = '$usuario' AND data > '$dataMinima' ";

$consulta = mysqli_query($conn, $sql);

while($resultado = mysqli_fetch_array($consulta)){
    echo $resultado['cliente'];
    echo $resultado['data'];
    echo "<br>";
}

