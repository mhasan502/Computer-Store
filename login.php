<html>

<head>
    <link rel="stylesheet" type="text/css" href="logreg.css">
</head>

<body>
<?php require("headfoot/header.php"); ?>
<div class="logreg">
    <div class="form">
        <form action="./process/login_process.php" method="post">
            <input type="text" name="username" placeholder="Username" required/>
            <input type="password" name="password" placeholder="Password" required/>
            <button>login</button>
            <p class="message">Not registered? &ensp;<a href="./register.php"><strong>Create an account</strong></a></p>
        </form>
    </div>
</div>
<?php require("headfoot/footer.php"); ?>
</body>

</html>
