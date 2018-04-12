<!DOCTYPE html>
<?php
	$_SESSION['altas']=1;
	include "sesion.php";
?>
<html>
	<head>
		<title>Dar de alta libros</title>
		<link href="css/alta_libro.css" type="text/css" rel="stylesheet">
	</head>

	<body>
		<h1>Registrar libros en la BD</h1>
		<form action="registro.php" method="post">
		Titulo: <input type="text" name="titulo" autocomplete="off">
		<br>
		id autor: <input type="number" name="id_autor" autocomplete="off"/>
		<br>
		año: <input type="number" name="año" autocomplete="off"/>
		<br>
		<input type="submit" value="Ingresar">
		</form>
	</body>
	<footer>
		<a href="creditos.php>Creditos</a>
	</footer>
</html>
