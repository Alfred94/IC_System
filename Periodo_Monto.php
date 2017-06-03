<?php

$Capital = $_POST['Capital'];
$T_interes = $_POST['T_interes'];
$Monto = $_POST['Monto'];


$Resultado = (log($Monto/$Capital)/log(1+($T_interes/100)));

//echo number_format($Resultado,2);

?>


<div class="alert alert-info" role="alert">
	<h4>El Periodo es de: </h4>
	<span class="label label-primary"><?php echo number_format($Resultado,2); ?></span>

</div>