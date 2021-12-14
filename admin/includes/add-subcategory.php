<?php
require 'config.php';
require 'function.php';
if(isset($_POST['catid']) && isset($_POST['subcatname'])){
    $check=1;
    $subcats=getAllSubCategory($conn);
    foreach($subcats as $subcat){
        if(!strcasecmp($subcat['name'],$_POST['subcatname']))
            $check=0;
    }
    $categories=getAllCategory($conn);
    foreach($categories as $category){
        if(!strcasecmp($category['cat_name'],$_POST['subcatname']))
            $check=0;
    }
    if($check==1){
        $sub_cat_name=mysqli_real_escape_string($conn,$_POST['subcatname']);
        $cat_id=mysqli_real_escape_string($conn,$_POST['catid']);
        $query="INSERT INTO sub_category(name, cat_id, status) VALUES('$sub_cat_name','$cat_id',0);";
        $query.="UPDATE category SET no_of_sub_cats=no_of_sub_cats+1 WHERE cat_id=$cat_id";
        if(mysqli_multi_query($conn,$query)){
            echo 1;
        }else{
            echo "Query Failed";
        }
    }else{
        echo "Can't add Because this sub-category/category name Already Exist";
    }
}else{
    echo "All fields are required";
}
