<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Template CSS -->
    <link rel="stylesheet" href="\css/style.css">

    <!-- fontawwsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Gallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="\css/compact-gallery.css">

    <!-- Scrooll Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Owlcarousel CSS -->
    <link rel="stylesheet" href="\owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="\owlcarousel/assets/owl.theme.default.min.css">



    <link rel="icon" href="favicon.png" sizes="16x16" type="image/png">


    <title>Welcom to - Naing Group</title>
</head>

<body>

    <a href="#0" class="cd-top js-cd-top cd-top--fade-out cd-top--show">Top</a>





@yield('content')


@include('layouts.footer')



    <script src="\js/backtotop.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.compact-gallery', {
            animation: 'slideIn'
        });
    </script>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js " integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy " crossorigin="anonymous "></script>

    <script>
        $('.carousel').carousel({
            interval: 2000
        })
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js "></script>


    <script src="\js/jquery.min.js"></script>

    <script src="\owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.grid-gallery', {
            animation: 'slideIn'
        });
    </script>

    <script>
        $('.owl-carousel').owlCarousel({
            ltr: true,
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                320: {
                    items: 2
                },
                480: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>






    <!-- NumScroller -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/numscroller-1.0.js"></script>
    <script src="js/prism.js"></script>


    <script>
        AOS.init();
        AOS.init({
            // Global settings:
            disable: false,
            startEvent: 'DOMContentLoaded',
            initClassName: 'aos-init',
            animatedClassName: 'aos-animate',
            useClassNames: false,
            disableMutationObserver: false,
            debounceDelay: 50,
            throttleDelay: 99,
            offset: 200,
            delay: 50,
            duration: 1000,
            easing: 'ease',
            once: true,
            mirror: false,
            anchorPlacement: 'top-bottom',

        });
    </script>

    <script>
        // navbar background color change on scroll

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll < 200) {
                $('.fixed-top').css('background', 'transparent');
            } else {
                $('.fixed-top').css('background', 'rgba(234, 187, 61, 1)', );
            }
        });
    </script>




</body>

</html>