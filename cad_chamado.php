<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>



<?php

include_once("conexao.php");

session_start();

$titulo = $_POST['tituloChamado'];
$descricao = $_POST['descricao'];
$whats = $_POST['whats'];
$usuario = $_SESSION['usuario'];
$categoria = $_POST['categoria'];
$setor = $_SESSION['setor'];



date_default_timezone_set("America/Sao_Paulo");
$data = date('d/m/Y');
$hora = date('G:i:s T');

//apenas para testar se data e hora está funcionando
// echo "$hora <br> $data";


$sql = "INSERT INTO chamados (titulo_chamado, descricao, whats, data_abertura, hora_abertura, usuario_abertura, categoria_chamado, setor)
        VALUES ('$titulo', '$descricao', '$whats', '$data', '$hora', '$usuario', '$categoria', '$setor')";
        if (mysqli_query($conn, $sql)) {
            echo "Chamado cadastrado com sucesso";
      } else {
            echo "Erro ao cadastrar chamado: " . $sql . "<br>" . mysqli_error($conn);
      }



mysqli_close($conn);

?>

    <a href="index.php">Voltar para o sistema</a>



</html>