<?php
require('config.php');
require('function.php');
   if (isset($_FILES['image']) && isset($_POST['post_title']) && isset($_POST['post_desc']) && isset($_POST['post_category']) && isset($_POST['post_subCategory']) && isset($_POST['tags'])) {
      $errors = array();
      $imgname = mysqli_real_escape_string($conn, $_FILES['image']['name']);
      $imgext =substr(strrchr($imgname, '.'), 1);
      if (!(strcmp($imgext, "png"))) {
         $title = mysqli_real_escape_string($conn, $_POST['post_title']);
         $slug_url=generate_slug_url($conn);
         $meta_desc = mysqli_real_escape_string($conn, $_POST['post_desc']);
         $cat_id = mysqli_real_escape_string($conn, $_POST['post_category']);
         $sub_cat_id = mysqli_real_escape_string($conn, $_POST['post_subCategory']);
         $tags = mysqli_real_escape_string($conn, $_POST['tags']);
         // $thumbname = $_FILES['thumbnail']['name'];
         // $thumbtmp = $_FILES['thumbnail']['tmp_name'];
         $imgname = title_to_dashed_title($title) . '-thumbnail-' . time() . '.jpg';
         $imgtmp = $_FILES['image']['tmp_name'];
         // Create Thumbnail
         $bgimage = "../images/background.png";
         list($nwidth, $nheight) = getimagesize($imgtmp);
         list($width, $height) = getimagesize($bgimage);
         $newimage = imagecreatetruecolor($nwidth, $nheight);
         $bgsource = imagecreatefrompng($bgimage);
         $imgsource = imagecreatefrompng($imgtmp);
         imagecopyresized($newimage, $bgsource, 0, 0, 0, 0, $nwidth, $nheight, $width, $height);
         imagecopy($newimage, $imgsource, 0, 0, 0, 0, $nwidth, $nheight);
         if (move_uploaded_file($imgtmp, '../../png/' . get_basename($imgname) . '.png') && imagejpeg($newimage, '../../thumbnail/' . $imgname, 50)) {
            $query = "INSERT INTO posts (post_title,slug_url,post_desc,thumbnail,cat_id,sub_cat_id,tags) VALUES('$title','$slug_url','$meta_desc','$imgname','$cat_id','$sub_cat_id','$tags');";
            $query .= "UPDATE category SET no_of_posts=no_of_posts+1 WHERE cat_id=$cat_id;";
            $query .= "UPDATE sub_category SET no_of_posts=no_of_posts+1 WHERE id=$sub_cat_id";
            if(mysqli_multi_query($conn, $query))
               echo 1;
            else
               echo "Query Failed";
         } else {
            echo "Image not Uploaded";
         }
      } else {
         echo "This extension file not allowed, Please choose a PNG file";
      }
   } else {
      echo "All fields are Mandatory";
   }
?>
