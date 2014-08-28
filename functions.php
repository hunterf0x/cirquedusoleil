<?php
/**
 * Created by PhpStorm.
 * User: hvaras
 * Date: 27-08-14
 * Time: 18:31
 */

session_start();
require('db/db.php');

$email =  $_POST['email'];
$pregunta = $_POST['pregunta'];
$respuesta = $_POST['respuesta'];


if($pregunta==1){
    $sql = "INSERT INTO trivia (email,r1) VALUES (:email,:r1)";
    $q = $conn->prepare($sql);
    $q->execute(array(':email'=>$email,
        ':r1'=>$respuesta));

    $ultimo = $conn->lastInsertId('id');


    $_SESSION['current_user']  = $ultimo;


}else{

    $current_user = $_SESSION['current_user'];

    $sql= "SELECT * FROM trivia WHERE id = $current_user";
    $stmt = $conn->query($sql);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);




    $sql = "UPDATE trivia SET r$pregunta=? WHERE id=?";
    $q = $conn->prepare($sql);
    $q->execute(array($respuesta,$row['id']));
}



echo true;
