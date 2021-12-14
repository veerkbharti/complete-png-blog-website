<?php
require 'config.php';
if(isset($_POST['id'])){
    $id=$_POST['id'];
    $query="DELETE FROM category WHERE cat_id=$id;";
    $query.="DELETE FROM sub_category WHERE cat_id=$id";
    if(mysqli_multi_query($conn,$query))
        echo 1;
    else
        echo "Query Failed";
}
?>