<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Skedula</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/custom.css">
</head>

<body class="bg-success-subtle">

  <form action="">
    <div class="container pt-5">
      <p class="display-7 bg-purple border border-primary p-1 text-light" style="border-radius:10px;">Perfeito! Primeiro, selecione o dia desejado</p>

      <?php

      date_default_timezone_set('America/Sao_Paulo');

      $mes = date('M');
      $diaMes = date('d');
      $diaSemana = date('D');

      //Pega o dia da semana em inglês, e troca por uma string contendo o nome do dia em português
      switch ($diaSemana) {
        case 'Sun':
          $diaSemana = "Domingo";
          break;
        case 'Mon';
          $diaSemana = "Segunda-feira";
          break;
        case 'Tue';
          $diaSemana = "Terça-feira";
          break;
        case 'Wed';
          $diaSemana = "Quarta-feira";
          break;
        case 'Thu';
          $diaSemana = "Quinta-feira";
          break;
        case 'Fri';
          $diaSemana = "Sexta-feira";
          break;
        case 'Sat';
          $diaSemana = "Sábado";
          break;
      }

      //Pega o mês em inglês, e troca por uma string contendo o nome do mês em português
      switch ($mes) {
        case 'Jan':
          $mes = "Janeiro";
          break;
        case 'Feb';
          $mes = "Fevereiro";
          break;
        case 'Mar';
          $mes = "Março";
          break;
        case 'Apr';
          $mes = "Abril";
          break;
        case 'May';
          $mes = "Maio";
          break;
        case 'June';
          $mes = "Junho";
          break;
        case 'July';
          $mes = "Julho";
          break;
        case 'Aug';
          $mes = "Agosto";
          break;
        case 'Sept';
          $mes = "Setembro";
          break;
        case 'Oct';
          $mes = "Outubro";
          break;
        case 'Nov';
          $mes = "Novembro";
          break;
          case 'Dec';
          $mes = "Dezembro";
          break;
      }

      $diaMesFim = $diaMes + 15;

    //   echo   "<table>
    //   <tr>
    //     <td><button>$diaSemana $mes teste</button></td>
    //   </tr>
    // </table>";

      $arrayDiaSemana = array("Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado");

      while ($diaSemana == $arrayDiaSemana) {
        echo "<p>$diaSemana, $arrayDiaSemana</p>";
        $arrayDiaSemana++;
      }

      while ($diaMes <= $diaMesFim) { //enquanto o dia do mês for menor que 15 adiciona os botões de dia para agendamento, até gerar 16 botões
        echo "<button type='button' class='btn btn-outline-primary'>$diaSemana  <hr>  DIA $diaMes</button>";
        $diaMes++;
      }

      var_dump($arrayDiaSemana);

      ?>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>