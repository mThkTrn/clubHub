<!DOCTYPE html>

<style>
*{
    text-align: center;
}
</style>

<?php include "header.php" ?>

<?php include "navbar.php"?>

<?php 

if(isset($_GET["pfail"])){
    if($_GET["pfail"] == "t"){
        echo '<div class="alert alert-danger" role="alert">
        The password entered was incorrect
      </div>';
    }
}

?>

<div class = "wrapper">
        <div class = "centcont">
        <h1>Administrator Password</h1>
        <form action = "club_quar.php" method = "post">

            <div class = "form-group">
            <p class = "formlabel">Passcode</p><br>
            <input type = 'password' class = 'form-control' name = 'passcode'><br>
            </div>
            <input type = "submit" class = "btn btn-outline-dark">
        </form>
</div>
</div>