
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra</title>
    <style>
        body
        {
            background-color: <?php

            function allCheck() : bool
            {
               if (!isset($_POST['colorR']))
                    return false;
                if (!isset($_POST['colorG']))
                    return false;
                if (!isset($_POST['colorB']))
                    return false;
                if (!allNumeric())
                    return false;
                return true; 
            }

            function allNumeric() : bool
            {
                if (!is_numeric($_POST['colorR']))
                    return false;
                if (!is_numeric($_POST['colorG']))
                    return false;
                if (!is_numeric($_POST['colorB']))
                    return false;
                return true;
            }
            
            
            $check = false;
            if (!empty($_POST['submit']) && allCheck())
            {
                $r = $_POST['colorR'] < 0 ? 0 : ($_POST['colorR'] > 255 ? 255 : $_POST['colorR']);
                $g = $_POST['colorG'] < 0 ? 0 : ($_POST['colorG'] > 255 ? 255 : $_POST['colorG']);
                $b = $_POST['colorB'] < 0 ? 0 : ($_POST['colorB'] > 255 ? 255 : $_POST['colorB']);

                echo "#" . sprintf("%02s", dechex($r)) . sprintf("%02s", dechex($g)) . sprintf("%02s", dechex($b));
            }
            else
            {
                $check = true;
                echo "#ffffff";
            }
        ?>
        }
    </style>
</head>
<body>
    <?php
        if ($check)
        {
            echo "<p>No ha introducido todos los datos correctamente</p>";
        }
    ?>
</body>
</html>

