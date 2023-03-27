<?php

// start session
session_start();

    require_once('men/CreateDb.php');
    require_once ('men/component.php');

    // create instance of CreateDb class
    $database = new CreateDb("Productdb", "Producttb");
    

    if(isset($_POST['add'])){

        if(isset($_SESSION['cart'])){
            
            $item_array_id  = array_column($_SESSION['cart'], "product_id");
            
            if(in_array($_POST['product_id'], $item_array_id))
            {
                echo "<script>alert('Product has already been added to the cart..!!') </script>";
                echo "<script>window.location = 'men.php' </script>";
            }
            else
            {
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id' => $_POST['product_id']
                );

                echo "<script>alert('Product successfully added. Check carts..!!') </script>";
                echo "<script>window.location = 'men.php' </script>";

                $_SESSION['cart'][$count] = $item_array;
                
            }
        }
        else
        {
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            // Create new session variable
            $_SESSION['cart'][0] = $item_array;
            // print_r($_SESSION['cart']);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's Accessories</title>

    <!-- =========    UNICONS  ================= -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ============   AOS  LINK   ===================== -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- ==========   BOOSTRAP CSS AND JAVASCRIPT LINKS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- ============  GOOGLE FONTS  =========================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Oswald:wght@300&family=Roboto&display=swap" rel="stylesheet">

    <!-- ============   AJAX LINKS  =================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- =============  CSS LINKS  ========================= -->
    <link rel="stylesheet" href="assets/css/men.css">

    <!-- font awesome    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .popover
        {
            width: 100%;
            max-width: 800px;
        }
    </style>
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
                        <a class="nav-link active" aria-current="page" href="index.php#home_section">Home</a>
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

    <!-- ===========  MAIN PRODUCT SECTION   =================== -->

    <section class="main_section" id="men_clothe">
        <div class="container">
            <div class="row justify-content-md-center my-5">
                <div class="col-md-4">
                    <img src="assets/images/hq.jpg" alt="" class="img-fluid">
                    
                </div>
                <div class="col-md-4 py-5">
                    <h3>Our Hottest deals ....!!!!</h3>
                    <h6>From  now till the end of June 2023, Shopmania is on bonanza mode.
                        We are giving away a 30% discount. so hurry now or you will be left behind
                    </h6>
                </div>
            </div>
                
        </div>
    </section>

    
    
    <?php require_once ('men/header.php'); ?>
    <div class="container text-center">
        <h4 class="py-3">As a man, get the best clothes to put on</h4>
        <div class="row text-center py-5">
            <?php
                // $result = $database->getData();
                // while($row = mysqli_fetch_assoc($result)){
                //     component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                // }

                $dbhost='localhost';
                $dbuser = 'root';
                $dbpass = 'soundofrevival';
                $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
                if(!$conn){
                    die("Could not connect: ".mysqli_error($conn));
                }
                mysqli_select_db($conn, 'shopmania');
                $sequel = "SELECT id, product_name, product_price, product_image FROM men_shirt";
                $retval = mysqli_query($conn, $sequel);
                if(! $retval){
                    die('Could not connect to get data'.mysqli_error($conn));
                }

                while($new = mysqli_fetch_assoc($retval)){
                    component($new['product_name'], $new['product_price'], $new['product_image'], $new['id']);

                }
                // mysqli_close($conn);
                
            ?>
        </div>
    </div>

    <div class="container text-center" id="men_shoe">
        <h3>Get the highest shoe quality</h3>

        <div class="row text-center py-5">
            <?php
                $dbhost='localhost';
                $dbuser = 'root';
                $dbpass = 'soundofrevival';
                $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
                if(!$conn){
                    die("Could not connect: ".mysqli_error($conn));
                }
                mysqli_select_db($conn, 'shopmania');
                $shoeselect = "SELECT id, product_name, product_price, product_image FROM men_shoe";
                $shoequery = mysqli_query($conn, $shoeselect);
                if(! $shoequery){
                    die('Could not connect to get data'.mysqli_error($conn));
                }

                while($newshoe = mysqli_fetch_assoc($shoequery)){
                    component($newshoe['product_name'], $newshoe['product_price'], $newshoe['product_image'], $newshoe['id']);

                }
                mysqli_close($conn);
            ?>
        </div>

        
    </div>

    <div class="container text-center" id="men_trouser">
        <h4 class="py-3">Get high quality trousers for every occasion</h4>
        <div class="row text-center py-5">
            <?php
                $dbhost='localhost';
                $dbuser = 'root';
                $dbpass = 'soundofrevival';
                $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
                if(!$conn){
                    die("Could not connect: ".mysqli_error($conn));
                }
                mysqli_select_db($conn, 'shopmania');
                $trouserselect = "SELECT id, product_name, product_price, product_image FROM men_trouser";
                $trouserquery = mysqli_query($conn, $trouserselect);
                if(! $trouserquery){
                    die('Could not connect to get data'.mysqli_error($conn));
                }

                while($newtrouser = mysqli_fetch_assoc($trouserquery)){
                    component($newtrouser['product_name'], $newtrouser['product_price'], $newtrouser['product_image'], $newtrouser['id']);

                }
                mysqli_close($conn);
            
            ?>
        </div>
        
    </div>

    <div class="container text-center" id="men_deodorant">
        <div class="row text-center py-5">
            <h3>Get High quality perfumes from us</h3>
            <?php
                $dbhost='localhost';
                $dbuser = 'root';
                $dbpass = 'soundofrevival';
                $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
                if(!$conn){
                    die("Could not connect: ".mysqli_error($conn));
                }
                mysqli_select_db($conn, 'shopmania');
                $perfumeselect = "SELECT id, product_name, product_price, product_image FROM men_perfume";
                $perfumequery = mysqli_query($conn, $perfumeselect);
                if(! $perfumequery){
                    die('Could not connect to get data'.mysqli_error($conn));
                }

                while($newperfume = mysqli_fetch_assoc($perfumequery)){
                    component($newperfume['product_name'], $newperfume['product_price'], $newperfume['product_image'], $newperfume['id']);

                }
                mysqli_close($conn);
            
            ?>
        </div>
    </div>


    

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 160,
            duration: 1000,
        });
    </script>
</body>
</html>