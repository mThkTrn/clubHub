<!DOCTYPE html>

<style>
  .jumbotron{
    background-color: #e0e5e8;
    padding: 2em;
    margin-bottom: 2em;
  }
</style>

<?php include 'header.php';?>

<?php

if (isset($_GET['viewuser'])) {
    $user = $_GET['viewuser'];
}
else{
  header("Location: userind.php");
}

$sqlrows = mysqli_query($conn,"SELECT * from club WHERE name LIKE '".$user."'");
?>

<div class = "jumbotron">
<div class = "container-fluid">

<?php
while($thisclub = mysqli_fetch_array($sqlrows)){
  echo '<h1 class = "display-4">'.$thisclub["name"].'</h1>';
  echo '<p class = "lead">'.$thisclub["bio"].'</p>';
}
?>
<a href = browse.php class = "btn btn-outline-dark">All Clubs</a>
</div>
</div>

<?php include "showposts.php"; ?>