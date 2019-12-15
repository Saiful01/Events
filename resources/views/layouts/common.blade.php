<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }




        .masthead {
            height: 100vh;
            min-height: 500px;
            background-image: url('/image/bg1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .context-dark, .bg-gray-dark, .bg-primary {
            color: rgba(255, 255, 255, 0.8);
        }

        .footer-classic a, .footer-classic a:focus, .footer-classic a:active {
            color: #ffffff;
        }
        .nav-list li {
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .nav-list li a:hover:before {
            margin-left: 0;
            opacity: 1;
            visibility: visible;
        }

        ul, ol {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .social-inner {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            padding: 23px;
            font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.5);
        }
        .social-container .col {
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .nav-list li a:before {
            content: "\f14f";
            font: 400 21px/1 "Material Design Icons";
            color: #4d6de6;
            display: inline-block;
            vertical-align: baseline;
            margin-left: -28px;
            margin-right: 7px;
            opacity: 0;
            visibility: hidden;
            transition: .22s ease;
        }

    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Events</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#events" >Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gellary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">

    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">


                <h1 class="font-weight-light text-white"> </h1>
                <p class="lead text-white"></p>
            </div>
        </div>
    </div>
</header>
<


@yield('content')







<footer class="section footer-classic context-dark bg-image mt-5" style="background: #2d3246;">
    <div class="container">
        <div class="row row-30">
            <div class="col-md-4 col-xl-5">
                <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                    <p>We are an award-winning creative agency, dedicated to the best result in web design, promotion, business consulting, and marketing.</p>
                    <!-- Rights-->
                    <p class="rights"><span>©  </span><span class="copyright-year">2019</span><span> </span><span>Pixon Lab</span><span>. </span><span>All Rights Reserved.</span></p>
                </div>
            </div>
            <div class="col-md-4">
                <h5>Contacts</h5>
                <dl class="contact-list">
                    <dt>Address:</dt>
                    <dd>DIIT groundfloor, Panthapath, Dhaka</dd>
                </dl>
                <dl class="contact-list">
                    <dt>email:</dt>
                    <dd><a href="mailto:#">Eventsadmin@gmail.com</a></dd>
                </dl>
                <dl class="contact-list">
                    <dt>phones:</dt>
                    <dd><a href="tel:#">https://karosearch.com</a> <span>or</span> <a href="tel:#">https://karosearch.com</a>
                    </dd>
                </dl>
            </div>
            <div class="col-md-4 col-xl-3">
                <h5>Links</h5>
                <ul class="nav-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Evnts</a></li>
                    <li><a href="#">Gellary</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row no-gutters social-container">
        <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
        <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
        <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
        <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
    </div>
</footer>
<script>
    $(document).ready(function () {
        $(".menu-icon").on("click", function () {
            $("nav ul").toggleClass("showing");
        });
    });

    // Scrolling Effect

    $(window).on("scroll", function () {
        if ($(window).scrollTop()) {
            $('nav').addClass('black');
        } else {
            $('nav').removeClass('black');
        }
    })

</script>

</body>
</html>
