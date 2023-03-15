<?php

# SI ACCIONA REGISTRARSE: 
if (isset($_POST['btn'])) {
	// Verifica si el botón de registarase se preciono
	if (!(empty($_POST['signup-user']) && (empty($_POST['signup-email'])) && (empty($_POST['signup-pass'])))) {
		// Si los campos no estan vacios:
		$user = $_POST["signup-user"];
		$email = $_POST["signup-email"];
		$pass = $_POST["signup-pass"];

		$qry_email = mysqli_query($mysqli, "SELECT * FROM usuario WHERE Correo = '" . $email . "' ");

		if (mysqli_num_rows($qry_email) == 0) {
			#  Si el email no esta repetido...
			mysqli_query($mysqli, "INSERT INTO usuario (
					Id_Usuario,
					Nombre,
					Apellido,
					Cedula,
				 	Fecha_Nac,
					Direccion, 
					Telefono, 
					Correo, 
					Fecha_Ing, 
					Nombre_User, 
					Pwd) 
					VALUES (
						'',
						'Nombre',
						'Apellido',
						'03',
				 		'2022-01-06',
						'Direccion', 
						'0', 
						'" . $email . "', 
						'2022-01-06', 
						'" . $user . "', 
						'" . $pass . "');");
			mensj();
		} else {
			# En caso contrario:
			mensjErrorEmail(); // Muestra mensaje de error
		}
	} else {
		# En caso contrario:
		mensjCamps(); // Muestra mensaje de error
	}
}


?>