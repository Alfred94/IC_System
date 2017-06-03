<?php 

session_start();

if(!$_SESSION['userId']) {
  header('location: index.php');  
} 
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favico.ico">

    <title>Interes Compuesto</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">IC SYSTEM</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
         <li><a href="dashboard.php">INICIO</a></li>
            <li><a href="InteresVista.php">Calcular Interes</a></li>
            <li><a href="MontoVista.php">Calcular Monto</a></li>
           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tasa de Interes <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="active"><a href="T_interes_Monto_Vista.php">A partir del Monto</a></li>
                <li><a href="T_interes_Interes_Vista.php">A partir del Interes</a></li>
              </ul>
            </li>
           <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Capital <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Periodo <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Interes <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tasa de Interes <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>-->
          </ul>
          <ul class="nav navbar-nav navbar-right">
        <li class="dropdown" id="navSetting">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">            
            <!--<li id="topNavSetting"><a href="configuraciones.php"> <i class="glyphicon glyphicon-wrench"></i> Configuración</a></li>-->            
            <li id="topNavLogout"><a href="logout.php"> <i class="glyphicon glyphicon-log-out"></i> Salir</a></li>            
          </ul>
        </li>        
               
      </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    
       <div class="container">
      <!-- Example row of columns -->

        <div class="panel panel-primary">
  <div class="panel-heading">PARAMETROS PARA CALCULO DE MONTO</div>
  <div class="panel-body">

      <div class="row">
        <div class="col-md-6 col-xs-8">
        	<div class="well">
	          	<form class="form-horizontal">
                 
					<div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 col-xs-4 control-label">Capital</label>
					    <div class="col-sm-4 col-xs-8">
						    <div class="input-group">
							    <div class="input-group-addon">$</div>
							    <input type="text" class="form-control" id="Capital">
							</div>
						</div>
					</div>
          <hr/>
					 <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 col-xs-4 control-label">Monto</label>
              <div class="col-sm-4 col-xs-8">
                <div class="input-group">
                  <div class="input-group-addon">$</div>
                  <input type="text" class="form-control" id="Monto">
              </div>
            </div>
          </div>
          <hr/>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 col-xs-4 control-label">Periodo</label>
						<div class="col-sm-4 col-xs-8">
						      <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></div>
                  <input type="text" class="form-control" id="Periodo" >
                  </div>
						</div>
            <div class="col-sm-3">
                <select class="form-control" id="opcionperiodo">
                <option value="00">Seleccione...</option>
                <option value="01">Dia</option>
                  <option value="02">Mes</option>
                  <option value="03">Año</option>
                </select>
              </div>
               <div class="col-sm-3">
                <select class="form-control" id="opcionperiododia">
                <option value="01">Real</option>
                  <option value="02">Aproximado</option>
                </select>
              </div>
					</div>
           <hr/>
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-4 col-xs-offset-4 col-xs-8">
						    <button type="button" id="Calcular" class="btn btn-primary">Calcular</button>
						</div>
					</div>
				</form>
	        </div>
        </div>
        <div class="col-md-6 col-xs-8">
        	<div class="well">
	           <div class="alert alert-info" role="alert"><strong>Resultado</strong></div>
	          <div id="Resultado"></div>
	        </div>
        </div>
      </div>
      </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="dist/js/jquery.min.js"></script>
    <script type="text/javascript" src="js/T_interes_Monto.js"></script>
    <script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
