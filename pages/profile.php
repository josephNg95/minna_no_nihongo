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
            <div class="row" style="margin-top: 50px; padding-top: 20px">
                <p style="padding-left: 25px;font-size: 24px"><i class="glyphicon glyphicon-list"></i> Thông tin cá nhân</p>
                <p class="pull-right">
                            
                        </p>
                <hr>
                <div class="row">
                    <div class="col-md-10" style="padding-left: 25px;">
                        <p><label for="">Họ và Tên:</label> Nguyễn Văn A</p>
                        <p><label for="">Email:</label> minanihongo@mail.com</p>
                        <p><label for="">Tên đăng nhập:</label> username1</p>
                    </div>
                    <div class="col-md-2">
                        <a href="#" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> Chỉnh sửa thông tin</a>
                    </div>
                </div>
                <hr>
                <div class="container-fluid">
                    <p style="padding: 15px; font-size: 16px; background:#5cb85c; color: #fff; width: 90%">Bảng kết quả thi jlpt của bạn</p>
                    <div class="col-md-12" style="">
                        <div class="pull-left">
                            <div style="float:left; margin-right: 15px; line-height: 35px; font-weight: 600">Loại bài thi</div>
                            <div style="float:left">
                                <select name="filterTest" id="filterTest" class="form-control input-sm" onchange="filterTest()">
                                    <option value="0">----- Chọn loại bài thi -----</option>
                                    <option value="">N5 Ngữ pháp</option>
                                    <option value="">N5 Từ vựng</option>
                                    <option value="">N5 Kanji</option>
                                    <option value="">N4 Ngữ pháp</option>
                                    <option value="">N4 Từ vựng</option>
                                    <option value="">N4 Kanji</option>
                                </select>
                                <form name="filterForm" method="post">
                                    <input type="hidden" id="typeFilter" name="typeFilter" value="">
                                </form>
                            </div>
                        </div><br><br>
                        <table class="table table-hover table-bordered" style="width: 90%">
                            <thead>
                                <tr style="background: #d8d8d8">
                                    <th style="width: 50px;">STT</th>
                                    <th>Loại bài thi</th>
                                    <th>Điểm số</th>
                                    <th>Ngày làm bài</th>
                                    <th>Đánh giá</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>N5 Ngữ pháp</td>
                                <td>20/20</td>
                                <td>22-02-2018</td>
                                <td><span class="label label-success">Tốt hơn lần thi trước</span></td>
                            </tr>
                            
                            <tr>
                                <td>2</td>
                                <td>N5 Ngữ pháp</td>
                                <td>18/20</td>
                                <td>21-02-2018</td>
                                <td><span class="label label-success">Tốt hơn lần thi trước</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>N5 Ngữ pháp</td>
                                <td>19/20</td>
                                <td>19-02-2018</td>
                                <td><span class="label label-danger">Kém hơn lần thi trước</span></td>
                            </tr>
                            
                            <tr>
                                <td>4</td>
                                <td>N5 Ngữ pháp</td>
                                <td>19/20</td>
                                <td>19-02-2018</td>
                                <td><span class="label label-success">Tốt hơn lần thi trước</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>N5 Từ vựng</td>
                                <td>15/20</td>
                                <td>17-02-2018</td>
                                <td><span class="label label-success">Tốt hơn lần thi trước</span></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>N5 Ngữ pháp</td>
                                <td>10/20</td>
                                <td>19-02-2018</td>
                                <td><span class="label label-danger">kém hơn lần thi trước</span></td>
                            </tr>
                        </table>
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
    <!-- Custom Theme JavaScript -->
    <script src="public/js/sb-admin-2.js"></script>

</body>

</html>
