<!DOCTYPE html>
<html>
    <?php include "header.php";?>
    <?php include "navbar.php" ?>
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
                width: 30vw;
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

            a{
                text-decoration:underline;
                color:white;
            }

            textarea{
                border-radius: 15px;
            }

        </style>
    </head>
    <body>
        <div class = "container">
        <div class = "row justify-content-center">
        <div class = "centcont">
            <h1>Create New Account</h1>
        <form method = "post" action = "signup.php">


            <div class = "form-group">
            <p class = "formlabel">Club Name</p>
            <input type = "text" class = "form-control" name = "newuser">
            </div>

            <div class = "form-group">
            <p class = "formlabel">Passcode</p>
            <input type = "password" class = "form-control" name = "newpasscode">
            </div>

            <div class = "form-group">
            <p class = "formlabel">Club Description</p>
            <textarea cols = 50 rows = 4 name = "newbio" class = "form-control"></textarea>
            </div>

            <p class = "formlabel">Club Type (Check all that apply)</p>
        <div class = "checkcont">

            <div class = "form-check form-check-inline">
            <p class = "formlabel">Competitive<br>Team</p>
            <input type = "checkbox" name = "compTeam" value = "CMP">
            </div>

            <div class = "form-check form-check-inline">
            <p class = "formlabel">Affinity<br>Group</p>
            <input type = "checkbox" name = "affGr" value = "AFF">
            </div>

            <div class = "form-check form-check-inline">
            <p class = "formlabel">Service<br>Group</p>
            <input type = "checkbox" name = "servGr" value = "SRV">
            </div>

            <div class = "form-check form-check-inline">
            <p class = "formlabel">Recreational<br>Club</p>
            <input type = "checkbox" name = "recClub" value = "REC">
            </div>
        </div>

            <p class = "formlabel">How often do you meet?</p>
        <div class = "checkcont">
            <div class = "form-check form-check-inline">
            <p class = "formlabel">Weekly</p>
            <input type = "radio" name = "meet" value = "week">
            </div>

            <div class = "form-check form-check-inline">
            <p class = "formlabel">Monthly</p>
            <input type = "radio" name = "meet" value = "month">
            </div>

            <div class = "form-check form-check-inline">
            <p class = "formlabel">Irregularly</p>
            <input type = "radio" name = "meet" value = "irr">
            </div>
        </div>
            <br><input type = "submit" class = "btn btn-outline-dark form-control" value = "Request Club">
        </form>
        <a href = "login.php" class = "btn btn-outline-dark" style = "margin : 10px;">Log In</a>
    </div>
    </div>
    </div>
    </body>
</html>