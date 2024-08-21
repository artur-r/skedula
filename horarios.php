<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Skedula</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/custom.css">
</head>

<body class="bg-custom">


  <div class="container pt-5">


    <div class="d-grid gap-3 col-6 mx-auto">
      <?php

      include_once("conexao.php");

      date_default_timezone_set('America/Sao_Paulo');
      $ano = $_GET['ano'];
      $mes = $_GET['mes'];
      $diaAtualSemana = $_GET['diaAtualSemana']; //pega da URL o dia da semana do botão selecionado
      $diaMes = $_GET['diaMes'];
      $servico = $_GET['servico'];
      $data = $_GET['data'];


      $sql = "SELECT * FROM agenda WHERE (dia_mes = '$diaMes' AND dia_semana = '$diaAtualSemana' AND mes='$mes' AND ano='$ano')";


      //executa a consulta
      $consulta = mysqli_query($conn, $sql);

      //coloca a consulta dentro de um array
      while ($resultado = mysqli_fetch_assoc($consulta)) {
        //coloca o resultado de cada horário dentro de um vetor
        $horariosAgendados[] = $resultado['horario'];
      }

      $i = 8;


      //Verifica se o resultado da consulta está vazio, pois senão, os botões só seriam gerados se tivesse algo já agendado
      if (empty($horariosAgendados)) {
        for ($i = 8; $i < 18; $i++) {
          //Gera botões com horários
          echo "<button type='button' class='btn btn-primary' horario='$i'>
            $i:00
              </button>";
          if ($i == 11) {
            $i = 12;
          }
        }
      } else {

        for ($i = 8; $i < 18; $i++) {
          //verifica se a variável i é um horário já agendado, se o valor de i, não estiver agendado, gera um botão
          if (!in_array($i, $horariosAgendados)) {
            echo "<button type='button' class='btn btn-primary' horario='$i'>
           
                $i:00
      
              </button>";
            if ($i == 11) {
              $i = 12;
            }
          }
        }
      }


      ?>

    </div>


    <script>
      $(document).ready(function() {
        $('button').click(function() {
          var horario = $(this).attr('horario');
          var url = 'function/agendar.php?diaAtualSemana=<?php echo $diaAtualSemana;
           ?>&diaMes=<?php echo $diaMes;
           ?>&mes=<?php echo $mes;
           ?>&ano=<?php echo $ano;
           ?>&servico=<?php echo $servico;
           ?>&horario=' + horario + '&data=<?php echo $data; ?>'

          alert('botão clicado' + horario)

          window.location=url

        });
      });
    </script>


    <button type="button" class="btn btn-info"><a href="javascript:history.back()">Voltar</a></button>

</body>

</html>