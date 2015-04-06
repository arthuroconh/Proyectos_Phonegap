    $(document).ready(function() {
          var caja = $('.contienecarro2');
            if($(window).width()<= 600) {
              caja.addClass("fij");
            }if($(window).width()> 600) {
              caja.removeClass("fij");
            }
        });