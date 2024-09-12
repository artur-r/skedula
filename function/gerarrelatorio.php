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
    <p class="display-7 bg-purple border border-primary p-1 text-light" style="border-radius:10px;">Selecione um filtro para tirar um relatório</p>

    <?php

    include_once('../conexao.php');

    $dataInicial = $_GET['datainicial'];
    $dataFinal = $_GET['datafinal'];



    ob_start();

define ('FPDF_FONTPATH','../fpdf186/font');
require '../fpdf186/fpdf.php';

$pdf = new FPDF ('P', 'cm', 'A4');
$pdf->AddPage();
$pdf->setFont('Arial','B','12');


$pdo = new PDO ('mysql:host=localhost; dbname=skedula','root','');
$sql = $pdo->prepare("SELECT *FROM agenda WHERE data BETWEEN '$dataInicial' AND '$dataFinal' ORDER BY data");
$sql->execute();



//Titulo
$str = "Relatório de agendamentos mensal";
$str = iconv('UTF-8', 'windows-1252', $str);
$pdf->setFont('Arial','B','15');
$pdf->Cell(15,2,$str,0,1,'c');


//Cabeçalho
    $pdf->setFont('Arial','B','12');
    $pdf->setFillColor(173, 249, 238,);
    $str = " Serviço";//Definir palavra Serviço para ser convertida
    $str = iconv('UTF-8', 'windows-1252', $str);//conversão para utf-8

    $pdf->Cell(4,1, "Cliente",1,0,'c', TRUE);
    $pdf->Cell(3,1, $str,1,0,'c', TRUE);
    $pdf->Cell(2,1, "Horario",1,0,'c', TRUE);
    $pdf->Cell(3,1, "Dia",1,0,'c', TRUE);
    $str = " Mês"; //Definir palavra mês para ser convertida
    $str = iconv('UTF-8', 'windows-1252', $str);//conversão para utf-8
    $pdf->Cell(3,1, $str,1,0,'c', TRUE);
    $pdf->Cell(2.5,1, "Data",1,1,'c', TRUE);



//dados    
foreach($sql as $resultado){

    $pdf->setFont('Arial','','12');
    $pdf->Cell(4,1, $resultado['cliente'],1,0,'c');
    $pdf->Cell(3,1, $resultado['servico'],1,0,'c');
    $pdf->Cell(2,1, $resultado['horario'],1,0,'c');
    $pdf->Cell(3,1, $resultado['dia_semana'],1,0,'c');
    $pdf->Cell(3,1, $resultado['mes'],1,0,'c');
    $dataFormatada = implode("/",array_reverse(explode("-",$resultado['data'])));//Formatar data para formato dd/mm/aa
    $pdf->Cell(2.5,1, $dataFormatada,1,1,'c');

}


$pdf->Output();


ob_end_flush();



?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <button type="button" class="btn btn-info"><a href="javascript:history.back()">Voltar</a></button>
  </div>
</body>

</html>