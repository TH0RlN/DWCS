<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 08</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <p>Selecciona una ciudad:</p>
        <select name="city" id="city">
            <option style="display: none;"></option>
            <option value="tky">Tokio</option>
            <option value="mcd">Ciudad de Méjico</option>
            <option value="nyc">Ciudad de Nueva York</option>
            <option value="bby">Bombay</option>
            <option value="seu">Seúl</option>
            <option value="shg">Shanghái</option>
            <option value="lao">Lagos</option>
            <option value="bna">Buenos Aires</option>
            <option value="cai">Cairo</option>
            <option value="lon">Londres</option>
        </select>
        <input type="submit" name="submit" value="Enviar">
    </form>
    
    <?php
        define ('CITIES', array(
            "tky"           => "Tokio",
            "mcd"           => "Ciudad de Méjico",
            "nyc"           => "Ciudad de Nueva York",
            "bby"           => "Bombay",
            "seu"           => "Seúl",
            "shg"           => "Shanghái",
            "lao"           => "Lagos",
            "bna"           => "Buenos Aires",
            "cai"           => "Cairo",
            "lon"           => "Londres",
        ));
        define ('COUNTRIES', array(
            "Japón"         => "tky",
            "Méjico"        => "mcd",
            "EEUU"          => "nyc",
            "India"         => "bby",
            "Corea"         => "seu",
            "China"         => "shg",
            "Nigeria"       => "lao",
            "Argentina"     => "bna",
            "Egipto"        => "cai",
            "Gran Bretaña"  => "lon",
        ));
        
        if (!empty($_POST['submit']))
        {
            if (!empty($_POST['city']))
            {
                if (array_key_exists($_POST['city'], CITIES))
                {
                    $country = array_search($_POST['city'], COUNTRIES);
                    if ($country)
                    {
                        echo "<p>". CITIES[$_POST['city']] . " está en " . $country . "</p>";
                    }
                    else
                    {
                        echo "<p>No se encuentra el país</p>";
                    }
                }
                else
                {
                    echo "<p>Ha introducido un dato no válido</p>";
                }
            }
            else
            {
                echo "<p>Por favor seleccione una ciudad</p>";
            }
        }
    ?>
</body>
</html>