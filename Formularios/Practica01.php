<html> 
    <form action="Practica01.php" method="POST">
        <label for="nota">Introduce tu nota: <input type="number" name="nota" min="0" max="10" step="0.25"></label>
        <input type="submit" value="Enviar">
    </form>
    
    <?php
    if (!(empty($_POST)))
    {
        $notas = array('suspenso', 'suspenso', 'suspenso', 'suspenso', 'suspenso', 'suficiente', 'bien', 'notable', 'notable', 'sobresaliente', 'matricula de honor');
        echo '<p>Su nota de ' . $_POST['nota'] . ' lo califica para un: ' . $notas[floor($_POST['nota'])];
    }
    ?>
</html>



