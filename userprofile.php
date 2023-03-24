<!DOCTYPE html>

<style>
  body{
    color: black;
  }
  textarea{
    max-width: 100%;
    resize: vertical;
  }
  .sidecont{
    background-color: #e0e5e8;
    min-height : calc(100vh - 3em);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
  }
  body{
    overflow-x: hidden;
  }

  .formcard{
    margin: 1em;
  }
</style>

<?php include 'header.php';?>
<?php include "navbar.php" ?>
<?php

session_start();

if(isset($_SESSION["user"]) && isset($_SESSION["passcode"])){
    $user = $_SESSION["user"];
    $passcode = $_SESSION["passcode"];
}
else if(isset($_POST["username"]) && isset($_POST["passcode"])){
    $user = $_POST["username"];
    $passcode = $_POST["passcode"];
}

else{
  header("Location: login.php");
}

$verified = false;

$userauth = mysqli_query($conn,"SELECT * from club");

while ($userrow = mysqli_fetch_array($userauth)){
    if($userrow["name"]==$user && $userrow["password"]==$passcode){
        $verified = true;
    }
}

if(!$verified){
    header("Location: loginfail.php");
    exit();
}

  if(!isset($_SESSION["user"]) || $_SESSION["user"] != $user){
      $_SESSION["user"] = $user;
      $_SESSION["passcode"] = $passcode;
  }
  ?>



<div class = "row">

  <div class = "sidecont col-2">
  <img src = "logo.svg" id = "homeimg">

    <span style = "padding: 1em;">
      <?php echo '<p class = "lead">Username: '.$user.'<br>Passscode: '.$passcode; ?><br>
      <a href = "logout.php" class = "btn btn-outline-dark">Log Out</a>
    </span>
    
  </div>

  <div class = "col-9">
    <?php

if(isset($_GET["booked"])){
  if($_GET["booked"] == "f"){
    echo'
    
    <div class="alert alert-warning" role="alert">
      Room unavailable on that date.
    </div>
    
    ';
  }
}

    ?>
  <div class = "card formcard"><div class = "card-body">
  <form class = "addform" method = "post" action = "infoadd.php">
    <h2 class = "display-6">Add a Post</h2>
      <div class = "form-group">
      <p class = "inputlabel">Title</p>
      <input type = "text" class = "form-control" name = "title" required><br>
      </div>

      <div class = "form-group>
      <p class = "inputlabel">Content</p>
      <textarea rows = "4" cols = "50" name = "content" class = "form-control"></textarea><br>
      </div>

      <input type = "submit" class = "btn btn-outline-dark form-control">
    
  </form>
</div></div>

<div class = "card formcard"><div class = "card-body">
  <form class = "addform" method = "post" action = "roombook.php">
        <h2 class = "display-6">Book a Room</h2>
        
      <div class = "form-group">
      <p class = "inputlabel">Choose a date</p>
      <input type = "date" name = "m_date" required>
      </div>

      <div class = "form-group">
      <p class = "room">Choose a room</p>
      <input type = "text" class = "form-control" name = "m_room" required>
      </div>

      <input type = "submit" class = "btn btn-outline-dark form-control">
  </form> 
</div></div>
  <?php include "showposts.php";?>

  </div>

</div>

<script>

let homeimg = document.getElementById("homeimg")
homeimg.addEventListener("click",function(){
  window.location = "login.php"
})
</script>


