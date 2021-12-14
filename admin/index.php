<?php include_once('includes/top.php'); ?>

<body>
  <!-- ------------------Left-Panel---------- -->
  <?php include_once('includes/left-panel.php'); ?>
  <!-- ------------------Right - Panel---------- -->
  <div id="right-panel" class="right-panel">
    <!-- ------------------Right-Panel-header---------- -->
    <?php include_once('includes/header.php'); ?>
    <!-- ------------------Right-Panel-header-Ends---------- -->
    <div class="content pb-0">
      <div class="orders">
        <div class="row">
          <!-- ...........Add New Post....................... -->
          <?php
          include_once('addpost.php');
          ?>
        </div>
      </div>
      <?php
      include_once('includes/footer.php');
      ?>
    </div>
    <?php include_once('includes/bottom.php'); ?>
</body>

</html>