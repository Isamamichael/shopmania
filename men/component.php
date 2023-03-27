<?php
    function component($product_name, $product_price, $product_img, $product_id){
        $element = "
            <div class=\"col-md-3 col-sm-6 col-xs-4 my-3 my-md-0\">
                <form action=\"men.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$product_img\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card_body\">
                            <h5 class=\"card_title\">$product_name</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <h5>
                                <small><s class=\"text_secondary\">$50</s></small>
                                <span class=\"price\">$product_price</span>
                            </h5>
                            <button class=\"btn btn-warning my-3\" name=\"add\" type=\"submit\">Add to cart</button>
                            <input type='hidden' name='product_id' value='$product_id'>
                        </div>
                    </div>
                </form>
            </div>
        ";

        echo $element;
    }



    function mainComponent($product_name, $product_price, $product_img, $product_id){
        $element = "
            <div class=\"col-md-3 col-sm-6 col-xs-6 my-3 my-md-0\">
                <form action=\"men.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$product_img\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card_body\">
                            <h5 class=\"card_title\">$product_name</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <h5>
                                <small><s class=\"text_secondary\">$50</s></small>
                                <span class=\"price\">$product_price</span>
                            </h5>
                            <button class=\"btn btn-warning my-3\" name=\"add\" type=\"submit\">Add to cart</button>
                            <input type='hidden' name='product_id' value='$product_id'>
                        </div>
                    </div>
                </form>
            </div>
        ";

        echo $element;
    }




    function cartElement($productimg, $productname, $productprice, $productid){
        $element = "

        <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
            <div class=\"border rounded\">
                <div class=\"row bg-white\">
                    <div class=\"col-md-3\">
                        <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                    </div>
                    <div class=\"col-md-6\">
                        <h5 class=\"pt-2\">$productname</h5>
                        <small class=\"text-secondary\">Seller: Isama Michael</small>
                        <h5 class=\"pt-2\">$productprice</h5>
                        <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                        <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                    </div>
                    <div class=\"col-md-3 py-5\">
                        <button type=\"button\" class=\"btn btn-danger border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                        <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                        <button class=\"btn btn-primary border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                    </div>
                </div>
            </div>
        </form>
        ";

        echo $element;
    }

    function clearCart(){
        $clear = "
            <form action=\"cart.php?action=total\" method=\"post\" class=\"cart-clear\">
                <button type=\"submit\" class=\"btn btn-danger\" name=\"total\">Clear cart</button>
            </form>
        ";
        echo $clear;
        
    }
    
    

?>