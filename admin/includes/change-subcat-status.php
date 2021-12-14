<?php
require 'config.php';
if(isset($_POST['id'])){
    $id=$_POST['id'];
    if($_POST['status']==0){
        mysqli_query($conn,"UPDATE sub_category SET status=1 WHERE id=$id");
        echo 1;
    } else {
        mysqli_query($conn,"UPDATE sub_category SET status=0 WHERE id=$id");
        echo 0;
    }
}
