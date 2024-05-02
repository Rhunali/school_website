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

    <meta name="description" content="Kid's Nation Premium preschools and daycare centers with world-class amenities for holistic child development  ">
    <meta name="keywords" content=" play school near me, preschool near me, daycare near me, best preschool centers, best prescool centers, best daycare centers  ">
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="center-list.html" />

    <link rel="apple-touch-icon" sizes="180x180" href="static/frontend/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="static/frontend/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="static/frontend/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="static/frontend/images/favicon/site.webmanifest">
    <meta name="facebook-domain-verification" content="io8xzu798xnyoz0mby5tvd2y67nap2" />
    <meta name="msvalidate.01" content="B4F11CA24E41F352967B94E01B3AFFA6" />

    <!-- Meta Pixel Code -->
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




<body>

    <div class="scrollToTop"><i class="fas fa-angle-up"></i></div>
    <div class="overlay"></div>
    <div class="overlayTwo"></div>

    <!-- Header Section -->

    <header>
        <div class="header-top">

            <!--<div class="header-top-area">-->
            <!--<div class="col-lg-12 col-lg-6  p-1">-->
            <div class="header-top">
                <div class="container">
                    <div class="header-top-area">
                        <div class="col-md-12 text-center p-1">

                            <a href="admission.php">
                                Enroll Your Child at Kid's Nation Preschool
                                <span class="btn btn-light btn-sm text-dark">Apply Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>



        <div class="header-bottom">
            <div class="container-fluid">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="index.php">
                            <img src="static/front/images/logo/kids.png" alt="kid's nation logo" />
                        </a>
                    </div>
                    <div class="menu-area">
                        <ul class="menu">
                            <li>
                                <a href="index.php"><i class="fas fa-home"></i>Home</a>
                            </li>
                            <li>
                                <a href="about-us.php"><i class="fas fa-user"></i>About</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fas fa-book"></i>Programmes</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="play-group.php">Play Group</a>
                                    </li>
                                    <li>
                                        <a href="nursery.php">Nursery</a>
                                    </li>
                                    <li>
                                        <a href="junior-kg.php">Junior Kg</a>
                                    </li>
                                    <li>
                                        <a href="senior-kg.php">Senior Kg</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="admission.php"><i class="fas fa-user-visor"></i>Admission</a>
                            </li>
                            <li>
                                <a href="gallery.php"><i class="fas fa-school"></i>Gallery</a>
                            </li>
                            <li>
                                <a href="franchisee.php"><i class="fas fa-handshake"></i>Franchise</a>
                            </li>


                            <li>
                                <a href="contactus.php"><i class="fas fa-map-marker-alt"></i>Contact</a>
                            </li>

                        </ul>


                    </div>

                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </header>


    <section class="page-header bg_img" data-background="static/front/images/banner/page-header.png">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Gallery</h1>
            </div>
        </div>
    </section>
    <section class="page-section pt-50 pb-30 bg-light">
        <div class="container">
            <ul class="nav nav-tabs" id="galleryTabs" role="tablist">
                <?php
                $categories = array();
                $category_data = fetchalldata('categories');

                // Collect all unique categories
                while ($category = mysqli_fetch_array($category_data)) {
                    $categories[] = array(
                        'id' => $category['id'],
                        'name' => $category['category_name']
                    );
                }

                // Display tabs for each category
                foreach ($categories as $key => $category) {
                ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php if ($key === 0) echo 'active'; ?>" id="<?php echo str_replace(' ', '-', $category['name']); ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo str_replace(' ', '-', $category['name']); ?>" type="button" role="tab" aria-controls="<?php echo str_replace(' ', '-', $category['name']); ?>" aria-selected="<?php echo ($key === 0) ? 'true' : 'false'; ?>"><?php echo $category['name']; ?></button>
                    </li>
                <?php } ?>
            </ul>
            <div class="tab-content" id="galleryTabsContent">
                <?php foreach ($categories as $key => $category) { ?>
                    <div class="tab-pane fade <?php if ($key === 0) echo 'show active'; ?>" id="<?php echo str_replace(' ', '-', $category['name']); ?>" role="tabpanel" aria-labelledby="<?php echo str_replace(' ', '-', $category['name']); ?>-tab">
                        <div class="row justify-content-center mb--40--50">
                            <?php
                            $images_data = fetchImagesByCategoryId($category['id']); // Use the actual category_id
                            while ($image = mysqli_fetch_array($images_data)) {
                            ?>
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="gallery-item">
                                        <div class="gallery-inner">
                                            <div class="gallery-thumb" style="height: 300px;">
                                                <a href="gallery/<?php echo $image['category_id']; ?>/index.php">
                                                    <img src="admin/uploads/<?php echo $image['image_name']; ?>" alt="<?php echo $image['name']; ?>" style="height: 300px; margin: auto;">
                                                </a>
                                            </div>
                                            <div class="gallery-content">
                                                <h6 class="title"><?php echo $image['name']; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>







    <!-- /#about -->
    <!-- Footer-->
    <footer>
        <div class="footer-top pb-30">
            <div class="container">
                <div class="row gy-4 mb--50">
                    <div class="col-lg-4 col-md-6">
                        <div class="col-12">
                            <img class="logo" src="static/front/images/logo/kids-1.png" alt="logo footer" />
                        </div>
                        <div class="footer-widget widget-about">
                            <ul class="contact mt-3">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Beside Bhalchandra Upvan, Pandhare Wasti, Punawale, Pune- 411033.
                                </li>
                                <li>
                                    <i class="fas fa-globe-asia"></i><a href="email:info@kidsnationschool.com">info@kidsnationschool.com</a>
                                </li>
                                <li>
                                    <i class="fas fa-headset"></i><a href="Tel:91 992229 8884">+91 992229 8884/+91 9028 61 8884</a>
                                </li>
                            </ul>
                            <ul class="social-icons">
                                <li>
                                    <a href="https://www.facebook.com/kidsnation2019" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCxcM6wHUAteGLpwRPQtJ0ow/videos" class="youtube"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/udayankidz" class="instagram"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget widget-about">
                            <h5 class="title">Quick Links</h5>
                            <ul class="contact">
                                <li>
                                    <a href="index.php"><i class="fas fa-caret-right"></i> Home</a>
                                </li>
                                <li>
                                    <a href="about-us.php"><i class="fas fa-caret-right"></i> About Us</a>
                                </li>
                                <li>
                                    <a href="gallery.php"><i class="fas fa-caret-right"></i> Gallery</a>
                                </li>
                                <li>
                                    <a href="franchisee.php"><i class="fas fa-caret-right"></i> Franchise</a>
                                </li>

                                <li>
                                    <a href="contactus.php"><i class="fas fa-caret-right"></i> Contact Us</a>
                                </li>
                                <li>
                                    <a href="term-conditions.php"><i class="fas fa-caret-right"></i>Term & Conditions</a>
                                </li>
                                <li>
                                    <a href="privacy-policy.php"><i class="fas fa-caret-right"></i>Privacy Policy</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pl-xl-4">
                        <div class="footer-widget widget-about">
                            <h5 class="title">Programmes</h5>
                            <ul class="contact">
                                <li>
                                    <a href="play-group.php"><i class="fas fa-caret-right"></i>Play Group</a>
                                </li>
                                <li>
                                    <a href="nursery.php"><i class="fas fa-caret-right"></i>Nursery</a>
                                </li>
                                <li>
                                    <a href="junior-kg.php"><i class="fas fa-caret-right"></i>Junior KG</a>
                                </li>
                                <li>
                                    <a href="senior-kg.php"><i class="fas fa-caret-right"></i>Senior KG</a>
                                </li>
                                
                            </ul>
                           <!-- <h5 class="title">Quick Links</h5>
                            <ul class="contact">
                                 <li>
                                    <a href="prospectus.php"><i class="fas fa-caret-right"></i>Prospectus</a>
                                </li> 
                                <li>
                                    <a href="term-conditions.php"><i class="fas fa-caret-right"></i>Term & Conditions</a>
                                </li>
                                <li>
                                    <a href="privacy-policy.php"><i class="fas fa-caret-right"></i>Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="sitemap.xml" target="_blank"><i class="fas fa-caret-right"></i>Sitemap</a>
                                </li> 
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p>
                    &copy; Copyright, 2023-<span id="copyright"></span>
                    <script>
                        var date = new Date();
                        var year = date.getFullYear();
                        var currentYear = year.toString().substr(2, 3);
                        const copyright = document.getElementById('copyright');
                        copyright.innerHTML = currentYear;
                    </script>, <a href="index.php" target="_blank"></a> Kids Nation. All rights reserved</a>
                </p>
            </div>
        </div>
    </footer>



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

</body>



</html>