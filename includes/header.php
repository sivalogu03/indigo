<?php
// Define default SEO values if not set in the individual page
$page_title = isset($page_title) ? $page_title : "Indigo Interior - Best Home Interiors Designers in Bangalore";
$page_desc = isset($page_desc) ? $page_desc : "Professional home and villa interior design services in Bangalore.";
?>
<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_desc; ?>">
    
    <?php if(!empty($meta_keywords)): ?>
    <meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords); ?>">
    <?php else: ?>
    <meta name="keywords" content="best interior designers in Bangalore, Home interior design, residential interior design Bangalore">
    <?php endif; ?>

    <?php if(!empty($meta_robots)): ?>
    <meta name="robots" content="<?php echo htmlspecialchars($meta_robots); ?>">
    <?php endif; ?>

    <?php if(!empty($canonical_url)): ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
    <?php endif; ?>

    <!-- Social Meta Tags (Open Graph) -->
    <meta property="og:title" content="<?php echo !empty($og_title) ? htmlspecialchars($og_title) : $page_title; ?>">
    <meta property="og:description" content="<?php echo !empty($og_desc) ? htmlspecialchars($og_desc) : $page_desc; ?>">
    <meta property="og:type" content="website">
    <?php if(!empty($og_image)): ?>
    <meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">
    <?php endif; ?>

    <!-- Google Site Verification -->
    <meta name="google-site-verification" content="MGgWe5Yz6Uy3R0rudklj0x3YEjIEEGRBeBZvdoGlWYo" />

    <?php if(!empty($google_schema)): ?>
    <!-- Structured Data -->
    <?php echo $google_schema; ?>
    <?php endif; ?>

    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/css/slicknav.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link href="assets/css/all.min.css" rel="stylesheet" media="screen">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/mousecursor.css">
    <link href="assets/css/custom.css" rel="stylesheet" media="screen">

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
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WJ8C62XJ');
    </script>

    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
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
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '843752511422395');
        fbq('init', '901098335557964');
        fbq('track', 'PageView');
    </script>
</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJ8C62XJ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <!-- <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="assets/images/loder.png" alt="Loading"></div>
        </div>
    </div> -->

    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 col-sm-12">
                    <div class="top-info">
                        <span>
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:Info@indigointeriors.in">Info@indigointeriors.in</a>
                        </span>
                        <span>
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:+919945078403">+91 99450 78403</a>
                        </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="top-social d-flex justify-content-end">
                        <a href="https://www.facebook.com/indigointeriordesigners/" target="_blank" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/indigointeriordesigners/" target="_blank" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@IndigoInteriordesigners/shorts" target="_blank" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://www.linkedin.com/company/indigo-interiors-bangalore" target="_blank" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="main-header">
        <div class="shadow">
            <div class="header-sticky">
                <nav class="container">
                    <div class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/images/Indigo-logo2.png" style="margin-left:40px" width="100px" height="35px" alt="Indigo Interior">
                        </a>

                        <div class="collapse navbar-collapse main-menu">
                            <div class="nav-menu-wrapper">
                                <ul class="navbar-nav mr-auto" id="menu">
                                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                                    <li class="nav-item"><a class="nav-link" href="reviews.php">Reviews</a></li>
                                    <li class="nav-item submenu"><a class="nav-link" href="service.php">Service</a>
                                        <ul>
                                            <li><a href="home-villa-interior.php">Home & Villa Interior</a></li>
                                            <li><a href="apartment-interior.php">Apartment Interior</a></li>
                                            <li><a href="living-room-interior.php">Living Room Interior</a></li>
                                            <li><a href="bedroom-interior.php">Bedroom Interior</a></li>
                                            <li><a href="kitchen-interior.php">Kitchen Interior</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="project.php">Project</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog.php">Blogs</a></li>
                                    <li class="nav-item submenu"><a class="nav-link" href="#">Our Company</a>
                                        <ul>
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="careers.php">Careers</a></li>
                                            <li><a href="faqs.php">FAQs</a></li>
                                            <li><a href="contact-us.php">Contact Us</a></li>
                                            <li><a href="locations.php">Locations</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="https://wa.me/9945078403" target="_blank">
                                            <img src="assets/images/whatsapp.png" height="30px" width="30px" alt="WhatsApp Support">
                                        </a></li>
                                </ul>
                            </div>
                            <div class="header-btn d-inline-flex" style="margin-right:40px">
                                <a href="estimate.php" class="btn btn-danger">Get Free Estimate</a>
                            </div>
                        </div>
                        <div class="navbar-toggle"></div>
                    </div>
                </nav>
                <div class="responsive-menu"></div>
            </div>
        </div>
    </header>