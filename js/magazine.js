let paginaActual = 1;

agregarPagina(paginaActual)

// Función para cargar más páginas al hacer scroll
function cargarMasPaginas() {
  const contenedor = $("#contenedorPaginas");
  const alturaContenedor = contenedor.height();
  const scrollTop = $(window).scrollTop();
  const alturaVentana = $(window).height();

  // Carga más contenido si el scroll está cerca del final del contenedor
  if (scrollTop + alturaVentana > alturaContenedor - 100) {
    paginaActual++;
    agregarPagina(paginaActual);
  }
}

// Función para agregar una página al contenedor
function agregarPagina(numeroPagina) {

  $.ajax({
    url: "../controller/querys/read/load.php", // Reemplaza con la URL de tu script PHP para obtener datos
    method: "GET",
    data: { pagina: numeroPagina },
    success: function (data) {
      // Insertar datos en el contenedor de páginas
      $("#contenedorPaginas").append(data);
    },
    error: function (error) {
      console.error("Error al obtener datos:", error);
    }
  });

}
// Agregar un listener para el evento de scroll
 window.addEventListener("scroll", cargarMasPaginas);

 function zoomImg(imagen) {
  var idDeLaImagen = "../img/notices/"+imagen.id;

  Swal.fire({
    imageUrl: idDeLaImagen,
    imageWidth: 400,
    imageHeight: 200,
    animation: false,
    showConfirmButton: false,
  });

}

$( ".new" ).on( "click", function() {
  
  location.href="father/newNot.php"
 
})
