<!DOCTYPE html>
<?php
	$_SESSION['altas']=1;
	include "sesion.php";
?>
<html>
	<head>
		<title>Alta de usuarios</title>
		<meta charset="UTF-8">
		<link href="css/alta_usuario.css" type="text/css" rel="stylesheet">
	</head>
	
	<body>
		<h1>Registrar a un usuario en la BD</h1>
		
		<form action="registro.php" method="post">
		id usuario: <input type="number" name="id_ususario" autocomplete="off"/>
		<br>
		Nombre: <input type="text" name="nombre" autocomplete="off"/>
		<br>
		Apellido paterno: <input type="text" name="apaterno" autocomplete="off"/>
		<br>
		Apellido materno: <input type="text" name="amaterno" autocomplete="off"/>
		<br>
		Usuario: <input type="text" name="ususario" autocomplete="off"/>
		<br>
		Contraseña: <input type="password" name="contraseña" autocomplete="off"/>
		<br>
		<input type="submit" value="Ingresar">
		</form>
	</body>
	
	<footer>
		<a href="creditos.php">Creditos</a>
	</footer>
</html>
