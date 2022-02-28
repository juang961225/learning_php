<?php
//if(condicion) {
//    //intrucciones
//}
/*Operadores de comparacion:

 == Igualdad
 < Menor que
 > Mayor que
 <= Menor o igual que
 >= Mayor o igual que
 != Diferente
 ! Negacion

*/

/* Operadores logicos:

&& -Evaluacion de que se cumplan ambas
||, OR Evaluacion de que se cumpal almenos una de las dos condiciones
xor - Evalcuacion de que se cumpla solo cuna de las condiciones y no ambas

*/
$edad = 18;
$nombre = 'juan';

if($edad >= 18 && $nombre == 'juan') {
    echo "<h1>Bienvenido $nombre</h1>";
}

if($edad < 18 || $nombre == 'juan') {
    echo "<h1>sentencia OR</h1>";
}

//sentencia else o si no

if($edad < 18) {
    echo 'sentencia else esto es el if';
} else {
    echo 'No tienes la edad adecuada';
}
    // sentencia switch funciona colocandole una variable y si en algun case sale algo igual a la variable ps entra ahi
    // y con break corta o mata que siga en switchy defaul es si no se encuentra nasy despues de defauld o case van
    // dos puntos (:) no punto y coma

$mes = 'Enero';

switch ($mes) {
    case 'Diciembre':
    echo "</br>Feliz navidad";
        break;

    case 'Enero':
        echo "<h2>Feliz Año nuevo</h2>";
        break;

    default:
        echo 'en este mes no se celebra nasa';
        break;
}