<?php 
require_once('mailer.php');
session_start();

if(isset($_GET['token']) && $_SESSION['Verificated'] == 'guide'){
    echo "tu tokeni aigho linkze gadasvlis mere <br>";
    $token = $_GET['token'];
    $token = str_replace('[','',$token);
    $token = str_replace(']','',$token);
    $generatedToken = $_SESSION['userToken'];
    echo "Tu daregenirebuli tokeni udris wamoghebul tokens<br>";
    $userID = $_SESSION['userID'];
    $conn = new mysqli('localhost', 'root', '','myDB');
    $sql = "UPDATE users SET EmailVerificationToken = '$token' WHERE Id= $userID";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['Verificated'] = $token;
    }
    header("Location: index.php");

}


if(isset($_SESSION['Verificated']) && $_SESSION['tokenCount'] != 0 && $_SESSION['Verificated'] == 'guide'){
    echo "test";
    $msg = uniqid();
    $url = str_replace('','/verify.php',$_SERVER['PHP_SELF']);
    $_SESSION['userToken'] = $msg;
    if($_SESSION['tokenCount'] != 0){
        echo "test verify" ;
        verifymeil($_SESSION['Mail'] ,"".$_SESSION['firstname'] . ' ' . $_SESSION['lastname']."", "http://localhost$url?token=[$msg]");
        $_SESSION['tokenCount']--;
        $errorMessage = array();
        header('Location: index.php');
    }
    
}

