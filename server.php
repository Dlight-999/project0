<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dad";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("connection failed:" . $conn->connect_error);
    }

    $uname = $_REQUEST['uname'];
    $email = $_REQUEST['email'];
    $phone =  $_REQUEST['phone'];
    $pass = $_REQUEST['pass1'];

    $sql = "INSERT INTO users (uname,email,pass,phone) VALUES ($uname,$email,$pass,$phone)";



    $conn -> close();
    

?>