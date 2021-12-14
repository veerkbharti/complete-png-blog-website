
<?php
// function get_thumbnail($img){
//     $bgimage = "../images/background.png";
//     $imgname="../../thumbnail/".$img;
//     echo $imgname;
//          list($nwidth, $nheight) = getimagesize($imgname);
//          list($width, $height) = getimagesize($bgimage);
//          $newimage = imagecreatetruecolor($nwidth, $nheight);
//          $bgsource = imagecreatefrompng($bgimage);
//          $imgsource = imagecreatefrompng($imgname);
//          imagecopyresized($newimage, $bgsource, 0, 0, 0, 0, $nwidth, $nheight, $width, $height);
//          imagecopy($newimage, $imgsource, 0, 0, 0, 0, $nwidth, $nheight);
//             imagejpeg($newimage,'../../png/1.jpg');
//          return $newimage;
// }
function getCategory($conn,$id){
    $query="SELECT * FROM category WHERE cat_id=$id";
    $run=mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($run);
    return $data['cat_name'];
}
function getAllCategory($conn){
    $query="SELECT * FROM category";
    $run=mysqli_query($conn,$query);
    $data = array();
    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
}
function getSubCategory($conn,$id){
    $query="SELECT * FROM sub_category WHERE id=$id";
    $run=mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($run);
    return $data;
}
function getAllSubCategory($conn){
    $query="SELECT * FROM sub_category";
    $run=mysqli_query($conn,$query);
    $data = array();
    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
}
function getAllSubCategoryFromCatid($conn, $catId){
    $query="SELECT * FROM sub_category WHERE cat_id=$catId";
    $run=mysqli_query($conn,$query);
    $data = array();
    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
}
// function getAllTags($conn){
//     $query="SELECT * FROM tags";
//     $run=mysqli_query($conn,$query);
//     $data = array();
//     while($d=mysqli_fetch_assoc($run)){
//         $data[]=$d;
//     }
//     return $data;
// }

function getImageByPosts($conn, $post_id){
    $query="SELECT * FROM posts WHERE post_id=$post_id";
    $run=mysqli_query($conn,$query);
    $data = array();
    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
}
function getPost($conn,$id){
    $query="SELECT * FROM posts WHERE post_id=$id";
    $run=mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($run);
    return $data;
}
function getAllUsers($conn){
    $query="SELECT * FROM users";
    $run=mysqli_query($conn,$query);
    $data = array();
    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
}
function getUserInfo($conn,$email){
    $query="SELECT * FROM users WHERE email='$email'";
    $run=mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($run);
    return $data;
}
function getAllPosts($conn){
    $query="SELECT * FROM posts ORDER BY post_id DESC";
    $run=mysqli_query($conn,$query);
    $data = array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
}
//image converter
function convert_image($convert_type, $target_dir, $image_name, $image_quality=100){
    $target_dir = "$target_dir/";

    $image = $target_dir.$image_name;

    //remove extension from image;
    $img_name = get_basename($image);

    //to png
    if($convert_type == 'png'){
        $binary = imagecreatefromstring(file_get_contents($image));
        //third parameter for ImagePng is limited to 0 to 9
        //0 is uncompressed, 9 is compressed
        //so convert 100 to 2 digit number by dividing it by 10 and minus with 10
        $image_quality = floor(10 - ($image_quality / 10));
        ImagePNG($binary, $target_dir.$img_name.'.'.$convert_type, $image_quality);
        return $img_name.'.'.$convert_type;
    }

    //to jpg
    if($convert_type == 'jpg'){
        $binary = imagecreatefromstring(file_get_contents($image));
        imageJpeg($binary, $target_dir.$img_name.'.'.$convert_type, $image_quality);
        return $img_name.'.'.$convert_type;
    }
    //to gif
    if($convert_type == 'gif'){
        $binary = imagecreatefromstring(file_get_contents($image));
        imageGif($binary, $target_dir.$img_name.'.'.$convert_type, $image_quality);
        return $img_name.'.'.$convert_type;
    }
    return false;
}
//image upload handler
function upload_image($files, $target_dir, $input_name){

    $target_dir = "$target_dir/";

    //get the basename of the uploaded file
    $base_name = basename($files[$input_name]["name"]);

    //get the image type from the uploaded image
    $imageFileType = get_image_type($base_name);

    //set dynamic name for the uploaded file
    $new_name =get_dynamic_name($base_name, $imageFileType);

    //set the target file for uploading
    $target_file = $target_dir . $new_name;

    // Check uploaded is a valid image
    $validate = validate_image($files[$input_name]["tmp_name"]);
    if(!$validate){
        echo "Doesn't seem like an image file :(";
        return false;
    }

    // Check file size - restrict if greater than 1 MB
    $file_size = check_file_size($files[$input_name]["size"], 1000000);
    if(!$file_size){
        echo "You cannot upload more than 1MB file";
        return false;
    }

    // Allow certain file formats
    $file_type = check_only_allowed_image_types($imageFileType);
    if(!$file_type){
        echo "You cannot upload other than JPG, JPEG, GIF and PNG";
        return false;
    }

    if (move_uploaded_file($files[$input_name]["tmp_name"], $target_file)) {
        //return new image name and image file type;
        return array($new_name, $imageFileType);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

}
function validate_image($file){
    $check = getimagesize($file);
    if($check !== false) {
        return true;
    }
    return false;
}
function get_dynamic_name($basename, $imagetype){
    $only_name = basename($basename, '.'.$imagetype); // remove extension
    $combine_time = $only_name.'_'.time();
    $new_name = $combine_time.'.'.$imagetype;
    return $new_name;
}
function check_only_allowed_image_types($imagetype){
    if($imagetype != "jpg" && $imagetype != "png" && $imagetype != "jpeg" && $imagetype != "gif" ) {
        return false;
    }
    return true;
}
function check_file_size($file, $size_limit){
    if ($file > $size_limit) {
        return false;
    }
    return true;
}
function get_image_type($target_file){
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    return $imageFileType;
}
function get_basename($image){
    $extension =get_image_type($image); //get extension
    $only_name = basename($image, '.'.$extension); // remove extension
    return $only_name;
}
function title_to_dashed_title($title){
    $sm_title=strtolower($title);
    return str_replace(" ","-", $sm_title);
}
function toConvert($file_size){
    if($file_size<1024){
        if($file_size==1 || $file_size==0)
            return $file_size . "Byte";
        else
            return $file_size . "Bytes";
    }
    elseif($file_size<1048576){
        return round($file_size/1024, 2) . "KB";
    }
    elseif($file_size<1073741824){
        return round($file_size/(1024*1024), 2) . "MB";
    }
    else{
        return $file_size;
    }
}
function generate_slug_url($conn){
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randomString = '';
    for ($i = 0; $i < 6; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    $slug_url="all-png-free-transparent-background-clipart-".$randomString;
    $posts=getAllPosts($conn);
    foreach($posts as $post){
        if($slug_url==$post['slug_url']){
            $randomString="";
            generate_slug_url($conn);
        }
    }
    return $slug_url;
}
function display_arr($arr){
    echo '<pre>';
    print_r($arr);
}

?>