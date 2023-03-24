<!DOCTYPE html>
<?php include "header.php";?>
<?php include "navbar.php" ?>
<?php
session_start();

if(isset($_SESSION["user"]) && isset($_SESSION["passcode"])){
    $user = $_SESSION["user"];
    $passcode = $_SESSION["passcode"];
}
else{
    $user = "";
    $passcode = "";
}
?>

<html>
    <head>
        <style>
            body{
                color: black;
            }
            .centcont{
                background-color: #e0e5e8;
                text-align:center;
                display:inline-block;
                padding:20px;
                border-radius: 15px;
            }
            .wrapper{
                height:100vh;
                display: flex;
                flex-direction:column;
                justify-content: space-around;
                align-items: center;
            }
            .formlabel{
                color:rgb(150,150,150);
            }
            .button{
                background-color: #4CAF50;  
                border: none;
                color: white;
                padding: 10px 15px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 15px;
            }
            a{
                text-decoration:underline;
                color:white;
            }

        </style>
    </head>
    <body>
        <div class = "wrapper">
        <div class = "centcont">
        <h1>Account Login</h1>
        <form action = "userprofile.php" method = "post">

            <div class = "form-group">
            <p class = "formlabel">Username</p><br>
            <?php echo "<input type = 'text' class = 'form-control' name = 'username' value = '".$user."'><br>";?>
            </div>

            <div class = "form-group">
            <p class = "formlabel">Passcode</p><br>
            <?php echo "<input type = 'password' class = 'form-control' name = 'passcode' value = '".$passcode."'><br>";?>
            </div>

            <input type = "submit" class = "btn btn-outline-dark" value = "Log In">
        </form>
        <a href = "signupform.php" class = "btn btn-outline-dark" style = "margin : 10px;">Request New Club</a><br>
        <a href="quar_login.php" class="link-secondary">Administrator Portal</a>
</div>
        </div>
    </body>
</html>