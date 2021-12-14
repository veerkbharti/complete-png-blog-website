<?php
require 'config.php';
require 'function.php';
$str="";
if(empty($_POST['type'])){
    $categories = getAllCategory($conn);
    foreach ($categories as $cat) {
        $str.="<option value='{$cat['cat_id']}'> {$cat['cat_name']}</option>";
    }
}else if($_POST['type']=="subcatData"){
    $subCategories = getAllSubCategoryFromCatid($conn, $_POST['id']);
    foreach ($subCategories as $subCat) {
        $str.="<option value='{$subCat['id']}'>{$subCat['name']}</option>";
    }
}
echo $str;
?>