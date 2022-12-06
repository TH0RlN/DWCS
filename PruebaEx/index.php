

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		form
		{
			width: 50%;
			border: 1px solid black;
			margin: 5px;
			padding: 15px;
		}
		
		.divform
		{
			display: grid;
			grid-template-columns: 1fr 3fr;
		}
	</style>
	<title>Formularios</title>
</head>
<body>
	<div>
		<div>
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
				<div class="divform">
					<div><label for="emaillog">Correo electrónico: </label></div><div><input type="text" name="email" id="emaillog"></div>
					<div><label for="passwlog">Contraseña: </label></div><div><input type="password" name="passw" id="passwlog"></div>
				</div>
				<input type="submit" value="Iniciar sesión" name="login">
			</form>
		</div>
		<div>
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
				<div class="divform">
					<div><label for="name">Nombre: </label></div><div><input type="text" name="name" id="name"></div>
					<div><label for="lname">Apellidos: </label></div><div><input type="text" name="lname" id="lname"></div>
					<div><label for="emailsgup">Correo electrónico: </label></div><div><input type="text" name="email" id="emailsgup"></div>
					<div><label for="passwsgup">Contraseña: </label></div><div><input type="password" name="passw" id="passwsgup"></div>
					<div><label for="passwrep">Repita la contraseña: </label></div><div><input type="password" name="passwrep" id="passwrep"></div>
					<div><label for="bdate">Fecha de nacimiento</label></div><div><input type="date" name="bdate" id="bdate"></div>
					<div><label for="f1">Fichero 1: </label></div><div><input type="file" name="file1" id="f1"></div>
					<div><label for="f2">Fichero 2: </label></div><div><input type="file" name="file2" id="f2"></div>
					<div><label for="f3">Fichero 3: </label></div><div><input type="file" name="file3" id="f3"></div>
				</div>
				<input type="submit" value="Registrarse" name="signup">
			</form>
		</div>
	</div>
</body>
</html>