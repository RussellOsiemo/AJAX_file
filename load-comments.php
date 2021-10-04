<?php
include("config.php"); 
$commentNewCount = $_POST['commentNewCount'];
    $sql = "SELECT * FROM comments LIMIT $commentNewCount ";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res) > 0){
       while($row = mysqli_fetch_assoc($res)){
      echo "<p>";
      echo $row['Author'];
      echo "<br>";
      echo $row['comment'];
      echo "</p>";
       }
    }else{
        echo "no comments";
    }
    ?>