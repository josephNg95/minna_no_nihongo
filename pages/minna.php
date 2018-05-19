<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="http://localhost/project/">
    <title>Minna no Nihongo</title>
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="public/css/sb-admin-2.css" rel="stylesheet">
    <link href="public/morrisjs/morris.css" rel="stylesheet">
    <link href="public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="public/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css" />
    <script src="public/js/index.js"></script>
    <style type="text/css">
        /* reset bootstrap */
        .panel {border-radius: 0%;}
        .panel-group .panel {
            border-radius: 0%;   
        }
        .form-control {border-radius: 0%;}
        .input-group-addon {border-radius: 0%;}
        .btn {border-radius: 0%;}
        .btn:hover {box-shadow:5px 5px 5px #8a8a8a}
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
                            <a href="pages/advankanji.php"><i class="fa  fa-star fa-fw"></i> 1945 từ Kanji nâng cao</a>
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
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row"  style="padding-top: 10px;top: 50px; position: fixed; z-index: 9999; background: #fff; width: 100%; height: 60px;">
                <div class="col-md-12">
                            <!-- Nav tabs -->
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#newWord" data-toggle="tab" aria-expanded="false">Từ mới</a></li>
                            <li class=""><a href="#grammar" data-toggle="tab" aria-expanded="true">Ngữ pháp</a></li>
                            <li><a href="#kaiwa" data-toggle="tab">Kaiwa</a></li>
                            <li><a href="#mondai" data-toggle="tab">Mondai</a></li>
                            <li><a href="#bunkei" data-toggle="tab">Bunkei</a></li>
                            <li><a href="#reibun" data-toggle="tab">Reibun</a></li>
                            <li><a href="#refer" data-toggle="tab">Tham khảo</a></li>
                        </ul>
                    </div>
            </div>
            <div class="row">
                <!-- /.col-lg-12 -->
                <div class="row" style="margin-top: 100px; padding-top: 20px">
                <div class="col-md-4">
                    <div class="panel panel-default" style="position: fixed;width: 23%">
                        <div class="panel-heading">
                            <span><i class="fa fa-list"></i> 512 từ Kanji cơ bản</span>
                        </div>
                        <div class="panel-body listItem">
                            <p>Bài 1</p>
                            <p>Bài 1</p>
                            <p>Bài 1</p>
                            <p>Bài 1</p>
                            <p>Bài 1</p>
                            <p>Bài 1</p>
                            <p>Bài 1</p>
                            <p>Bài 1</p>
                            <p>Bài 1</p>
                            <p>Bài 1</p>
                            <p>Bài 1</p>
                            <p>Bài 1</p>
                            <p>Bài 1</p>
                            <p>Bài 1</p>
                            <p>Bài 1</p>
                            <p>Bài 1</p>
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content-right">
                        <div class="col-lg-12">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="newWord">
                            <h4>newWord Tab</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                           
                        </div>
                        <div class="tab-pane fade" id="grammar">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">Collapsible Group Item #1</a>
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kaiwa">
                            <h4>kaiwa Tab</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="tab-pane fade" id="mondai">
                            <h4>mondai Tab</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="tab-pane fade" id="bunkei">
                            <h4>bunkei Tab</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                        </div>
                        <div class="tab-pane fade" id="reibun">
                            <h4>reibun Tab</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                        </div>
                        <div class="tab-pane fade" id="refer">
                            <h4>refer Tab</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
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

    <!-- Morris Charts JavaScript -->
    <script src="public/raphael/raphael.min.js"></script>
    <script src="public/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="public/js/sb-admin-2.js"></script>

</body>

</html>
