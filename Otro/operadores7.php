<HTML>
    <HEAD>
        <TITLE>Operadores</TITLE>
    </HEAD>
    <BODY>
    <CENTER>
        <H2>Operador de omisión de errores @</H2>
        <?php
        $a = 10;
        $b = 5;
        // la división por 0 genera un error pero con este operador la ejecución
        // continúa sin problemas
        @$resultado = $a / $b; //Poner y quitar el operador
        $texto1 = "El resultado de $a/$b es: $resultado<BR>";
        $array1 = error_get_last();
        // comprobamos si se ha producido un error y si es así mostramos el mensaje de error
        echo (empty($array1)) ? $texto1 : "Se ha producido un error:<B> de tipo " . $array1["message"] . "</B>";
        ?>
    </CENTER>
</BODY>
</HTML>
