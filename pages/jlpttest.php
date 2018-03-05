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
                            <span><i class="fa fa-list"></i> Luyện thi JLPT</span>
                        </div>
                        <div class="panel-body listItem">
                            <p>N4 Ngữ pháp</p>
                            <p>N4 Từ vựng</p>
                            <p>N4 Kanji</p>
                            <p>N5 Ngữ pháp</p>
                            <p>N5 Từ vựng</p>
                            <p>N5 Kanji</p>
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content-right">
                        <div>
                            <h4>Kiểm tra JLPT</h4>
                            <div class="" style="float: left;">
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 1: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 2: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 3: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 4: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 5: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 6: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 7: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 8: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 9: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 10: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="" style="float: left; margin-left: 100px">
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 1: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 2: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 3: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 4: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 5: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 6: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 7: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 8: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 9: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                                <div class="" style="margin-bottom: 10px;">
                                    <p><b>Câu 10: Chữ <span style="color: red; font-weight:500; font-size:18px;">わ</span> có phiên âm ra sao?</b></p>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" name="optradio">n</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">se</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">wa</label></div>
                                        <div class="radio"><label><input type="radio" name="optradio">tsu</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10" style="margin-top: 50px; margin-bottom: 100px;">
                                <input type="submit" class="btn btn-primary btn-block" value="Xem kết quả">
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

    <!-- Custom Theme JavaScript -->
    <script src="public/js/sb-admin-2.js"></script>

</body>

</html>
