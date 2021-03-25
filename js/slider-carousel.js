// Template slider jQuery script

$(document).on('ready', function() {
    "use strict";
    $("#slider").owlCarousel({
        // rtl: true,
        navigation: false, // Show next and prev buttons
        slideSpeed: 3000,
        items: 1,
        dots: false,
        paginationSpeed: 400,
        singleItem: true,
        pagination: false,
        autoPlay: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        addClassActive: true,



        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });




});;