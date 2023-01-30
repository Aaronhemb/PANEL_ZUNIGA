<?php
//Control de la session , cuando un usuario intente ingresar con el link a una de las paginas , debera logearse primero

	if(!isset($_SESSION['usr_id'])) {
		header("Location:../login/login.php");
	}
	include_once '../login/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Panel de tienda</title>

<!--Link de sidebar_drow-->
<link rel="stylesheet" href="/css/sidebar_drow.css">

  </head>
