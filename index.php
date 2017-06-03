<?php 

session_start();

if(isset($_SESSION['userId'])) {
	header('location: dashboard.php');	
}

$errors = array();

if($_POST) {		

	$username = $_POST['username']; // Escapando caracteres especiales
	$password = $_POST['password'];

	if(empty($username) || empty($password)) {
		if($username == "") {
			$errors[] = "Se requiere nombre de usuario";
		} 

		if($password == "") {
			$errors[] = "Se requiere contraseña";
		}
	} else {

		if($username == "admin") {

			if($password == "admin") {
				$user_id = 1;

				// set session
				$_SESSION['userId'] = $user_id;

				header('location: dashboard.php');	
			} else{
				
				$errors[] = "Combinación incorrecta de nombre de usuario y/o contraseña";
			} // /else
		} else {		
			$errors[] = "El nombre de usuario no existe";		
		} // /else
	} // /else not empty username // password
	
} // /if $_POST
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Interes Compuesto</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favico.ico">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

  <!-- custom css -->
  <link rel="stylesheet" href="custom/css/custom.css">	

  <!-- jquery -->
	<script src="assets/jquery/jquery.min.js"></script>
  <!-- jquery ui -->  
  <link rel="stylesheet" href="assets/jquery-ui/jquery-ui.min.css">
  <script src="assets/jquery-ui/jquery-ui.min.js"></script>

  <!-- bootstrap js -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row vertical">
			<div class="col-md-5 col-md-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Inicio de sesión</h3>
					</div>
					<div class="panel-body">

						<div class="messages">
							<?php if($errors) {
								foreach ($errors as $key => $value) {
									echo '<div class="alert alert-warning" role="alert">
									<i class="glyphicon glyphicon-exclamation-sign"></i>
									'.$value.'</div>';										
									}
								} ?>
						</div>

						<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="loginForm">
							<fieldset>
							  <div class="form-group">
									<label for="username" class="col-sm-3 control-label">Usuario</label>
									<div class="col-sm-9">
									  <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" autocomplete="off" required />
									</div>
								</div>
								<div class="form-group">
									<label for="password" class="col-sm-3 control-label">Contraseña</label>
									<div class="col-sm-9">
									  <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" autocomplete="off" required />
									</div>
								</div>								
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
									  <button type="submit" class="btn btn-primary"> <i class="glyphicon glyphicon-log-in"></i> Ingresar</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<!-- panel-body -->
				</div>
				<!-- /panel -->
			</div>
			<!-- /col-md-4 -->
		</div>
		<!-- /row -->
	</div>
	<!-- container -->	
</body>
</html>







	