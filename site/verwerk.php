<?php

if(!empty($_POST['naam'])){

    $naam = $_POST['naam'];
    $email = $_POST['e-mail'];
    $number = $_POST['phone-number'];
    $password = $_POST['password'];

    require "database.php";

    $sql = "INSERT INTO tools(tool_name, tool_category, tool_price, tool_brand) 
    VALUES ('$naam','$email','$number','$password')";



    if(mysqli_query($conn,$sql)){
        header("location: tools-overzicht.php");
    }
}