<?php

//isset() es la funcion que al colocar una variable en los parentecis nos dice si ah sido seteada o existe  y
// es diferente a null
/*$edad = 18;
echo isset($edad);
*/
$edad = 18;
$edad = (isset($edad)) ? $edad : 'El usuario no establecio du edad';

echo "<br>Edad: $edad";

//se crea la variable y antes de el signo de interrogacion se pregunta por una condicion o se pone una condicion
// y luego del signo de interrogacion se coloca lo que pasa si secumple esta condicion o lo que va a almacenar
// esta variable si se cumple, y luego de los dos puntos (:) se coloca lo que ocurre si esta no se cumple
//