<?php
class Alumno
{
    private $nombre;
    private $apellido;
    private $dni;
    
    public function __construct(string $nombre, string $apellido, string $dni)
    {
        $this->nombre   = $nombre;
        $this->apellido = $apellido;
        $this->dni      = $dni;
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

$alumno = new Alumno('Juan', 'Garcia', '123456789A');

echo $alumno->nombre . '<br>';
$alumno->nombre .= ' Alberto';
echo $alumno->nombre . '<br>';



