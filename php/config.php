<?php
    $host = "localhost";
    $name = "root";
    $password = "";
    $db = "final_db";

    $conn = mysqli_connect($host,$name,$password,$db);

    if (!$conn) {
        echo "baza qosulmadi";
    }
?>
