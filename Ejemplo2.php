<?php

// calcula perímetro de rectángulo:  p = 2 * (l+a)
function perimetro($longitud, $ancho) {
    $perimetro = 2 * ($longitud + $ancho);
    return "El perímetro de un rectángulo de longitud $longitud unidades y ancho "
    . "$ancho unidades es: $perimetro unidades";
}

echo perimetro(4, 2); // invocación con argumentos
?> 

