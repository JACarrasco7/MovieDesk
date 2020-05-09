// ELIMINAR PELICULA
$(".EliminarActor").click(function () {
  respuesta = confirm("¿Desea realmente eliminar este actor?");
  idActor = $(this).attr("idActor");

  if (respuesta) {
    $(location).attr("href", "/admin/actors/" + idActor + "/delete");
  }
});

function ActorInsertado() {
  toastr.success("Añadiendo actor...", "Gestion actores", {
    closeButton: true,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: "toast-bottom-right",
    preventDuplicates: true,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    timeOut: "5000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
  });

  setTimeout(function () {
    $(location).attr("href", "/admin/actors");
  }, 5000);
}

function ActorEditado() {
  toastr.success("Editando actor...", "Gestion actores", {
    closeButton: true,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: "toast-bottom-right",
    preventDuplicates: true,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    timeOut: "5000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
  });

  setTimeout(function () {
    $(location).attr("href", "/admin/actors");
  }, 5000);
}

function ActorEliminado() {
  toastr.success("Eliminando actor...", "Gestion actores", {
    closeButton: true,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: "toast-bottom-right",
    preventDuplicates: true,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    timeOut: "5000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
  });

  setTimeout(function () {
    $(location).attr("href", "/admin/actors");
  }, 5000);
}
