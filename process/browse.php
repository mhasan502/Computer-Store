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
else if(isset($_GET['AMD'])){
    $c = "=\"AMD\"";
    browsebybrand($c);
}
else if(isset($_GET['Asus'])){
    $c = "=\"Asus\"";
    browsebybrand($c);
}
else if(isset($_GET['Corsair'])){
    $c = "=\"Corsair\"";
    browsebybrand($c);
}
else if(isset($_GET['Gigabyte'])){
    $c = "=\"Gigabyte\"";
    browsebybrand($c);
}
else if(isset($_GET['Intel'])){
    $c = "=\"Intel\"";
    browsebybrand($c);
}
else if(isset($_GET['MSI'])){
    $c = "=\"MSI\"";
    browsebybrand($c);
}
else if(isset($_GET['Seagate'])){
    $c = "=\"Seagate\"";
    browsebybrand($c);
}
else if(isset($_GET['Team'])){
    $c = "=\"Team\"";
    browsebybrand($c);
}

function browsebybrand($c){
    $split = "SELECT * FROM product WHERE company";
    $GLOBALS['query'] = $split.$c;
}

function browsebycat($c){
    $split = "SELECT * FROM category c JOIN product p ON c.category_id = p.category_id WHERE c.category_id";
    $GLOBALS['query'] = $split.$c;
}