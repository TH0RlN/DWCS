<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 04</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="notas"></label><input type="text" name="notas" id="notas" value="<?php if (isset($_POST['notas'])) echo $_POST['notas']; ?>">
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>
<?php
    if (!empty($_POST['submit']))
    {
        if (empty($_POST['notas']))
        {
            echo "<p>Introduzca las notas</p>";
        }
        else
        {
            $notas = explode(" ", $_POST['notas']);

            $check = false;
            foreach ($notas as $value)
                if (!is_numeric($value))
                    $check = true;

            if ($check)
            {
                echo "<p>Las notas deben ser introducidas a la vez, separadas por espacios y sin otros caracteres</p>";
            }
            else
            {
                $check = false;
                foreach ($notas as $value)
                    if ($value > 10 || $value < 0)
                        $check = true;
                if($check)
                {
                    echo "<p>Las notas deben estar comprendidas entre 0 y 10</p>";
                }
                else
                {
                    $sob    = 0;
                    $sus    = 0;
                    $sum    = 0;
                    $count  = 0;
                    foreach ($notas as $value)
                    {
                        $sob += $value >= 9 ? 1 : 0;
                        $sus += $value <  5 ? 1 : 0;
                        $sum += $value;
                        $count++;
                    }
                    echo "<table cellpadding='5' cellspacing='2'>"
                    . "<tr><td>Sobresalientes: </td><td>" . $sob . "</td></tr>"
                    . "<tr><td>Suspensos: </td><td>" . $sus . "</td></tr>"
                    . "<tr><td>Media: </td><td>" . sprintf("%.2f", $sum / $count) . "</td></tr>";
                }
            }
        }
    }

