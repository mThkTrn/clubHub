<!DOCTYPE html>

<?php include "header.php"; ?>

<?php include "navbar.php" ?>

<?php
if(isset($_POST["passcode"])){
    if(hash("sha256",$_POST["passcode"]) == "a636bb3b9336762f54a5cb5500e6edc2c7835d1479b7063f95ac9d983d416dc9"){ //The password is "TrinAdm", though I hashed it. I haven't hashed the passswords stored in the database so I can see them while testing
        if(isset($_POST["addacc"])){
            $changestr = "SELECT * from clubs_quar WHERE id LIKE '".$_POST["addacc"]."'";
            $changequer = mysqli_query($conn, $changestr);

            $moveclub = mysqli_fetch_assoc($changequer);
                $changequer = mysqli_query($conn, "INSERT INTO club (name, password, bio, meet, category) VALUES ('".$moveclub["name"]."','".$moveclub["password"]."','".$moveclub["bio"]."','".$moveclub["meet"]."','".$moveclub["category"]."')");
                if($changequer){
                    echo '<div class="alert alert-success" role="alert">'.$moveclub["name"].' successfully approved </div>';
                }

            if(mysqli_query($conn, "DELETE FROM clubs_quar WHERE `clubs_quar`.`id` = '".$_POST["addacc"]."'")){
                echo '<div class="alert alert-success" role="alert">Club successfully removed</div>';
            }
        }
        elseif(isset($_POST["delacc"])){
            if(mysqli_query($conn, "DELETE FROM clubs_quar WHERE `clubs_quar`.`id` = '".$_POST["delacc"]."'")){
                echo '<div class="alert alert-warning" role="alert">Club successfully removed from quarantine</div>';
            }
        }

        $quar_str = "SELECT * from clubs_quar";
        $quar_quer = mysqli_query($conn, $quar_str);

        while ($quar_club = mysqli_fetch_array($quar_quer)){
            echo '
            <div class = "card">
                <div class = "card-body">
                    <h5 class = "card-title">'.$quar_club["name"].'</h5>
                    <h6 class = "card-subtitle">Password: '.$quar_club["password"].'</h6>
                    <p class = "card-text">'.$quar_club["bio"].'</p>
                    <small class = "otherinfo"><b>Club ID: </b>'.$quar_club["id"].'</small>
                    <small class = "otherinfo"><b> Tags: </b>'.$quar_club["category"].'</small>
                    <small class = "otherinfo"><b> Meeting Schedule: </b>'.$quar_club["meet"].'</small>
                </div>

                <form action = "club_quar.php" method = "post">
                    <input type="hidden" name="addacc" value="'.$quar_club["id"].'">
                    <input type = "submit" class = "btn btn-outline-success" value = "Approve">
                </form>

                <form action = "club_quar.php" method = "post">
                    <input type="hidden" name="delacc" value="'.$quar_club["id"].'">
                    <input type = "submit" class = "btn btn-outline-danger" value = "Deny">
                </form>

            </div>
            ';
        }

        if(mysqli_num_rows($quar_quer) == 0){
            echo '<h6 class = "lead"> No clubs pending approval </h6>';
        }
    }
    else{
        header("Location: quar_login.php?pfail=t");
    }
}

?>