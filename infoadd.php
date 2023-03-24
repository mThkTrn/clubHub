<!DOCTYPE html>

<?php include 'header.php';?>

<?php

session_start();

if (isset($_POST["title"]) && isset($_POST["content"]) && isset($_SESSION["user"]) && strlen($_POST["title"]) > 0){
    $addinfo = mysqli_query($conn,"INSERT INTO posts (title, info, user) values ('".$_POST["title"]."','".$_POST["content"]."','".$_SESSION["user"]."')");
}
header("Location: userprofile.php")


?>