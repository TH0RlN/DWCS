<?php
    function preselected(string $choice, string $type) : string
    {
        if(!empty($_POST[$type]))
        {
            if ($_POST[$type] == $choice)
                return $type == 'seat' ? 'checked' : 'selected';
            return '';
        }
        else
        {
            return '';
        }
    }
    
    function prechecked(string $choice, string $name) : string
    {
        if (!empty($_POST[$name]))
        {
            if (in_array($choice, $_POST[$name]))
                return 'checked';
            else
                return '';
        }
        else
            return '';
        
    }

	function checkall() : bool
	{
		if (empty($_POST['name']))
			return false;
		if (empty($_POST['seat']))
			return false;
		if (empty($_POST['menu']))
			return false;
		if (empty($_POST['ports']))
			return false;
		return true;
	}

	//if (isset($_POST['submit']) && checkall())
	//{
	//	
	//}
?>

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
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post">
		<div>
			<div><label for="name">Nombre: </label><input type="text" name="name" id="name" value="<?php echo !empty($_POST['name']) ? $_POST['name'] : '';?>"></div>
			<div>
				<label for="seat">Asiento: </label>
				<input type="radio" name="seat" id="aisle" value="A" <?php echo preselected('A', 'seat');?>><label for="aisle">Pasillo</label>
				<input type="radio" name="seat" id="middle" value="M" <?php echo preselected('M', 'seat');?>><label for="middle">Centro</label>
				<input type="radio" name="seat" id="window" value="W" <?php echo preselected('W', 'seat');?>><label for="window">Ventanilla</label>
			</div>
			<div>
				<label for="menu">Menú: </label>
				<select name="menu" id="menu">
					<option value="" class="noselec">-- Seleccione un menú --</option>
					<option value="VG" <?php echo preselected('VG', 'menu')?>>Vegetariano</option>
					<option value="NVG" <?php echo preselected('NVG', 'menu')?>>No vegetariano</option>
					<option value="D" <?php echo preselected('D', 'menu')?>>Diabético</option>
					<option value="I" <?php echo preselected('I', 'menu')?>>Infantil</option>
				</select>
			</div>
			<div>
				<label for="ports[]">Aeropuertos: </label>
				<input type="checkbox" name="ports[]" id="london" value="LHR" <?php echo prechecked('LHR', 'ports');?>><label for="london">Londres</label>
				<input type="checkbox" name="ports[]" id="paris" value="CDG" <?php echo prechecked('CDG', 'ports');?>><label for="paris">París</label>
				<input type="checkbox" name="ports[]" id="roma" value="CIA" <?php echo prechecked('CIA', 'ports');?>><label for="roma">Roma</label>
				<input type="checkbox" name="ports[]" id="ibiza" value="IBZ" <?php echo prechecked('IBZ', 'ports');?>><label for="ibiza">Ibiza</label>
				<input type="checkbox" name="ports[]" id="singapur" value="SIN" <?php echo prechecked('SIN', 'ports');?>><label for="singapur">Singapur</label>
				<input type="checkbox" name="ports[]" id="hongkong" value="HKG" <?php echo prechecked('HKG', 'ports');?>><label for="hongkong">Hong Kong</label>
				<input type="checkbox" name="ports[]" id="malta" value="MLA" <?php echo prechecked('MLA', 'ports');?>><label for="malta">Malta</label>
				<input type="checkbox" name="ports[]" id="bombay" value="BOM" <?php echo prechecked('BOM', 'ports');?>><label for="bombay">Bomnbay</label>
			</div>
			<input type="submit" value="Enviar" name="submit">
		</div>
	</form>
</body>
</html>