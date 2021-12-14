<?php
require 'config.php';
require 'function.php';
if(isset($_POST['catname'])){
    $check=1;
    $categories=getAllCategory($conn);
    foreach($categories as $category){
        if(!strcasecmp($category['cat_name'],$_POST['catname']))
            $check=0;
    }
    if($check==1){
        $category_name=mysqli_real_escape_string($conn,$_POST['catname']);
        $query="INSERT INTO category(cat_name, status) VALUES('$category_name',0)";
        if(mysqli_query($conn,$query)){
            echo 1;
        }else{
            echo "Query Failed";
        }
    }else{
        echo "Can't add this category Because Already Exist";
    }
}else{
    echo "Please enter Category Name!";
}
?>