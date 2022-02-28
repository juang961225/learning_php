<?php

if (!$_POST) {
    header('location: http://localhost/formularios/metodo_post/');
} else {
//print_r($_POST);
    echo "<br>";
    $nombre = $_POST['nombre'];
    echo $nombre;
}


?>

