<?php

class queriesNot {
    public function showNot($pagina, $porPagina = 10) {
        $resultado = null;
        $modelo = new conexion();
        $conexion = $modelo->get_conexion();

        $inicio = ($pagina - 1) * $porPagina;

        $sql = "SELECT imagenes.*, usuarios.name
                FROM imagenes
                LEFT JOIN usuarios ON imagenes.UsuarioCreador = usuarios.CodigoUsuario
                ORDER BY imagenes.FechaCreacion DESC
                LIMIT $inicio, $porPagina";

        $result = $conexion->prepare($sql);
        $result->execute();

        while ($f = $result->fetch()) {
            $resultado[] = $f;
        }

        return $resultado;
    }
}

?>
