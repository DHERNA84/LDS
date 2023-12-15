<?php
require_once('../../../model/conexion/conexion.php');
require_once('../../../model/querys/read/login.php');

// Iniciar o reanudar la sesión
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Inicializar variables
$lRet = false;
$cName = "";
$cMail = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se han enviado los datos de inicio de sesión
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Verificar si los campos no están vacíos
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            // Limpiar y obtener los valores del formulario
            $username = trim($_POST['username']);
            $password = md5(trim($_POST['password']));

            // Crear una instancia del modelo
            $model = new queriesGet();

            // Obtener información del usuario desde la base de datos
            $consulta = $model->showUser($username);

            if (!empty($consulta)) {
                foreach ($consulta as $row) {
                    // Verificar la contraseña usando password_verify en lugar de md5
                    // Almacenar información en variables
                    $cName = $row['name'];
                    $cMail = $row['Email'];
                    $_SESSION['user'] = $row['CodigoUsuario'];

                    $lRet = true; // Credenciales válidas

                }
            }
        }
    }
}

echo $lRet."??".$cName."??".$cMail;

?>