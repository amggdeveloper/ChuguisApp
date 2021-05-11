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
    /*  2. Filtros y Configuración
    /* ----------------------------------------------------------- */

    (function() {

        // Configuración del Portfolio
        var $container = $('.project-feed');
        var $filter = $('.project-feed-filter');

        $(window).smartresize(function() {
            $container.isotope({
                filter: '*',
                resizable: true,
                layoutMode: 'sloppyMasonry',
                itemSelector: '.project-item'
            });
        });

        $container.imagesLoaded(function() {
            $(window).smartresize();
        });

        // Filtros
        $filter.find('a').click(function() {
            var selector = $(this).attr('data-filter');
            $filter.find('a').removeClass('btn-primary');
            $(this).addClass('btn-primary');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    animationDuration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

    })();



    /* ----------------------------------------------------------- */
    /*  3. Popup
    /* ----------------------------------------------------------- */
    $('.popup-link').magnificPopup({
        type: 'image',
        // Tiempo en el que desaparece el popup
        removalDelay: 300,

        // Clase que se añade al contenedor y al fondo        
        mainClass: 'mfp-fade'
    });



    /* ----------------------------------------------------------- */
    /*  4. Flickr
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
    /*  5. Carrusel
    /* ----------------------------------------------------------- */
    var owl = $("#owl-carousel");

    owl.owlCarousel({
        items: 4, //4 elementos por encima del ancho del navegador 1000px
        itemsDesktop: [1000, 4], //4 elementos entre 1000px y 901px
        itemsDesktopSmall: [900, 2], // 4 elementos entre 900px y 601px
        itemsTablet: [600, 2], //2 elementos entre 600 y 0;
        itemsMobile: [480, 1], // elementos para movil
        pagination: false
    });

    // Eventos para el navegador por defecto
    $("#carousel-next").click(function() {
        owl.trigger('owl.next');
    });
    $("#carousel-prev").click(function() {
        owl.trigger('owl.prev');
    });



    /* ----------------------------------------------------------- */
    /*  6. Contenidos del Slider
    /* ----------------------------------------------------------- */
    $(".owl-slider").owlCarousel({

        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        pagination: true

    });


    /* ----------------------------------------------------------- */
    /*  6. Contenidos del Slider
    /* ----------------------------------------------------------- */
    $(".owl-featured-listings").owlCarousel({

        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        pagination: false

    });


    /* ----------------------------------------------------------- */
    /*  7. Slider de Testimonios
    /* ----------------------------------------------------------- */
    $(".owl-testimonials-listings").owlCarousel({

        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: false,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        pagination: false,

        items: 2, //4 items above 1000px browser width
        itemsDesktop: [1000, 1], //4 items between 1000px and 901px
        itemsDesktopSmall: [900, 1], // 4 items betweem 900px and 601px
        itemsTablet: [600, 1], //2 items between 600 and 0;
        itemsMobile: [480, 1], // itemsMobile disabled - inherit from itemsTablet option

    });



    /* ----------------------------------------------------------- */
    /*  8. Videos Responsivos
    /* ----------------------------------------------------------- */
    $(".video-holder").fitVids();


    /* ----------------------------------------------------------- */
    /*  Otros
    /* ----------------------------------------------------------- */

    $('.title-bordered h2').append('<span class="line line__right"></span>').prepend('<span class="line line__left"></span>');

    // Volver a la parte superior de la página
    if ($(window).width() > 767) {
        $('#footer .footer-copyright').append('<div id="back-top"><a href="#top"><i class="fa fa-chevron-up"></i></a></div>')

        // scroll hacia arriba
        $('#back-top a').click(function(e) {
            e.preventDefault();
            $('body,html').animate({
                scrollTop: 0
            }, 400);
            return false;
        });
    };

    // Menus
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