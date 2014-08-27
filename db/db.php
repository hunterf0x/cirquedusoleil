<?php
/**
 * Created by PhpStorm.
 * User: hvaras
 * Date: 27-08-14
 * Time: 18:39
 */

$host = 'localhost';
$dbname = 'entel_cirque';
$usuario = 'root';
$password = '123456';

try{
    $conn = new PDO('mysql:host=$host;dbname=$dbname', $usuario, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "ERROR: " . $e->getMessage();
}