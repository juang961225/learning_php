<?php


/**
 * @param {Integer} $num - initialize number for sum
 * @param {Integer} $num2 - second number for sum
 * @return {Integer} mixed - result sum
 * Example - sumas(1 + 2) return 3
 */
function sumTwoNumber($num, $num2,  int $num3 = 0)
{

    return $num + $num2 + $num3;

}

print_r(sumTwoNumber(1, 2, 2));



//la funcion es un fragmento de codigo que al llamarlo utilizamos para poder utilizar lo que lleva a dentro

function saludo() {
    echo 'Hola saludo';
}

saludo();

// parametros en las funciones

$name = 'juan';

function saludoCliente($nombre = '') {
    echo "Hola saludo $nombre";
}

saludoCliente($name);
saludoCliente();

//retornar valores en las funciones

function sumar($number1, $number2) {
    $resultado = $number1 + $number2;
    return $resultado;
}

$aux = sumar(1, 2);
echo  $aux;