<?php

require_once('../../../model/conexion/conexion.php');
require_once('../../../model/querys/update/user.php');
if (session_status() == PHP_SESSION_NONE) {
        session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if( isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['pass'])){
                
                if( !empty($_POST['name']) && !empty($_POST['mail'])){
                        
                        $name = trim($_POST['name']);
                        $mail = trim($_POST['mail']);
                        $pass = md5(trim($_POST['pass']));
                        $user = $_SESSION['user'];

                        $model = new queriesPut();
                        if(trim($_POST['pass'])==''){
                           $model->updateUser($name, $mail, $user);
                        }else{
                           $model->updateUserFull($name, $mail,$pass, $user);
                        }
                        echo true;
                        
                }else{
                        echo "no se informaron los campos solicitados";
                }

        }else{
                echo "Envio incorrecto de información";
        }

}
