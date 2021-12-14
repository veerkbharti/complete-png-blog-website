<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header py-0">
            <a class="navbar-brand py-0" href="<?=$location?>/admin"><img src="<?= $location ?>/admin/images/header_logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="index.php"><img src="<?= $location ?>/admin/images/header_logo.png" alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome <strong class="mx-1"><?= $user['first_name'] ?> </strong><i class="fas fa-caret-down me-1"></i></a>
                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="includes/logout.php"><i class="fa fa-power-off"></i>Logout</a>
                </div>
            </div>
        </div>
        <div id="Success-Msg" class="Show-Msg alert alert-success" role="alert"></div>
    </div>
</header>
<div id="Error-Msg" class="Show-Msg text-danger"></div>
<!-- <div id="Success-Msg" class="Show-Msg">gchjgdjcgfdhjjgjjtyjtjyrth</div> -->