<?php 

/*************************************************/
$amigos  = array('Rody','mateo','ronaldo','matias','ramon','jerry');
$funcion = array_chunk($amigos,2);
print_r($funcion);

//para eliminar todos los elementos de un array des
//despues de una determinada posicion usamos

$funcion2 = array_slice($amigos,4);
print_r($funcion2);

/***********************************************/
$frutas = array('manzana','uva','pera');
$vegetales = array('Aji','tomate','repollo');

$unir = array_merge($frutas,$vegetales);
print_r($unir);

//para eliminar el ultimo elemento de un array usamos array_pop
array_pop($amigos);
print_r($amigos);




/*******************************************/
//para hacer una opcion de buscar en el array hacemos lo siguiente

$buscar = array_search('manzana',$frutas);
print_r($buscar);

/******************************************/
//invertir un array

$invertido = array_reverse($frutas);
print_r($invertido);




?>