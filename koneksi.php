<?php
    $host = "localhost";
    $db = "perpustakaan_2022";
    $user="root";
    $password="";

    $con = mysqli_connect($host,$user,$password,$db);

    if(mysqli_connect_errno()){
        return "Failed to connect to MySql" . mysqli_connect_error();
    }


?>