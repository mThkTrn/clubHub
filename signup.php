<!DOCTYPE html>

<?php include 'header.php';?>
<?php include 'navbar.php'?>

<style>
    .logintron{
        padding: 2em;
        background-color: #e0e5e8;
    }
</style>

<?php

$newuser = $_POST["newuser"];
$newpasscode = $_POST["newpasscode"];
$newbio = $_POST["newbio"];

//I couldn't find a better way to do this in PHP, so I am just checking if each one is set and concatenating the string if it is
//$types = $_POST["compTeam"].$_POST["affGr"].$_POST["servGr"].$_POST["recClub"];
$types = "";

if (isset($_POST["compTeam"])){
    $types .= $_POST["compTeam"];
}

if (isset($_POST["affGr"])){
    $types .= $_POST["affGr"];
}

if (isset($_POST["servGr"])){
    $types .= $_POST["servGr"];
}


if (isset($_POST["recClub"])){
    $types .= $_POST["recClub"];
}

$meet = $_POST["meet"];

$newuserquery = mysqli_query($conn,"INSERT INTO clubs_quar (name, password,category,bio,meet) VALUES ('".$newuser."', '".$newpasscode."', '".$types."', '".$newbio."', '".$meet."')");

?>

<div class = "logintron jumbotron jumbotron-fluid">
<?php
if($newuserquery){
    echo '<h1 class = "display-4">New club requested!</h1>';
}
else{
    echo '<h1 class = "display-4">Club request failed';
}
?>
<a href = "index.php" class = "btn btn-outline-dark">Home</a>
</div>
