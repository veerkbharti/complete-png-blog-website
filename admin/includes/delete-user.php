<?php
require 'config.php';
if(isset($_POST['id'])){
    $id=$_POST['id'];
    $query="DELETE FROM users WHERE user_id=$id";
    if(mysqli_query($conn,$query))
        echo 1;
    else
        echo 0;
}
?>