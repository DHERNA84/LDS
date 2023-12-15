<?php

class queriesGet {
    public function showUser($user) {
        $resultado = array();
        $modelo = new conexion();
        $conexion = $modelo->get_conexion();

        $sql = "SELECT * FROM usuarios WHERE CodigoUsuario = :user OR Email = :mail";

        $result = $conexion->prepare($sql);
        $result->bindParam(":user", $user);
        $result->bindParam(":mail", $user);

        $result->execute();

        while ($f = $result->fetch(PDO::FETCH_ASSOC)) {
            $resultado[] = $f;
        }

        return $resultado;
    }
}

?>
