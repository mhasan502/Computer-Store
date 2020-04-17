<?php
require_once 'connect.php';
    $query = "SELECT * FROM product";
    $result = mysqli_query($conn, $query);
    while( $row = mysqli_fetch_array($result)){
        $pname = $row['name'];
        $price = $row['price'];
        $imagepath = $row['imagepath'];
        $id = $row['product_id'];
        echo "
        <div class='col-xs-12 col-md-2 product-layout grid'>
            <div class='product-thumb'>
                <div class='img-holder'>
                    <a href='#'>
                        <img src='$imagepath'>
                    </a>
                </div>
                <div class='product-info'>
                    <div class='product-content-blcok'>
                        <h4 class='product-name'>
                            <a href='#'>$pname</a>
                        </h4>
                    </div>
                    <div class='actions'>
                        <div class='price space-between'>
                            <span>$price</span>
                        </div>
                        <div class='cart-btn'>
                            <span>
                            <!--type='button' onclick='cart.add('$id', '1');'-->
                            <i class='fa fa-shopping-cart'></i> 
                            <span>Buy Now</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
}