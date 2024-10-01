<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skedula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/custom.css">
</head>

<body class="bg-custom">


    <div class="container pt-5">


    <div class="d-grid gap-3 col-6 mx-auto">
        <?php

        include_once("../conexao.php");

        $ano = $_GET['ano'];
        $mes = $_GET['mes'];
        $diaAtualSemana = $_GET['diaAtualSemana'];
        $diaMes = $_GET['diaMes'];
        $servico = $_GET['servico'];
        $horario = $_GET['horario'];
        
        $data = $_GET['data'];
      
        

        $usuario = $_SESSION['usuario'];
        $email = $_SESSION['email'];





        $sql = mysqli_query($conn,"INSERT INTO agenda (cliente, email, servico, horario, dia_semana, dia_mes, mes, ano, data)
                        VALUES  ('$usuario','$email','$servico','$horario','$diaAtualSemana','$diaMes','$mes','$ano','$data')");


      
            if ($sql) {
                echo "Agendamento Concluído";
            }else{
                echo "Falha ao agendar";
            }
            



        ?>


        

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <button type="button" class="btn btn-info"><a href="../menu.php">Voltar</a></button>

</body>

</html>