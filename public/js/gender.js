// ELIMINAR PELICULA
$(".EliminarGenero").click(function () {
  respuesta = confirm("¿Desea realmente eliminar este género?");
  idGenero = $(this).attr("idGender");

  if (respuesta) {
    $(location).attr("href", "/admin/genders/" + idGenero + "/delete");
  }
});

function GeneroInsertado() {
  toastr.success("Añadiendo género...", "Gestion géneros", {
    closeButton: true,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: "toast-bottom-right",
    preventDuplicates: true,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    timeOut: "2000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
  });

  setTimeout(function () {
    $(location).attr("href", "/admin/genders");
  }, 2000);
}

function GeneroEditado() {
  toastr.success("Editando género...", "Gestion géneros", {
    closeButton: true,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: "toast-bottom-right",
    preventDuplicates: true,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    timeOut: "2000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
  });

  setTimeout(function () {
    $(location).attr("href", "/admin/genders");
  }, 2000);
}

function GeneroEliminado() {
  toastr.success("Eliminando género...", "Gestion géneros", {
    closeButton: true,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: "toast-bottom-right",
    preventDuplicates: true,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    timeOut: "2000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
  });

  setTimeout(function () {
    $(location).attr("href", "/admin/genders");
  }, 2000);
}
