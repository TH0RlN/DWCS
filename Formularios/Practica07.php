<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 07</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="bdate">Tu cumpleaños </label><input type="date" name="bdate" id="bdate" value="<?php if (!empty ($_POST['bdate'])) echo $_POST['bdate'];?>">
        <input type="submit" name="submit">
    </form>
    <?php
        define('SECONDS_YEAR', 31556952);
        define('SECONDS_MONTH', 2628000);
        define('SECONDS_DAY', 86400);
        
        if (!empty($_POST['submit']) && !empty($_POST['bdate']))
        {
            $date = explode('-', $_POST['bdate']);
            if (checkdate($date[1], $date[2], $date[0]))
            {
                $today  = getdate()[0];
                $bdate  = strtotime($_POST['bdate']);
                
                if ($bdate <= $today)
                {
                    $age    = $today - $bdate;
                    echo "Tienes " . floor($age / SECONDS_YEAR) . " años, " . floor($age % SECONDS_YEAR / SECONDS_MONTH) . " meses y " . floor($age % SECONDS_YEAR % SECONDS_MONTH / SECONDS_DAY) . " días.";
                }
                else
                {
                    echo '<p>¿Naciste en el futuro?</p>';
                    echo '<p>Piensa mejor tu fecha de nacimiento</p>';
                }
            }
        }
    ?>
</body>
</html>
