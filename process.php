<?php
echo 'Procesing..........';
//check for a get variable
if(isset($_GET['name'])){
    echo 'Your name is : '.$_GET['name'];
}
?>