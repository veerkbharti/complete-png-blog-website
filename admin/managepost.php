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
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title d-inline-block float-left ">Posts </h4>
                                <a href="<?=$location?>/admin" id="add-new-post" class=" d-inline-block text-primary float-right">Add New Post</a>
                            </div>
                            <div class="card-body table-responsive ">
                                <!-- <div class="table-stats order-table ov-h "> -->
                                <table id="myTable" class="table ">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>#</th>
                                            <th class="avatar">Image</th>
                                            <th>Title</th>
                                            <th>Meta Desc</th>
                                            <th>Category</th>
                                            <th>SubCategory</th>
                                            <th>PostDate</th>
                                            <th class='text-center'>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $posts = getAllPosts($conn);
                                        $count = 1;
                                        foreach ($posts as $post) {
                                            echo "<tr>
                                                    <td class='serial'>{$count}</td>
                                                    <td class='avatar'>
                                                        <div class='round-img '>
                                                            <a><img class='rounded-circle img-fluid' style='max-width: 80px; height: 80px;' src='../thumbnail/{$post["thumbnail"]}' alt='thumbnail'></a>
                                                        </div>
                                                    </td>
                                                    <td> <span class='name'>{$post["post_title"]}</span> </td>
                                                    <td> <span class='product'>{$post["post_desc"]}</span> </td>
                                                    <td><span>" . getCategory($conn, $post['cat_id']) . "</span></td>";
                                                    $sub_category =getSubCategory($conn, $post['sub_cat_id']);
                                                echo "<td><span>" . $sub_category['name'] . "</span></td>
                                                    <td><span>" . date('F jS, Y', strtotime($post['post_date'])) . "</span></td>
                                                    <td class='text-center'>
                                                        <a class=' btn btn-danger btn-sm m-1 delete-post text-white' data-id='{$post["post_id"]}'><i class='fas fa-trash-alt'></i> </a>
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
        <?php
        include_once('includes/footer.php');
        ?>
    </div>
    <?php include_once('includes/bottom.php'); ?>
</body>

</html>