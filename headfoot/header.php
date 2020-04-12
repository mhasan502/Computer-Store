<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Computer-Store</title>
    <link rel="stylesheet" type="text/css" href="headfoot/header.css">
</head>

<nav class="navbar is-success" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="">
            <img src="./logo.png" width="220" height="56">
        </a>
    </div>

    <div id="head" class="navbar-menu">
        <div class="navbar-brand">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Categories
                </a>
                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        Laptop
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                        Processor
                    </a>
                    <a class="navbar-item">
                        RAM
                    </a>
                    <a class="navbar-item">
                        GPU
                    </a>
                    <a class="navbar-item">
                        Monitor
                    </a>
                    <a class="navbar-item">
                        Storage
                    </a>
                </div>
            </div>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Brand
                </a>
                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        Intel
                    </a>
                    <a class="navbar-item">
                        AMD
                    </a>
                    <a class="navbar-item">
                        Asus
                    </a>
                    <a class="navbar-item">
                        Gigabyte
                    </a>
                    <a class="navbar-item">
                        G.Skill
                    </a>
                    <a class="navbar-item">
                        Seagate
                    </a>
                </div>
            </div>
            <div class="navbar-item is-hoverable">
                <a class="navbar-item" href="about us.php">
                    About Us
                </a>
                <a class="navbar-item" href="contact us.php">
                    Contact US
                </a>
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
