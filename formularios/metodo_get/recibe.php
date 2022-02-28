<?php

//

//print_r($_GET);

/*if(!$_GET) {
    header('location: http://localhost/formularios/metodo_post/');
}

$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];

echo "$nombre <br>";
echo "$sexo <br>";
echo "$year <br>";
echo "$terminos <br>";*/

// esta validacion se realiza para ver o saber si los metodos si se enviaron y por que metodo

/*if($_SERVER['REQUEST_METHOD'] == 'GET') {

    echo 'se enviaron por get';

}else {

    echo 'se enviaron por post';

}*/

//otra forma de comprobar que los datos si llegaron

if(isset($_POST['submit'])) {
    echo 'se han enviado los datos correctamente';
}


