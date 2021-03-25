$(document).ready(function() {
    var owl = $('#service');
    owl.owlCarousel({

        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        items: 3,

        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        pagination: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false

            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 3,
                nav: false,
                loop: true
            }
        }



    })




    $('#awards').owlCarousel({
        loop: true,
        margin: 5,
        nav: false,
        dots: true,


        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })


    $('#partners').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,


        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 8
            }
        }
    })



})