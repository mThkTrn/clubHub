<!DOCTYPE html>
<?php include "header.php";?>
<?php include "navbar.php";?>

<style>
    .heroimg{
        width: 60vw;
    }
    #hero{
      padding: 2em;
      background-color: #e0e5e8;
      display: flex;
      /*height: calc(100vh - 3em);*/
      
      flex-direction: column;
      justify-content: space-around;
      align-items: center;
    }
    body{
        overflow: hidden;
        background-color: #e0e5e8;
    }
</style>

<div id = "hero" class = "jumbotron jumbotron-flex">
<img class = heroimg src = "logo.svg">
<h3 class = "display-6">A centralized platform to interact with clubs</h3>
</div>

<script>
document.getElementById("hero").style.height = "calc(100vh - "+document.getElementById("univ-top-nav").height+")"
</script>