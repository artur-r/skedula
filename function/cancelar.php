<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancelamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/custom.css">
</head>

<body class="bg-custom">


    <div class="container text-center">


    <?php

    include_once("../conexao.php");

    $email=$_GET['email'];
    $diaSemanaAgendado = $_GET['diaSemanaAgendado'];
    $mesAgendado =       $_GET['mesAgendado'];
    $horario =           $_GET['horario'];
    $diaMesAgendado =    $_GET['diaMesAgendado'];


    $sql = "DELETE FROM agenda WHERE email = '$email' AND dia_semana='$diaSemanaAgendado' AND mes='$mesAgendado' AND dia_mes='$diaMesAgendado' AND horario='$horario'";

    $deletar = mysqli_query($conn, $sql);

    if ($sql) {
        echo "Agendamento cancelado com sucesso!";
    }else{
        echo "Falha ao cancelar agendamento";
    } 





    
    ?>
   
    </div>
        

</table>

</body>

</html>