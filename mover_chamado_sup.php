<?php
include_once("conexao.php");

if (isset($_GET['id'])) {
    $id_chamado = $_GET['id'];

    // Buscar dados do chamado
    $consulta = "SELECT * FROM chamados_dev WHERE id_chamado = $id_chamado";
    $resultado = mysqli_query($conn, $consulta);


    //novos dados para tabela de finalizados
    $usuario = "teste";

 

    if ($dados = mysqli_fetch_assoc($resultado)) {
        // Inserir dados na tabela chamados_finalizados
        $sql = "INSERT INTO chamados (id_chamado, titulo_chamado, descricao, whats, data_abertura, hora_abertura, usuario_abertura, categoria_chamado, setor)
                VALUES ('{$dados['id_chamado']}', '{$dados['titulo_chamado']}', '{$dados['descricao']}', '{$dados['whats']}', '{$dados['data_abertura']}', '{$dados['hora_abertura']}', '{$dados['usuario_abertura']}', '{$dados['categoria_chamado']}', 'suporte')";
        
        if (mysqli_query($conn, $sql)) {
            // Remover o chamado da tabela chamados
            $sql_delete = "DELETE FROM chamados_dev WHERE id_chamado = $id_chamado";
            mysqli_query($conn, $sql_delete);
            echo "<script> alert('Chamado movido com sucesso') </script>";
            header("Refresh: 0; chamados_dev.php");
        } else {
            echo "Erro ao mover chamado: " . mysqli_error($conn);
        }
    } else {
        echo "Chamado não encontrado.";
    }
}


mysqli_close($conn);
?>
<a href="index.php">Voltar para o sistema</a>

