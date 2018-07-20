


$(document).ready(function(){

     $('#media').carousel({
                pause: true,
                interval: 5200,
            });

	/* ========================================================================= */
	/*	Menu item highlighting
	/* ========================================================================= */

	jQuery('#nav').singlePageNav({
		offset: jQuery('#nav').outerHeight(),
		filter: ':not(.external)',
		speed: 1200,
		currentClass: 'current',
		easing: 'easeInOutExpo',
		updateHash: true,
		beforeStart: function() {
			console.log('begin scrolling');
		},
		onComplete: function() {
			console.log('done scrolling');
		}
	});
	
	/* ========================================================================= */
	/*	Fix Slider Height
	/* ========================================================================= */	

	var slideHeight = $(window).height();
	
	$('#slider, .carousel.slide, .carousel-inner, .carousel-inner .item').css('height',slideHeight);

	$(window).resize(function(){'use strict',
		$('#slider, .carousel.slide, .carousel-inner, .carousel-inner .item').css('height',slideHeight);
	});
	
	
	/* ========================================================================= */
	/*	Portfolio Filtering
	/* ========================================================================= */	
	
	
    var $container = $('.project-wrapper');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
 
    $('.work-filter a').click(function(){
        $('.work-filter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    }); 
	
	
	$(".fancybox").fancybox({
		padding: 0,

		openEffect : 'elastic',
		openSpeed  : 650,

		closeEffect : 'elastic',
		closeSpeed  : 550,

		closeClick : true,
	});
	
	/* ========================================================================= */
	/*	Parallax
	/* ========================================================================= */	
	
	$('#facts').parallax("50%", 0.5);
	
	/* ========================================================================= */
	/*	Timer count
	/* ========================================================================= */

	"use strict";
    $(".number-counters").appear(function () {
        $(".number-counters [data-to]").each(function () {
            var e = $(this).attr("data-to");
            $(this).delay(6e3).countTo({
                from: 50,
                to: e,
                speed: 3e3,
                refreshInterval: 50
            })
        })
    });
	
	/* ========================================================================= */
	/*	Back to Top
	/* ========================================================================= */
	
	
    $(window).scroll(function () {
        if ($(window).scrollTop() > 400) {
            $("#back-top").fadeIn(200)
        } else {
            $("#back-top").fadeOut(200)
        }
    });
    $("#back-top").click(function () {
        $("html, body").stop().animate({
            scrollTop: 0
        }, 1500, "easeInOutExpo")
    });
	
});

/*======================================================
tabs de adicionar algun detalle en el carrito de compas
========================================================*/
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

/*=====================================================
para la ventana modal del carrito de compras
======================================================*/

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})

// ==========  START GOOGLE MAP ========== //
function initialize() {
    var myLatLng = new google.maps.LatLng(1.2097481,-77.2992277);

    var mapOptions = {
        zoom: 14,
        center: myLatLng,
        disableDefaultUI: true,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: false,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'roadatlas']
        }
    };

    var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);


    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: 'img/location-icon.png',
        title: '',
    });

}

google.maps.event.addDomListener(window, "load", initialize);
// ========== END GOOGLE MAP ========== //