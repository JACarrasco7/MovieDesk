$(document).ready(function () {
  var ancho = $(window).width();
  
  if (ancho >= 758) {
    $("#sidebarCollapse").css("display", "none");

    $("#content").hover(function () {

      $("#generos").removeClass("dropdown-toggle");
      $(".nombre_pagina").css("visibility", "hidden");
      $("#menu").css("font-size", 20);
      $("#sidebar").addClass("active");
      $("#slider-content").addClass("slider-content-active");
    });

    $("#sidebar").hover(function () {
      $("#generos").addClass("dropdown-toggle");
      $(".nombre_pagina").css("visibility", "visible");
      $("#menu").css("font-size", 16);
      $("#sidebar").removeClass("active");
      $("#slider-content").removeClass("slider-content-active");

    });
  } else {
    $("#sidebar").removeClass("active");
    $("#sidebarCollapse").css("display", "block");
    $("#sidebar").off("hover");

    $("#sidebarCollapse").on("click", function () {
      $("#sidebar").toggleClass("active");
    });
  }
});

$(window).resize(function () {
  var ancho = $(window).width();

  if (ancho >= 758) {
    localStorage.setItem("contador", 0);

    $("#sidebarCollapse").css("display", "none");

    $("#content").hover(function () {
      $(".nombre_pagina").css("visibility", "hidden");
      $("#menu").css("font-size", 20);
      $("#sidebar").addClass("active");
    });

    $("#sidebar").hover(function () {
      $(".nombre_pagina").css("visibility", "visible");
      $("#menu").css("font-size", 16);
      $("#sidebar").removeClass("active");
    });
  } else {
    var contador = parseInt(localStorage.getItem("contador"));

    if (contador == 0) {
      location.reload();
      localStorage.setItem("contador", 1);
    }
  }
});
