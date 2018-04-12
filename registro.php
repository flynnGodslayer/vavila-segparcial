<!DOCTYPE html>
<?php
	$_SESSION['altas']=1;
	include "sesion.php";
?>
<html>
	<head>
		<title>registro</title>
		<meta charset="UTF-8">
	</head>

	<body>
		<?php
			include_once("conexion.php");
			var_dump($POST);
			if(isset($_POST['usuario'])){
				if(!empty($nombre)||!empty($usuario)||!empty($contraseña)||!empty($apaterno)||!empty($amaterno)){
					$nombre = filter_var( $_POST['nombre'], FILTER_SANITIZE_STRING);
					$apaterno = filter_var( $_POST['apaterno'], FILTER_SANITIZE_STRING);
					$amaterno = filter_var( $_POST['amaterno'], FILTER_SANITIZE_STRING);
					$usuario = filter_var( $_POST['usuario'], FILTER_SANITIZE_STRING);
					$contraseña = filter_var( $_POST['contraseña'];
					$user = "insert into usuarios (nombre, apaterno, amaterno, usuario, contraseña) values('$nombre', '$apaterno', '$amaterno', '$usuario', '$contraseña');";
					$guarda_usuarios = consulta($usuarios);
	
					if($guarda_comentario == false){
						echo "Usuario registrado";
					} else {
						echo "Ocurrio un error";
					}
				}
			}
			if(isset($_POST['titulo'])){
				if(!empty($titulo)||!empty($id_autor)||!empty($año)){
					$titulo = filter_var( $_POST['titulo'], FILTER_SANITIZE_STRING);
					$año = $_POST['año'];
					$id_autor = $_POST['id_autor'];
					$libro = "insert into libros (titulo, id_autor, año), values('$titulo', '$año', '$id_autor');";
					$guarda_libro = consulta($libro);
	
					if($guarda_libro == false){
						echo "Libro registrado";
					} else {
						echo "Ocurrio un error";
					}
				}
			}
			if(isset($_POST['nacionalidad'])){
				if(!empty($nombre)||!empty($nacionalidad)||!empty($apaterno)||!empty($amaterno)){
					$nombre = filter_var( $_POST['nombre'], FILTER_SANITIZE_STRING);
					$apaterno = filter_var( $_POST['apaterno'], FILTER_SANITIZE_STRING);
					$amaterno = filter_var( $_POST['amaterno'], FILTER_SANITIZE_STRING);
					$nacionalidad = filter_var( $_POST['nacionalidad'], FILTER_SANITIZE_STRING);
					$autor = "insert into autores (nombre, apaterno, amaterno, nacionalidad) values('$nombre', '$apaterno', '$amaterno', '$nacionalidad');";
					$guarda_autor = consulta($autor);
	
					if($guarda_comentario == false){
						echo "Usuario registrado";
					} else {
						echo "Ocurrio un error";
					}
				}
			}
?>

	</body>
</html>
