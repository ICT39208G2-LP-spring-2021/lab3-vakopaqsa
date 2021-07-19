<?php
$err_personalNumber = "";
$err_password = "";
$err_lastname = "";
$err_firstname = "";
$err_email = "";
$successMessage = "";
$errorMessage = array();
if(!isset($_SESSION['userID'])){
    require_once ('add_user.php');
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>ღეგღისთღათიონ</title>

</head>
<body>
    <?php require_once ('inc/navbar.php'); ?>
    <?php
    
    if(count($errorMessage) > 0){
        echo "<div class='m-auto w-25' style='text-align: center' id='errMsg'>";
        echo "<ul id='errMsgs' class='list-group border-bottom border-pill border-danger'>";
        echo "<p class='text-primary p-0 m-0'>Click me for dissapear error list.</p>";
        foreach ($errorMessage as $value){
            echo "<li class='list-group-item p-0 m-0'>$value</li>";
        }
        echo "</ul> </div>";
    }
    ?>
    <?php require_once ('register.php'); ?>
<script src="script.js"></script>
</body>
</html>
