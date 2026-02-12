<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviço Cadastrado</title>
    <link rel="stylesheet" href="../assets/custom.css">
</head>
<body id="cadServicoBackground">
    
</body>
</html>


<?php

include_once("conexao.php");

$nomeServico = $_POST['nomeServico'];
$duracao = $_POST['duracao'];
$preco = $_POST['precoservico'];

//Definição do caminho da imagem para subir no bd
if(isset($_FILES["imagem"]) && !empty($_FILES["imagem"])){

move_uploaded_file($_FILES["imagem"]["tmp_name"], "../img/".$_FILES["imagem"]["name"]);//pega o arquivo e coloca dentro da pasta imagem
$imagem = "./img/".$_FILES["imagem"]["name"];//cria a variável com caminho que vai subir pro banco de dados


}else{
    $imagem = "sem imagem";
}




$sql = mysqli_query($conn, "INSERT INTO servicos (nome_servico, duracao, preco, imagem_servico) VALUES ('$nomeServico', '$duracao', '$preco', '$imagem')");

if ($sql) {
    echo "
                
                <div class='container pt-5'>

                   <p class='display-7 border border-primary p-1 text-light' style='border-radius:10px;'>Cadastro de serviço concluído.</p>

                 </div>";
} else {
    echo "Falha ao cadastrar";
}
