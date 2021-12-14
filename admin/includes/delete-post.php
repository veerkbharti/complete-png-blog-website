<?php
require('config.php');
require('function.php');
if(isset($_POST['id'])){
    $id=$_POST['id'];
    $post=getPost($conn, $id);
    $imgname=$post['thumbnail'];
    $base_dir = realpath($_SERVER["DOCUMENT_ROOT"]);
    $thumb_to_delete="$base_dir/allpngfree/thumbnail/$imgname";
    $pngfilepath=get_basename($imgname).'.png';
    $img_to_delete="$base_dir/allpngfree/png/$pngfilepath";
    if(unlink($thumb_to_delete) && unlink($img_to_delete)){
        $query="DELETE FROM posts WHERE post_id=$id;";
        $post=getPost($conn,$id);
        $query .= "UPDATE category SET no_of_posts=no_of_posts-1 WHERE cat_id={$post['cat_id']};";
        $query .= "UPDATE sub_category SET no_of_posts=no_of_posts-1 WHERE id={$post['sub_cat_id']}";
            if(mysqli_multi_query($conn,$query))
                echo 1;
            else
                echo "Post not Deleted";
    }
    else
        echo "Image not Deleted";
}
?>