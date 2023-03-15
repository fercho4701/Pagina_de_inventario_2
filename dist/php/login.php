<?php
	# SI ACCIONA INICIAR SESIÓN: 
	if (isset($_POST["singUp-btn"])) {
		# Cuando se acciona el botón de ingresar

		# Si los campos requeridos para el inicio de sesión no se encuentran vacios.
		if (!((empty($_POST['sing-email'])) && (empty($_POST['singup-pass'])))) {
			# Almacena los datos en variables.
			$email = $_POST['singup-email'];
			$password = $_POST['singup-pass'];
			# Realiza la petición
			$sql = mysqli_query($mysqli, "SELECT * from usuarios WHERE Correo= '$email' AND Pwd='$password' ");
			$querryDocente = mysqli_query($mysqli, "SELECT * from docentes WHERE email= '$email' AND contraseña='$password' ");

			if ($user = mysqli_fetch_assoc($sql)) {
				// Verifica el inicio de session 

				mensjSuccesful(); //Muestra mensaje de confirmacion

				$_SESSION['rol'] = $user['id_rol']; // Pasa el rol id del admin para mantener la sesion iniciada.
				// Almacena el nombre y el id del usuario para tenerlos presentes.
				$_SESSION['nombre'] = $user['nombre'];
				$_SESSION['id'] = $user['id'];

				switch ($_SESSION['rol']) {
					case 1:
						header('location: ./admin/adminSession.php');
						# Redirecciona a la pagina inicial
						break;
					default:
				}
			}  else {
				// En caso de que el usuario no se encuentre en la base de datos.
				mensjErrorSingup(); //Muestra mensaje error.
			}
		} else {
			#En caso contrario
			mensjCamps(); // Muestra mensaje error-

		}
	}
?>