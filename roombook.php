<!DOCTYPE html>

<?php include "header.php";?>

<?php


session_start();

if(isset($_POST["m_date"]) && isset($_POST["m_room"]) && isset($_SESSION["user"])){
    $roomver = "SELECT * FROM meetings WHERE room LIKE '%".$_POST["m_room"]."%' AND date LIKE '".$_POST["m_date"]."' ";
    $roomquer = mysqli_query($conn,$roomver);
    if(mysqli_num_rows($roomquer) == 0){
        $addinfo = mysqli_query($conn,"INSERT INTO meetings (date, room, club) values ('".$_POST["m_date"]."','".$_POST["m_room"]."','".$_SESSION["user"]."')");
        header("Location: userprofile.php");
    }
    else{
        header("Location: userprofile.php?booked=f");
    }
}

else{
    header("Location: userprofile.php");
}

?>