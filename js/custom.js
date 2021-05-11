jQuery(function($) {

    /* ----------------------------------------------------------- */
    /*  1. Menú de Navegación
    /* ----------------------------------------------------------- */


    $(".flexnav").flexNav({
        'animationSpeed': 200, // default for drop down animation speed
        'transitionOpacity': true, // default for opacity animation
        'buttonSelector': '.navbar-toggle', // default menu button class name
        'hoverIntent': true, // Change to true for use with hoverIntent plugin
        'hoverIntentTimeout': 50, // hoverIntent default timeout
        'calcItemWidths': false, // dynamically calcs top level nav item widths
        'hover': true // would you like hover support?      
    });



    /* ----------------------------------------------------------- */
    /*  2. Magnific Popup
    /* ----------------------------------------------------------- */
    $('.popup-link').magnificPopup({
        type: 'image',
        // Delay in milliseconds before popup is removed
        removalDelay: 300,

        // Class that is added to popup wrapper and background
        // make it unique to apply your CSS animations just to this exact popup
        mainClass: 'mfp-fade'
    });



    /* ----------------------------------------------------------- */
    /*  3. Flickr
    /* ----------------------------------------------------------- */

    $('.flickr-feed').jflickrfeed({
            limit: 9,
            qstrings: {
                id: '52617155@N08'
            },
            itemTemplate: '<li><a href="{{link}}" target="_blank"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
        },
        function(data) {
            $(".flickr-feed li:nth-child(3n)").addClass("nomargin");
        });



    /* ----------------------------------------------------------- */
    /*  4. Carrusel
    /* ----------------------------------------------------------- */
    var owl = $("#owl-carousel");

    owl.owlCarousel({
        items: 4, //4 items above 1000px browser width
        itemsDesktop: [1000, 4], //4 items between 1000px and 901px
        itemsDesktopSmall: [900, 2], // 4 items betweem 900px and 601px
        itemsTablet: [600, 2], //2 items between 600 and 0;
        itemsMobile: [480, 1], // itemsMobile disabled - inherit from itemsTablet option
        pagination: false
    });

    // Eventos de navegación por defecto
    $("#carousel-next").click(function() {
        owl.trigger('owl.next');
    });
    $("#carousel-prev").click(function() {
        owl.trigger('owl.prev');
    });



    /* ----------------------------------------------------------- */
    /*  5. Contenido de los Slider
    /* ----------------------------------------------------------- */
    $(".owl-slider").owlCarousel({

        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        pagination: true

    });


    $(".owl-featured-listings").owlCarousel({

        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        pagination: false

    });



    /* ----------------------------------------------------------- */
    /*  6. Videos Responsivos
    /* ----------------------------------------------------------- */
    $(".video-holder").fitVids();


    /* ----------------------------------------------------------- */
    /*  Otros
    /* ----------------------------------------------------------- */

    $('.title-bordered h2').append('<span class="line line__right"></span>').prepend('<span class="line line__left"></span>');

    // Volver a la parte superior de la página
    $("#back-top").hide();

    if ($(window).width() > 991) {
        $('body').append('<div id="back-top"><a href="#top"><i class="fa fa-chevron-up"></i></a></div>')
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });

        // Volver a la parte superior de la página con un click
        $('#back-top a').click(function(e) {
            e.preventDefault();
            $('body,html').animate({
                scrollTop: 0
            }, 400);
            return false;
        });
    };

    // Menús 
    var $menulink1 = $('.menu-link__secondary'),
        $menulink2 = $('.menu-link__tertiary'),
        $wrap = $('.site-wrapper');

    $menulink1.click(function() {
        $menulink1.toggleClass('active-left');
        $wrap.toggleClass('active-left');
        return false;
    });

    $menulink2.click(function() {
        $menulink2.toggleClass('active-right');
        $wrap.toggleClass('active-right');
        return false;
    });

    // Scroll animado
    var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    if (isMobile == false) {

        $("[data-animation]").each(function() {

            var $this = $(this);

            $this.addClass("animation");

            if (!$("html").hasClass("no-csstransitions") && $(window).width() > 767) {

                $this.appear(function() {

                    var delay = ($this.attr("data-animation-delay") ? $this.attr("data-animation-delay") : 1);

                    if (delay > 1) $this.css("animation-delay", delay + "ms");
                    $this.addClass($this.attr("data-animation"));

                    setTimeout(function() {
                        $this.addClass("animation-visible");
                    }, delay);

                }, { accX: 0, accY: -170 });

            } else {

                $this.addClass("animation-visible");

            }

        });
    }
});

// Fondo de pantalla parallax
$(window).load(function() {

    if ($(".parallax-bg").get(0) && $(window).width() > 991) {
        if (!Modernizr.touch) {
            $(window).stellar({
                responsive: true,
                scrollProperty: 'scroll',
                parallaxElements: false,
                horizontalScrolling: false,
                horizontalOffset: 0,
                verticalOffset: 0
            });
        } else {
            $(".parallax-bg").addClass("disabled");
        }
    }
});