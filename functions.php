<?php

function valid($search, $val){
    $conn = new mysqli('localhost', 'root', '','myDB');
    $sql = "SELECT * FROM users where $search = '$val'";
    $check = mysqli_query($conn, $sql);
    if($res = mysqli_num_rows($check)>0){

        $Err = 1;
        return $Err;

    }
}

?>