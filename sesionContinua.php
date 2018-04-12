<?php
	session_start();
		if($_SESSION['altas']==1 &&$_POST['usuario']!=NULL){
			$nombre = $_POST['usuario'];
			echo "Bienvenido ".$nombre;
			} else {
				header("Location: index.php);
			}
?>
