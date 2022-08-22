<?php

class Materia{

public function __construct($IDmateria, $Nombre )
{
$this -> materia = $IDmateria ; 
$this -> nombre = $Nombre ;
}


public function getIDmateria()
{
   return $this->materia;
}

public function getNombre()
{
   return $this->nombre;
}
};

$materia = new Materia('Matematicas','Juanito');


echo "Materia: ", nl2br($materia->getIDmateria()."\n");

echo "Nombre Alumno: ", $materia->getNombre()."\n";