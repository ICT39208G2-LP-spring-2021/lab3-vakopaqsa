<?php

    $conn = new mysqli('localhost', 'root', '','myDB');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>