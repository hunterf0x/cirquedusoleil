<?php
/**
 * Created by PhpStorm.
 * User: hvaras
 * Date: 27-08-14
 * Time: 18:31
 */

require('db/db.php');

$email =  $_POST['email'];
$pregunta = $_POST['pregunta'];
$respuesta = $_POST['respuesta'];


/*if($pregunta==1){
    $sql = "INSERT INTO trivia (email,r1) VALUES (:email,:r1)";
    $q = $conn->prepare($sql);
    $q->execute(array(':email'=>$email,
        ':r1'=>$respuesta));
}else{


    $sql = "UPDATE trivia SET r'.$pregunta.'=? WHERE email=?";
    $q = $conn->prepare($sql);
    $q->execute(array($respuesta,$email));
}*/



echo true;
