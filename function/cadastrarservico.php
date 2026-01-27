<?php

include_once("conexao.php");

$nomeServico = $_POST['nomeServico'];
$duracao = $_POST['duracao'];
$preco = $_POST['precoservico'];

echo "$nomeServico, $duracao, $preco";

$sql = mysqli_query($conn, "INSERT INTO servicos (nome_servico, duracao, preco) VALUES ('$nomeServico', '$duracao', '$preco')");

if ($sql) {
    echo "
                
                <div class='container pt-5'>

                   <p class='display-7 bg-purple border border-primary p-1 text-light' style='border-radius:10px;'>Cadastro de serviço concluído.</p>

                 </div>";
} else {
    echo "Falha ao cadastrar";
}
