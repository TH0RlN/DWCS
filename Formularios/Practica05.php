<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 05</title>
    <style>
        table
        {
            margin: 20px
        }
    </style>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
        <table>
            <tr>
                <td>Matemáticas</td><td><input type="checkbox" name="subject[]" id="math" value="mat"></td>
            </tr>
            <tr>
                <td>Lengua</td><td><input type="checkbox" name="subject[]" id="lang" value="lan"></td>
            </tr>
            <tr>
                <td>Biología</td><td><input type="checkbox" name="subject[]" id="bio" value="bio"></td>
            </tr>
            <tr>
                <td>Física</td><td><input type="checkbox" name="subject[]" id="physc" value="phy"></td>
            </tr>
            <tr>
                <td>Química</td><td><input type="checkbox" name="subject[]" id="chem" value="che"></td>
            </tr>
            <tr>
                <td>Tecnología</td><td><input type="checkbox" name="subject[]" id="tech" value="tec"></td>
            </tr>
            <tr>
                <td>Informática</td><td><input type="checkbox" name="subject[]" id="tic" value="tic"></td>
            </tr>
            <tr>
                <td>Inglés</td><td><input type="checkbox" name="subject[]" id="eng" value="eng"></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" value="Enviar" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
        function areKey(array $array, array $arr_key) : bool
        {
            foreach ($array as $key)
                if (!array_key_exists($key, $arr_key))
                    return false;
            
            return true;
        }
        
        if (!empty($_POST['submit']))
        {
            $str = "";
            
            if (!empty($_POST['subject']))
            {
                $subjects    = array(
                    "mat" => "Matemáticas",
                    "lan" => "Lengua",
                    "bio" => "Biología",
                    "phy" => "Física",
                    "che" => "Química",
                    "tec" => "Tecnología",
                    "tic" => "Informática",
                    "eng" => "Inglés"
                );
                
                if (areKey($_POST['subject'], $subjects))
                {
                    $str    .= "<table cellpadding='5' cellspacing='2'><tr><th></th><th>Asignatura</th></tr>";
                    $i      = 1;

                    foreach ($_POST['subject'] as $value)
                        $str .= "<tr><td>" . $i++ . "</td><td>" . $subjects[$value] . "</td></tr>";

                    $str .= "</table>";
                }
                else
                {
                    $str .= "<p>Existen datos erróneos en el formulario</p>";
                }
                
            }
            else
            {
                $str .= "<p>Seleccione al menos una asignatura</p>";
            }
            echo $str;
        }
    ?>
</body>
</html>