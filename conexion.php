<?php
   error_reporting(E_ALL);
   ini_set('display_errors', '1');

?>

<?php

    //Parametro de conexión a la BD
    //DEFINE('USER', 'root');
    //DEFINE('PW', '');
    //DEFINE('HOST', 'localhost');
    //DEFINE('BD', 'bd_zapateria');

    //Parametro de conexión a la BD
    /*DEFINE('USER', 'if0_37434990');
    DEFINE('PW', 'zfkOdyrDuvVx6');
    DEFINE('HOST', 'sql102.infinityfree.com');
    DEFINE('BD', 'if0_37434990_zapateria');*/

    // Conexíon a la BD
    $conexion = mysqli_connect('sql210.infinityfree.com', 'if0_37614097','Danielsteven26', 'if0_37614097_Prom2024');

    // Establecer caracteres para el hosting
    mysqli_set_charset($conexion, "utf8mb4");

    // verificamos la conexion con la BD
    if(!$conexion)
    {
        die("La conexion a la BD fallo: " + mysqli_error($conexion));
    }
    /*else
     {
        die("conexion exitosa a  BD");
     }*/
?>