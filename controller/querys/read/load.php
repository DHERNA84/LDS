<?php
require_once('../../../model/conexion/conexion.php');
require_once('../../../model/querys/read/notices.php');

// Obtener el número de página desde la solicitud AJAX
$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : 1;

// Crear una instancia de la clase queriesNot
$consulta = new queriesNot();

// Obtener datos para la página actual
$datos = $consulta->showNot($pagina);

if (!empty($datos)) {
    foreach ($datos as $fila) {
        // Aquí puedes construir la estructura HTML para cada fila de datos

        $texto = $fila["Texto"];
        $title = $fila["title"];
        $imagenURL = $fila["URLImagen"];
        $fecha = $fila["FechaCreacion"];
        if (empty($fila["name"])){
            $name = "System";
        }else{
            $name = $fila["name"]; 
        }
        // Adaptar el HTML según la estructura de tu diseño
        echo '<div class="col-lg-8 col-md-6 mb-4 mb-lg-0">';
        if (!Empty($imagenURL)){
            echo '  <div id="'. $imagenURL .'" onclick="zoomImg(this)" class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4" data-mdb-ripple-color="light">';
            echo '    <img src="../img/notices/' . $imagenURL . '" class="img-fluid" style="" />';
            echo '    <a href="#!" class="img-mgz" >';
            echo '      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>';
            echo '    </a>';
            echo '  </div>';
        }
        
        echo '  <div class="row mb-2">';
        echo '    <div class="col-6">';
        echo '      <a href="" class="text-danger">';
        echo '        <i class="fas fa-chart-pie"></i>';
        echo '        '.$name.'';
        echo '      </a>';
        echo '    </div>';
        echo '    <div class="col-6 text-end">';
        echo '      <u>' . $fecha . '</u>';
        echo '    </div>';
        echo '  </div>';
        echo '  <a href="" class="text-dark">';
        echo '    <h5>' . $title . '</h5>';
        echo '    <p> '.$texto.'</p>';
        echo '  </a>';
        echo '  <hr />';
        echo '</div>';
    }
}

?>