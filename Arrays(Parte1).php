<?php 
//arreglo de dias
$dias = array('lunes <br>' ,'martes<br>', 'miercoles<br>', 'jueves' );
//indica las caracteristicas excenciales de la variable
echo 'hola hoy es ' .$dias[0];
echo 'hola hoy es ' .$dias[3];

//cantidad de letras, posicion y nombre
var_dump($dias);
//solo la  posicion y nombre
print_r($dias);


/************************************************ */
$estudiantes = array('nombre' => 'rody', 'apellido' => 'Castro', 'edad' => 19);

print_r($estudiantes);


echo "Mi nombre es " .$estudiantes['nombre'];
echo "apellido" .$estudiantes['apellido'] ;
echo "Mi edad es " .$estudiantes['edad'] ;


?>