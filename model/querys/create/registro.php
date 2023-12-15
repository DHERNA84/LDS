<?php

class Create{
    public function inserMagazine($url,$title,$txt,$user){

        $resultado=null;
        $model=new conexion();
        $consulta=$model->get_conexion();
        $lRet=False;

        $sql="INSERT INTO imagenes (URLImagen,title,Texto,UsuarioCreador) 
        VALUES (:url,:title,:txt,:user)";
        $result=$consulta->prepare($sql);
        $result->bindParam(':url',$url);
        $result->bindParam(':title',$title);
        $result->bindParam(':txt',$txt);
        $result->bindParam(':user',$user);

        if($result){
              
            $result->execute();
                
            $lRet = TRUE;

        }

        return $lRet;
    }

    public function inserUser($name, $username, $mail, $pass){

        $resultado=null;
        $model=new conexion();
        $consulta=$model->get_conexion();
        $lRet=False;

        $sql="INSERT INTO usuarios (name,CodigoUsuario,Email,Password) 
        VALUES (:name,:CodigoUsuaio,:Email,:Password)";
        $result=$consulta->prepare($sql);
        $result->bindParam(':name',$name);
        $result->bindParam(':CodigoUsuaio',$username);
        $result->bindParam(':Email',$mail);
        $result->bindParam(':Password',$pass);

        if($result){
              
            $result->execute();
                
            $lRet = TRUE;

        }

        return $lRet;
    }
}
