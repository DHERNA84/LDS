
$(document).ready(function () {
    localStorage.removeItem('name');
    localStorage.removeItem('mail');

    $('form').submit(function(event) {
        event.preventDefault(); // Asegúrate de incluir esto para evitar el envío automático del formulario.
        // Tu lógica aquí
    });

    $("#submit").click(function () {

        $.ajax({
            url: "controller/querys/read/login.php",
            method: "POST",
            data: $("#loginForm").serialize(),
            success: function(response) {
                response=response.split("??");

              if (response[0]){
                localStorage.setItem('name', response[1]);
                localStorage.setItem('mail', response[2]);
                location.href="view/magazine.php"
              }else{
                
              data ='<div class="alert alert-danger" role="alert" data-mdb-color="danger" data-mdb-alert-init="" data-mdb-alert-initialized="true">'+
              '<i class="fas fa-times-circle me-3"></i>"Usuario y/o Contraseña Incorrecto"</div>';
                $("#alert").empty();
                $("#alert").append(data);
              }
            },
            error: function(error) {
              console.error(error);
            }
        });

    })


    $("#Register").click(function() {
        // Realizar validaciones
        if (validateForm()) {
          // Si las validaciones son exitosas, enviar el formulario por Ajax
          $.ajax({
            url: "controller/querys/create/user.php",
            method: "POST",
            data: $("#registerForm").serialize(),
            success: function(response) {
              // Manejar la respuesta del servidor aquí
              location.reload();
            },
            error: function(error) {
              console.error(error);
            }
          });
        }else{
           
        }
      });

    function validateForm() {
        var isValid = true;
        $(".form-outline").each(function() {
          var input = $(this).find(".form-control");
          if (input.val() === "") {
            isValid = false;
            // Agrega el estilo de error o muestra un mensaje de error
            $(this).addClass("has-error");
          } else {
            // Si el campo es válido, elimina cualquier estilo de error
            $(this).removeClass("has-error");
          }
        });
        return isValid;
    }


    $("#registerRepeatPassword").on("input", function() {
        validatePassword();
    });

    $("#registerPassword").on("input", function() {
        var password = $("#registerRepeatPassword").val();
        if (!password.trim() == ''){
            validatePassword();
        }
        
    });

    function validatePassword() {
      var password = $("#registerPassword").val();
      var repeatPassword = $("#registerRepeatPassword").val();

      if (password !== repeatPassword) {
        $("#cntpr").addClass("has-error");
        $("#cntpr").removeClass("has-success");
        $("#Register").prop("disabled",true)
      } else {
        $("#cntpr").removeClass("has-error");
        $("#Register").prop("disabled",false)
      }
    }
  
});