<?php
    session_start();
    require_once('men/CreateDb.php');
    require_once('men/component.php');

    $db = new CreateDb("Productdb", "Producttb");

    if(isset($_POST["remove"]))
    {
        if($_GET['action'] == 'remove')
        {
            foreach($_SESSION['cart'] as $key => $value)
            {
                if($value["product_id"] == $_GET['id'])
                {
                    unset($_SESSION['cart'][$key]);
                    echo "<script> alert('Product has been successfully removed from cart') </script>";
                    echo "<script> window.location = 'cart.php' </script>";
                }
            }
        }
    }
    if(isset($_POST["total"])){
        if($_GET['action'] == 'total')
        {
            unset($_SESSION['cart']);
            echo "<script> alert('Your cart has been successfully cleared') </script>";
            echo "<script> window.location = 'cart.php' </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- font awesome   -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/css/men.css">

</head>
<body class="bg-light">
    <?php
        require_once('men/header.php');
    ?>
 
    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-7 col-xs-12">
                <div class="shopping-cart">
                    <h2>My Cart</h2>
                    <hr>
                    <h4>Men's Shirt </h4>
                    <hr><hr>

                    <?php
                        $total = 0;
                        if(isset($_SESSION['cart']))
                        {


                            // Displaying men shirts in the carts
                            $product_id = array_column($_SESSION['cart'], "product_id");
                            
                            // $result = $db->getData();
                            
                            $dbhost='localhost';
                            $dbuser = 'root';
                            $dbpass = 'soundofrevival';
                            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
                            if(!$conn){
                                die("Could not connect: ".mysqli_error($conn));
                            }
                            mysqli_select_db($conn, 'shopmania');
                            $shirtselect = "SELECT id, product_name, product_price, product_image FROM men_shirt";
                            $shirtquery = mysqli_query($conn, $shirtselect);
                            if(! $shirtquery){
                                die('Could not connect to get data'.mysqli_error($conn));
                            }

                            while($newshirt = mysqli_fetch_assoc($shirtquery)){
                                foreach($product_id as $id)
                                {
                                    if($newshirt['id'] == $id)
                                    {
                                        cartElement($newshirt['product_image'], $newshirt['product_name'], $newshirt['product_price'], $newshirt['id']);
                                        $total = $total + (int)$newshirt['product_price'];
                                    }
                                }
            
                            }
                            mysqli_close($conn);




                            // Displaying selected trousers

                            $product_id = array_column($_SESSION['cart'], "product_id");
                            
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
                                foreach($product_id as $id)
                                {
                                    if($newtrouser['id'] == $id)
                                    {
                                        cartElement($newtrouser['product_image'], $newtrouser['product_name'], $newtrouser['product_price'], $newtrouser['id']);
                                        $total = $total + (int)$newtrouser['product_price'];
                                    }
                                }
            
                            }
                            mysqli_close($conn);





                            // Displaying selected men shoe

                            $product_id = array_column($_SESSION['cart'], "product_id");

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
                                foreach($product_id as $id)
                                {
                                    if($newshoe['id'] == $id)
                                    {
                                        cartElement($newshoe['product_image'], $newshoe['product_name'], $newshoe['product_price'], $newshoe['id']);
                                        $total = $total + (int)$newshoe['product_price'];
                                    }
                                }
            
                            }
                            mysqli_close($conn);




                            // Displaying selected men perfumes

                            $product_id = array_column($_SESSION['cart'], "product_id");

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
                                foreach($product_id as $id)
                                {
                                    if($newperfume['id'] == $id)
                                    {
                                        cartElement($newperfume['product_image'], $newperfume['product_name'], $newperfume['product_price'], $newperfume['id']);
                                        $total = $total + (int)$newperfume['product_price'];
                                    }
                                }
            
                            }
                            mysqli_close($conn);

                            // while($row = mysqli_fetch_assoc($result)) 
                            // {
                            //     foreach($product_id as $id)
                            //     {
                            //         if($row['id'] == $id)
                            //         {
                            //             cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['id']);
                            //             $total = $total + (int)$row['product_price'];
                            //         }
                            //     }
                            // }
                        }
                        else{
                            echo "<script> alert('Your Shopping Cart is Empty') </script>";
                            echo "<script> window.location = 'men.php' </script>";
                        }
                     
                        
                     
                    ?>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 offset-1 border rounded mt-5 bg-white h-25">
                <div class="pt-4">
                    <h6>PRICE DETAILS</h6>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <?php
                                if(isset($_SESSION['cart']))
                                {
                                    $count = count($_SESSION['cart']);
                                    echo "<h6> Price ($count items) </h6>";
                                }
                                else
                                {
                                    echo "<h6> Price (0 items) </h6>";
                                }
                            ?>
                            <h6>Delivery charges</h6>
                            <hr>
                            <h6>Amount Payable</h6>
                        </div>
                        <div class="col-md-6">
                            <h6>$ <?php  echo $total?></h6>
                            <h6 class="text-success">FREE</h6>
                            <h6>$ <?php echo $total?></h6>
                            <button class="btn btn-primary my-3">Pay now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <div class="row">
            <?php
                clearCart();
            ?>
        </div>
    </div>
    
</body>
</html> 