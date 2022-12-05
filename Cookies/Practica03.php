<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		.noselec
		{
			display: none;
		}
		input[type=radio]
		{
			margin-left: 15px;
		}
	</style>
	<title>Practica 03</title>
</head>
<body>
	<form action="" method="post">
		<div>
			<div><label for="name">Nombre: </label><input type="text" name="name" id="name" value=""></div>
			<div>
				<label for="seat[]">Asiento: </label>
				<input type="radio" name="seat[]" id="aisle" value="A"><label for="aisle">Pasillo</label>
				<input type="radio" name="seat[]" id="middle" value="M"><label for="middle">Centro</label>
				<input type="radio" name="seat[]" id="window" value="W"><label for="window">Pasillo</label>
			</div>
			<div>
				<label for="menu">Menú: </label>
				<select name="menu" id="menu">
					<option value="" class="noselec">-- Seleccione un menú --</option>
					<option value="VG">Vegetariano</option>
					<option value="NVG">No vegetariano</option>
					<option value="D">Diabético</option>
					<option value="I">Infantil</option>
				</select>
			</div>
			<div>
				<label for="ports[]">Aeropuertos: </label>
				<input type="checkbox" name="ports[]" id="london" value="LHR"><label for="london">Londres</label>
				<input type="checkbox" name="ports[]" id="paris" value="CDG"><label for="paris">París</label>
				<input type="checkbox" name="ports[]" id="roma" value="CIA"><label for="roma">Roma</label>
				<input type="checkbox" name="ports[]" id="ibiza" value="IBZ"><label for="ibiza">Ibiza</label>
				<input type="checkbox" name="ports[]" id="singapur" value="SIN"><label for="singapur">Singapur</label>
				<input type="checkbox" name="ports[]" id="hongkong" value="HKG"><label for="hongkong">Hong Kong</label>
				<input type="checkbox" name="ports[]" id="malta" value="MLA"><label for="malta">Malta</label>
				<input type="checkbox" name="ports[]" id="bombay" value="BOM"><label for="bombay">Bomnbay</label>
			</div>
		</div>
	</form>
</body>
</html>