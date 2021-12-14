<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- .......Title........ -->
    <title><?php if (isset($_SERVER['PATH_INFO'])) echo $mpost['post_title'];
            else echo "AllPNGFree"; ?></title>
    <!-- ---------------Favicon--------- -->
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png" />
    <!-- .............Custom CSS........ -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- ...............Font Awesome...... -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- ...........Bootstrap.......... -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <?php include_once('includes/header.php'); ?>
    <header class=" about-us m-auto mb-5">
        <div class="overlay">
            <div class="container ">
                <h2>About US</h2>
            </div>
        </div>
    </header>
    <div class="container p-4  shadow bg-white">
        <p>
             <strong>About Us</strong> <br>
            All Type PNG image free download Stylish hindi font clipart PNG download, poster designing PNG, banner editing png, Free PNG images download <br> <br>
            If you have any query regrading Site, Advertisement and any other issue, please feel free to contact at <br> <br>
            <a href="mailto:allpngfree@gmail.com">E-mail: allpngfree@gmail.com</a>
        </p>
    </div>
    <?php include_once('includes/footer.php'); ?>
</body>

</html>