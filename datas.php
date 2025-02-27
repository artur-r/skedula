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
    <p class="display-7 bg-purple border border-primary p-1 text-light" style="border-radius:10px;">Perfeito! Primeiro, selecione o dia desejado</p>

    <?php

    include_once("conexao.php");

    date_default_timezone_set('America/Sao_Paulo');

    $ano = date('Y');
    $mes = date('n');
    $diaMes = date('d');
    $diaSemana = date('N');

    $servico = $_GET['servico'];
  
  
    
    //Será utilizada para consultas melhores
    $data =  date('d-m-Y'); 
    $dataConvertida = date('Y-m-d', strtotime($data));
    

    $arrayDiaSemana = array(
      1 => "Segunda-feira",
      2 => "Terça-feira",
      3 => "Quarta-feira",
      4 => "Quinta-feira",
      5 => "Sexta-feira",
      6 => "Sabado",
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

    echo   "<p class = 'mesDatas'>$arrayMes[$mes] </p>";

    $proximoMes = $arrayMes[$mes + 1];
    if ($mes =='12'){
      $proximoMes = 'Janeiro';
    }
    $arrayMes = $arrayMes[$mes];
    $diaAtualSemana = $arrayDiaSemana[$diaSemana];
    $diaMesInicio = 1;
    $quantidadeBotoes = 0;

      //Definir ultimo dia de cada mês
    switch ($arrayMes) {
      case 'Janeiro':
        $ultimoDiaMes = 31;
        break;
      case 'Fevereiro':
        $ultimoDiaMes = 28;
        if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0)
          $ultimoDiaMes = 29;
        break;
      case 'Março':
        $ultimoDiaMes = 31;
        break;
      case 'Abril':
        $ultimoDiaMes = 31;
        break;
      case 'Maio':
        $ultimoDiaMes = 31;
        break;
      case 'Junho':
        $ultimoDiaMes = 31;
        break;
      case 'Julho':
        $ultimoDiaMes = 31;
        break;
      case 'Agosto':
        $ultimoDiaMes = 31;
        break;
      case 'Setembro':
        $ultimoDiaMes = 31;
        break;
      case 'Outubro':
        $ultimoDiaMes = 31;
        break;
      case 'Novembro':
        $ultimoDiaMes = 31;
        break;
      case 'dezembro':
        $ultimoDiaMes = 31;
        break;
    }



    while ($diaMes <= $diaMesFim && $diaMes <= $ultimoDiaMes) {
      // Pega o dia da semana de hoje
      $diaAtualSemana = $arrayDiaSemana[$diaSemana];

      // Gera o botão com o dia da semana atual, que vai se atualizando no array, junto com o dia do mês. Se o dia for domingo, o botão estará bloqueado
      if ($diaAtualSemana == "Domingo") {
        echo "<button type='button' class='btn botaodata w-25 btn-outline-primary disabled'>$diaAtualSemana  <hr>  DIA $diaMes</button>";
      } else {
        echo "<a href='horarios.php?diaAtualSemana=$diaAtualSemana&diaMes=$diaMes&mes=$arrayMes&ano=$ano&data=$dataConvertida&servico=$servico'><button type='button' class='btn botaodata w-25 btn-outline-primary'>$diaAtualSemana  <hr>  DIA $diaMes</button></a>";
      }
      $diaMes++;

      // Incrementa o dia da semana atual e faz o loop para segunda-feira se for domingo (7)
      $diaSemana++;
      if ($diaSemana > 7) {
        $diaSemana = 1;
      }
      $quantidadeBotoes++;
      $dataConvertida = date('Y-m-d', strtotime($dataConvertida . ' +1 day')); // Incrementa a data
    }


    $diferenca = 15 - $quantidadeBotoes;

    //Delimita a quantidade de botões que pode ter na tela
    $limiteBotoes = 15;
    $inicioProximoMes = 1;

    //Faz a quebra para o proximo mês, caso o botão chegue no último dia do mês
    if ($diaMes == $ultimoDiaMes + 1 && $quantidadeBotoes < $limiteBotoes) {
      echo  "<br><br> <p class = 'mesDatas'>$proximoMes </p>";
    }

    //Gera os dias do próximo mês, e no proximo mês, gerará apenas os botões que faltam para completar o limite de 15 na tela
    while ($diaMes == $ultimoDiaMes + 1 && $quantidadeBotoes < $limiteBotoes) {
      $diaAtualSemana = $arrayDiaSemana[$diaSemana];
      $diaSemana++;
      if ($diaSemana > 7) {
        $diaSemana = 1;
      }

      if ($diaAtualSemana == "Domingo") {
        echo "<button type='button' class='btn botaodata w-25 btn-outline-primary disabled'>$diaAtualSemana  <hr>  DIA $inicioProximoMes</button>";
      } else {
        echo "<a href='horarios.php?diaAtualSemana=$diaAtualSemana&diaMes=$inicioProximoMes&ano=$ano&mes=$mes&data=$dataConvertida&servico=$servico'><button type='button' class='btn botaodata w-25 btn-outline-primary'> $diaAtualSemana  <hr>  DIA $inicioProximoMes</button></a>";
      }

      $quantidadeBotoes++;
      $inicioProximoMes++;
      $dataConvertida = date('Y-m-d', strtotime($dataConvertida . ' +1 day')); // Incrementa a data
    }


   
    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <button type="button" class="btn btn-info"><a href="javascript:history.back()">Voltar</a></button>
  </div>
</body>

</html>