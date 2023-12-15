$(document).ready(function () {

  $("#formNot").submit(function (e) {
    e.preventDefault();

    var formData = new FormData(this);

    if (
      !formData.get("txt").trim() == "" ||
      !formData.get("imagen").name.trim() == ""
    ) {
      $.ajax({
        url: "../../controller/querys/create/notice.php",
        type: "POST",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
          if (response) {
            let timerInterval;
            Swal.fire({
              title: "Actualización",
              html: "Realizada con exito",
              timer: 4000,
              timerProgressBar: true,
              didOpen: () => {
                Swal.showLoading();
                const timer = Swal.getPopup().querySelector("b");
              },
              willClose: () => {
                clearInterval(timerInterval);
              },
            }).then((result) => {
              /* Read more about handling dismissals below */
              if (result.dismiss === Swal.DismissReason.timer) {
                location.href = "../magazine.php";
              }
            });
          }
        },
        error: function (xhr, status, error) {
          console.error(xhr.responseText);
        },
      });
    }
  });

  $(".return").on("click", function () {
    location.href = "../magazine.php";
  });
});
