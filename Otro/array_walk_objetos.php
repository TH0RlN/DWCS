<?php

class Alumno
{
    private $nombre;
    private $apellido;
    private $nota;
    
    public function __construct(string $nombre, string $apellido, int $nota)
    {
        $this->nombre   = $nombre;
        $this->apellido = $apellido;
        $this->nota     = $nota;
    }
    
    public function __set(string $name, mixed $value)
    {
        $this->$name = $value;
    }
    
    public function __get(string $name)
    {
        return $this->$name;
    }
}

function masUno(Alumno &$alumno)
{
    if ($alumno->nombre == 'Pepe')
        $alumno->nota++;
}

function subeNota(array &$alumnos)
{
    array_walk($alumnos, 'masUno');
}

$alumnos = array(new Alumno('Pepe', 'Gotera', 9),
                new Alumno('Luis', 'Fraile', 7),
                new Alumno('Pepe', 'Emme', 4),
                new Alumno('Otilio', 'Limosna', 2),
                );

foreach ($alumnos as $alumno)
    var_dump($alumno);

subeNota($alumnos);

echo "========================================================================";

foreach ($alumnos as $alumno)
    var_dump($alumno);

