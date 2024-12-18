<?php
session_start();
require_once 'translations.php';

// Set language from GET parameter or session or default to English
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
} elseif (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'EN';
}

$lang = $_SESSION['lang'];
$t = $translations[$lang];
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="<?php echo $lang === 'AR' ? 'rtl' : 'ltr'; ?>">

<head>
    <meta charset="utf-8">


    <title><?php echo $t['full name']; ?></title>
    <link rel="icon" type="image/x-icon" href="img/webp/output-onlinepngtools.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <META NAME="robots" CONTENT="noindex,nofollow">

    <!-- Favicon -->
    <link href="img//favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet"> -->

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">
    <style>
        .language-dropdown {
            display: none;
            position: absolute;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 100;
        }

        .nav__item:hover .language-dropdown {
            display: block;
        }

        .language-dropdown .dropdown-item {
            padding: 10px;
            text-align: left;
            display: block;
            color: #333;
            text-decoration: none;
        }

        .language-dropdown .dropdown-item:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>


<body class="<?php echo $lang === 'ar' ? 'rtl' : ''; ?>">


    <!-- Navbar Start -->
    <!-- Header Start -->
    <header class="header" id="header">
        <nav class="nav container">
            <!-- <a href="#" class="nav__logo">Marlon</a> -->

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class='bx bx-home-alt nav__icon'></i>
                            <span class="nav__name"><?php echo $t['home']; ?></span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class='bx bx-user nav__icon'></i>
                            <span class="nav__name"><?php echo $t['about']; ?></span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#services" class="nav__link">
                            <i class='bx bx-code-alt nav__icon'></i>
                            <span class="nav__name"><?php echo $t['services']; ?></span>
                        </a>
                    </li>



                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class='bx bx-message-square-detail nav__icon'></i>
                            <span class="nav__name"> <?php echo $t['contact']; ?></span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <!-- Language Selection Dropdown -->
                    <li class="nav__item">
                        <a href="#" class="nav__link" id="language-dropdown">
                            <i class='bx bx-globe nav__icon'></i>
                            <span class="nav__name"><i class='bx bx-world '></i><i class='bx bx-chevron-down '></i></span>
                        </a>
                        <ul class="language-dropdown">
                            <ul class="language-dropdown">
                                <li><a href="?lang=EN" class="dropdown-item">
                                        <img src="https://flagcdn.com/w20/gb.png" alt="English">
                                        <span>English</span>
                                    </a></li>
                                <li><a href="?lang=AR" class="dropdown-item">
                                        <img src="https://flagcdn.com/w20/sa.png" alt="Arabic">
                                        <span>العربية</span>
                                    </a></li>
                                <!-- Add more languages here -->
                            </ul>
                            <!-- Add more languages here -->
                        </ul>
                    </li>




                    </li>
                </ul>
            </div>

            <!-- <img src="assets/img/perfil.png" alt="" class="nav__img"> -->
        </nav>
    </header>

    <!-- Navbar End -->




    <!-- Video Modal End -->


    <!-- Header Start -->
    <div class="ba-home image-bg home-2-img">
        <div class="img-foverlay img-color-overlay">
            <div class="container-fluid  d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 px-4 pl-lg-0 pb-5 pb-lg-0">
                            <div class="img-border">
                                <img class="img-fluid rounded-circle shadow-sm" src="img/webp/3.jpg" alt="بكيل احمد مرشد">
                            </div>
                        </div>
                        <div class="col-lg-7 text-center text-lg-right">

                            <h1 class="display-4 font-weight-lighter text-white mb-2" style="-webkit-text-stroke: 2px #ffffff;"> <?php echo $t['full name']; ?></h1>
                            <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                            <div class="typed-text d-none"> <?php echo $t['job']; ?></div>
                            <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                                <a href="https://drive.google.com/drive/folders/1AhCcpHEORrhmAxkQuLpz-Gy7NfL1icf2" class="btn btn-primary text-black " target="_blank" style="    font-weight: 600;
                                   font-size: x-large;"> <?php echo $t['cover']; ?></a>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="m_r_1">
        <!-- About Start -->
        <div class="container-fluid py-5" id="about">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">

                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 pb-4 pb-lg-0">
                        <img class="img-fluid rounded w-100" src="img/webp/r.webp" alt="">
                    </div>
                    <div class="col-lg-7 posi-about">
                        <h1 class="mb-4 text-primary text-right " id="about-h"><?php echo $t['about']; ?></h1>
                        <p class="text-center">
                            <?php echo $t['about text']; ?>
                        </p>
                        <div class="row mb-3">

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Services Start -->
        <div class="container-fluid pt-5" id="services">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <!-- <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Service</h1> -->
                    <h1 class="position-absolute  text-primary"><?php echo $t['my services']; ?></h1>

                </div>
                <p class="p-align"></p>
                <div class="row pb-3">
                    <div class="col-lg-4 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-2x fa-code service-icon bg-primary text-white ml-3 fa-customize"></i>
                            <h4 class="font-weight-bold m-0"><?php echo $t['responsive design']; ?></h4>
                        </div>
                        <p><?php echo $t['respon text']; ?></p>

                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-2x fa-laptop-code service-icon bg-primary text-white ml-3 fa-customize"></i>
                            <h4 class="font-weight-bold m-0"><?php echo $t['system design']; ?></h4>
                        </div>
                        <p> <?php echo $t['system text']; ?></p>

                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-2x fa-user-shield service-icon bg-primary text-white ml-3 fa-customize"></i>
                            <h4 class="font-weight-bold m-0"><?php echo $t['technical suppport']; ?> </h4>
                        </div>
                        <p><?php echo $t['technical text']; ?></p>

                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-2x fa-database service-icon bg-primary text-white ml-3 fa-customize"></i>
                            <h4 class="font-weight-bold m-0"><?php echo $t['database design']; ?></h4>
                        </div>
                        <p>إ<?php echo $t['database text']; ?>

                        </p>

                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-2x fa-handshake service-icon bg-primary text-white ml-3 fa-customize"></i>
                            <h4 class="font-weight-bold m-0"><?php echo $t['marketing']; ?></h4>
                        </div>
                        <p><?php echo $t['marketing text']; ?></p>

                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-2x fa-edit service-icon bg-primary text-white ml-3 fa-customize"></i>
                            <h4 class="font-weight-bold m-0"><?php echo $t['content create']; ?> </h4>
                        </div>
                        <p><?php echo $t['content text']; ?></p>

                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->



        <div class="container-fluid pt-5" id="portfolio">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <!-- <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Gallery</h1> -->
                    <h1 class="position-absolute text-primary b-11"><?php echo $t['my project']; ?></h1>
                </div>
                <div class="row">
                    <div class="col-12 text-center mb-2 mb-h">
                        <ul class="list-inline mb-4" id="portfolio-flters">
                            <li class="btn btn-sm btn-outline-primary m-1 active" data-filter="*" style="font-weight: 600;
                        font-size: inherit;"><?php echo $t['all']; ?></li>
                            <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first" style="font-weight: 600;
                        font-size: inherit;"><?php echo $t['web']; ?></li>

                            <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third" style="font-weight: 600;
                        font-size: inherit;"><?php echo $t['desktop']; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                        <div class="position-relative overflow-hidden mb-2">
                            <a href="https://github.com/bakeeel/Exam-System" target="_blank">
                                <img class="img-fluid rounded w-100" src="img/webp/2.webp" style="width:400 px; height:300px;" alt="">
                                <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                    <button type="button" style="    color: white;font-size: larger;font-weight: bold;" class="btn btn-link">للمزيد...</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <a href="https://github.com/bakeeel/Blood-Bank-php" target="_blank">
                            <img class="img-fluid rounded w-100" src="img/webp/1.webp " style="width:400 px; height:300px;" alt="">

                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <button type="button" style="    color: white;font-size: larger;font-weight: bold;" class="btn btn-link">للمزيد...</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                <div class="position-relative overflow-hidden mb-2">
                    <a href="https://github.com/bakeeel/To-Do-List-App" target="_blank">
                        <img class="img-fluid rounded w-100" src="img/webp/5.webp" style="width:400 px; height:300px;" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <button type="button" style="    color: white;font-size: larger;font-weight: bold;" class="btn btn-link">للمزيد...</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
            <div class="position-relative overflow-hidden mb-2">
                <a href="https://github.com/bakeeel/Laravel-POS" target="_blank">
                    <img class="img-fluid rounded w-100" src="img/webp/4.webp" style="width:400 px; height:300px;" alt="">
                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                        <button type="button" style="    color: white;font-size: larger;font-weight: bold;" class="btn btn-link">للمزيد...</button>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
        <div class="position-relative overflow-hidden mb-2">
            <a href="https://github.com/bakeeel/Auth-System" target="_blank">
                <img class="img-fluid rounded w-100" src="img/webp/6.webp" style="width:400 px; height:300px;" alt="">
                <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                    <button type="button" style="    color: white;font-size: larger;font-weight: bold;" class="btn btn-link">للمزيد...</button>
            </a>
        </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
        <div class="position-relative overflow-hidden mb-2">
            <a href="https://github.com/bakeeel/Library-System-C-Sharp" target="_blank">
                <img class="img-fluid rounded w-100" src="img/webp/3.webp" style="width:400 px; height:300px;" alt="">
                <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                    <button type="button" style="    color: white;font-size: larger;font-weight: bold;" class="btn btn-link">للمزيد...</button>
            </a>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>







    <!-- Contact Start -->
    <div class="container-fluid pt-5 " id="contact">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <!-- <h1 class="display-1 text-uppercase text-white" >Contact</h1> -->
                <h1 class="position-absolute text-primary b-11"> <?php echo $t['contact me']; ?></h1>
            </div>
            <p class="p-align"></p>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8">
                    <div class="contact-form text-center">
                        <div id="success"></div>

                        <form name="sentMessage" id="contactForm" novalidate="novalidate" action="" method="">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="name" name="name" placeholder="<?php echo $t['username']; ?> "
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="email" name="email" placeholder="<?php echo $t['email']; ?>"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" name="subject" placeholder="<?php echo $t['subject']; ?>"
                                    data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" name="message" placeholder="<?php echo $t['message']; ?>"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit" id="sendMessageButton" style="width: 100%;  font-weight: 600;
                                font-size: x-large;"><a href="https://api.whatsapp.com/send?phone=966536892909" target="_blank"><?php echo $t['send message']; ?></a></button>

                                <!-- <input type="submit"> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-white text-black  px-sm-3 px-md-5 py-5">
        <div class="container text-center ">
            <div class="d-flex justify-content-center mb-4">
                <!-- <h4>Contact With me</h4> -->
                <p class="m-0"> <a class="font-weight-bold text-black" href="#home"> <?php echo $t['all rights']; ?> <i class=" fa fa-heart font-secondary BG-C"></i> B.Murshed</a>
                </p>
            </div>
            <div>
                <a class="btn btn-black btn-social mr-2 BG-C" href="https://twitter.com/Bakeel_Murshed?t=_1KfE2feDloh4xmp0J8K3A&s=08" target="_blank">
                    <i class="fab fa-twitter social-icon"></i></a>
                <a class="btn btn-black btn-social mr-2 BG-C" href="https://www.linkedin.com/in/bakeel-murshed/" target="_blank">
                    <i class="fab fa-linkedin-in social-icon"></i></a>
                <a class="btn btn-black btn-social BG-C" href="https://github.com/bakeeel" target="_blank">
                    <i class="fab fa-github social-icon"></i></a>
            </div>
            <div style="margin-bottom: 32px;"></div>
        </div>



    </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-outline-primary px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a> -->
 <!-- WhatsApp button -->
<a href="https://api.whatsapp.com/send?phone=966536892909&text=مرحبا اريد الحصول على معلومات" target="_blank"> <button id="whatsapp">
    <i class="fab fa-whatsapp"></i>
</button></a>

<!-- Back to Top button -->
<button id="backToTop" onclick="scrollToTop()">
    ↑
</button>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <!-- <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <!-- <script src="lib/lightbox/js/lightbox.min.js"></script> -->

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <!-- <script src="mail/contact.js"></script> -->

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        
    // Get the button elements
    const backToTopButton = document.getElementById('backToTop');

    // Show the Back to Top button when the user scrolls down 100px from the top
    window.onscroll = function() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            backToTopButton.style.display = "block";
        } else {
            backToTopButton.style.display = "none";
        }
    };

    // Scroll to the top when the button is clicked
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'  // Smooth scroll effect
        });
    }

    </script>


</body>

</html>