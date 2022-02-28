<?php
try
{
  $conexion = new PDO('mysql:host=localhost;dbname=prueba consola','root','');
  echo "Conexion OK";

  $result = $conexion->query('SELECT * FROM usuarios');

  foreach ($result as $fila)
  {
     print_r($fila->ID);
  }

} catch(PDOException $e)
{
    echo "error: ".$e->getMessage();
}



?>


