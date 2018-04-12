<?php
	session_start();
	$_SESSION['altas']=1;
?>
<h1>Inicia sesion</h1>
<form action="sesionContinua.php" method="post">
	Nombre: <input type="text" name="Nombre">
	<input type="submit" name="Ingresar" value="Ingresar">
</form>
