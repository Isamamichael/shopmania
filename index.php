<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopmania</title>

    <!-- =========    UNICONS  ================= -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

 

    <!-- ==========   BOOSTRAP CSS AND JAVASCRIPT LINKS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- ============  GOOGLE FONTS  =========================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Oswald:wght@300&family=Roboto&display=swap" rel="stylesheet">

    <!-- ============     CSS LINK  ====================== -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- ===========    COUNTER ANIMATIONS  ================= -->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-flex" href="#">
                <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                <h1>S<sup>hopmania</sup></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home_section">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about_section">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="men.php" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Men's wear
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="men.php#men_clothe">Clothes</a></li>
                            <li><a class="dropdown-item" href="men.php#men_trouser">Trousers</a></l>
                            <li><a class="dropdown-item" href="men.php#men_shoe">Shoes</a></li>
                            <li><a href="men.php#men_deodorant" class="dropdown-item">Deodorants</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="men.php" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Women's wear
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="women.php#women_clothe">Clothes</a></li>
                            <li><a class="dropdown-item" href="women.php#women_trouser">Trousers</a></l>
                            <li><a class="dropdown-item" href="women.php#women_shoe">Shoes</a></li>
                            <li><a href="women.php#women_deodorant" class="dropdown-item">Deodorants</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="men.php" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Children's wear
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="children.php#children_clothe">Wears</a></li>
                            <li><a class="dropdown-item" href="children.php#children_shoe">Shoes</a></l>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact_section">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- =========   HOME SECTION  ================= -->

    <section class="home_section" id="home_section">
        <div class="container-fluid">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/h1.jpg" class="d-block w-100" alt>
                        <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                            <h1>SHOPMANIA</h1>
                            <h5>Buy, Buy, and Buy more !!!</h5>
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <button class="btn btn-danger btn-sm shop_button"><a href="shop.php" class="shop_link">Shop now</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/h2.jpg" class="d-block w-100" alt>
                        <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                            <h1>INFINITE COLLECTION</h1>
                            <h5>Get clothe which won't run</h5>
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <button class="btn btn-danger btn-sm shop_button"><a href="shop.php" class="shop_link">Shop now</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/home3.jpg" class="d-block w-100" alt>
                        <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                            <h1>QUALITY DESIGN</h1>
                            <h5>Get high quality with discount</h5>
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <button class="btn btn-danger btn-sm shop_button"><a href="shop.php" class="shop_link">Shop now</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/home4.jpg" class="d-block w-100" alt>
                        <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                            <h1>CUSTOMER CARE</h1>
                            <h5>Professionals at their job</h5>
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <button class="btn btn-danger btn-sm shop_button"><a href="index.php#contact_section" class="contact_link">Contact us</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        
    </section>

    <!-- ==========   ABOUT SECTION   ================= -->

    <section class="about_section" id="about_section">
        <div class="container-fluid">
            <div class="container text-center">
                <img src="assets/images/aicon.jpg" alt="" class="about_icon">
            </div>
            <!-- =========   OBJECTIVES ================ -->
            <div class="container">
                <div class="row text-center" id="objective">
                    <h3 class="objective">OUR OBJECTIVES</h3>
                    <div class="col-md-6 col-sm-12 col-xs-12" data-aos ="fade-right">
                        <img src="assets/images/a.jpg" alt="" class="w-100 journey_image">
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 mt-5" data-aos ="fade-right">
                        <p>
                            We are one of the largest textile companies in the country Nigeria providing high quality clothing engraved
                            with decency and morality. We were established with the mentality of transforming the textile industry in Nigeria
                            and instill into our dearly beloved country the virtues which will bring about societal growth and tolerance and at the
                            same time nuture our youths in the part of morality, exuding the illicit ideas and mindset inculcated into them by destroyers
                            and planting in them the seed of decency. So help us God
                        </p>
                        <p>
                            We try to offer our customers an unrivalled variety of clothes to choose from and expect that no one comes to our shop and go back the same
                        </p>
                    </div>
                </div>
            </div>
            

            <!-- =========   JOURNEY ==================== -->
            <div class="container">
                <div class="row text-center justify-content-md-center justify-content-sm-center justify-content-xs-center" id="journey">
                    <div data-aos="fade-left">
                        <img src="assets/images/growth.png" alt="" class="w-20 journey_icon">
                        <h3 class="journey">OUR JOURNEY</h3>
                    </div>
                    
                    <div class="col-md-6 col-sm-12 col-xs-12" data-aos="fade-left">
                        <img src="assets/images/j.jpg" alt="" class="w-100">
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 mt-5" data-aos="fade-left">
                        <p>
                            We started very small with just a shop having only 15 electronic sowing machines with the aim of enlarging our coast as time pass by
                            . Now, we can boast of having a very large industry both also very mighty facilities, gadgets and machinaries which help us develop our
                            products efficiently
                        </p>
                        <p>
                            Our financial story is all about hardwork and determination. The business was established with just 1.5 million naira. However, it has grown
                            to be a multi-billion enterprise as our net-worth as of 2023 was $40 million. Think that's impressive, what if we tell you that we now export
                            our goods to more than 15 countries, 10 of which are from Africa
                        </p>
                    </div>
                </div>
            </div>
            

            <!-- ===========    APPROACH =============== -->
            <div class="container">
                <div class="row text-center justify-content-md-center">
                    <div data-aos="zoom-up-right">
                        <img src="assets/images/idea.png" alt="" class="approach_icon">
                        <h3 class="journey">LEVIATHAN APPROACH TO DESIGN</h3>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-3" data-aos="zoom-up-right">
                        <div class="card w-100">
                            <img src="assets/images/indecency.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">We do not care about what other colleauges think about our decision but we have declared war against indecency
                                    and by the grace of our God, our dream is to bring it to a record low
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-3" data-aos="zoom-up-right">
                        <div class="card w-100">
                            <img src="assets/images/decent.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Bringing out beauty in simplicity and elegance in dressing, that's what we came for and that's what we are 
                                    going to achieve
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-3" data-aos="zoom-up-right">
                        <div class="card w-100">
                            <img src="assets/images/indecency.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">We provide quality clothes for all genders, male, female, children and even if you don't fall into any of 
                                    this group, contact us, we have special packages.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <!-- ==============   BRAGGING RIGHTS  ================== -->
            <div class="container">
                <div class="row text-center bragging_right" id="bragging_right">
                    <div data-aos="fade-up">
                        <h3>No need to brag but</h3>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 mb-5" data-aos="fade-up">
                        <img src="assets/images/clothe.png" alt="" class="bragging_image">
                        <p class="counter">250000</p>
                        <p>Clothe Collections</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 mb-5" data-aos="fade-up">
                        <img src="assets/images/f.jpg" alt="" class="bragging_image">
                        <p class="counter">700</p>
                        <p>Designers</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 mb-5" data-aos="fade-up">
                        <img src="assets/images/s.png" alt="" class="bragging_image">
                        <p class="counter">3000</p>
                        <p>Suppliers</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 mb-5" data-aos="fade-up">
                        <img src="assets/images/c.jpg" alt="" class="bragging_image">
                        <p class="counter">3500000</p>
                        <p>Customers</p>
                    </div>
                </div>
            </div>
            

            <!-- ==============   WHAT WE OFFER  ================= -->
            <div class="container">
                <div class="row text-center offers" id="offer">
                    <div data-aos="zoom-in">
                        <h3>WHAT WE HAVE TO OFFER</h3>
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3" data-aos="zoom-in">
                        <img src="assets/images/hp.jpg" alt="" class="w-100">
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3" data-aos="zoom-in">
                        <img src="assets/images/hc.jpg" alt="" class="w-100">
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12" data-aos="zoom-in">
                        <img src="assets/images/hq.jpg" alt="" class="w-100">
                    </div>
                </div>
            </div>
            
        </div>
        
    </section>

    <!-- ============  CONTACT SECTION   ================ -->
    
    <section class="contact_section" id="contact_section">
        <div class="container-fluid text-center contact_form justify-content-center">
            <div data-aos="zoom-in-left">
                <img src="assets/images/contact.png" alt="" class="contact_icon">
                <h1>Get In Touch</h1>
            </div>
            
            <div class="row" data-aos="zoom-in-left">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <p>
                        <span>
                            <i class="uil uil-calling"></i> +234 90 388 26030
                        </span>
                    </p>
                    <p>
                        <span>
                            <i class="uil uil-calling"></i> +234 80 653 14517
                        </span>
                    </p>
                    <p>
                        <span>
                            <i class="uil uil-envelope-edit"></i></i> isamainalegwu20@gmail.com
                        </span>
                    </p>
                    <p>
                        <span>
                            <i class="uil uil-facebook-messenger"></i></i> Isama Adanu
                        </span>
                    </p>
                    <p>
                        <span>
                            <i class="uil uil-facebook-messenger"></i> +234 90 3882 6030
                        </span>
                    </p>
                    <p>
                        <span>
                            <i class="uil uil-twitter"></i> Isama Michael
                        </span>
                    </p>
                    
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.551900448789!2d8.119599413973695!3d7.177681294817708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105add44bdfcccd7%3A0x2871f49a1a439d92!2sUnited%20Secondary%20School!5e0!3m2!1sen!2sng!4v1678387622617!5m2!1sen!2sng" class="w-100" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="row justify-content-md-center mt-5 " data-aos="zoom-in-left">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Full Name</label>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Email Address</label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center" data-aos="zoom-in-left">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Subject</label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center" data-aos="zoom-in-left">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3" data-aos="zoom-in-left">
                <button class="btn btn-dark">
                    <i class="uil uil-message"></i> Send
                </button>
            </div>
        </div>
    </section>

    <!-- ==========  FOOTER   ============== -->

    <section class="footer" id="footer">
        <div class="container-fluid text-center">
            <footer class="footers" id="footers">
            
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <h4>Items</h4>
                        <p><a href="men.php">Men's Wears</a></p>
                        <p><a href="women.php">Women's Wears</a></p>
                        <p><a href="children.php">Children's Wears</a></p>
                        <p><a href="men.php#men_deodorant">Men's Cosmetics</a></p>
                        <p><a href="women.php#women_deodorant">Women's Cosmetics</a></p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <h4>Know more</h4>
                        <p><a href="index.php#objective">Objectives</a></p>
                        <p><a href="index.php#offer">What we sell</a></p>
                        <p><a href="index.php#journey">Journey</a></p>
                        <p><a href="index.php#bragging_right">Facts</a></p>
                        <p><a href="index.php#contact_section">Contact</a></p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <h4>Our Partners</h4>
                        <img src="assets/images/accusoft.png" alt="" class="partners_img">
                        <img src="assets/images/apple.png" alt="" class="partners_img">
                        <img src="assets/images/beats-pill.png" alt="" class="partners_img">
                        <img src="assets/images/huawei.png" alt="" class="partners_img">
                        <img src="assets/images/itunes.png" alt="" class="partners_img">
                        
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <h4>Social media</h4>
                        <span><img src="assets/images/facebook.png" alt="" class="footer_img"></span>
                        <span><img src="assets/images/whatsapp.png" alt="" class="footer_img"></span>
                        <span><img src="assets/images/twitter.png" alt="" class="footer_img"></span>
                        <span><img src="assets/images/youtube.png" alt="" class="footer_img"></span>
                    </div>
                </div><hr>
                <div class="row">
                    <div class="col-12">
                        <p><span>Shopmania</span> Copyright @ shopmania textile industry. All right reserved</p>
                    </div>
                </div>
            </footer>
        </div>
    </section>

    
    <script>
        $(document).ready(function () {
            $(".counter").counterUp({
                delay: 10,
                time: 1200
            });
        });
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 160,
            duration: 1000,
        });
    </script>
</body>
</html>