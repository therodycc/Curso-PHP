<?php 
$cursos = $arrayName = array('html','css','java','python');
$cursos[2] = 'Lo cambiamos';
echo $cursos[2];

//agregar datos al array
$cursos[4] = 'nuevodato';
print_r($cursos);
//conteo de elementos del array
echo count($cursos);
?>