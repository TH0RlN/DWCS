<?php
    $str2 = "";
    if (!empty($_POST['delete']) && empty($_POST['submit']) && !empty($_COOKIE))
    {
        foreach ($_COOKIE as $key => $value)
        {
            setcookie($key, "", time() - 1);
            unset($_COOKIE[$key]);
        }
    }
    if (!empty($_POST['submit']) && empty($_POST['delete']))
    {    
        if (!empty($_POST['name']) && !empty($_POST['value']))
        {
            if(!empty($_POST['time']) && is_numeric($_POST['time']))
                setcookie(preg_replace('/[ ,;]+/', '',$_POST['name']), $_POST['value'], time() + $_POST['time']);
            else
                setcookie(preg_replace('/[ ,;]+/', '',$_POST['name']), $_POST['value']);
        }
        else
        {
            $str2 = "<br><p>No ha introducido correctamente los datos</p>";
        }
    }

    if (!empty($_COOKIE))
    {
        $str = "<table>";
        foreach ($_COOKIE as $key => $value)
        {
            $str .= "<tr><th>" . $key . "</th><td>" . $value . "</td></tr>";
        }
        $str .= "</table>";
    }
    else
        $str = "<h3>No hay cookies que mostrar</h3>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 01</title>
</head>
<body>
    <table>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <tr><td><label for="name">Nombre: </label></td><td><input type="text" name="name" id="name"></td></tr>
            <tr><td><label for="value">Valor: </label></td><td><input type="text" name="value" id="value"></td></tr>
            <tr><td><label for="time">Tiempo: </label></td><td><input type="text" name="time" id="time"></td></tr>
            <tr><td><input type="submit" value="Borrar Cookies" name="delete"></td><td><input type="submit" value="Enviar" name="submit"></td></tr>
        </form>
    </table>
        
    <?php echo $str . $str2; ?>
</body>
</html>
