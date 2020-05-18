// ELIMINAR PELICULA
$(".EliminarAdministrators").click(function () {
  respuesta = confirm("¿Desea realmente eliminar este administrador?");
  IdAdministrators = $(this).attr("IdAdministrators");

  if (respuesta) {
    $(location).attr(
      "href",
      "/admin/administrators/" + IdAdministrators + "/delete"
    );
  }
});

function AdministradorInsertado() {
  toastr.success("Añadiendo administrador...", "Gestion administradores", {
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
    $(location).attr("href", "/admin/administrators");
  }, 2000);
}

function AdministradorEditado() {
  toastr.success("Editando administrador...", "Gestion administradores", {
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
    $(location).attr("href", "/admin/administrators");
  }, 2000);
}

function AdministradorEliminado() {
  toastr.success("Eliminando administrador...", "Gestion administradores", {
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
    $(location).attr("href", "/admin/administrators");
  }, 2000);
}
