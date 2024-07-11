<?php
include_once("conexao.php");
session_start();


if (isset($_GET['id'])) {
    $id_chamado = $_GET['id'];

    // Buscar dados do chamado
    $consulta = "SELECT * FROM chamados_dev WHERE id_chamado = $id_chamado";
    $resultado = mysqli_query($conn, $consulta);


    //novos dados para tabela de finalizados
    $usuario = $_SESSION['usuario'];

    $resolucao = $_POST['resolucao'];

    date_default_timezone_set("America/Sao_Paulo");
    $data = date('d/m/Y');
    $hora = date('G:i:s T');


    if ($dados = mysqli_fetch_assoc($resultado)) {
        // Inserir dados na tabela chamados_finalizados
        $sql = "INSERT INTO chamados_finalizados (id_chamado, titulo_chamado, descricao, whats, data_abertura, hora_abertura, usuario_abertura, categoria_chamado, data_fechamento, hora_fechamento, usuario_fechamento, 'resolucao')
                VALUES ('{$dados['id_chamado']}', '{$dados['titulo_chamado']}', '{$dados['descricao']}', '{$dados['whats']}', '{$dados['data_abertura']}', '{$dados['hora_abertura']}', '{$dados['usuario_abertura']}', '{$dados['categoria_chamado']}','$data', '$hora', '$usuario', '$solucao')";
        
        if (mysqli_query($conn, $sql)) {
            // Remover o chamado da tabela chamados
            $sql_delete = "DELETE FROM chamados_dev WHERE id_chamado = $id_chamado";
            mysqli_query($conn, $sql_delete);
            echo "Chamado finalizado com sucesso.";
        } else {
            echo "Erro ao finalizar chamado: " . mysqli_error($conn);
        }
    } else {
        echo "Chamado não encontrado.";
    }
}



mysqli_close($conn);
?>