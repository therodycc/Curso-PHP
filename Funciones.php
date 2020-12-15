<?php 

//funciones 
/************************************************** */
function Estudiante($nombre)
{
    echo "Nuevo estudiante $nombre" .'<br>';
}
Estudiante('Victor');
Estudiante('Rody');
Estudiante('Candida');
Estudiante('Rosy');


/************************************************** */
function Suma($a, $b)
{
        $resultado = $a + $b;
        Echo "Resultado de la suma de $a + $b = $resultado" .'<br>';
}

Suma(5,5);



/************************************************** */

function Resta($c,$d)
{
    return $c - $d;

}

$resultado2  = Resta(4,3);
echo " El resultado de la resta es: $resultado2" .'<br>';


/************************************************** */

function Resta2($f,$g)
{
    echo $f - $g;

}

$resultado3  = Resta2(44,3) .'<br>';


?>