<?php

$Capital = $_POST['Capital'];
$T_interes = $_POST['T_interes'];
$Periodo = $_POST['Periodo'];

$Resultado = $Capital * (Pow((1+($T_interes/100)),$Periodo)-1);

//echo number_format($Resultado,2);

?>


<div class="alert alert-info" role="alert">
	<h4>El Interes que pagará es de: </h4>
	<span class="label label-primary"><?php echo number_format($Resultado,2); ?></span>

</div>