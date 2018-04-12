<!DOCTYPE html>
<?php
	$_SESSION['altas']=1;
	include "sesion.php";
?>

<html>
	<head>
		<title>Alta Autor</title>
		<meta charset="UTF-8">
		<link href="css/alta_autor.css" type="text/css" rel="stylesheet">
	</head>

<body>
	<h1>Registra los autores</h1>
	<form action="registro.php" method="post">
	Nombre: <input type="text" name="nombre" autocomplete="off"><br>
	Apellido Paterno: <input type="text" name="apaterno" autocomplete="off"><br>
	Apellido Materno: <input type="text" name="amaterno" autocomplete="off"><br>
	Nacionalidad: <input type="text" name= "nacionalidad" autocomplete="off"><br>
	zinput type="submit" value="Ingresar">
	</form>
</body>
<footer>
	<a href="creditos.php">Creditos</a>
</footer>
