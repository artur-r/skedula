<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Skedula</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/custom.css">
</head>

<body class="bg-dark">

  <form action="">
    <div class="container pt-5">
      <p class="display-7 bg-purple border border-primary p-1 text-light" style="border-radius:10px;">Perfeito! Primeiro, selecione o dia desejado</p>

      <?php

      date_default_timezone_set('America/Sao_Paulo');

      $mes = date('n');
      $diaMes = date('d');
      $diaSemana = date('N');

      $arrayDiaSemana = array(
        1 => "Segunda",
        2 => "Terça",
        3 => "Quarta",
        4 => "Quinta",
        5 => "Sexta",
        6 => "Sábado",
        7 => "Domingo"
      );

      $arrayMes = array(
        1 => "Janeiro",
        2 => "Fevereiro",
        3 => "Março",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        11 => "Novembro",
        12 => "Dezembro"
      );
      // switch ($mes) {
      //   case 'Jan':
      //     $mes = "Janeiro";
      //     break;
      //   case 'Feb';
      //     $mes = "Fevereiro";
      //     break;
      //   case 'Mar';
      //     $mes = "Março";
      //     break;
      //   case 'Apr';
      //     $mes = "Abril";
      //     break;
      //   case 'May';
      //     $mes = "Maio";
      //     break;
      //   case 'June';
      //     $mes = "Junho";
      //     break;
      //   case 'July';
      //     $mes = "Julho";
      //     break;
      //   case 'Aug';
      //     $mes = "Agosto";
      //     break;
      //   case 'Sept';
      //     $mes = "Setembro";
      //     break;
      //   case 'Oct';
      //     $mes = "Outubro";
      //     break;
      //   case 'Nov';
      //     $mes = "Novembro";
      //     break;
      //     case 'Dec';
      //     $mes = "Dezembro";
      //     break;
      // }

      $diaMesFim = $diaMes + 15;

      echo   "<table>
      <tr>
        <td><button>$diaSemana,  $arrayMes[$mes] teste</button></td>
      </tr>
    </table>";

      $diaAtualSemana = $arrayDiaSemana[$diaSemana];
      $diaMesInicio = 1;

      while ($diaMes <= $diaMesFim) {
        // Pega o dia da semana de hoje
        $diaAtualSemana = $arrayDiaSemana[$diaSemana];

        // Gera o botão com o dia da semana atual, que vai se atualizando no array, junto com o dia do mês
        echo "<button type='button' class='btn w-25 btn-outline-primary'>$diaAtualSemana  <hr>  DIA $diaMes</button>";
        $diaMes++;

        // Incrementa o dia da semana atual e faz o loop para segunda-feira se for domingo (7)
        $diaSemana++;
        if ($diaSemana > 7) {
          $diaSemana = 1;
        }

         if ($mes == "4") {
          $diaMesFim = 31;
          $diaMesLimite = 2;
          echo "<br>ProximoMes<br>";
          while ($diaMes > $diaMesFim) {
            echo "<button type='button' class='btn w-25 btn-outline-primary'>$diaAtualSemana  <hr>  DIA $diaMes</button>";
            $diaMes++;
          }
        } 
      }


      var_dump($arrayDiaSemana);
      echo date('n:m');
      var_dump($arrayMes);

      ?>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>