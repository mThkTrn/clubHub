<!DOCTYPE html>

<?php include "header.php"?>
<?php include "navbar.php"?>

<style>
    .jumbotron{
      padding: 2em;
      background-color: #e0e5e8;
      margin-bottom: 2em;
    }
</style>

<div class = "jumbotron jumbotron-flex">
  <h1 class = "display-4">Schedule</h1>
  <h3 class = "lead">Find where to go during ad-hoc</h3>
</div>

<h2 class = "display-6"><?php echo date("l, jS \of F")?></h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Club</th>
      <th scope="col">Room</th>
    </tr>
  </thead>
  <tbody>

    <?php

        $findstr = "SELECT * from meetings WHERE date LIKE '".date("Y-m-d")."'";
        $meetsquery = mysqli_query($conn, $findstr);

        while($clubmeet = mysqli_fetch_array($meetsquery)){

            echo'
            
            <tr>
                <td>'.$clubmeet["club"].'</td>
                <td>'.$clubmeet["room"].'<td>
            </tr>
            
            ';

        }

    ?>
  </tbody>
</table>