<!DOCTYPE html>

<style>
    p.card-text{
        max-height: 3rem;
        text-overflow: ellipsis;
        overflow: hidden;
    }
    .card{
        margin: 0.5em;
    }
    .formwrap{
      display: flex;
      align-items: center;
    }
    div.form-check{
      margin: 0.1em;
    }
    .btn-outline-dark{
      margin: 0.5em;
    }
    .jumbotron{
      padding: 2em;
      background-color: #e0e5e8;
      margin-bottom: 2em;
    }
</style>

<?php include "header.php"; ?>
<?php include "navbar.php" ?>
<?php

$clubCategories = array(
    "Affinity Groups" => "AFF",
    "Service Groups" => "SRV",
    "Competitive Teams" => "CMP",
    "Recreational Clubs" => "REC"
  );
  

  $selectedCategories = array();
  if (isset($_POST["categories"])) {
    $selectedCategories = $_POST["categories"];
  }


  $sql = "SELECT * FROM club";
  if (!empty($selectedCategories)) {
    $sql .= " WHERE ";
    foreach ($selectedCategories as $category) {
      $sql .= "category LIKE '%$category%' OR ";
    }
    $sql = rtrim($sql, " OR ");
  }
  $sql .= " ORDER BY name";
  

  $result = mysqli_query($conn, $sql);
  

  if (!$result) {
    die("Query failed: " . mysqli_error($conn));
  }

  echo '
  <div class = "jumbotron jumbotron-flex">
  <h1 class = "display-4">Browse Clubs</h1>
  <h3 class = "lead">Discover new clubs, and sort by various criterion</h3>
  <form class = "formwrap" method="post">';
  foreach ($clubCategories as $name => $shorthand) {
    $checked = in_array($shorthand, $selectedCategories) ? "checked" : "";
    echo "<div class = 'form-check'><label><input class = 'form-check-input' type='checkbox' name='categories[]' value='$shorthand' $checked> $name</label></div><br>";
  }
  echo "<button class = 'btn btn-outline-dark' type='submit'>Filter</button>";
  echo "</form></div>";
  

  echo '<div class = "container"><div class = "row">';
  while ($row = mysqli_fetch_assoc($result)) {

    show_club($row);
  
  }
  echo '</div></div>';
  

  mysqli_close($conn);
  ?>