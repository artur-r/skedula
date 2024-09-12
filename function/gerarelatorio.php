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
ob_start();

// Inclua o arquivo FPDF
require 'fpdf186/fpdf.php';

// Crie uma nova instância da classe FPDF
$pdf = new FPDF();

// Adicione uma página
$pdf->AddPage();

// Defina a fonte (Arial, negrito, tamanho 16)
$pdf->SetFont('Arial', 'B', 16);

// Adicione um texto
$pdf->Cell(40, 10, 'Relatório de agendamentos!');

// Gere o arquivo PDF e envie ao navegador
$pdf->Output();

// Limpa o buffer de saída
ob_end_flush();

?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <button type="button" class="btn btn-info"><a href="javascript:history.back()">Voltar</a></button>
  </div>
</body>

</html>