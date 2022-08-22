<?php

class Curso{

public function __construct($Curso, $Nombre, $IDmateria, $Nota) 
{
$this -> curso = $Curso;
$this -> nombre = $Nombre;
$this -> materia = $IDmateria ; 
$this -> nota = $Nota;

}
 public function getCurso()
{  
   return $this->curso;
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

$curso = new Curso('primero medio','Juanito','Matematicas','7.0');


echo "Curso: ", nl2br($curso->getCurso()."\n");

echo "Nombre Alumno: ", nl2br($curso->getNombre()."\n");

echo "Materia: ", nl2br($curso->getIDmateria()."\n");

echo "Nota: ", $curso->getNota()."\n";