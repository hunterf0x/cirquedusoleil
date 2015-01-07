<?php
/**
 * Created by PhpStorm.
 * User: hvaras
 * Date: 27-08-14
 * Time: 18:39
 */

$host = 'localhost';
$user = '';
$password = '';
$database = '';

/*******      Conexión     ***************/
$conn = new mysqli("$host", "$user", "$password","$database");
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}