<?php
/**
 * Created by PhpStorm.
 * User: hvaras
 * Date: 27-08-14
 * Time: 18:39
 */


/**
 * Servidor no cuenta con PDO ¬¬'
 */
/*$host = 'localhost';
$dbname = 'clientep_cirquedusoleil';
$usuario = 'clientep_cirque';
$password = '5#@g,8F>';

try{
    $conn = new PDO('mysql:host=localhost;dbname=entel_cirquedusoleil', $usuario, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "ERROR: " . $e->getMessage();
}*/





/*******      DEV     ***************/
/*$conn = new mysqli("localhost", "root", "123456","entel_cirque");
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}*/


/*******      PROD     ***************/
$conn = new mysqli("localhost", "clientep_cirque", "5#@g,8F>","clientep_cirquedusoleil");
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}