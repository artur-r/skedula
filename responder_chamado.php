<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>


<body>

  <form action="finalizar_chamado.php>" method="get">
    <div id="personal" style="width: 60%; margin-left: 30%;">
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" style="width: 60%;">Resolver Chamado:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="width: 100%;" name="resolucao" required></textarea>
        </div>
        <input type="submit" value="Finalizar">
    </div>
</form>


    <!-- Scripts -->
    <script src="<?= (BASE_URL . 'assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>






    <?php

    // include_once("conexao.php");

    // $idChamado = $_GET['id'];
    // $resolucao =

    //     $sql = "SELECT * FROM chamados WHERE id_chamado = $idChamado";
    // $result = $conn->query($sql);

    // if (mysqli_num_rows($result) > 0) {
    //     $sql = "UPDATE chamados SET resolucao = '$novo_nome', descricao = '$nova_descricao' WHERE id_chamado = $id_chamado";
    //     if (mysqli_query($conn, $sql)) {
    //         echo "Chamado cadastrado com sucesso";
    //     } else {
    //         echo "Erro ao cadastrar chamado: " . $sql . "<br>" . mysqli_error($conn);
    //     }
    // };
    ?>
</body>

</html>