
    /****************** SLIDER HEADER *****************/
    $(function() {
        $('#crausel1').carousel({
        interval: 2000
        })
    });

      $(function() {
        $('#crausel-big').carousel({
        interval: 2000
        })
    });



       $(function() {
        $('#crausel2').carousel({
        interval: 2000
        })
    });

    /***************** SLIDER HEADER *****************/

    /***************** SCROLL EFECT ******************/

    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top -50
            }, 1000);
        }
    });


    /**************** SCROLL EFECT *********************/