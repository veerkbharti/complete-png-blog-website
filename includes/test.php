<form action="" method="POST">
    <input type="file">
</form>
<?php
        $imgtmp = $_FILES['image']['tmp_name'];
         // Create Thumbnail
         $bgimage = "../../images/background.png";
         list($nwidth, $nheight) = getimagesize($imgtmp);
         list($width, $height) = getimagesize($bgimage);
         $newimage = imagecreatetruecolor($nwidth, $nheight);
         $bgsource = imagecreatefrompng($bgimage);
         $imgsource = imagecreatefrompng($imgtmp);
         imagejpeg($newname);
         ?>