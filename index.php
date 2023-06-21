<?php

$myEmail = "ukwuanifidelis2851@gmail.com";

?>

<?php
if (isset($_POST['submit'])) {
    // Variables to hold form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email recipient and subject
    $to = $myEmail;
    $subject = 'New Contact Form Submission From Portfolio.';

    // Email content
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message\n";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Sending email
    if (mail($to, $subject, $body, $headers)) {
        $good = 'Email sent successfully!';
    } else {
        $bad = 'Error occurred while sending the email.';
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="keendevs">
    <!-- ======== Page title ============ -->
    <title>Ukwuani Fidelis Ndubuisi - Web Developer| Blockchain Developer | Mobile Developer | UI/UX Designer. </title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="assets/css/icons.css">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--  owl carosuel css plugins -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- metisMenu css file -->
    <link rel="stylesheet" href="assets/css/metismenu.css">
    <!-- progresscircle css file -->
    <link rel="stylesheet" href="assets/css/progresscircle.css">
    <!--  owl theme css plugins -->
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--  main style css file -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- template main style css file -->
    <link rel="stylesheet" href="style.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- preloader -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="F" class="letters-loading">
                    F
                </span>
                <span data-text-preloader="I" class="letters-loading">
                    I
                </span>
                <span data-text-preloader="D" class="letters-loading">
                    D
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
                <span data-text-preloader="L" class="letters-loading">
                    L
                </span>
                <span data-text-preloader="I" class="letters-loading">
                    I
                </span>
                <span data-text-preloader="S" class="letters-loading">
                    S
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <header class="header-section header-style-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6">
                    <div class="logo">
                        <a href="index.php">Fidelis</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2 d-none d-lg-block text-right">
                    <div class="main-menu">
                        <ul>
                            <li><a href="index.php#">Home</a></li>
                            <li><a href="index.php#about">About</a></li>
                            <li><a href="index.php#services">services</a></li>
                            <li><a href="index.php#resume">Resume</a></li>
                            <li><a href="index.php#portfolio">Portfolio</a></li>
                            <li><a href="index.php#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 d-block d-lg-none">
                    <div class="menu-toggle text-right">
                        <div id="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- mobile menu - responisve menu  -->
                    <div class="mobile-nav">
                        <button type="button" class="close-nav">
                            <i class="fal fa-times-circle"></i>
                        </button>
                        <nav class="sidebar-nav">
                            <ul class="metismenu" id="mobile-menu">
                                <li><a href="index.php#">Home</a></li>
                                <li><a href="index.php#about">About</a></li>
                                <li><a href="index.php#services">services</a></li>
                                <li><a href="index.php#resume">Resume</a></li>
                                <li><a href="index.php#portfolio">Portfolio</a></li>
                                <li><a href="index.php#contact">Contact</a></li>
                            </ul>
                        </nav>

                        <a href="#" class="theme-btn mt-4">+ Download CV</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="hero-section hero-1" style="background-image: url('assets/img/hero_bg_element.png')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-12 text-center text-lg-left">
                    <div class="hero-content overflow-hidden">
                        <span class="hello-tooltip wow fadeInLeft" data-wow-duration="1s"
                            data-wow-delay=".5s">Wellcome</span>
                        <h1 class="wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay=".9s"> I Am Fidelis</h1>
                        <div class="typed">
                            <h3 class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.3s">A <span
                                    class="profession"></span></h3>
                        </div>
                        <p class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.6s">With 4 years commercial
                            experience building successful web projects.</p>
                        <a href="#" class="theme-btn wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.9s">+
                            Download CV</a>

                        <div class="social-profile">
                            <a href="#" class="wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay="2.2s"><i
                                    class="fal fa-plus"></i>facebook</a>
                            <a href="#" class="wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay="2.5s"><i
                                    class="fal fa-plus"></i>twitter</a>
                            <a href="#" class="wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay="2.7s"><i
                                    class="fal fa-plus"></i>linkedin</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-sm-12 text-center overflow-hidden">
                    <div class="hero-profile-img wow fadeInUp" data-wow-duration="2s" data-wow-delay=".9s">
                        <img src="assets/img/profile.png" alt="Spruce" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- service section -->
    <section class="services-section section-padding" id="services">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center col-lg-10 offset-lg-1">
                    <div class="section-title-one wow fadeInDown" data-wow-duration="1.2s">
                        <span>my services</span>
                        <h2>Services I provide for my Clients.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-service service-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="icon">
                            <img src="assets/img/icons/creativity.png" alt="">
                        </div>
                        <h3>Web Development</h3>
                        <p>Responsive websites built for an optimal user experience that achieves your business goals.
                        </p>
                    </div>
                </div> <!-- /.single-service -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-service service-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="icon">
                            <img src="assets/img/icons/seo.png" alt="">
                        </div>
                        <h3>Blockchain Services</h3>
                        <p>Highly audited Smart Contracts, NFTs, Tokens, Exchanges, DOA, ICO and more.</p>
                    </div>
                </div> <!-- /.single-service -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-service service-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                        <div class="icon">
                            <img src="assets/img/icons/code.png" alt="">
                        </div>
                        <h3>Mobile Apps</h3>
                        <p>Clean, modern, cross platform - optimized for performance, search engines, and converting
                            users to customers.</p>
                    </div>
                </div> <!-- /.single-service -->
            </div>
            <div class="contact-promo text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">
                Have any Work? Fell Free to - <a href="#contact">Contact Me</a>
            </div>
        </div>
    </section>

    <!-- about-me section -->
    <section class="about-section section-padding theme-bg-gray" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 achivements-area">
                    <div class="single-achivement">
                        <div class="icon">
                            <img src="assets/img/icons/start-up.png" alt="">
                        </div>
                        <div class="achive-heading">
                            <h3>Top Rated</h3>
                            <span>Worldclass Developer</span>
                        </div>
                    </div> <!-- single-achivement -->
                    <div class="single-achivement">
                        <div class="icon">
                            <img src="assets/img/icons/client.png" alt="">
                        </div>
                        <div class="achive-heading">
                            <h3>50+</h3>
                            <span>Satisfied Clients</span>
                        </div>
                    </div> <!-- single-achivement -->
                    <div class="single-achivement">
                        <div class="icon">
                            <img src="assets/img/icons/career.png" alt="">
                        </div>
                        <div class="achive-heading">
                            <h3>4 YEARS</h3>
                            <span>Experienced Building</span>
                        </div>
                    </div> <!-- single-achivement -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 col-12 wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <div class="main-profile-img">
                        <img src="assets/img/main_profile.png" alt="profile image">
                        <span>+</span>
                        <div class="dots_animate"></div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-12 wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".4s">
                    <div class="about-content">
                        <h1>Hello! I,m Fidelis <br> A Passionate Software Dev.</h1>
                        <h3 class="mb-3">Have 4 Years Of Experience</h3>
                        <p class="mb-2">Since beginning my journey as a Software Developer over 4 years ago, I've worked
                            on variety of projects varying from websites for corporate angency, Web Applications solving
                            real world problems, etc.</p>
                        <p class="mb-2">I build everything with <strong>Web Apps</strong> (Jquery, Vue Js, Nuxt Js, PHP,
                            Laravel), <strong>Blockchain</strong> (Web3 Js, Ether Js, Solidity, Remix) <strong>Mobile
                                Apps</strong> (Flutter, Dart).</p>
                        <p class="mb-2">I'm quietly confident, naturally curious, and perpetually working on improving
                            my problem solving skills one at a time.</p>
                        <div class="row mt-3">
                            <div class="col-sm-6 col-12">
                                <div class="single-info">
                                    <h4>Phone :</h4>
                                    <p>+234 8028514704</p>
                                </div>
                                <div class="single-info">
                                    <h4>Available :</h4>
                                    <p>Open to every positive opportunity</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="single-info">
                                    <h4>Email :</h4>
                                    <p>ukwuanifidelis2851@gmail.com</p>
                                </div>
                                <div class="single-info">
                                    <h4>Address :</h4>
                                    <p>NO 50 Umueze Cresent Enugu Ngwo, Nigeria.</p>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="theme-btn">+ Download CV</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skills-experiance-resume style-2 section-padding theme-bg-gray bg-cover pt-0 pb-4" id="resume">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="programming-skill">
                        <h3>Coding Skills</h3>

                        <div class="single-progress-bar">
                            <p>HTML & CSS</p>
                            <div class="progress-bar barfiller" id='bar1'>
                                <div class="tipWrap wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s">
                                    <span class="tip">95</span>
                                </div>
                                <span class="fill wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s"
                                    data-percentage="95"></span>
                            </div>
                        </div>

                        <div class="single-progress-bar">
                            <p>Javascript / Vue Js</p>
                            <div class="barfiller progress-bar" id='bar2'>
                                <div class="tipWrap wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".6s">
                                    <span class="tip">85%</span>
                                </div>
                                <span class="fill wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".6s"
                                    data-percentage="85"></span>
                            </div>
                        </div>

                        <div class="single-progress-bar">
                            <p>PHP / Laravel</p>
                            <div class="barfiller progress-bar" id='bar3'>
                                <div class="tipWrap wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".8s">
                                    <span class="tip">89%</span>
                                </div>
                                <span class="fill wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".8s"
                                    data-percentage="89"></span>
                            </div>
                        </div>

                        <div class="single-progress-bar">
                            <p>Blockchain / Solidity</p>
                            <div class="barfiller progress-bar" id='bar4'>
                                <div class="tipWrap wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s">
                                    <span class="tip">70%</span>
                                </div>
                                <span class="fill wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s"
                                    data-percentage="70"></span>
                            </div>
                        </div>

                        <div class="single-progress-bar">
                            <p>Flutter / Dart</p>
                            <div class="barfiller progress-bar" id='bar5'>
                                <div class="tipWrap wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s">
                                    <span class="tip">60%</span>
                                </div>
                                <span class="fill wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s"
                                    data-percentage="60"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                    <div class="design-skills">
                        <h3>Technical Skills</h3>
                        <div class="row">
                            <div class="single-design-skill text-center col-sm-4 col-12">
                                <div class="circlechart" data-percentage="75"></div>
                                <p>Project management.</p>
                            </div>
                            <div class="single-design-skill text-center col-sm-4 col-12">
                                <div class="circlechart" data-percentage="80"></div>
                                <p>Software proficiency</p>
                            </div>
                            <div class="single-design-skill text-center col-sm-4 col-12">
                                <div class="circlechart" data-percentage="90"></div>
                                <p>Comminucation</p>
                            </div>
                            <div class="single-design-skill text-center col-sm-4 col-12">
                                <div class="circlechart" data-percentage="90"></div>
                                <p>Digital Research</p>
                            </div>
                            <div class="single-design-skill text-center col-sm-4 col-12">
                                <div class="circlechart" data-percentage="80"></div>
                                <p>Software Testing</p>
                            </div>
                            <div class="single-design-skill text-center col-sm-4 col-12">
                                <div class="circlechart" data-percentage="75"></div>
                                <p>UI/UX Design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="experience-section section-padding theme-bg-gray"
        style="background-image: url('assets/img/testimonial_bg.png');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 col-lg-6">
                    <div class="section-title-two text_left">
                        <h2>My Experience</h2>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibhl
                            consecteture elite more.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-6 mt-4 mt-md-0">
                    <div class="section-button text-md-right">
                        <a href="#" class="theme-btn">+ Download CV</a>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 col-12">
                    <div class="single-resume-item">
                        <div class="year">
                            <span>2019-2020</span>
                        </div>
                        <h3>Frontend Developer</h3>
                        <h5>Tanatech Labs LTD</h5>
                        <p>Maecenas tempus faucibus rutrum. Duis eu aliquam urna. Proin vitae nulla tristique, ornare
                            felis id, congue libero. Nam volutpat euismod quam.</p>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="single-resume-item">
                        <div class="year">
                            <span>2020-2023</span>
                        </div>
                        <h3>Fullstack Web Developer</h3>
                        <h5>Tanatech Labs LTD</h5>
                        <p>Maecenas tempus faucibus rutrum. Duis eu aliquam urna. Proin vitae nulla tristique, ornare
                            felis id, congue libero. Nam volutpat euismod quam.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="portfolio-showcase section-padding " id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center col-lg-10 offset-lg-1">
                    <div class="section-title-one">
                        <span>My portfolio</span>
                        <h2>Here are a few past projects I've worked on. <br> <small>Want to see more? <a
                                    href="mailto:<?php echo ($myEmail) ?>">Email me</a></small>.</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="portfolio-filter mt-4 mt-sm-5">
                        <button data-filter="*" class="active">All</button>
                        <button data-filter=".projects">Projects</button>
                        <button data-filter=".photos">Photos</button>
                        <button data-filter=".certificate">Certificate</button>
                    </div>
                </div>
            </div>
            <div class="row grid p-0">
                <div class="col-lg-4 col-md-6 col-12 grid-item projects">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/1.jpg" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/vestpro-frontend.png" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                    <p class="mt-2">Projects</p>
                    <a href="https://fungous-adjustments.000webhostapp.com/">
                        <h4 class="">VestPro website</h4>
                    </a>
                    <p class="">Corporate site for a crypto trading agency</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item projects website app">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/vestpro-backend.png" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/vestpro-backend.png" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                    <p class="mt-2">Projects</p>
                    <a href="https://fungous-adjustments.000webhostapp.com/backend/">
                        <h4 class="">VestPro (Trading Web App)</h4>
                    </a>
                    <p class="">The Trading system of the VestPro trading site.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item projects">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/community management system.png" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/community management system.png" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                    <p class="mt-2">Projects</p>
                    <a href="#">
                        <h3 class="">Community management system</h3>
                    </a>
                    <p class="">I built some pages of this movie stream site.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item projects">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/seeds of greatness.png" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/seeds of greatness.png" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                    <p class="mt-2">Projects</p>
                    <a href="https://seedsofgreatnessinstitute.com/advert.php">
                        <h3 class="">Seed of greatness institute </h3>
                    </a>
                    <p class="">An online skull for personal development courses.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item projects">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/gecci.png" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/gecci.png" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                    <p class="mt-2">Projects</p>
                    <a href="https://geccinitiative.org/">
                        <h3 class="">Green environmental and climate change initiative (GECCI) </h3>
                    </a>
                    <p class="">An environmental conservation organization incorporated under the law of the federal
                        republic of Nigeria.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item projects">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/4.jpg" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/4.jpg" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                    <p class="mt-2">Projects</p>
                    <a href="#">
                        <h3 class="">Patraeous luxury hotel</h3>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item projects">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/4.jpg" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/4.jpg" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                    <p class="mt-2">Projects</p>
                    <a href="#">
                        <h3 class="">Echelon mbadiwe</h3>
                    </a>
                    <p class="">Website of a Nigerian Nollywood actress.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item projects">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/pure sound visual tech.png" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/pure sound visual tech.png" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                    <p class="mt-2">Projects</p>
                    <a href="https://www.puresoundvisualtech.com/">
                        <h3 class="">Pure sound visual tech</h3>
                    </a>
                    <p class="">Website of an entertainment and movie producing company.</p>
                </div>

                <div class="col-lg-4 col-md-6 col-12 grid-item projects app">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/5.jpg" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/5.jpg" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                    <p class="mt-2">Projects</p>
                    <a href="#">
                        <h3 class="">The Easterner</h3>
                    </a>
                    <p class="">I built the frontend pages of this News Paper site.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item projects app">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/web3.png" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/web3.png" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                    <p class="mt-2">Projects</p>
                    <a href="https://chic-syrniki-3263c7.netlify.app/">
                        <h3 class="">Ether transfer and balance checker.</h3>
                    </a>
                    <p class="">A Web3 app for transfering and checking Ether balance.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item projects app">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/weather-app.png" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/weather-app.png" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                    <p class="mt-2">Projects</p>
                    <a href="https://deluxe-mochi-ff8d72.netlify.app/">
                        <h3 class="">Weather App</h3>
                    </a>
                    <p class="">This shows you the current weather condition of some known location</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item projects app">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/todo-app.png" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/todo-app.png" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                    <p class="mt-2">Projects</p>
                    <a href="https://spectacular-hotteok-3007a6.netlify.app/">
                        <h3 class="">Todo web app</h3>
                    </a>
                    <p class="">I built this Todo app with Vue Js.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item projects app">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/5.jpg" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/5.jpg" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                    <p class="mt-2">Projects</p>
                    <a href="#">
                        <h3 class="">Flutter Plant App</h3>
                    </a>
                    <p class="">I built this with Flutter.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item projects app">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/5.jpg" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/5.jpg" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                    <p class="mt-2">Projects</p>
                    <a href="#">
                        <h3 class="">Flutter Gym App</h3>
                    </a>
                    <p class="">I built this with Flutter.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- testimonial section -->
    <section class="testimonial-section section-padding py-0" style="background-image: url('assets/img/testi_bg.png');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <div class="testimonial-box-active text-center owl-carousel owl-theme">
                        <div class="single-testimonial-item">
                            <div class="client-img" style="background-image: url('assets/img/client1.png');"></div>
                            <div class="client-info">
                                <h3>Rachel Dowson</h3>
                                <span>Creative Arts</span>
                            </div>
                            <p>Not only was Fidelis's work on-time and to spec, he pays attention to improve the
                                aesthetics of the site as well as the functionality. Throughout the entire process he is
                                responsive, and willing to work through issues as they arise. It’s obvious he takes
                                tremendous pride in his work, and I wouldn’t hesitate to recommend or work with him
                                again.</p>
                        </div>
                        <div class="single-testimonial-item">
                            <div class="client-img" style="background-image: url('assets/img/profile.png');"></div>
                            <div class="client-info">
                                <h3>Salman Ahmed</h3>
                                <span>Lawyer</span>
                            </div>
                            <p>Working with Fidelis was better than expected and we had really high expectations. He is
                                an incredibly talented developer but what really makes him stand out is his work ethic
                                and steady approach. Time after time, and without us asking, he added enhancements and
                                improvements that resulted in a better end product for us and our clients.</p>
                        </div>
                        <div class="single-testimonial-item">
                            <div class="client-img" style="background-image: url('assets/img/client2.png');"></div>
                            <div class="client-info">
                                <h3>Isabella Dowson</h3>
                                <span>CEO of WPLand</span>
                            </div>
                            <p>Fidelis has done a fantastic job overall. Not only the site is to design, the code is
                                very clean and slick. Love the way he achieved the translations portion of the site.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- blog section -->
    <section class="blog-section section-padding" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center col-lg-8 offset-lg-2">
                    <div class="section-title-one">
                        <span>blog news</span>
                        <h2>Here are Some Tips&Tricks</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-blog blog-one">
                        <div class="featured-img" style="background-image: url('assets/img/blog1.jpg');"></div>
                        <div class="blog-content-box">
                            <div class="post-date">03 May 2022</div>
                            <h3><a target="_blank"
                                    href="https://blog.obumnwabude.com/5-things-you-will-gain-from-tech-communities">5
                                    things you will gain from Tech Communities</a></h3>

                            <a target="_blank"
                                href="https://blog.obumnwabude.com/5-things-you-will-gain-from-tech-communities"
                                class="read-more-btn">+ Read More</a>
                        </div>
                    </div>
                </div> <!-- /.single-blog -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-blog blog-one">
                        <div class="featured-img" style="background-image: url('assets/img/blog2.jpg');"></div>
                        <div class="blog-content-box">
                            <div class="post-date">18 October 2018</div>
                            <h3><a target="_blank"
                                    href="https://www.freecodecamp.org/news/useful-tips-to-help-you-create-good-habits-as-a-web-developer-7c1b7b5c0bcb/">Useful
                                    tips to help you create good habits as a web developer</a></h3>

                            <a target="_blank"
                                href="https://www.freecodecamp.org/news/useful-tips-to-help-you-create-good-habits-as-a-web-developer-7c1b7b5c0bcb/"
                                class="read-more-btn">+ Read More</a>
                        </div>
                    </div>
                </div> <!-- /.single-blog -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-blog blog-one">
                        <div class="featured-img" style="background-image: url('assets/img/blog3.jpg');"></div>
                        <div class="blog-content-box">
                            <div class="post-date">09 February 2022</div>
                            <h3><a target="_blank"
                                    href="https://blog.codemon.me/how-to-send-custom-token-with-ethersjs-binance-smart-chain">How
                                    to Send Custom Token With Ethers.js ( Binance Smart Chain )</a></h3>

                            <a target="_blank"
                                href="https://blog.codemon.me/how-to-send-custom-token-with-ethersjs-binance-smart-chain"
                                class="read-more-btn">+ Read More</a>
                        </div>
                    </div>
                </div> <!-- /.single-blog -->
            </div>
        </div>
    </section>

    <section class="contact-info-top" id="contact">
        <div class="container">
            <div class="row text-center contact-top">
                <div class="single-info col-md-4 col-12">
                    <h4>Address :</h4>
                    <span>No 50 umueze cresent Enugu Ngwo, Nigeria.</span>
                </div>
                <div class="single-info col-md-4 col-12">
                    <h4>eMail :</h4>
                    <span>
                        <?php echo ($myEmail) ?>
                    </span>
                </div>
                <div class="single-info col-md-4 col-12">
                    <h4>Phone :</h4>
                    <span>+234 8028514740</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section -->
    <section class="contact-section section-padding theme-bg-gray"
        style="background-image: url('assets/img/testimonial_bg.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 mt-5 text-center text-lg-left">
                    <div class="section-title-two text_left">
                        <h2>Need To asking any Quations Call Me or Message me.</h2>
                        <p>Interested in working together? We should queue up a time to chat.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-7 offset-lg-1">
                    <?php
                    if (isset($good)) {
                        ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>successfully!</strong>
                            <?php echo ($good) ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                    } elseif (isset($bad)) {
                        ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Sorry!</strong>
                            <?php echo ($bad) ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="contact-form-wraper">
                        <form action="" method="post" class="row">
                            <div class="col-md-6 col-12">
                                <div class="single-input">
                                    <input type="text" name="name" placeholder="Enter your full name">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-input">
                                    <input type="email" name="email" placeholder="Enter your Email address">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="single-input">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" name="submit" class="theme-btn">+ Mesage Me</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- col-12 col-lg-8 -->
            </div>
        </div>
    </section>

    <footer class="footer-one text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    &copy; 2023 Fidelis | All Right Reserved.
                </div>
            </div>
        </div>
    </footer>

    <!--  ALl JS Plugins
    ====================================== -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/modernizr-3.7.1.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imageload.min.js"></script>
    <script src="assets/js/scrollUp.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/waypoint.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/typed.min.js"></script>
    <script src="assets/js/metismenu.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progresscircle.js"></script>
    <script src="assets/js/barfiller.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script>
        let typed = new Typed('.profession', {
            strings: ["UI/UX Designer", "Frontend Developer", "Software Developer", "Blockchain Developer"],
            typeSpeed: 80,
            loop: true,
            startDelay: 200,
            backSpeed: 50,
        });
    </script>
    <script src="assets/js/active.js"></script>
</body>

</html>