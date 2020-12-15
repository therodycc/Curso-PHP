<?php 
//Variables globales
$n1 =6 ;
$n2 = 4;
 
function sumar()
{
    $GLOBALS ['s'] =  $GLOBALS ['n1'] +  $GLOBALS ['n2'];
}
ECHO '<BR>';
sumar();
echo $s .'<BR>';

//RUTA POR DEFECTOO
echo $_SERVER['PHP_SELF'].'<BR>';
//NOMBRE DEL SERVIDOR
echo $_SERVER['SERVER_NAME'].'<BR>';
//RUTA ESPECIFICA
echo $_SERVER['HTTP_REFERER'];






?>