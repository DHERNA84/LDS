<?php

class queriesPut {
    public function updateUser($name,$mail,$user) {
        $resultado = null;
        $modelo = new conexion();
        $conexion = $modelo->get_conexion();

        $sql="UPDATE usuarios SET name=:name, Email=:mail WHERE CodigoUsuario=:user";
		$result=$conexion->prepare($sql);
		$result->bindparam(":name",$name);
		$result->bindparam(":mail",$mail);
        $result->bindparam(":user",$user);

		$result->execute();
    }

    public function updateUserFull($name,$mail,$pass,$user) {
        $resultado = null;
        $modelo = new conexion();
        $conexion = $modelo->get_conexion();

        $sql="UPDATE usuarios SET name=:name, Email=:mail, Password=:pass WHERE CodigoUsuario=:user";
		$result=$conexion->prepare($sql);
		$result->bindparam(":name",$name);
		$result->bindparam(":mail",$mail);
        $result->bindparam(":user",$user);
        $result->bindparam(":pass",$pass);

		$result->execute();

    }
}

?>
