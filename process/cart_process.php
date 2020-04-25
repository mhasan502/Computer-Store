<?php
session_start();
require_once 'connect.php';

$prod_status = false;
$username = $_SESSION['name'];
$id = -1;

$result = mysqli_query($conn, $GLOBALS['query']);
while ($row = mysqli_fetch_array($result)) {
    $pname = $row['name'];
    $price = $row['price'];
    $id = $row['product_id'];
    if ($_GET[$id] == true) {
        break;
    }
}
$check_cart = "SELECT * FROM cart WHERE username ='".$username."' AND product_id ='".$id."'";
$result = mysqli_query($conn, $check_cart);
$count = mysqli_num_rows($result);
while ($row = mysqli_fetch_array($result)) {
    $prod_id = $row['product_id'];
    if ($_GET['id'] == $prod_id) {
        $id = $prod_id;
        break;
    }
}


if ($count == 0) {
    $cart_insert = "INSERT INTO cart (username,product_id,quantity) VALUES ('$username',$id,1)";
    $is_inserted = mysqli_query($conn, $cart_insert);
    if ($is_inserted) {
        header("Location: ../index.php");
    } else {
        echo "Insert Error";
    }
}
else if ($count > 0) {
    $cart_insert = "UPDATE cart SET quantity = quantity+1 WHERE username ='".$username."' AND product_id ='".$id."'";
    $is_inserted = mysqli_query($conn, $cart_insert);
    if ($is_inserted) {
        header("Location: ../index.php");
    } else {
        echo "Update error!";
    }
}
else {
    echo "Cart Error";
}