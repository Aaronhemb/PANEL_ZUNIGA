<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
	header("Location:login.php");
}

include_once 'login/dbconnect.php';

//Comprobar de envío el formulario
if (isset($_POST['login'])) {
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = base64_encode($_POST["password"]);
  //encriptacion de la clave en simbolos que representan
 #$salt = hash("sha512", $password, "miperroestaloco");
 $salt = hash("sha512",$password);
	$result = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '" . $email. "' and password = '$salt'");

	if ($row = mysqli_fetch_array($result)) {
		//$_SESSION['usr_estado'] = $row['estado'];

		if($row['estado']==1){
			$_SESSION['usr_id'] = $row['id'];
			$_SESSION['usr_nombre'] = $row['nombre'];
			$_SESSION['usr_email'] = $row['email'];
			$_SESSION['usr_unique_id'] = $row['unique_id'];


			header("Location: Admin/index.php");
		}else
		$errormsg = "Esta cuenta esta desactivada";
	} else {
		$errormsg = "El email o el password estan mal!!!";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio de session</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	   	<link rel="stylesheet" media="all" href="./login/css/placeholder.css" />
			<link rel="stylesheet" media="all" href="./login/css/style.css" />
	<!---Iconos de bootstrap----->

</head>
<body id="Login" style="	">

<div class="container" style="margin-top: 54px;">
	<div class="row">
 			<h1><code>ZUÑIGA GUZMÀN CONTADORES PÙBLICOS Y ASOCIADOS, S.C. </code></h1>
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
					<div class="centralize">
				<div class="input-block">
					<input type="text" name="email" id="input-text" required spellcheck="false">
					<span class="placeholder">
						Email
					</span>
				</div> <br><br><br><br>
				<div class="input-block">
					<input type="password" name="password" id="input-text" required spellcheck="false">
					<span class="placeholder">
						Password
					</span>
				</div>
			</div>
				<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
				<div class="form-group">
					<!--<input type="submit" name="login" value="Iniciar Sesion" class="btn btn-primary" /> -->
						<button type="submit" name="login" value="Iniciar Sesion" class="pulse">Iniciar Session</button>
					</div>
			</form>

		</div>
	</div>

</div>

<script src="login/js/jquery-1.10.2.js"></script>
<script src="login/js/bootstrap.min.js"></script>
</body>
</html>
