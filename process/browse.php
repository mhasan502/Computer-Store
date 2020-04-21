<?php
if(isset($_GET['Laptop'])) {
    $c = "=0";
    browsebycat($c);
}
else if(isset($_GET['Processor'])) {
    $c = "=1";
    browsebycat($c);
}
else if(isset($_GET['RAM'])) {
    $c = "=2";
    browsebycat($c);
}
else if(isset($_GET['GPU'])) {
    $c = "=3";
    browsebycat($c);
}
else if(isset($_GET['Monitor'])) {
    $c = "=4";
    browsebycat($c);
}
else if(isset($_GET['Storage'])) {
    $c = "=5";
    browsebycat($c);
}
function browsebycat($c){
    $split = "SELECT * FROM category c JOIN product p ON c.category_id = p.category_id WHERE c.category_id";
    $GLOBALS['query'] = $split.$c;
}