<?php

class Nota{

public function __construct($Nombre, $IDmateria, $Nota )
{
$this -> nombre = $Nombre;
$this -> materia = $IDmateria ; 
$this -> nota = $Nota;
}

public function getNombre()
{
  return $this->nombre;
}

public function getIDmateria()
{
   return $this->materia;
}
public function getNota()
{
   return $this->nota;
}
};

$nota = new Nota('Juanito','Matematicas','7.0');


echo "Nombre Alumno: ", nl2br($nota->getNombre()."\n");

echo "Materia: ", nl2br($nota->getIDmateria()."\n");

echo "Nota: ", $nota->getNota()."\n";