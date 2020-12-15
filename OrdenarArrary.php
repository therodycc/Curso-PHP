<?php 

$amigos = array('jose','maria','juan','pedro');

//este ordena los nombres sin cambiar su posiciones es decir 0,1,2,3,4,etc...
arsort($amigos);
print_r($amigos);

//a-z
asort($amigos);
print_r($amigos);

//z-a
rsort($amigos);
print_r($amigos);



?>