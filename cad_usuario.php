<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require_once('config.php');
include_once("conexao.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$hash = password_hash($senha,PASSWORD_DEFAULT);
$setor = $_POST['setor'];

$sql = "INSERT INTO usuarios (login, senha, setor)
        VALUES ('$usuario', '$hash', '$setor')";
        if (mysqli_query($conn, $sql)) {
            echo "<script> alert('Usuário cadastrado com sucesso') </script>";
            header("Refresh: 0; cad_usuario_form.php");
      } else {
            echo "Erro ao cadastrar chamado: " . $sql . "<br>" . mysqli_error($conn);
      }




mysqli_close($conn);

?>