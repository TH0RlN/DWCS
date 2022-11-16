<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 04</title>
    <style>
        table
        {
            text-align: center
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="numwros"></label><input type="text" name="numeros" id="numeros" value="<?php if (isset($_POST['numeros'])) echo $_POST['numeros']; ?>">
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>
<?php
    function is_prime(int $num) : bool
    {
        for ($i = 1; $i < $num / 2; $i++)
            if ($num % $i == 0)
                return false;
        return true;
    }

    if (!empty($_POST['submit']))
    {
        $str = "";
        if (empty($_POST['numeros']))
        {
            $str .= "<p>Introduzca los números</p>";
        }
        else
        {
            $numeros = explode(",", $_POST['numeros']);

            $check = false;
            foreach ($numeros as $value)
                if (!is_numeric($value))
                    $check = true;

            if ($check)
            {
                $str .= "<p>Los numeros deben ser introducidos a la vez, separados por comas y sin otros caracteres</p>";
            }
            else
            {
                $str .= "<table cellpadding='5' cellspacing='2'><tr><th>Número</th><th>Primo</th></tr>";
                foreach ($numeros as $value)
                {
                    $str .= "<tr><td>" . $value . "</td>";
                    if ($value != floor($value))
                    {
                        $str .= "<td>No entero</td>";
                    }
                    else
                    {
                        $str .= "<td>" . (is_prime($value) ? "Primo" : "No primo") . "</td>";
                    }
                    $str .= "</tr>";
                }
                $str .= "</table>";
            }
        }
        
        echo $str;
    }

