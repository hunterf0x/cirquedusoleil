<?php
/**
 * Created by PhpStorm.
 * User: hvaras
 * Date: 27-08-14
 * Time: 18:31
 */

session_start();
require('db/db.php');


$op =  isset($_GET['op']);

switch($op){
    case 'validPin':
        $pin = $_GET['pin'];
        if($pin){


            /*PDO*/
            /*$sql= "SELECT * FROM cliente WHERE pin = '$pin'";
            $stmt = $conn->query($sql);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);*/



            $sql = 'SELECT * FROM cliente WHERE pin = "'.$pin.'"';
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if($row['email']){
                echo json_encode($row);
            }else
                echo 0;
        }

        $conn->close();
        break;
    default:
        $email =  $_POST['email'];
        $pregunta = $_POST['pregunta'];
        $respuesta = $_POST['respuesta'];

        if($email){
            if($pregunta==1){
                /*PDO*/
                /*$sql = "INSERT INTO trivia (email,r1) VALUES (:email,:r1)";
                $q = $conn->prepare($sql);
                $q->execute(array(':email'=>$email,
                    ':r1'=>$respuesta));
                $ultimo = $conn->lastInsertId('id');*/


                $sql = 'INSERT INTO trivia (email, r1) VALUES ("'.$email.'","'.$respuesta.'")';
                $result = $conn->query($sql);
                $ultimo = $conn->insert_id;
                $_SESSION['current_user']  = $ultimo;


            }else{

                $current_user = $_SESSION['current_user'];

                $sql = "SELECT * FROM trivia WHERE id = $current_user";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();

                /*PDO*/
                /*$sql= "SELECT * FROM trivia WHERE id = $current_user";
                $stmt = $conn->query($sql);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);*/

                /*PDO*/
                /*$sql = "UPDATE trivia SET r$pregunta=? WHERE id=?";
                $q = $conn->prepare($sql);
                $q->execute(array($respuesta,$row['id']));*/


                $sql_u = 'UPDATE trivia SET r'.$pregunta.'= '.$respuesta.' WHERE id= "'.$row['id'].'"';
                $conn->query($sql_u);
            }
            $conn->close();
        }
        echo true;
        break;

}








