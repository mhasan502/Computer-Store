<?php

session_start();
require_once 'connect.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login_query = "SELECT * FROM `user` Where username='$username' AND password='$password'";

    $result = mysqli_query($conn, $login_query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        session_regenerate_id();
        $_SESSION['name'] = $username;
        echo "HI! $username";
    } else {
        echo "Your Username or Password is invalid";
    }
} else {
    echo "Please insert Username and Password";
}

?>
