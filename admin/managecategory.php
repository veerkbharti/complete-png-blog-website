<?php include_once('includes/top.php'); ?>

<body>
  <!-- ------------------Letf-Panel---------- -->
  <?php include_once('includes/left-panel.php'); ?>
  <!-- ------------------Right - Panel---------- -->
  <div id="right-panel" class="right-panel">
    <!-- ------------------Right-Panel-header---------- -->
    <?php include_once('includes/header.php'); ?>
    <!-- ------------------Right-Panel-header-Ends---------- -->
    <div class="content pb-0">
      <div class="orders">
        <div class="row">
          <div class="col-xl-12" id="load-post">
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="categoryModal" class="modal ">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">Add New Category</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" name="category-name" id="category-name" class="category-name mr-3 " id="exampleInputEmail3placeholder=" placeholder="Enter Category Name..">
                      </div>
                      <button type="submit" id="add-category" class="btn btn-primary btn-sm " data-dismiss="modal">Add</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h4 class="box-title d-inline-block float-left ">Categories -</h4>
                <a href="#categoryModal" data-toggle="modal" class=" d-inline-block text-primary float-right">Add New Category</a>
              </div>
              <div class="card-body table-reponsive ">
                <div class=" ">
                  <table id="myTable" class=" table table-striped table-bordered ">
                    <thead class="table-dark">
                      <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>No. of Posts</th>
                        <th>No. of Sub-Category</th>
                        <th class='text-center'>Add to Home</th>
                        <th class='text-center'>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $categories = getAllCategory($conn);
                      $count = 1;
                      foreach ($categories as $category) {
                        echo "<tr>
                                <td class='serial'>{$count}.</td>
                                <td> <span >{$category['cat_name']}</span> </td>
                                <td> <span >{$category['no_of_posts']}</span> </td>
                                <td> <span >{$category['no_of_sub_cats']}</span> </td>
                                <td class='text-center'>";
                                if ($category['status'] == 0) {
                                    echo "<a class='btn btn-success btn-sm add-to-home text-white' data-status='{$category['status']}' data-id='{$category['cat_id']}' name='add-to-home'>Add</a>";
                                } else {
                                    echo "<a class='btn btn-success btn-sm add-to-home text-white' data-status='{$category['status']}' data-id='{$category['cat_id']}' name='add-to-home'>Added</a>";
                                }
                                echo "</td>
                                <td class='text-center'>
                                    <a class='btn btn-danger btn-sm m-1 delete-category text-white' data-posts='{$category['no_of_posts']}' data-id='{$category['cat_id']}'><i class='fas fa-trash-alt'></i> </a>
                                </td>
                              </tr>";
                        $count++;
                      } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    include_once('includes/footer.php');
    ?>
  </div>
  <?php include_once('includes/bottom.php'); ?>
</body>

</html>