<?php
require('config.php');
require('function.php');
if(isset($_POST['updatepost'])){
    $id=$_POST['id'];
    $sql="SELECT * FROM posts WHERE post_id=$id";
    $result = mysqli_query($conn,$sql);
    $post= mysqli_fetch_assoc($result);
    $imgname=$imgnamearr['thumbnail'];
    $base_dir = realpath($_SERVER["DOCUMENT_ROOT"]);
    $thumb_to_delete="$base_dir/fuelpng/thumbnail/$imgname";
    $pngfilepath=get_basename($imgname).'.png';
    $img_to_delete="$base_dir/fuelpng/png/$pngfilepath";
    if(unlink($thumb_to_delete) && unlink($img_to_delete)){
    $query="DELETE FROM posts WHERE post_id=$id;";
    $query .= "UPDATE category SET no_of_posts=no_of_posts-1 WHERE cat_id={$post['cat_id']}";
        mysqli_multi_query($conn,$query)or die("Post is not Deleted");
        header('location:../index.php?managepost');
    }
    else
        echo "Post not Deleted";
}
?>