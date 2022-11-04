<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Deportivo</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <table>
            <tr>
                <td><label for="name">Nombre: </label></td>
                <td><input type="text" id="name" name="name" value="<?php if (isset($_POST["name"])) echo $_POST["name"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="direccion">Dirección: </label></td>
                <td><input type="text" id="direccion" name="direccion" value="<?php if (isset($_POST["direccion"])) echo $_POST["direccion"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="edad">Edad: </label></td>
                <td><input type="number" id="edad" name="edad" value="<?php if (isset($_POST["edad"])) echo $_POST["edad"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="profesion">Profesion</label></td>
                <td><input type="text" id="profesion" name="profesion" value="<?php if (isset($_POST["profesion"])) echo $_POST["profesion"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="reside">Reside en la zona: </label></td>
                <td><input type="radio" name="reside" id="resSi" value="si" > Sí</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="radio" name="reside" id="resNo" value="no"> No</td>
            </tr>
            <tr><td colspan="2"><input type="submit" name="submit" value="Enviar"><td><tr>
        </table>
    </form>
    

    <?php
        if (!empty($_POST['submit']))
        {
            $check  = false;
            $result = '';
            
            if (empty($_POST['name']))
            {
                $result .= "<p>Nombre no introducido</p>";
                $check = true;
            }
            
            if (empty($_POST['direccion']))
            {
                $result .= "<p>Dirección no introducida</p>";
                $check = true;
            }
            
            if (empty($_POST['edad']))
            {
                $result .= "<p>Edad no introducida</p>";
                $check = true;
            }
            
            if (empty($_POST['profesion']))
            {
                $result .= "<p>Profesión no introducida</p>";
                $check = true;
            }
            
            if (empty($_POST['reside']))
            {
                $result .= "<p>Selecciona una opción de resindencia</p>";
                $check = true;
            }
            
            if ($check)
            {
                echo $result;
            }
            else
            {
                echo "<table border='1' cellpadding='10' cellspacing='2'>";
                echo "<tr><td>Nombre:</td><td>" . $_POST['name'] . "</td></tr>";
                echo "<tr><td>Dirección:</td><td>" . $_POST['direccion'] . "</td></tr>";
                echo "<tr><td>Edad:</td><td>" . $_POST['edad'] . "</td></tr>";
                echo "<tr><td>Profesión:</td><td>" . $_POST['profesion'] . "</td></tr>";
                echo "<tr><td>Reside en la zona:</td><td>" . $_POST['reside'] . "</td></tr>";
                echo "</table>";
            }
        }
    ?>
</body>
</html>



