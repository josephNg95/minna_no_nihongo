<style>
    .right-mn a:hover {
        background: #5cb85c !important;
    }
    .mn-active{
        background: #5cb85c;
    }
</style>

<!-- Navigation -->
<nav id="custom" class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0; background: #387ef5;">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="color: #fff" href="index.php">Tiếng Nhật cho mọi người</a>
    </div>
        <ul class="nav navbar-nav navbar-right">
            <?php
                if (!isset($_SESSION['user_name'])) {
            ?>
            <li class="right-mn <?php echo (isset($_GET['con']) && $_GET['con'] == 'login') ? 'mn-active':'';?>"><a href="index.php?con=login" style="color: #fff"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
            <li class="right-mn <?php echo (isset($_GET['con']) && $_GET['con'] == 'register' || $_GET['con'] == 'verify') ? 'mn-active':'';?>"><a href="index.php?con=register" style="color: #fff"><span class="glyphicon glyphicon-user"></span> Đăng ký</a></li>
            <?php } ?>
            <?php
                if (isset($_SESSION['user_name'])) {
            ?>
            <li class="right-mn <?php echo (isset($_GET['con']) && $_GET['con'] == 'profile') ? 'mn-active':'';?>"><a href="index.php?con=register" style="color: #fff"><span class="glyphicon glyphicon-user"></span> Trang cá nhân</a></li>
            <li class="right-mn"><a href="index.php?con=logout" style="color: #fff"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a></li>
            <?php } ?>
        </ul>
    <!-- /.navbar-header -->
    <div class="navbar- sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <!-- <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Tìm kiếm ...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button" style="height: 34px">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>
                </li> -->
                <li style="padding-top: 5px;padding-bottom: 5px;">
                    <a href="index.php"><i class="fa fa-language" ></i> Bảng chữ cái</a>
                </li>
                <li style="padding-top: 5px;padding-bottom: 5px;">
                    <a href="index.php?con=minna"><i class="fa fa-book"></i> 50 bài Minna</a>
                </li>
                <li style="padding-top: 5px;padding-bottom: 5px;">
                    <a href="index.php?con=basickanji"><i class="fa fa-font fa-fw"></i> 512 từ Kanji cơ bản</a>
                </li>
                <li style="padding-top: 5px;padding-bottom: 5px;">
                    <a href="index.php?con=conversation"><i class="fa fa-comments fa-fw"></i> 1000 mẫu câu giao tiếp</a>
                </li>
                <li style="padding-top: 5px;padding-bottom: 5px;">
                    <a href="index.php?con=jlpttest"><i class="fa fa-file-text fa-fw"></i> Luyện thi JLPT N4->N5</a>
                </li>
                <li style="padding-top: 5px;padding-bottom: 5px;">
                    <a href="index.php?con=post"><i class="fa fa-bookmark"></i> Bài viết tham khảo</a>
                </li>
                <li style="padding-top: 5px;padding-bottom: 5px;">
                    <a href="index.php?con=contact_us"><i class="glyphicon glyphicon-phone-alt"></i> Liên hệ với chúng tôi</a>
                </li>
            </ul>
        </div>
    </div>
    
</nav>