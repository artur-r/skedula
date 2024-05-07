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
      $resultado = mysqli_fetch_array($consulta);

      $buttonId = 0;
      $i = 8;

      function abirModal($diaAtualSemana, $diaMes, $i)
      {
        echo "<!-- Modal -->
        <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h1 class='modal-title fs-5' id='exampleModalLabel'>Modal title</h1>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
              </div>
              <div class='modal-body'>
                Deseja confirmar seu horário para " . $diaAtualSemana . " " . $diaMes . " " . $i . " horas?
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                <button type='button' class='btn btn-primary'>Save changes</button>
              </div>
            </div>
          </div>
        </div>";
      }


      if (empty($resultado)) {
        while ((empty($resultado)) && $i < 18) {
          // echo "<button type='button' class='btn btn-primary href'function/agendar.php'>
          //       $i:00

          //     </button>";

          echo "<!-- Button trigger modal -->
          <button type='button' class='btn btn-primary' name='botaoHorario' data-bs-toggle='modal' data-bs-target='abir'href'function/agendar.php'>
          $i:00
          </button>
          ";
          if ($i == 11) {
            $i = 12;
          }

          $buttonId++;
          $i++;
        }
      } else {

        for ($i = 8; $i < 18; $i++) {
          if ($resultado['horario'] == $i) {
            echo "<button class='btn btn-primary' type='button' disabled>$i:00</button>";
          } else {
            echo "<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                $i:00
              </button>";
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