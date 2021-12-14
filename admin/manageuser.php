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
                                <h4 class="box-title d-inline-block float-left ">User -</h4>
                                <!-- <button type="submit" name="addcat" class="btn btn-primary float-right text-style-none">Add User</button> -->
                            </div>
                            <div class="card-body table-responsive ">
                                <div class=" ">
                                    <table id="myTable" class=" table table-striped table-bordered ">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>#</th>
                                                <th>Profile Picture</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $users = getAllUsers($conn);
                                            $count = 1;
                                            foreach ($users as $user) {
                                                echo "<tr>
                                                    <td class='serial'>{$count}.</td>
                                                    <td class='avatar'> <div class='round-img '>
                                                        <a><img class='rounded-circle' style='max-width: 50px;' src='images/avatar/{$user['image']}' alt='thumbnail'></a>
                                                    </div> </td>
                                                    <td> <span>{$user['first_name']}</span> </td>
                                                    <td> <span>{$user['last_name']}</span> </td>
                                                    <td> <span>{$user['email']}</span> </td>
                                                    <td> <span>{$user['user_role']}</span> </td>
                                                    <td class='text-center'>
                                                        <a class=' btn btn-danger btn-sm m-1 delete-user text-white' data-id='{$user['user_id']}'><i class='fas fa-trash-alt'></i> </a>
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