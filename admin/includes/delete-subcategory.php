<?php
require 'config.php';
require 'function.php';
if(isset($_POST['id'])){
    $id=$_POST['id'];
    $query="DELETE FROM sub_category WHERE id=$id;";
    $sub_category=getSubCategory($conn,$id);
    $query .= "UPDATE category SET no_of_sub_cats=no_of_sub_cats-1 WHERE cat_id={$sub_category['cat_id']}";
    if(mysqli_multi_query($conn,$query))
        echo 1;
    else
        echo "Query Failed";
}
?>