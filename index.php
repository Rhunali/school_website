<?php

include('admin/includes/connection.php');
include('admin/includes/allfunction.php');

?>


<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kids Nation
        Pre-school</title>

    <meta name="description" content="Kids Nation best preschool with elegant ambience and world class amenities to groom and nurture 
children to inculcate the highest standards of Values, Innovation, Passion & Trust  ">
    <meta name="keywords" content="
best preschool, best play school, Pre Nursery, Junior KG, Senior KG, Daycare, pre school
 ">
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="index.php" />

    <link rel="apple-touch-icon" sizes="180x180" href="static/frontend/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="static/frontend/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="static/frontend/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="static/frontend/images/favicon/site.webmanifest">
    <meta name="facebook-domain-verification" content="io8xzu798xnyoz0mby5tvd2y67nap2" />
    <meta name="msvalidate.01" content="B4F11CA24E41F352967B94E01B3AFFA6" />

    <!-- Meta Pixel Code -->
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            '../connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1648385125562466');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1648385125562466&amp;ev=PageView&amp;noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- End Meta Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-224724809-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-224724809-1');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K66STPV');
    </script>
    <!-- End Google Tag Manager -->

    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "hrex1fu0rv");
    </script>

    <link rel="stylesheet" href="static/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/front/css/all.min.css">
    <link rel="stylesheet" href="static/front/css/animate.css">
    <link rel="stylesheet" href="static/front/css/nice-select.css">
    <link rel="stylesheet" href="static/front/css/slick.css">
    <link rel="stylesheet" href="static/front/css/slick-theme.css">

    <link rel="stylesheet" href="static/front/css/magnific-popup.css">
    <link rel="stylesheet" href="static/front/css/flaticon.css">
    <link rel="stylesheet" href="static/front/css/main.css">

    <style>
        .social {
            width: 200px;
            position: fixed;
            display: flex;
            flex-direction: column;
            top: 35%;
            right: -160px;
            border-radius: 10px;
            z-index: 10;
            box-sizing: border-box;
        }

        .social a {
            padding: .5rem;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #fff;
            margin-top: 0.2rem;
            transition: all 0.5 ease;
        }

        .social a:hover {
            transform: translateX(-160px);
        }

        .social a svg {
            width: 24px;
            height: 24px;
            margin-right: 1rem;
        }

        .social a.facebook {
            background-color: #1877F2;
        }


        .social a.gbusiness {
            background-color: #DD4B39;
        }

        .social a.youtube {
            background-color: #CD201F;
        }

        .social a.instagram {
            background-color: #E4405F;
        }

        .social a.twitter {
            background-color: #1DA1F2;
        }

        .social a.linkedin {
            background-color: #0A66C2;
        }


        .left-sidebar {
            width: 200px;
            position: fixed;
            display: flex;
            flex-direction: column;
            top: 40%;
            left: -160px;
            border-radius: 10px;
            z-index: 10;
        }

        .left-sidebar a {
            padding: .5rem;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            text-decoration: none;
            color: #fff;
            margin-top: 0.2rem;
            transition: all 0.5s ease;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;

        }


        .left-sidebar a:hover {
            transform: translateX(160px);
        }

        .left-sidebar a i {
            width: 24px;
            height: 24px;
            margin-left: 1rem;
            left: 30px;
            font-size: 22px;
        }


        .left-sidebar a.call {
            background-color: #1877F2;
        }


        .left-sidebar a.whatsapp {
            background-color: #25D366;

        }

        .left-sidebar a.mail {
            background-color: #FF5700;
        }

        .news-ticker {
            display: flex;
            align-items: center;
            background-color: #2196F3;
            padding: 0;
        }


        .announcement-tab {
            display: flex;
            align-items: center;
            background-color: #2196F3;
            color: red;
            z-index: 999;
            padding-right: .1rem;
        }

        .announcement-icon {
            margin-right: 10px;
        }

        .announcement-text {
            font-size: 18px;
            color: #fff;
        }

        .news-ticker {
            width: 100%;
            background-color: #2396F3;
            color: #ffffff;
            padding: 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .announcement-tab {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .announcement-icon {
            margin-right: 5px;
        }

        .ticker-content {
            overflow: hidden;
        }

        .inline-list {
            list-style: none;
            padding: 0;
            margin: 0;
            white-space: nowrap;
            /* Prevent line breaks */
            animation: ticker-animation 20s linear infinite;
            /* Apply the animation */
        }

        .inline-list li {
            display: inline;
            margin-right: 20px;
        }

        @keyframes ticker-animation {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }


        /* Add a class to pause the animation */
        .paused-animation .inline-list {
            animation-play-state: paused;
        }

        .icons {
            margin-left: 600px;
            margin-right: 30px;
            display: inline-block;
        }

        .header-top-title {
            margin-left: 25px;
            display: inline-block;
        }
    </style>

</head>
<div class="left-sidebar">
    <a href="tel:9922298884" class="call">
        Call Us
        <i class="fas fa-phone-alt" aria-hidden="true" style="margin-left:15px" fill="currentColor"></i>
    </a>

    <a href="whatsapp://send?phone=9922298884" target="_blank" class="whatsapp">
        whatsapp
        <i class="fab fa-whatsapp" aria-hidden="true" fill="currentColor"></i>
    </a>

    <a href="mailto:kidsnation2019@gmail.com?Subject=Admission Assistance" class="mail">
        Mail us
        <i class="far fa-envelope" aria-hidden="true" fill="currentColor"></i>
    </a>
</div>
<div class="social">
    <a href="https://www.facebook.com/kidsnation2019" target="_blank" class="facebook">
        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="facebook-f">
            <path fill="currentColor" d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z"></path>
        </svg>
        Facebook
    </a>

    <a href="https://www.youtube.com/channel/UCxcM6wHUAteGLpwRPQtJ0ow/videos" target="_blank" class="youtube">
        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="youtube">
            <path fill="currentColor" d="M23,9.71a8.5,8.5,0,0,0-.91-4.13,2.92,2.92,0,0,0-1.72-1A78.36,78.36,0,0,0,12,4.27a78.45,78.45,0,0,0-8.34.3,2.87,2.87,0,0,0-1.46.74c-.9.83-1,2.25-1.1,3.45a48.29,48.29,0,0,0,0,6.48,9.55,9.55,0,0,0,.3,2,3.14,3.14,0,0,0,.71,1.36,2.86,2.86,0,0,0,1.49.78,45.18,45.18,0,0,0,6.5.33c3.5.05,6.57,0,10.2-.28a2.88,2.88,0,0,0,1.53-.78,2.49,2.49,0,0,0,.61-1,10.58,10.58,0,0,0,.52-3.4C23,13.69,23,10.31,23,9.71ZM9.74,14.85V8.66l5.92,3.11C14,12.69,11.81,13.73,9.74,14.85Z"></path>
        </svg>
        Youtube
    </a>

    <a href="#" target="_blank" class="twitter">
        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="twitter">
            <path fill="currentColor" d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z"></path>
        </svg>
        Twitter
    </a>

    <a href="#" target="_blank" class="linkedin">
        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="linkedin">
            <path fill="currentColor" d="M20.47,2H3.53A1.45,1.45,0,0,0,2.06,3.43V20.57A1.45,1.45,0,0,0,3.53,22H20.47a1.45,1.45,0,0,0,1.47-1.43V3.43A1.45,1.45,0,0,0,20.47,2ZM8.09,18.74h-3v-9h3ZM6.59,8.48h0a1.56,1.56,0,1,1,0-3.12,1.57,1.57,0,1,1,0,3.12ZM18.91,18.74h-3V13.91c0-1.21-.43-2-1.52-2A1.65,1.65,0,0,0,12.85,13a2,2,0,0,0-.1.73v5h-3s0-8.18,0-9h3V11A3,3,0,0,1,15.46,9.5c2,0,3.45,1.29,3.45,4.06Z"></path>
        </svg>
        LinkedIn
    </a>



    <a href="https://www.instagram.com/udayankidz" target="_blank" class="instagram">
        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="instagram">
            <path fill="currentColor" d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z"></path>
        </svg>
        Instagram
    </a>
</div>



<body>

    <div class="scrollToTop"><i class="fas fa-angle-up"></i></div>
    <div class="overlay"></div>
    <div class="overlayTwo"></div>

    <!-- Header Section -->

    <?php include './components/header.php'; ?>


    <!--Slider Section -->
    <section class="banner-section style-slide">
        <div class="banner-slider">
            <div class="banner-item">
                <img src="static/front/images/banner/banner-1.png" alt="Slider 1" class="d-block w-100">
            </div>
            <div class="banner-item ">
                <img src="static/front/images/banner/banner-2.png" alt="slider 2" class="d-block w-100">
            </div>
            <div class="banner-item">
                <img src="static/front/images/banner/banner-3.png" alt="slider 3" class="d-block w-100">
            </div>
        </div>
    </section>
    <!-- Slider Section-->

    <!--About Us-->
    <section class="about-section pos-rel pt-50 pb-50" style="background: #fff;">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p> Kids Nation
                        Pre-school – <strong>The
                            Rising Sun</strong> -
                        is a premier, state-of-the-art, <strong>The best
                            preschool </strong> with elegant ambience and world class amenities to groom and nurture
                        children to
                        inculcate the <strong>highest standards</strong> of <strong>Values, Innovation, Passion &amp;
                            Trust</strong>.
                        Our Pedagogy ensure to carve out the best in an infinite child’s potential to transform
                        <strong>Today’s Toddlers</strong> to <strong>Tomorrow’s Leaders.</strong>
                    </p>
                    <div class="section-header">
                        <h3 class="title">Programmes</h3>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mb-30-none -mx-10">
                <div class="col-sm-6 col-lg-2 col-xl-2">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <img src="static/front/images/play_group.png" alt="PLAY GROUP Kids Nation">
                        </div>
                        <div class="feature-content">
                            <h5 class="title">PLAY GROUP</h5>
                            <span class="cate">Age Group : 1-2 Year</span>
                            <p><a href="play-group.php" class="read">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 col-xl-2">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <img src="static/front/images/nursery.png" alt="NURSERY Kids Nation">
                        </div>
                        <div class="feature-content">
                            <h5 class="title">NURSERY</h5>
                            <span class="cate">Age Group : 2-3 Year</span>
                            <p><a href="nursery.php" class="read">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 col-xl-2">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <img src="static/front/images/junior_kg.png" alt="JUNIOR KG Kids Nation">
                        </div>
                        <div class="feature-content">
                            <h5 class="title">JUNIOR KG</h5>
                            <span class="cate">Age Group : 3-4 Year</span>
                            <p><a href="junior-kg.php" class="read">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 col-xl-2">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <img src="static/front/images/senior_kg.png" alt="SENIOR KG Kids Nation">
                        </div>
                        <div class="feature-content">
                            <h5 class="title">SENIOR KG</h5>
                            <span class="cate">Age Group : 4-5 Year</span>
                            <p><a href="senior-kg.php" class="read">Read More</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!--Why Chose Us-->
    <section class="about-section pos-rel ">

        <div class="pt-50 about-bottom" style="background: #2f8ed6;">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="page-header-content">
                            <h1 class="title">Why to Choose Us</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <blockquote class="about-quote">
                                <div class="thumb">
                                    <img src="static/front/images/about/ud1.jpg" alt="Planned by the best Minds of the Education World" class="rounded-circle">
                                </div>
                                <div class="content">
                                    <span class="text">Experienced and Caring Educators</span>
                                    <p style="color:#0e2c53;font-size: 14px;">
                                        Our skilled educators create a nurturing environment.</p>
                                </div>
                            </blockquote>

                        </div>
                        <div class="col-md-4 col-12">
                            <blockquote class="about-quote">
                                <div class="thumb">
                                    <img src="static/front/images/about/ud2.jpg" alt="A vast Variety of Toys to Play and learn" class="rounded-circle">
                                </div>
                                <div class="content">
                                    <span class="text">Play-Based Learning Approach</span>
                                    <p style="color:#0e2c53;font-size: 14px;">
                                        We emphasize play to foster creativity and critical thinking.</p>
                                </div>
                            </blockquote>
                        </div>
                        <div class="col-md-4 col-12">
                            <blockquote class="about-quote">
                                <div class="thumb">
                                    <img src="static/front/images/about/ud3.jpg" alt="Contemporary Technology embeded Classroom" class="rounded-circle">
                                </div>
                                <div class="content">
                                    <span class="text">Well-Rounded Curriculum</span>
                                    <p style="color:#0e2c53;font-size: 14px;">
                                        Academics, social-emotional development, arts, sports, and extracurricular activities.</p>
                                </div>
                            </blockquote>
                        </div>
                        <div class="col-md-4 col-12">
                            <blockquote class="about-quote">
                                <div class="thumb">
                                    <img src="static/front/images/about/ud4.jpg" alt="Designed for Kids to enjoy their best time" class="rounded-circle">
                                </div>
                                <div class="content">
                                    <span class="text">Safe and Welcoming Environment</span>
                                    <p style="color:#0e2c53;font-size: 14px;">
                                        We prioritize safety and provide a welcoming atmosphere.</p>
                                </div>
                            </blockquote>
                        </div>
                        <div class="col-md-4 col-12">
                            <blockquote class="about-quote">
                                <div class="thumb">
                                    <img src="static/front/images/about/ud5.jpg" alt="Caring Staffs & Best Teachers" class="rounded-circle">
                                </div>
                                <div class="content">
                                    <span class="text">Multi Function Class</span>
                                    <p style="color:#0e2c53;font-size: 14px;">
                                        Individual attention and personalized instruction.
                                    </p>
                                </div>

                            </blockquote>
                        </div>
                        <div class="col-md-4 col-12">
                            <blockquote class="about-quote">
                                <div class="thumb">
                                    <img src="static/front/images/about/ud6.jpg" alt="Security & Safety of Children are our priority" class="rounded-circle">
                                </div>
                                <div class="content">
                                    <span class="text">Parent Involvement</span>
                                    <p style="color:#0e2c53;font-size: 14px;">
                                        Open communication and active parent participation.</p>
                                </div>

                            </blockquote>
                        </div>

                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-6">
                        <div class="about-thumb">
                            <img src="static/front/images/banner/why_bg.png" alt="about">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header left-style mb-olpo">
                                <p><strong>Safe and secure environment</strong>&nbsp;&ndash; Our focus is to maintain and sustain
                                    International Standards of Safety, Security, Health and Hygiene. We provide happy, agile and safe
                                    environment for your children by nurturing with utmost <strong>CLC </strong>- Care, Love &amp;
                                    Compassion.<br /></p>
                                <p>
                                    <strong>Our approach:</strong>&nbsp;We enrich our team through the process of Continuous learning,
                                    unlearning the old ways &amp; re-learning the efficient state-of-the-art pedagogy. &nbsp;A dedicated
                                    scheme
                                    of systematized learning every year, synchronized with Organized, frequent regime of workshops, seminars
                                    and
                                    knowledge sharing sessions by Subject Matter Experts and field specialists empower the  Kids Nation
                                    family
                                    teachers to become premium-quality enablers which is akin to involvement, participation and contribution
                                    from each esteemed member. This fosters the joy of experiential learning and thus immensely contribute
                                    to
                                    our revered facilitator&rsquo;s growth and all-round development.<br />
                                </p>
                                <p>
                                    <strong>Spirited</strong> <strong>Learning </strong>is the order of the daycare.
                                </p>
                                <p>
                                    <strong>Expert&nbsp;coaches</strong>&nbsp;create environment that is <strong>fun-filled</strong> and
                                    infuses
                                    learning with delight.<br />
                                </p>
                                <p>
                                    <strong>Our day-care facility</strong> is extremely friendly, amicable for the kids to shine and
                                    flourish.
                                    It is clean, hygienic, calm and most importantly children here are happy and engaged.<br />
                                    <strong>Kids Nation </strong>pioneers the spirit of&nbsp;<strong>Innovation &amp; creativity</strong>.
                                    &nbsp;Application of research from neuroscience to educational and childcare practices.<br />
                                    We offer childcare solutions that best suit an employer&rsquo;s need. We provide a safe and secure
                                    ambience
                                    for children to nurture and flourish.<br />
                                    Passion is in the Offering<strong> </strong>where the kids develop earnest <strong>Curiosity to
                                        Learn</strong>
                                </p>
                                <p><strong>We have a Dynamic and Adaptable Platform</strong> which is easy to use and comprehensive
                                    platform
                                    called Luminous with a lot of collaborating games and rewarding system that makes learning more
                                    exciting. We
                                    provide you easy access to the child&rsquo;s assignments, learning resources, report cards and
                                    certificates.
                                </p>
                            </div>


                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <section class="gallery-section padding-top padding-bottom pos-rel">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header">
                        <h3 class="title">Photos Gallery</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb--40--50">


                <div class="row justify-content-center mb--40--50">
                    <?php
                    $servicedata = fetchalldata('gard_services');

                    while ($Gallery = mysqli_fetch_array($servicedata)) { ?>
                        <div class="col-xl-4 col-md-6 col-sm-10">

                            <div class="gallery-item">
                                <div class="gallery-inner">
                                    <div class="gallery-thumb" style="height: 300px;">
                                        <a href="gallery/christmas/index.php">
                                            <img src="admin/uploads/<?php echo $Gallery['image']; ?>" alt="Christmas" style="height: 300px; margin: auto;">
                                        </a>
                                    </div>
                                    <div class="gallery-content">
                                        <h6 class="title"><?php echo $Gallery['name']; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>

    </section>

<!-- Parent Speak -->
<!--
    <section class="client-section padding-top padding-bottom" style="background-color: #71228D;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header cl-white">
                        <h3 class="title">Parents Speak</h3>
                    </div>
                </div>
            </div>
            <div class="client-slider oh">


                <div class="client-item">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/EkkfUgzkfJQ" title="testimonials" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>





                <div class="client-item">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Lb8r1cRFwM0" title="testimonials" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>





                <div class="client-item">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_4ZESaQVxDU" title="testimonials" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>





                <div class="client-item">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/i7fABKcihvQ" title="testimonials" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>





                <div class="client-item">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/PVB5TEuzG1E" title="testimonials" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>





                <div class="client-item">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/5WGqnElgv_E" title="testimonials" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>


            </div>
        </div>
    </section>
 -->

    <!-- Footer-->

    <?php include './components/footer.php'; ?>

    <script src="static/front/js/jquery.js"></script>
    <script src="static/front/js/modernizr-3.6.0.min.js"></script>
    <script src="static/front/js/plugins.js"></script>
    <script src="static/front/js/bootstrap.bundle.min.js"></script>
    <script src="static/front/js/progress.js"></script>
    <script src="static/front/js/isotope.pkgd.min.js"></script>
    <script src="static/front/js/magnific-popup.min.js"></script>
    <script src="static/front/js/wow.min.js"></script>
    <script src="static/front/js/viewport.jquery.js"></script>
    <script src="static/front/js/nice-select.js"></script>
    <script src="static/front/js/slick.min.js"></script>
    <script src="static/front/js/main.js"></script>

    <script>
        function startTicker() {
            const ticker = document.querySelector('.news-ticker');
            ticker.classList.remove('paused-animation');
        }

        // Function to pause the ticker animation
        function pauseTicker() {
            const ticker = document.querySelector('.news-ticker');
            ticker.classList.add('paused-animation');
        }

        // Starting the ticker animation initially
        startTicker();
    </script>

</body>



</html>