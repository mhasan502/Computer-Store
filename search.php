<?php
require_once "process/connect.php";

if(isset($_GET['searchitem'])) {
    $split = "SELECT * FROM product WHERE name LIKE '%";
    $GLOBALS['query'] = $split.$_GET['searchitem']."%'";
    require "index.php";
}
