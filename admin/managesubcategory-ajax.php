<?php
require('includes/config.php');
require('includes/function.php');
$subCategories = getAllSubCategory($conn);
$categories = getAllCategory($conn);
                $count = 1;
                $output="";
$output='<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="subCategoryModal" class="modal ">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
      <h4 class="modal-title">Add New Sub-Category</h4>
    </div>
    <div class="modal-body">
      <form role="form" >
        <div class="form-group">
          <label for="exampleInputEmail1">Category Name</label>
          <input type="text" name="sub-category-name" id="sub-category-name" class="sub-category-name mr-3 " id="exampleInputEmail3placeholder=" placeholder="Enter sub-category name..">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Category Name</label>
          <select id="category" >';
          foreach ($categories as $category) {
              $output.="<option value='{$category['cat_id']}'>{$category['cat_name']}</option>";
          }
          $output.='
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
                <table id="myTable" class=" table table-striped table-bordered ">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Sub-Category Name</th>
                            <th>Category Name</th>
                            <th>No. of Posts</th>
                            <th>Add to Home</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>';
                        foreach ($subCategories as $subCategory) {
                        $output.="<tr>
                                <td class='serial'>{$count}.</td>
                                <td> <span>{$subCategory['name']}</span> </td>
                                <td> <span>" .getCategory($conn, $subCategory['cat_id'])."</span> </td>
                                <td> <span class='serial'>{$subCategory['no_of_posts']}</span> </td>
                                <td>";
                                    if ($subCategory['status'] == 0){
                                       $output.=  "<a class='btn btn-success add-to-home-sub text-white' data-status='{$subCategory['status']}' data-id='{$subCategory['id']}' name='add-to-home-sub'>Add</a>";
                                    } else {
                                        $output.=   "<a class='btn btn-success add-to-home-sub text-white' data-status='{$subCategory['status']}' data-id='{$subCategory['id']}' name='add-to-home-sub'>Added</a>";
                                    }
                                    $output.="</td>
                                <td>
                                    <a class='btn btn-danger delete-subcategory text-white' data-posts='{$subCategory['no_of_posts']}' data-id='{$subCategory['id']}'><i class='fas fa-trash-alt'></i> </a>
                                </td>
                            </tr>";
                            $count++;
                        }
                 $output.='   </tbody>
                </table>
            </div>
        </div>
</div>';
echo $output;
?>
