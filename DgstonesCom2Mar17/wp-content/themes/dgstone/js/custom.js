$(document).ready(function() {

    

    var $dscr = $('.description'),

        $switch = $('.toggle-link'),

        $initHeight = 290; // Initial height

    

    $dscr.each(function() {

        $.data(this, "realHeight", $(this).height());    // Create new property realHeight

        }).css({ overflow: "hidden", height: $initHeight + 'px' });



    $switch.toggle(function() {

          $dscr.animate({ height: $dscr.data("realHeight") }, 510);

          $switch.html("HIDE");

          

        }, function() {

            $dscr.animate({ height: $initHeight}, 510);

            $switch.html("THE MORE YOU KNOW &rarr;");

        });

});





//wow js

var wow = new WOW(

  {

    boxClass:     'wow',      // animated element css class (default is wow)

    animateClass: 'animated', // animation css class (default is animated)

    offset:       0,          // distance to the element when triggering the animation (default is 0)

    mobile:       true,       // trigger animations on mobile devices (default is true)

    live:         true,       // act on asynchronously loaded content (default is true)

    callback:     function(box) {

      // the callback is fired every time an animation is started

      // the argument that is passed in is the DOM node being animated

    },

    scrollContainer: null // optional scroll container selector, otherwise use window

  }

);

wow.init();



//new WOW().init();




jQuery(document).ready( function() {

        var nav = jQuery('.parallax-menu-wrapper');

        jQuery(window).scroll(function () {

        if (jQuery(this).scrollTop() > 450) {

        nav.addClass("f-nav");

        } else {

        nav.removeClass("f-nav");

        }

        }); 

		

		//new WOW().init();



$('#menu-parallaxmenu li a').click(function(){
$('#menu-parallaxmenu li').removeClass('active');
$(this).closest('li').addClass('active');
//alert($(this).text());
 
});


});