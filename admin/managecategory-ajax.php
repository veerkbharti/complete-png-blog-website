<?php
require('includes/config.php');
require('includes/function.php');
$categories = getAllCategory($conn);
                $count = 1;
                $output="";
$output='<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="categoryModal" class="modal ">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
      <h4 class="modal-title">Add New Category</h4>
    </div>
    <div class="modal-body">
      <form role="form" >
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
                            <th>Add to Home</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>';
                        foreach ($categories as $category) {
                        $output.="<tr>
                                <td class='serial'>{$count}.</td>
                                <td> <span >{$category['cat_name']}</span> </td>
                                <td> <span >{$category['no_of_posts']}</span> </td>
                                <td> <span >{$category['no_of_sub_cats']}</span> </td>
                                <td>";
                                    if ($category['status'] == 0){
                                       $output.=  "<a class='btn btn-success add-to-home text-white' data-status='{$category['status']}' data-id='{$category['cat_id']}' name='add-to-home'>Add</a>";
                                    } else {
                                        $output.=   "<a class='btn btn-success add-to-home text-white' data-status='{$category['status']}' data-id='{$category['cat_id']}' name='add-to-home'>Added</a>";
                                    }
                                    $output.="</td>
                                <td>
                                    <a class='btn btn-danger delete-category text-white' data-posts='{$category['no_of_posts']}' data-id='{$category['cat_id']}'><i class='fas fa-trash-alt'></i> </a>
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
