// // LLAMA A LA FUNCIÓN MOVIMIENTOMENU
// $(window).scroll(function() {    
//     movimientoMenu();
// });

// // HACE EL EFECTO DE BAJAR Y SUBIR EL MENÚ
// function movimientoMenu() {
//     var altura_del_header = $('.nav').outerHeight(true);
//     var altura_del_menu = $('.nav').outerHeight(true);
//     var scroll = $(window).scrollTop();
//     if (scroll > 200){
//       $(".nav").slideDown(700);
//         $('.nav').addClass('fixed');
//     } else {
//        $(".nav").slideUp(700);
//     }
// }

// FUNCIÓN QUE AL CLICAR CUALQQUIER OPCIÓN DEL MENÚ HACE QUE EL EFECTO VAYA MÁS DESPACIO
$(document).ready(function() {
  $('a[href="#mujerreb"]').click(function() {
    var destino = $(this.hash);
    if (destino.length == 0) {
      destino = $('a[name="' + this.hash.substr(1) + '"]');
    }
    if (destino.length == 0) {
      destino = $('html');
    }
    $('html, body').animate({ scrollTop: destino.offset().top }, 800);
    return false;
  });
    // });
  // $(document).ready(function() {
    $('a[href="#hombrereb"]').click(function() {
    var destino = $(this.hash);
    if (destino.length == 0) {
      destino = $('a[name="' + this.hash.substr(1) + '"]');
    }
    if (destino.length == 0) {
      destino = $('html');
    }
    $('html, body').animate({ scrollTop: destino.offset().top }, 800);
    return false;
  });
  });