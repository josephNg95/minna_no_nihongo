<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="http://localhost/Experiment/project/">
    <title>Minna no Nihongo</title>
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="public/css/sb-admin-2.css" rel="stylesheet">
    <link href="public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="public/css/custom.css" rel="stylesheet">
    <style type="text/css">
        /* reset bootstrap */
        .panel {border-radius: 0%;}
        .form-control {border-radius: 0%;}
        .input-group-addon {border-radius: 0%;}
        .btn {border-radius: 0%;}
        .panel-heading {border-radius: 0%;}
        .nav-pills>li>a {border-radius: 0%; box-shadow: 3px 3px 3px #b7b7b7}
        .nav {border-radius: 0%; border-bottom: 1px solid #ddd}
    </style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav id="custom" class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0; background: #387ef5;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color: #fff" href="index.html">Tiếng Nhật cho mọi người</a>
            </div>
            <ul  class="nav navbar-nav navbar-right">
            <li><a href="pages/login.php" style="color: #fff"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
                    <li><a href="pages/register.php" style="color: #fff"><span class="glyphicon glyphicon-user"></span> Đăng ký</a></li>
                </ul>
            <!-- /.navbar-header -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Tìm kiếm ...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </li>
                        <li style="padding-top: 5px;padding-bottom: 5px;">
                            <a href="index.php"><i class="fa fa-language"></i> Bảng chữ cái</a>
                        </li>
                        <li style="padding-top: 5px;padding-bottom: 5px;">
                            <a href="pages/minna.php"><i class="fa fa-book"></i> 50 bài Minna</a>
                        </li>
                        <li style="padding-top: 5px;padding-bottom: 5px;">
                            <a href="pages/basickanji.php"><i class="fa fa-font fa-fw"></i> 512 từ Kanji cơ bản</a>
                        </li>
                        <li style="padding-top: 5px;padding-bottom: 5px;">
                            <a href="pages/compharse.php"><i class="fa fa-comments fa-fw"></i> 1000 mẫu câu giao tiếp</a>
                        </li>
                        <li style="padding-top: 5px;padding-bottom: 5px;">
                            <a href="pages/jlpttest.php"><i class="fa fa-file-text fa-fw"></i> Luyện thi JLPT N1->N5</a>
                        </li>
                        <li style="padding-top: 5px;padding-bottom: 5px;">
                            <a href="pages/reference.php"><i class="fa fa-lightbulb-o fa-fw"></i> Thông tin tham khảo</a>
                        </li>
                        <li style="padding-top: 5px;padding-bottom: 5px;">
                            <a href="pages/contact_us.php"><i class="glyphicon glyphicon-phone-alt"></i> Liên hệ với chúng tôi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="col-md-12" style="margin-top: 20px; padding-top: 20px">
                <div class="container1">
                    <div class="page-header">
                        <h2>Xin chào, <small> mời bạn đăng nhập</small></h2>
                    </div><!-- div.page-header -->
                </div><!-- div.container -->
                <div class="container1">
                    <div class="row">
                        <div class="col-md-6">
                        <i><p>Vui lòng đăng ký để tiếp tục.</p></i>
                            <form method="POST" id="formSignin" onsubmit="return false;">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input type="text" class="form-control" placeholder="Tên đăng nhập" id="user_signin">
                                    </div><!-- div.input-group -->
                                </div><!-- div.form-group -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input type="password" class="form-control" placeholder="Mật khẩu" id="pass_signin">
                                    </div><!-- div.input-group -->
                                </div><!-- div.form-group -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i> Đăng nhập</button>
                                    <button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-refresh"></i> Nhập lại</button>
                                </div><!-- div.form-group -->
                                <div class="alert alert-danger hidden"></div>
                            </form><!-- form#formSignin -->
                        </div><!-- dib.col-md-6 -->
                    </div><!-- div.row -->
                </div><!-- div.container -->
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="public/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="public/metisMenu/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="public/js/sb-admin-2.js"></script>

</body>

</html>
