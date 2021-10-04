<?php
include("config.php");
?>



<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>	
<meta charset="utf-8">
	<title></title>
    <script>
        //jquery code
        $(document).ready(function(){
            var commentCount = 2;
            $("button").click(function(){
                commentCount = commentCount + 2;  
                $("#comments").load("load-comments.php", {
                  commentNewCount: commentCount
                })
            })
        })
    </script>
</head>
<body>
<div id="comments">
    <?php 
    $sql = "SELECT * FROM comments LIMIT 2";
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
</div>
<button >
    Show More Cmments
</button>
</body>
</html>