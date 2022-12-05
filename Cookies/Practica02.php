<?php
    session_start();
    $str = "<p>";
    
    if (!empty($_POST['clear']) && empty($_POST['submit']))
    {
        session_unset();
        session_destroy();
        $str .= "Sesión borrada";
    }
    if (!empty($_POST['submit']) && !empty($_POST['comment']) && empty($_POST['clear']))
    {
        $_SESSION['comment'][] = $_POST['comment'];
    }
    if (!empty($_SESSION['comment']))
    {
        foreach ($_SESSION['comment'] as $value)
        {
            $str .= $value . '<br>';
        }
    }
    $str .= "</p>";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 02</title>
</head>
<body>
    <form action="<?php htmlentities($_SERVER['PHP_SELF'])?>" method="post">
        <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Escribe aquí tu comentario"></textarea>
        <input type="submit" value="Enviar" name="submit">
        <input type="submit" value="Borrar Sesión" name="clear">
    </form>
    <?php echo $str;?>
</body>
</html>

