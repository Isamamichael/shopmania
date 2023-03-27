<?php
    function component2($product_name, $product_price, $product_img, $product_id){
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

?>