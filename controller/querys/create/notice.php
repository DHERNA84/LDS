<?php

require_once('../../../model/conexion/conexion.php');
require_once('../../../model/querys/create/registro.php');
if (session_status() == PHP_SESSION_NONE) {
        session_start();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $model = new Create();

        $url = "";
        $title = $_POST['title'];
        $txt = $_POST['txt'];
        $user = $_SESSION['user'];

        // Verificar si se cargó correctamente la imagen
        if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0) {
                $carpeta_destino = "../../../img/notices/";
                // Obtener el nombre original de la imagen
                $nombre_original = $_FILES["imagen"]["name"];
                // Generar un nombre aleatorio de 10 dígitos
                $nombre_aleatorio = mt_rand(1000000000, 9999999999);
                // Crear el nuevo nombre de la imagen
                $nuevo_nombre = $nombre_aleatorio;
                $nuevo_nombre = pathinfo($nuevo_nombre, PATHINFO_FILENAME) . '.jpg';
                // Ruta completa donde se guardará la imagen
                $ruta_completa = $carpeta_destino . $nuevo_nombre;
                // Subir la imagen al servidor
                move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_completa);
                // Ejemplo de cambiar tamaño con GD
                list($ancho, $alto) = getimagesize($ruta_completa);
                $nuevo_ancho = 2000; // Nuevo ancho en píxeles
                $nuevo_alto = 2000; // Nuevo alto en píxeles

                $imagen_redimensionada = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
                $imagen_original = imagecreatefromjpeg($ruta_completa);

                imagecopyresized($imagen_redimensionada, $imagen_original, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
                // Guardar la imagen redimensionada
                imagejpeg($imagen_redimensionada, $carpeta_destino . $nuevo_nombre);
                // Liberar memoria
                imagedestroy($imagen_original);
                imagedestroy($imagen_redimensionada);
                $url = $nuevo_nombre;
        }

        $consulta = $model->inserMagazine($url, $title, $txt, $user);

        echo $consulta;
}
