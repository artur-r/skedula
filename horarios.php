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


      //gera botões com horários
      if (empty($resultado)) {
        while ((empty($resultado)) && $i < 18) {
          // echo "<button type='button' class='btn btn-primary href'function/agendar.php'>
          //       $i:00

          //     </button>";

          echo "<!-- Button trigger modal -->
          <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal' id='botaohora'>
          <a href='function/agendar.php?diaAtualSemana=$diaSemana&diaMes=$diaMes&mes=$mes&ano=$ano&servico=$servico&horario=$i'>
          $i:00
          </a>
          </button>
          <!-- Modal -->
          <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
              <div class='modal-content'>
                <div class='modal-header'>
                  <h1 class='modal-title fs-5' id='exampleModalLabel'>Modal title</h1>
                  <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                  Deseja confirmar seu horário para <b>" . $diaAtualSemana . "</b> dia <b>  " . $diaMes . " às " . $i . "</b>?
                </div>
                <div class='modal-footer'>
                  <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                  <button type='button' class='btn btn-primary'> <a href='function/agendar.php?diaAtualSemana=$diaSemana&diaMes=$diaMes&mes=$mes&ano=$ano&servico=$servico&horario=$i'>Agendar</a></button>
                </div>
              </div>
            </div>
          </div>";
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
            
            <a href='function/agendar.php?diaAtualSemana=$diaSemana&diaMes=$diaMes&mes=$mes&ano=$ano&servico=$servico&horario=$i'>
                $i:00
                </a>
              </button>";
          }
        }
      }





      ?>




    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous">

      $("#botaohora").click(function() {
        let horario = $("").val()
      })


    </script>

    <button type="button" class="btn btn-info"><a href="javascript:history.back()">Voltar</a></button>

</body>

</html>