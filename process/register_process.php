<?php

    require_once 'connect.php';
    $register_query = "INSERT INTO user(fname,lname,username,email,password,phone,street,city,country)
                       VALUES
                       ('$fname','$lname','$username','$email','$password','$phone','$street','$city','$country')";

    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['username']) && isset($_POST['email'])  
       && isset($_POST['password']) && isset($_POST['phone']) && isset($_POST['street']) && isset($_POST['city'])
       && isset($_POST['country'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $country = $_POST['country'];

        $is_inserted = mysqli_query($conn,$register_query);

        if($is_inserted){
          echo "Inserted successfully";
        }else{
          echo "Opps error!";
        }
    }
    else{
        echo "404 not found";
    }

?>