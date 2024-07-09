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

      include_once("conexao.php");

      date_default_timezone_set('America/Sao_Paulo');
      $ano = $_GET['ano'];
      $mes = $_GET['mes'];
      $diaSemana = $_GET['diaAtualSemana']; //pega da URL o dia da semana do botão selecionado
      $diaMes = $_GET['diaMes'];
      $servico = $_GET['servico'];

      $arraydiaSemana = array(
        '1' => 'Segunda-feira',
        '2' => 'Terça-feira',
        '3' => 'Quarta-feira',
        '4' => 'Quinta-feira',
        '5' => 'Sexta-feira',
        '6' => 'Sabado',
      );

      $diaAtualSemana = $arraydiaSemana[$diaSemana];

      $sql = "SELECT * FROM agenda WHERE (dia_mes = $diaMes AND dia_semana = $diaSemana AND mes=$mes AND ano=$ano)";
  

      //executa a consulta
      $consulta = mysqli_query($conn, $sql);

      //coloca a consulta dentro de um array
      while ($resultado = mysqli_fetch_assoc($consulta)){
        //coloca o resultado de cada horário dentro de um vetor
        $horariosAgendados [] = $resultado['horario'];
      }

      $i = 8;


      //Verifica se o resultado da consulta está vazio, pois senão, os botões só seriam gerados se tivesse algo já agendado
      if(empty($horariosAgendados)){
        for ($i = 8; $i < 18; $i++) {
          //Gera botões com horários
            echo "<button type='button' class='btn btn-primary'>
           <a href='function/agendar.php?diaAtualSemana=$diaSemana&diaMes=$diaMes&mes=$mes&ano=$ano&servico=$servico&horario=$i'>
                $i:00
            </a> 
              </button>";  
              if ($i==11){
                $i=12;
              }        
          } 
            
      }else{
        
        for ($i = 8; $i < 18; $i++) {
          //verifica se a variável i é um horário já agendado, se o valor de i, não estiver agendado, gera um botão
          if (!in_array($i, $horariosAgendados)) { 
            echo "<button type='button' class='btn btn-primary'>
           <a href='function/agendar.php?diaAtualSemana=$diaSemana&diaMes=$diaMes&mes=$mes&ano=$ano&servico=$servico&horario=$i'>
                $i:00
            </a> 
              </button>";   
              if ($i==11){
                $i=12;
              }        
          } 
            
          
         }
        }


      ?>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <button type="button" class="btn btn-info"><a href="javascript:history.back()">Voltar</a></button>

</body>

</html>