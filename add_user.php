<?php
require_once ('functions.php');


if ($_SERVER['REQUEST_METHOD'] == "POST" ) {

    session_start();
    $errorMessage = array();
    $personalNumber = '';
    $email = '';
    if(empty($_POST['email'])){
        $err_email = "<p class='text-danger'>Your email field is empty</p>";
        array_push($errorMessage,$err_email);
    }else{
        $email = $_POST['email'];
    }
    if(empty($_POST['password'])){
        $err_password = "<p class='text-danger'>Your password field is empty</p>";
        array_push($errorMessage,$err_password);
    }else{
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
    }
    if(empty($_POST['firstname'])){
        $err_firstname = "<p class='text-danger'>Your firstname field is empty</p>";
        array_push($errorMessage,$err_firstname);
    }else {
        $firstname = $_POST['firstname'];
    }
    if(empty($_POST['lastname'])){
        $err_lastname = "<p class='text-danger'>Your lastname field is empty</p>";
        array_push($errorMessage,$err_lastname);
    }else {
        $lastname = $_POST['lastname'];
    }
    if(empty($_POST['personalnumber'])){
        $err_personalNumber = "<p class='text-danger'>Your Personal number field is empty</p>";
        array_push($errorMessage,$err_personalNumber);
    }else {
        $personalNumber = $_POST['personalnumber'];
        
    }

    if(valid('PersonalNumber' , "$personalNumber") == 1){
        $err_personalNumber = "<p class='text-danger'>User with this Personal number is already in use</p>";
        array_push($errorMessage,$err_personalNumber);
    }

    if(valid('Email',"$email") == 1){
        $err_email = "<p class='text-danger'>User with this email adress is already in use</p>";
        array_push($errorMessage,$err_email);
    }
    

    if(empty($err_email) && empty($err_firstname) && empty($err_lastname) && empty($err_password) && empty($err_personalNumber)){
        $conn = new mysqli('localhost','root','','myDB');
        $sql = "INSERT INTO  users (FirstName, LastName, PersonalNumber, Email, Pass, EmailVerificationToken) 
            VALUE ('$firstname' , '$lastname' , '$personalNumber', '$email', '$password','guide')";
        $res = mysqli_query($conn, $sql);

        $sql = "";
        $sql = "SELECT * FROM users WHERE Email = '$email'";
        $res=mysqli_query($conn,$sql);

        while($row = mysqli_fetch_assoc($res)){
            $_SESSION['userID'] = $row['Id'];
            $_SESSION['firstname'] = $row['FirstName'];
            $_SESSION['lastname'] = $row['LastName'];
            $_SESSION['Mail']= $row['Email'];
            $_SESSION['Verificated'] = $row['EmailVerificationToken'];
        };
        $_SESSION['tokenCount'] = 3;
        $errorMessage = array();
    }
}



?>