<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Computer-Store</title>
    <link rel="stylesheet" type="text/css" href="css/header.css">
</head>

<nav class="navbar is-success" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="index.php">
            <img src="img/logo.png" width="220" height="56">
        </a>
    </div>

    <div id="head" class="navbar-menu">
        <div class="navbar-brand">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Categories
                </a>
                <div class="navbar-dropdown">
                    <?php
                    require_once 'connect.php';
                    $category = "SELECT * FROM  category ORDER BY category_id";
                    $result = mysqli_query($conn, $category);
                    while($row = mysqli_fetch_array($result)){
                        $cat = $row['category_name'];
                        $cid = $row['category_id'];
                        echo "
                        <a class='navbar-item' href='index.php?$cat=true'>$cat</a>";
                    }
                    require "browse.php";
                    ?>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Brand
                </a>
                <div class="navbar-dropdown">
                    <?php
                    require_once 'connect.php';
                    $brand = "SELECT DISTINCT company FROM  product ORDER BY company";
                    $result = mysqli_query($conn, $brand);
                    while( $row = mysqli_fetch_array($result)){
                        $brand = $row['company'];
                        echo "
                        <a class='navbar-item'>$brand</a>";
                    }

                    ?>
                </div>
            </div>
            <div class="navbar-item is-hoverable">
                <a class="navbar-item" href="about us.php">
                    About Us
                </a>
                <a class="navbar-item" href="contact us.php">
                    Contact US
                </a>
                <div id="searchbar" class="field">
                    <div class="control">
                        <input id="search" class="input is-info" type="text" placeholder="Search Here">
<!--                        <button id="search" onclick=""></button>-->
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-link" href="register.php">
                        <strong>Sign up</strong>
                    </a>
                    <a class="button is-light" href="login.php">
                        Log in
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    const input = document.getElementById("search");
    input.addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {

            location.href = "https://google.com";
        }
    });
</script>
<?php

?>