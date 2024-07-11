<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="p-3 mb-2 bg-info-subtle text-emphasis-info">
    
    <div class="container text-center">
  

    <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Whatsapp</th>
                <th>Data abertura</th>
                <th>Hora abertura</th>
                <th>Usuário criação</th>
                <th>Categoria</th>
                <th></th>
                <th></th>
            </tr>

            <tr>
                <?php

                include_once("conexao.php");
                include_once("verifica_login.php");
                include_once("components/nav.php");
                
                //consulta da tabela 
                $consulta = "SELECT * FROM chamados_dev ORDER BY data_abertura DESC";
                $resultado = mysqli_query($conn, $consulta);

                while ($dados = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . '<a href="alterar_chamado.php">' . $dados['id_chamado'] . '</a>' . "</td>";
                    echo "<td>" . $dados['titulo_chamado'] . "</td>";
                    echo "<td>" . $dados['descricao'] . "</td>";
                    echo "<td>" . $dados['whats'] . "</td>";
                    echo "<td>" . $dados['data_abertura'] . "</td>";
                    echo "<td>" . $dados['hora_abertura'] . "</td>";
                    echo "<td>" . $dados['usuario_abertura'] . "</td>";
                    echo "<td>" . $dados['categoria_chamado'] . "</td>";
                    echo "<td><a type='button' class='btn btn-primary' href='mover_chamado_sup.php?id=" . $dados['id_chamado'] . "'>Mover</a></td>";
                    echo "<td><a type='button' class='btn btn-success' href='responder_chamado.php?id=" . $dados['id_chamado'] . "'><i class='fa-solid fa-check'></i>Finalizar</a></td>";
                    echo "</tr>";
                }

                if($_SESSION['setor'] == 'administrador'){
                    echo "<a href=\"cad_usuario.php\">Cadastrar novo usuário </p>";
                }
                //pra verificar se a sessão está funcionando
                // echo $_SESSION['usuario']

                ?>
            </tr>
        </table>
    
        </div>  
</body>

</html>