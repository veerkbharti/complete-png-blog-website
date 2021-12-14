<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <h4 class="box-title d-inline-block float-left ">Posts </h4>
            <a href="index.php?addpost" class=" d-inline-block text-primary float-right">Add New Post</a>
        </div>
        <div class="card-body table-reponsive ">
            <!-- <div class="table-stats order-table ov-h "> -->
            <table id="myTable"  class="table ">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th class="avatar">Image</th>
                        <th>Title</th>
                        <th>Meta Desc</th>
                        <th>Category</th>
                        <th>Post Date</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $posts = getAllPosts($conn);
                    $count = 1;
                    foreach ($posts as $post) {
                    ?>
                        <tr>
                            <td class="serial"><?= $count ?>.</td>
                            <td class="avatar">
                                <div class="round-img ">
                                    <a><img class="rounded-circle" style="max-width: 80px; height: 80px;" src="../thumbnail/<?= $post['thumbnail'] ?>" alt="thumbnail"></a>
                                </div>
                            </td>
                            <td> <span class="name"><?= $post['post_title'] ?></span> </td>
                            <td> <span class="product"><?= $post['post_desc'] ?></span> </td>

                            <td><span class=""> <?= getCategory($conn, $post['cat_id']) ?></span></td>
                            <td><span><?= date('F jS, Y', strtotime($post['post_date'])) ?></span></td>
                            <td>
                                <a class=" btn btn-danger delete-post text-white" data-id="<?= $post['post_id'] ?>" ><i class="fas fa-trash-alt"></i> </a>
                            </td>
                        </tr>
                    <?php
                        $count++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>