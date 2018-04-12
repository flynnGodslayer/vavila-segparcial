<!DOCTYPE HTML>
<?php
	session_start();
	$SESSION['altas']=1;
?>

<html>
<head>
        <meta charset="UTF-8">
        <title>Login</title>
	<link href="css/index.css" type="text/css" rel="stylesheet">

</head>
<body>

	<h1>Inicio de sesión</h1>
	<p>Dame los datos de tu inicio de sesion</p>

	<form action="menu.php" method="post">

	<label name="usuario">Nombre de usuario:</label>
	<input type = "text" name = "usuario" autocomplete="off">
	<label name="password">Contrasena:</label>
	<input type = "password" name = "contrasena" autocomplete="off">
	<input type = "submit" value="Ingresar">
	</form>


</body>
</html>
