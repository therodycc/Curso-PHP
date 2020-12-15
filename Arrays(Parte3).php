<?php 
$semana[0] = '<br>lunes<br>';
$semana[1] = 'Martes<br>';
$semana[2] = 'Miercoles<br>';
$semana[3] = 'Jueves';
$semana[4] = '<br>Viernes<br>';

echo 'cantidad de elementos del array  ' .count($semana);


for ($i = 0; $i < count($semana) ; $i++ ) { 
    echo $semana[$i];

    if ($semana[$i] == 'Jueves') {
        echo '    ------curso de php';
    }
}



?>