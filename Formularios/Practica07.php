<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 07</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="bdate">Tu cumpleaños </label><input type="date" name="bdate" id="bdate">
        <input type="submit" name="submit">
    </form>
    <?php
        if (!empty($_POST['submit']))
            echo $_POST['bdate'];
    ?>
</body>
</html>
