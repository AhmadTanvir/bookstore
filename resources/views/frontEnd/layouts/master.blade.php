<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title','Master Page')</title>
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="{{asset('frontEnd/css/default/default.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/light/light.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/dark/dark.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/bar/bar.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/lib/css/nivo-slider.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/style2.css')}}" rel="stylesheet">
    
    <link href="{{asset('frontEnd/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/meanmenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/pe-icon-7-stroke.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/venobox/venobox.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('frontEnd/css/main.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('frontEnd/lib/css/preview.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/style1.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/popuo-box.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/jquery-ui1.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/bootstrap.css')}}" rel="stylesheet">
    <script src="{{asset('frontEnd/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="{{asset('frontEnd/js/html5shiv.js')}}"></script>
    <script src="{{asset('frontEnd/js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('easyzoom/css/easyzoom.css')}}" />
</head><!--/head-->

<body>
@include('frontEnd.layouts.header')
@section('slider')
@include('frontEnd.layouts.slider')
@show
@yield('content')
@include('frontEnd.layouts.footer')


<script src="{{asset('frontEnd/js/vendor/jquery-1.12.0.min.js')}}"></script>
<script src="{{asset('frontEnd/js/jquery.js')}}"></script>
<script src="{{asset('frontEnd/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontEnd/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontEnd/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontEnd/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontEnd/js/waypoints.min.js')}}"></script>
<script src="{{asset('frontEnd/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('frontEnd/venobox/venobox.min.js')}}"></script>
<script src="{{asset('frontEnd/js/jquery.meanmenu.js')}}"></script>
<script src="{{asset('frontEnd/js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>
<script src="{{asset('frontEnd/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('frontEnd/js/plugins.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{asset('frontEnd/lib/js/jquery.nivo.slider.js')}}"></script>
<script src="{{asset('frontEnd/lib/home.js')}}"></script>
<script src="{{asset('frontEnd/js/main.js')}}"></script>
<script src="{{asset('frontEnd/js/price-range.js')}}"></script>
<script src="{{asset('frontEnd/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('easyzoom/dist/easyzoom.js')}}"></script>
<!-- <script src="{{asset('frontEnd/js/jquery-2.1.4.min.js')}}"></script> -->
    <!-- //jquery -->
    <script type="text/javascript">
    $(window).load(function() {
    $('#slider').nivoSlider();
    });
    </script>
    <script type="text/javascript">
    $(window).load(function() {
    $('#slider').nivoSlider({
    effect: 'random',
    slices: 15,
    boxCols: 8,
    boxRows: 4,
    animSpeed: 500,
    pauseTime: 3000,
    startSlide: 0,
    directionNav: true,
    controlNav: true,
    controlNavThumbs: false,
    pauseOnHover: true,
    manualAdvance: false,
    prevText: 'Prev',
    nextText: 'Next',
    randomStart: false,
    beforeChange: function(){},
    afterChange: function(){},
    slideshowEnd: function(){},
    lastSlide: function(){},
    afterLoad: function(){}
    });
    });
    </script>
<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
              var mapOptions = {
                zoom: 16,
                scrollwheel: false,
                center: new google.maps.LatLng(23.763474, 90.431483)
              };
              var map = new google.maps.Map(document.getElementById('googleMap'),
                  mapOptions);
              var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation:google.maps.Animation.BOUNCE,
                icon: 'img/map-icon.png',
                map: map
              });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>   
<script type="text/javascript">
 
        $(".update-cart").click(function (e) {
           e.preventDefault();
 
           var ele = $(this);
 
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
 
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
 
    </script>
    <!-- popup modal (for signin & signup)-->
<script src="{{asset('frontEnd/js/jquery.magnific-popup.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
{{-- <script src="{{asset('frontEnd/js/minicart.js')}}"></script> --}}
    <script>
        // paypalm.minicartk.render(); 
        //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

        // paypalm.minicartk.cart.on('checkout', function (evt) {
        //     var items = this.items(),
        //         len = items.length,
        //         total = 0,
        //         i;

            // Count the number of each item in the cart
            // for (i = 0; i < len; i++) {
            //     total += items[i].get('quantity');
            // }

            // if (total < 3) {
            //     alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
            //     evt.preventDefault();
            // }
        // });
    </script>
    <!-- //cart-js -->

    <!-- price range (top products) -->
    <script src="{{asset('frontEnd/js/jquery-ui.js')}}"></script>
    <script>
        //<![CDATA[ 
        $(window).load(function () {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 9000,
                values: [50, 6000],
                slide: function (event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

        }); //]]>
    </script>
    <!-- //price range (top products) -->

    <!-- flexisel (for special offers) -->
    <script src="{{asset('frontEnd/js/jquery.flexisel.js')}}"></script>
    <script>
        $(window).load(function () {
            $("#flexiselDemo1").flexisel({
                visibleItems: 3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 2
                    }
                }
            });

        });
    </script>
    <!-- //flexisel (for special offers) -->

    <!-- password-script -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->

    <!-- smoothscroll -->
    <!-- <script src="{{asset('frontEnd/js/SmoothScroll.min.js')}}"></script> -->
    <!-- //smoothscroll -->

    <!-- start-smooth-scrolling -->
    <script src="{{asset('frontEnd/js/move-top.js')}}"></script>
    <script src="{{asset('frontEnd/js/easing.js')}}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->

    <!-- smooth-scrolling-of-move-up -->
    <!-- <script>
        $(document).ready(function () { 
            
            var defaults = {
                containerID: 'toTop', fading element id
                containerHoverID: 'toTopHover', fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            
         $().UItoTop({
         easingType: 'easeOutQuart'
          });

         });
    </script> -->
    <!-- //smooth-scrolling-of-move-up -->

    <!-- for bootstrap working -->
    <!-- <script src="{{asset('frontEnd/js/bootstrap.js')}}"></script> -->
<script>
    // Instantiate EasyZoom instances
    var $easyzoom = $('.easyzoom').easyZoom();

    // Setup thumbnails example
    var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

    $('.thumbnails').on('click', 'a', function(e) {
        var $this = $(this);

        e.preventDefault();

        // Use EasyZoom's `swap` method
        api1.swap($this.data('standard'), $this.attr('href'));
    });

    // Setup toggles example
    var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

    $('.toggle').on('click', function() {
        var $this = $(this);

        if ($this.data("active") === true) {
            $this.text("Switch on").data("active", false);
            api2.teardown();
        } else {
            $this.text("Switch off").data("active", true);
            api2._init();
        }
    });
</script>
</body>
</html>