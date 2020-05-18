// PREVISUALIZAR PORTADA

$(".cover").change(function () {
  var imagen = this.files[0];

  if (imagen["type"] != "image/jpeg" && imagen["type"] != "image/png") {
    $(".cover").val("");

    alert("¡La imagen debe estar en formato JPG o PNG!");
  } else if (imagen["size"] > 2000000) {
    $(".cover").val("");

    alert("¡La imagen no debe de pesar mas de 2 mb!");
  } else {
    var datosImagen = new FileReader();
    datosImagen.readAsDataURL(imagen);

    $(datosImagen).on("load", function (event) {
      var rutaImagen = event.target.result;
      $(".previsualizar").attr("src", rutaImagen);
    });
  }
});

// ACTIVAR PELICULA
$(".activarPelicula").click(function () {
  respuesta = confirm("¿Desea realmente activar esta pelicula?");

  // id_pelicula = $(this).attr("idPelicula");

  var row = $(this).parents("tr");
  var form = $(this).parents("form");
  var url = form.attr("action");

  $.post(url, form.serialize(), function (result) {
  });

  // $(location).attr("href", "/admin/movies/" + id_pelicula + "/activate");
});

// DESACTIVAR PELICULA
$(".DesactivarPelicula").click(function () {
  respuesta = confirm("¿Desea realmente desactivar esta pelicula?");
  id_pelicula = $(this).attr("idPelicula");

  if (respuesta) {
    $(location).attr("href", "/admin/movies/" + id_pelicula + "/desactivate");
  }
});

// ELIMINAR PELICULA
$(".EliminarPelicula").click(function () {
  respuesta = confirm("¿Desea realmente eliminar esta pelicula?");
  id_pelicula = $(this).attr("idPelicula");

  if (respuesta) {
    $(location).attr("href", "/admin/movies/" + id_pelicula + "/delete");
  }
});

function PeliculaInsertada() {
  toastr.success("Añadiendo pelicula...", "Gestion películas", {
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
    $(location).attr("href", "/admin/movies");
  }, 2000);
}

function PeliculaEditada() {
  toastr.success("Editando pelicula...", "Gestion películas", {
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
    $(location).attr("href", "/admin/movies");
  }, 2000);
}

function PeliculaEliminada() {
  toastr.success("Eliminando pelicula...", "Gestion películas", {
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
    $(location).attr("href", "/admin/movies");
  }, 2000);
}
