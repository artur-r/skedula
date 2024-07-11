<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

include_once("conexao.php");
session_start();

$usuario    = $_POST['usuario'];
$senha      = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE login = '$usuario'";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    $retorno = $result->fetch_assoc();
    if (password_verify($senha, $retorno['senha'])) {
        $_SESSION['usuario']        = $retorno['login'];
        $_SESSION['cod_usuario']    = $retorno['id'];
        $_SESSION['setor']          = $retorno['setor'];
        $mensagem = "Usuario logado com sucesso.";
    }else{
        $mensagem = "Senha Invalida.";
    }
}else{
    $mensagem = "Nenhum usuario encontrado.";
}
mysqli_close($conn);

echo $mensagem;
if(!empty($_SESSION['usuario'])){
    echo '<a href="index.php">Acessar Sistema</a>';
}else{
    echo '<a href="login.php">Voltar ao Login</a>';
}

?>

</html>