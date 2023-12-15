<?php

require_once('../../../model/conexion/conexion.php');
require_once('../../../model/querys/create/registro.php');
if (session_status() == PHP_SESSION_NONE) {
        session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if( isset($_POST['name']) && isset($_POST['username']) && isset($_POST['mail']) && isset($_POST['pass'])){
                
                if( !empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['mail']) && !empty($_POST['pass'])){
                        
                        $name = trim($_POST['name']);
                        $username = trim($_POST['username']);
                        $mail = trim($_POST['mail']);
                        $pass = md5(trim($_POST['pass']));

                        $model = new Create();

                        $consulta = $model->inserUser($name, $username, $mail, $pass);
                
                        echo $consulta;
                        
                }else{
                        echo "no se informaron los campos solicitados";
                }

        }else{
                echo "Envio incorrecto de información";
        }

}
