<?php 

//variables scope

function estudiantes(){
    $edad = 23;
    echo $edad;
}

estudiantes(); 

function estudiantes2(){
    $edad = 28;
    return $edad;
}
echo estudiantes2(); 

/*************************************************** */
$edad = 11;
function estudiantes3(){
global $edad;
    echo $edad;
}

estudiantes3(); 

?>