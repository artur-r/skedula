<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancelamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/custom.css">
</head>

<body class="bg-custom">


    <div class="container text-center">


        <?php

        include_once("../conexao.php");

        $email = $_GET['email'];
        $diaSemanaAgendado = $_GET['diaSemanaAgendado'];
        $mesAgendado =       $_GET['mesAgendado'];
        $horario =           $_GET['horario'];
        $diaMesAgendado =    $_GET['diaMesAgendado'];


        $sql = "DELETE FROM agenda WHERE email = '$email' AND dia_semana='$diaSemanaAgendado' AND mes='$mesAgendado' AND dia_mes='$diaMesAgendado' AND horario='$horario'";

        $deletar = mysqli_query($conn, $sql);

        if ($sql) {
            echo "
        
        <div class='container pt-5'>

           <p class='display-7 bg-purple border border-primary p-1 text-light' style='border-radius:10px;'>Agendamento cancelado com sucesso!</p>

         </div>";
        } else {
            echo "Falha ao cancelar";
        }






        ?>
    <button type="button" class="btn btn-info"><a href="../menu.php">Voltar</a></button>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

   
    </table>

</body>

</html>