<?php
require('includes/config.php');
require('admin/includes/function.php');
if (isset($_GET['page'])) {
  $page = mysqli_real_escape_string($conn, $_GET['page']);
} else {
  $page = 1;
}
$result = ($page - 1) * $post_per_page;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?=$_GET['search']?> PNG image free download | Stylish hindi font clipart PNG download, poster designing PNG, banner editing png, Free PNG images download" />
    <meta name="keywords" content="<?=$_GET['search']?>,free PNG,transparent background,free clipart,clip art,free download,studio background,animal png,flower png,free download" />
    <meta name="author" content="Pintu Kumar - PTS">
  <!-- ---------Title------------------ -->
  <title><?= $_GET['search'] ?> - transparent background PNG cliparts free download | AllPNGFree</title>
  <!-- ---------------Favicon--------- -->
  <link rel="shortcut icon" type="image/jpg" href="images/favicon.png" />
  <!-- .............Custom CSS........ -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- ...............Font Awesome...... -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- ...........Bootstrap.......... -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- .........Title........ -->
</head>

<body>
  <?php require('includes/header.php'); ?>
  <div class="container-fluid shadow page-title">
    <h6 class="text-center "><?= $_GET['search'] ?> Transparent Background PNG Clipart</h6>
  </div>
  <div class=" container-fluid gallery">
    <?php
    $keyword = mysqli_real_escape_string($conn, $_GET['search']);
    $postQuery = "SELECT * FROM posts WHERE tags LIKE '%$keyword%' OR post_title LIKE '%$keyword%' OR post_desc LIKE '%$keyword%' ORDER BY post_id DESC LIMIT $result, $post_per_page";
    $runPQ = mysqli_query($conn, $postQuery);
    if (mysqli_num_rows($runPQ)) {
      while ($post = mysqli_fetch_assoc($runPQ)) {
        // ------------------------------Box Section  ------------------ -->
        include('includes/image-grid-box.php');
      }
    ?>
      <!-- Bottom to Top Button -->
      <a id="back-to-top" class="btn btn-light back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
    <?php
    } else {
      echo "<div class='text-align-center'><h4>Result not Found</h4></div>";
    }
    ?>

  </div>
  <?php
  //------Pagination--------
  if (isset($_GET['search'])) {
    $keyword = mysqli_real_escape_string($conn, $_GET['search']);
    $q = "SELECT * FROM posts WHERE tags LIKE '%$keyword%' OR post_title LIKE '%$keyword%' OR post_desc LIKE '%$keyword%'";
  }
  $r = mysqli_query($conn, $q);
  $total_posts = mysqli_num_rows($r);
  $total_pages = ceil($total_posts / $post_per_page);
  ?>
  <nav aria-label="Page navigation example" class="mt-4">
    <ul class="pagination justify-content-center">
      <?php
      if ($page > 1) {
        $switch = "";
      } else {
        $switch = "disabled";
      }
      if ($page < $total_pages) {
        $nswitch = "";
      } else {
        $nswitch = "disabled";
      }
      ?>
      <li class="page-item <?= $switch ?>">
        <a class="page-link" href="?<?php if (isset($_GET['search'])) {
                                      echo "search=$keyword&";
                                    } ?>page=<?= $page - 1 ?>" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      <li class="page-item <?= $nswitch ?>">
        <a class="page-link" href="?<?php if (isset($_GET['search'])) {
                                      echo "search=$keyword&";
                                    } ?>page=<?= $page + 1 ?>">Next</a>
      </li>
    </ul>
  </nav>
  <?php include_once('includes/footer.php'); ?>
  <!-- ...........Scripts Files........... -->
  <!-- .....JQuery file....... -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/js/popper.min.js" type="text/javascript"></script>
  <script src="admin/assets/js/plugins.js" type="text/javascript"></script>
  <!-- ---------------Custom Scripts-------------- -->
  <script src="js/script.js"></script>
  <!-- .........Bootstrap............... -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>