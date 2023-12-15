$("#user").click(function () {
  const name = localStorage.getItem("name");
  const mail = localStorage.getItem("mail");

  Swal.fire({
    title: "Actualizar datos",
    html:
      "<div>" +
      "<form>" +
      '<input id="name" class="swal2-input" placeholder="Nombre" autocomplete="off" value="' +
      name +
      '">' +
      '<input id="mail" type="email" class="swal2-input" placeholder="Correo electrónico" autocomplete="off" value="' +
      mail +
      '">' +
      '<input type="password" id="pass" class="swal2-input" placeholder="Contraseña" autocomplete="off">' +
      "</form>" +
      "</div>",
    showCancelButton: true,
    confirmButtonText: "Enviar",
    cancelButtonText: "Cancelar",
    focusConfirm: false,
    preConfirm: () => {
      const name = Swal.getPopup().querySelector("#name").value;
      const email = Swal.getPopup().querySelector("#mail").value;
      const pass = Swal.getPopup().querySelector("#pass").value;

      $.ajax({
        url: "../controller/querys/update/user.php",
        method: "POST",
        data: {
          name: name,
          mail: email,
          pass: pass,
        },
        success: function (response) {
          
            if (response){
              localStorage.setItem('name', name);
              localStorage.setItem('mail', email);
            }

          let timerInterval;
          Swal.fire({
            title: "Actualización",
            html: "Realizada con exito",
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
              Swal.showLoading();
              const timer = Swal.getPopup().querySelector("b");
            },
            willClose: () => {
              clearInterval(timerInterval);
            },
          }).then((result) => {});
        },
        error: function (error) {
          console.error(error);
        },
      });
    },
  });
});

$(".logoutButton").on("click", function () {
  Swal.fire({
    title: "¿Seguro que deseas cerrar sesión?",
    icon: "question",
    showCancelButton: true,
    confirmButtonText: "Sí, cerrar sesión",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = "http://localhost/LDS";
    }
  });
});
