(function(){
  "use strict";

// Preloader
$(window).load(function() {
    $('#status').fadeOut();
    $('#preloader').delay(550).fadeOut('slow');
    $('body').delay(550).css({'overflow':'visible'});
})

$(document).ready(function($) {

    //Prevent empty links scroll to top default functionality
    /* <![CDATA[ */
    ( function( $ ) {
       $( 'a[href="#"]' ).click( function(e) {
          e.preventDefault();
       } );
    } )( jQuery );
    /* ]]> */

     //Alerts
    $('.close').on('click', function(){
      $(this).parent().fadeOut();
    });

    // Hide Horizontal Scroll
    $('html').css('overflow-x', 'hidden');

    // Smooth Scroll to Section
    $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 90
            }, 800);
            return false;
          }
        }
      });
    });

    //Mobile Nav
    $('.mobile-nav ul').hide();

    $('.show-menu').show();

    $('.show-menu').on('click', function(){
      $('.mobile-nav ul.mobile-nav-menu').toggle();
    });

    $('.mobile-nav-menu li a').on('click', function(){
      $('.mobile-nav ul.mobile-nav-menu').toggle();
    });

    $('ul.mobile-nav-menu div').on('click', function(){
      $('.mobile-nav ul li ul li ul').toggle();
      $(this).next('ul li ul').toggle();
    });

    // Countdown
    $('[data-countdown]').each(function() {
        var $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime(
              '<div><p>%D</p><span>Días</span></div><div><p>%H</p><span>Horas</span></div><div><p>%M</p><span>Minutos</span></div><div><p>%S</p><span>Segundos</span></div>'
            ));
        });
    });

    // Countdown Mobile
    $('[data-countdown-mobile]').each(function() {
        var $this = $(this), finalDate = $(this).data('countdown-mobile');
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime(
              '<div><p>%D</p><span>Días</span></div><div><p>%H</p><span>Horas</span></div><div><p>%M</p><span>Minutos</span></div>'
            ));
        });
    });

    // Google Map
    function initialize() {
        var myLatlng = new google.maps.LatLng(19.6725432,-101.2044155);
        var mapOptions = {
        zoom: 16,
        scrollwheel: false,
        draggable: true,
        center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Faylinn Gym'
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);


    // RSVP Form
    jQuery('#rsvp-form').ajaxForm(function(data) {
       if (data==1){
         $('#success').fadeIn("slow");
         $('#emailerr').fadeOut("slow");
         $('#servererr').fadeOut("slow");
         $('#rsvp-form').resetForm();
         }
       else if (data==2){
           $('#servererr').fadeIn("slow");
          }
       else if (data==3)
        {
         $('#emailerr').fadeIn("slow");
        }
    });


    // Image Gallery
    var owl = $("#owl-gallery");

        owl.owlCarousel({

          itemsCustom : [
            [0, 2],
            [400, 3],
            [600, 4],
            [800, 5],
            [1000, 6],
            [1600, 8]
          ],
          navigation : false,
          autoPlay : true,
          pagination : true

    });

    // Scroll Reveal
    // The starting defaults.
    var config = {

        after: '0s',
        enter: 'top',
        move: '60px',
        over: '0.66s',
        easing: 'ease-in-out',
        viewportFactor: 0.33,
        reset: true,
        init: true

    };

    window.scrollReveal = new scrollReveal( config );

    //JSSOR SLIDER
    /*
    jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $UISearchMode: 0,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $Loop: 1,                                       //[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 6,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 253,
                                              //[Optional] The offset position to park thumbnail,
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 6                                       //[Optional] Steps to go for each navigation request, default value is 1
                    }
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, window.innerWidth));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end

        });
    */
});

})();