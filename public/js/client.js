// ACTIVAR PAGO AUTOMATICO
$(".activarAutoPayment").click(function () {
  respuesta = confirm("¿Desea realmente desactivar el pago automatico?");
  idCliente = $(this).attr("idCliente");

  if (respuesta) {
    $(location).attr("href", "/admin/clients/" + idCliente + "/activate");
  }
});

// DESACTIVAR PAGO AUTOMATICO
$(".DesactivarAutoPayment").click(function () {
  respuesta = confirm("¿Desea realmente activar el pago automatico?");
  idCliente = $(this).attr("idCliente");

  if (respuesta) {
    $(location).attr("href", "/admin/clients/" + idCliente + "/desactivate");
  }
});

// ELIMINAR CLIENTE
$(".EliminarCliente").click(function () {
  respuesta = confirm("¿Desea realmente eliminar este cliente?");
  idCliente = $(this).attr("idCliente");

  if (respuesta) {
    $(location).attr("href", "/admin/clients/" + idCliente + "/delete");
  }
});

function ClienteEditado() {
  toastr.success("Editando cliente...", "Gestion clientes", {
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
    $(location).attr("href", "/admin/clients");
  }, 2000);
}

function ClienteEliminado() {
  toastr.success("Eliminando cliente...", "Gestion clientes", {
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
    $(location).attr("href", "/admin/clients");
  }, 2000);
}

