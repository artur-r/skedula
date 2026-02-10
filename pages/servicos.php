<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skedula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/custom.css">
</head>

<body class="bg-custom">


    <div class="container pt-5">
        <p class="display-7 bg-purple border border-primary p-1 text-light" style="border-radius:10px;">Agora. Selecione um serviço e um horário de sua disponibilidade</p>


        <form action="datas.php" method="GET">
           
            <ul>
                <?php

                include_once("../function/conexao.php");

                $sql = "SELECT *FROM servicos";
                $consulta = mysqli_query($conn, $sql);


                while ($resultado = mysqli_fetch_assoc($consulta)) {
                        echo "<li>
                    <input class='form-check-input' type='radio' id='inlineradio1' value=" . $resultado['nome_servico'] . " name='servico' required>
                    <label class='form-check-label' for='inlineradio1'>" . $resultado['nome_servico'] . "</label>
                </li>";
                }

                ?>

                <button type="submit" class="btn btn-primary">Avançar</button>
            </ul>
        </form>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <button type="button" class="btn btn-info"><a href="javascript:history.back()">Voltar</a></button>

</body>

</html>