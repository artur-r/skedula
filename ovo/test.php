<?php 

$diaAtualSemana = "sabado";
$diaMes = "20";

echo "<button type='button' class='btn w-25 btn-outline-primary disabled'><a href='login.php'>$diaAtualSemana  <hr>  DIA $diaMes</a></button>";




echo "<a href='horarios.php?diaAtualSemana=$diaAtualSemana&diaMes=$diaMes&mes=$arrayMes&ano=$ano&servico=$servico&data=$data'><button type='button' class='btn w-25 btn-outline-primary'>$diaAtualSemana  <hr>  DIA $diaMes</button></a>";

echo "<a href='horarios.php?diaAtualSemana=$diaAtualSemana&inicioProximoMes=$inicioProximoMes&data=$data'> <button type='button' class='btn w-25 btn-outline-primary'> $diaAtualSemana  <hr>  DIA $inicioProximoMes</button></a>";