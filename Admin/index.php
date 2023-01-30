<?php
//Control de la session , cuando un usuario intente ingresar con el link a una de las paginas , debera logearse primero
	session_start();
	if(!isset($_SESSION['usr_id'])) {
		header("Location:../login/login.php");
	}
	include_once '../login/dbconnect.php';
?>

  <?php include "header.php"; ?>
	<body>
	<?php include "nav.php"; ?>
  <?php include "sidebar_drow.php"; ?>
  </body>
</html>
