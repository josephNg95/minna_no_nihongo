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
    <link href="public/morrisjs/morris.css" rel="stylesheet">
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
                            <a href="pages/jlpttest.php"><i class="fa fa-file-text fa-fw"></i> Luyện thi JLPT N4->N5</a>
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
                <div class="col-md-4">
                    <div class="panel panel-default" style="position: fixed;width: 23%">
                        <div class="panel-heading">
                            <span><i class="fa fa-list"></i> 1000 câu giao tiếp cơ bản</span>
                        </div>
                        <div class="panel-body listItem">
                            <p>Chào hỏi</p>
                            <p>Hội thoại</p>
                            <p>Số đếm</p>
                            <p>Ngày tháng</p>
                            <p>Phương hướng</p>
                            <p>Giao thông</p>
                            <p>Chỗ ở</p>
                            <p>Ăn uống</p>
                            <p>Mua sắm</p>
                            <p>Màu sắc</p>
                            <p>Thành phố</p>
                            <p>Tên nước</p>
                            <p>Du lịch</p>
                            <p>Gia đình</p>
                            <p>Hẹn hò</p>
                            <p>Khẩn cấp</p>
                            <p>Đau ốm</p>
                            <p>Thành ngữ</p>
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content-right">
                        <div class="containe1r">
                            <div class="panel-group" id="accordion" style="padding-top: 10px">
                                <!-- conversation -->
                                <div class="panel panel-default1" style="border-top: 1px solid #c3c3c3">
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                        <h4 class="panel-title">
                                            <p style="color: rgba(1,141,208,.8);cursor: pointer; font-size: 18px;">Xin chào</p>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">こんにちは</p>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;">Kon ni chi wa</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default1">
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                        <h4 class="panel-title">
                                            <p style="color: rgba(1,141,208,.8);cursor: pointer; font-size: 18px;">Chào buổi sáng</p>
                                        </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">おはようございます</p>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;">Ohayo gozaimasu</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default1">
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                        <h4 class="panel-title">
                                            <p style="color: rgba(1,141,208,.8);cursor: pointer; font-size: 18px;">Chào buổi chiều</p>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">こんにちは</p>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;">Kon ni chi wa</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default1">
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                        <h4 class="panel-title">
                                            <p style="color: rgba(1,141,208,.8);cursor: pointer; font-size: 18px;">Chào buổi tối</p>
                                        </h4>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">こんばんは</p>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;">Kon ban wa</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default1">
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                        <h4 class="panel-title">
                                            <p style="color: rgba(1,141,208,.8);cursor: pointer; font-size: 18px;">Chúc ngủ ngon</p>
                                        </h4>
                                    </div>
                                    <div id="collapse5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">おやすみなさい</p>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;">Oyasumi nasai</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default1">
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                        <h4 class="panel-title">
                                            <p style="color: rgba(1,141,208,.8);cursor: pointer; font-size: 18px;">Bạn có khỏe không?</p>
                                        </h4>
                                    </div>
                                    <div id="collapse6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">元気ですか</p>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;">Genki desu ka</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default1">
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                                        <h4 class="panel-title">
                                            <p style="color: rgba(1,141,208,.8);cursor: pointer; font-size: 18px;">Cảm ơn, tôi khỏe</p>
                                        </h4>
                                    </div>
                                    <div id="collapse7" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">元気です</p>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;">Genki desu</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default1">
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                                        <h4 class="panel-title">
                                            <p style="color: rgba(1,141,208,.8);cursor: pointer; font-size: 18px;">Cảm ơn, tôi không khỏe lắm.</p>
                                        </h4>
                                    </div>
                                    <div id="collapse8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">元気ではありません</p>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;">Genkidewa arimasen</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default1">
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                                        <h4 class="panel-title">
                                            <p style="color: rgba(1,141,208,.8);cursor: pointer; font-size: 18px;">Tên bạn là gì?</p>
                                        </h4>
                                    </div>
                                    <div id="collapse9" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">あなたの名前は何ですか</p>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;">Anatano namae wa nandesuka</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default1">
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse10">
                                        <h4 class="panel-title">
                                            <p style="color: rgba(1,141,208,.8);cursor: pointer; font-size: 18px;">Tên tôi là …</p>
                                        </h4>
                                    </div>
                                    <div id="collapse10" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">私の名前は.....です</p>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;">Watashino namae wa .....desu</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default1">
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse11">
                                        <h4 class="panel-title">
                                            <p style="color: rgba(1,141,208,.8);cursor: pointer; font-size: 18px;">Hẹn gặp lại</p>
                                        </h4>
                                    </div>
                                    <div id="collapse11" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">また会いましょう</p>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;">Mata aimashou</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default1">
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse12">
                                        <h4 class="panel-title">
                                            <p style="color: rgba(1,141,208,.8);cursor: pointer; font-size: 18px;">Tạm biệt</p>
                                        </h4>
                                    </div>
                                    <div id="collapse12" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">さようなら</p>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;">Sayonara</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default1">
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse13">
                                        <h4 class="panel-title">
                                            <p style="color: rgba(1,141,208,.8);cursor: pointer; font-size: 18px;">Rất vui được gặp bạn</p>
                                        </h4>
                                    </div>
                                    <div id="collapse13" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">はじめまして</p>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;">Hajimemashite</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default1">
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse14">
                                        <h4 class="panel-title">
                                            <p style="color: rgba(1,141,208,.8);cursor: pointer; font-size: 18px;">Thế còn bạn?</p>
                                        </h4>
                                    </div>
                                    <div id="collapse14" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">あなたはどうですか</p>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;">Anata wa dou desuka</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default1">
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse15">
                                        <h4 class="panel-title">
                                            <p style="color: rgba(1,141,208,.8);cursor: pointer; font-size: 18px;">Chúc may mắn</p>
                                        </h4>
                                    </div>
                                    <div id="collapse15" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">幸運を祈ります</p>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;">Kooun wo inorimasu</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end conversation -->
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
