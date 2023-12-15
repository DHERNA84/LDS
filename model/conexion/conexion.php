<?php
class Conexion {
    /**
     * Método para obtener una instancia de conexión a la base de datos.
     *
     * @return PDO Objeto de conexión a la base de datos.
     */
    public function get_conexion() {
        // Configuración de los parámetros de conexión
        $host = 'localhost';  // Dirección del servidor de la base de datos
        $db = 'lds';          // Nombre de la base de datos
        $user = 'root';       // Usuario de la base de datos
        $pass = '';           // Contraseña de la base de datos

        // Crear una nueva instancia de conexión PDO
        $conexion = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        
        // Configurar PDO para que lance excepciones en caso de errores
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $conexion;

    }
}
?>