<?php

class Estudiante{

public function __construct($Nombre, $Curso )
{
$this -> nombre = $Nombre;
$this -> curso = $Curso ; 
}

public function getNombre()
{
  return $this->nombre;
}

public function getCurso()
{
   return $this->curso;
}
};

$estudiante = new Estudiante('Juanito','primero medio');


echo "Nombre Alumno: ", nl2br($estudiante->getNombre()."\n");


echo "Curso: ", $estudiante->getCurso()."\n";