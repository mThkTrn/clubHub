<!DOCTYPE html>
<style>

.timestamp{
    font-size:11px;
    color:"grey";
  }

.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  margin: 15% auto; 
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}
p.card-text{
  max-height: 3rem;
  text-overflow: ellipsis;
  overflow: hidden;
}
.modalclick{
  margin: 0.5em;
}
</style>

<?php
  $empty = true;
  $infoentries = mysqli_query($conn, "SELECT * from posts");
  echo '<div class = "container"><div class = "row">';
  while($row = mysqli_fetch_array($infoentries)){
      if ($row["user"]==$user){
        $empty = false;
/*
        <div class="modalclick contwrap col-sm-3">
        <h2>'.$row["title"].'</h2>
        <span class = "timestamp">'.$row["timestamp"].'</span>
        <p class = "text-truncate">'.$row["info"].'</p>
        </div>
*/
         echo '
      


         <div class="modalclick card" style="width: 18rem;">
         <div class="card-body">
           <h5 class="card-title">'.$row["title"].'</h5>
           <h6 class="card-subtitle mb-2 text-muted">'.$row["timestamp"].'</h6>
           <p class="card-text">'.$row["info"].'</p>
         </div>
       </div>

        <div class="modal">
          <div class="modal-content">
            <p class="cancel">&#10006;</p>
            <p>'.$row["info"].'</p>
          </div>
        </div>
        ';
      }
  }
  echo '</div></div>';
    if($empty){
        echo "<p>No posts found for ".$user."</p>";
    }
?>

<script>
  btnarr = document.getElementsByClassName("modalclick")
modalarr = document.getElementsByClassName("modal")
cancelarr = document.getElementsByClassName("cancel")
console.log(btnarr.length)
for (let button = 0; button<btnarr.length; button++){
  console.log("hello")
    btnarr[button].addEventListener("click",function(){
      modalarr[button].style.display = "block"
    })
}
for (let cancel = 0; cancel<cancelarr.length; cancel++){
    cancelarr[cancel].addEventListener("click",function(){
      modalarr[cancel].style.display = "none"
    })
}
</script>