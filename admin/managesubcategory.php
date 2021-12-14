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
          <div class="col-xl-12" id="load-post">
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="subCategoryModal" class="modal ">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">Add New Sub-Category</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" name="sub-category-name" id="sub-category-name" class="sub-category-name mr-3 " id="exampleInputEmail3placeholder=" placeholder="Enter sub-category name..">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <select id="category">
                          <?php
                          $categories = getAllCategory($conn);
                          $count = 1;
                          foreach ($categories as $category) {
                            echo "<option value='{$category['cat_id']}'>{$category['cat_name']}</option>";
                          } ?>
                        </select>
                      </div>
                      <button type="submit" id="add-sub-category" class="btn btn-primary btn-sm " data-dismiss="modal">Add</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h4 class="box-title d-inline-block float-left ">Sub-Categories -</h4>
                <a href="#subCategoryModal" data-toggle="modal" class=" d-inline-block text-primary float-right">Add New Sub-Category</a>
              </div>
              <div class="card-body table-responsive ">
                <div class=" ">
                  <table id="myTable" class=" table table-striped table-bordered">
                    <thead class="table-dark">
                      <tr>
                        <th>#</th>
                        <th>Sub-Category Name</th>
                        <th>Category Name</th>
                        <th>No. of Posts</th>
                        <th class='text-center'>Add to Home</th>
                        <th class='text-center'>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $subCategories = getAllSubCategory($conn);
                      $count = 1;
                      foreach ($subCategories as $subCategory) {
                        echo "<tr>
                                <td class='serial'>{$count}.</td>
                                <td> <span>{$subCategory['name']}</span> </td>
                                <td> <span>" . getCategory($conn, $subCategory['cat_id']) . "</span> </td>
                                <td> <span class='serial'>{$subCategory['no_of_posts']}</span> </td>
                                <td class='text-center'>";
                        if ($subCategory['status'] == 0) {
                          echo "<a class='btn btn-success btn-sm add-to-home-sub text-white' data-status='{$subCategory['status']}' data-id='{$subCategory['id']}' name='add-to-home-sub'>Add</a>";
                        } else {
                          echo   "<a class='btn btn-success btn-sm add-to-home-sub text-white' data-status='{$subCategory['status']}' data-id='{$subCategory['id']}' name='add-to-home-sub'>Added</a>";
                        }
                        echo "</td>
                                <td class='text-center'>
                                    <a class='btn btn-danger btn-sm m-1 delete-subcategory text-white' data-posts='{$subCategory['no_of_posts']}' data-id='{$subCategory['id']}'><i class='fas fa-trash-alt'></i> </a>
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