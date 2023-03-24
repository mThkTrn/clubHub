<!DOCTYPE html>

<?php

$servername = "localhost";
$dbuser = "madhavtest1";
$dbpasscode = "password";
$dbname = "trinlabs_data";

$conn = mysqli_connect($servername, $dbuser, $dbpasscode,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

date_default_timezone_set("America/New_York")

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<?php

function show_club($rowin){
    echo '

    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">'.$rowin["name"].'</h5>
      <p class="card-text">'.$rowin["bio"].'</p>
      <a href = "view.php?viewuser='.$rowin["name"].'" class = "btn btn-outline-dark">View Club</a>
    </div>
    </div>

    ';
}

?>

<style>

    .contwrap{
        text-align: center;
        border-radius: 15px;
        margin: 5px;
        padding: 5px;
        border: solid 2px darkblue;
    }

    .contwrap:hover{
        background-color: #e0e5e8;
    }

    a.wrapping{
        text-decoration: none;
        color: black;
        display: inline-block;
    }

</style>