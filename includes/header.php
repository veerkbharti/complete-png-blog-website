<?php
// if(!defined('MYSITE')){
//   header('location:../index.php');
//   die();
// }
?>
  <header class="container-fluid bg-dark sticky-top py-2 main">
    <div class="row align-items-center">
      <div class="col-sm-3 col-4 justify-content-center ">
        <a href="<?= $location ?>"><img src="<?= $location ?>/images/logo/header_logo.png" alt="logo"></a>
      </div>
      <div class=" col-sm-9 col-8">
        <form class="d-flex" action="search.php?=<?=$_GET['search']?>">
        <?php
        if(isset($_GET['search'])){
          $value=$_GET['search'];
        }
        else{
          $value="";
        }
        ?>
          <input class="form-control me-2 py-lg-2" value="<?=$value?>" type="search" name="search" placeholder="Search for free png clipart..." aria-label="Search" >
          <button class="btn btn-outline-light"  type="submit">Search</button>
        </form>
      </div>
    </div>
  </header>
