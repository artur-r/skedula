<?php 

echo '<h1>Função date()</h1>';

echo '<hr>';

date_default_timezone_set('America/Sao_Paulo');


echo '<h2>Ano<h2>';
$date = date('y'); // 24
echo "<pre>"; print_r($date); echo "</pre>";


$date = date('Y'); // 2024
echo "<pre>"; print_r($date); echo "</pre>";


$date = date('m'); // 2024
echo "<pre>"; print_r($date); echo "</pre>";


$date = date('M'); // 2024
echo "<pre>"; print_r($date); echo "</pre>";


// horas

$date = date('H,i,s'); // 2024
echo "<pre>"; print_r($date); echo "</pre>";


?>