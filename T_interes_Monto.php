<?php

$Capital = $_POST['Capital'];
$Monto = $_POST['Monto'];
$Periodo = $_POST['Periodo'];

$Resultado = Pow(($Monto / $Capital) ,(1/$Periodo))-1;

$Resultado_porc = ($Resultado * 100)

//echo number_format($Resultado,2);

?>


<div class="alert alert-info" role="alert">
	<h4>La tasa de interes es de : </h4>
	<span class="label label-primary"><?php echo number_format($Resultado,4) . " = " . number_format($Resultado_porc,2) . "%" ?></span>

</div>