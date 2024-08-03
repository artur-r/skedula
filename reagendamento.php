<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reagendamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/custom.css">
</head>

<body class="bg-custom">

    <div class="container pt-5">
        <p class="display-7 bg-purple border border-primary p-1 text-light" style="border-radius:10px;">Clique em um agendamento para executar o reagendamento</p>
    </div>

    <div class="container text-center">

    <table  class='table table-dark table-hover' >
        <tr>
        <th>Serviço agendado</th> <th>Dia agendado</th><th>Horário</th><th>data</th><th></th>
        </tr>        
        
<tr>
    <?php

    include_once("conexao.php");

    date_default_timezone_set('America/Sao_Paulo');

    $usuario = $_SESSION['usuario'];
    $email = $_SESSION['email'];

    $hora = date('H');
    $ano = date('Y');
    $mes = date('n');
    $diaMes = date('d');
    $diaSemana = date('N');

    $data =  date('Y-m-d'); 

    $sql = "SELECT * FROM agenda WHERE (email = '$email') AND (horario > $hora) AND (data = $data) OR (data > $data)";

    $consulta = mysqli_query($conn, $sql);



    while ($resultado = mysqli_fetch_assoc($consulta)) {
        $diaSemanaAgendado = $resultado['dia_semana'];
        $mesAgendado = $resultado['mes'];

        //trocar os números no banco pelos nomes dos dias
        $diaMesAgendado = $resultado['dia_mes'];
        echo"<tr>";
           echo" <td>$resultado[servico]";
           echo"<td>$diaSemanaAgendado</td>";
           echo "<td>$resultado[horario]:00</td>";
           echo"<td>$diaMesAgendado/$mesAgendado</td>";
           echo"<td><button type='button' class='btn btn-primary btn-sm'><a href=function/reagendar.php?email=$email&diaSemanaAgendado=$diaSemanaAgendado&diaMesAgendado=$resultado[dia_mes]&mesAgendado=$mesAgendado&horario=$resultado[horario]>Reagendar</a></button></td>";
        echo "</tr>";    
        
    }


    
    ?>
    </tr>
    </table>

    </div>
            
        

</table>

</body>

</html>