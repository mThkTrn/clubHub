<!DOCTYPE html>
<?php
session_start();

if(isset($_SESSION["user"])){
    unset($_SESSION["user"]);
}
if(isset($_SESSION["passcode"])){
    unset($_SESSION["passcode"]);
}

session_destroy();
header("Location: login.php")
?>