<!DOCTYPE html>
<html>
<head>
    <style>

body{
    font-family: Helvetica;
}

#navbar-left{
    display:flex;
    flex-direction:column;
    justify-content: space-around;
    position:absolute;
    top:0;
    left:0;
    height:100vh;
    background-color:black;
    padding: 20px;
    align-items: center;
}

.link{
color: white;
text-decoration:none;
}
img{
    width: 50px;
}
    </style>
</head>
<?php

$user = "Sign Up"

?>
<body>

<div id = "navbar-left">
<!--    <img src = "def-acc-img.png">
    <?php// echo $user;?>-->

    <a class = "link" href="explore.html">Explore</a>
    <a class = "link" href="myclubs.html">My Clubs</a>
    <a class = "link" href="schedule.html">Schedule</a>
    <a class = "link" href="profile.html">Profile</a>
</div>
<div class = "explorebar">
    <?php
    ?>
</div>

<script>

</script>
</body>
</html>