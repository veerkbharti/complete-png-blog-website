<?php
require 'config.php';
if(isset($_POST['id'])){
    $id=$_POST['id'];
    if($_POST['status']==0){
        mysqli_query($conn,"UPDATE category SET status=1 WHERE cat_id=$id");
        echo 1;
    } else {
        mysqli_query($conn,"UPDATE category SET status=0 WHERE cat_id=$id");
        echo 0;
    }
}
