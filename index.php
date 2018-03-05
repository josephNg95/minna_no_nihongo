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
    <script src="public/js/index.js"></script>
    <style type="text/css">
        /* reset bootstrap */
        
        .panel {
            border-radius: 0%;
        }
        .panel-group .panel {
            border-radius: 0%;   
        }
        
        .form-control {
            border-radius: 0%;
        }
        
        .input-group-addon {
            border-radius: 0%;
        }
        
        .btn {
            border-radius: 0%;
        }
        
        .btn:hover {
            box-shadow: 5px 5px 5px #8a8a8a
        }
        
        .panel-heading {
            border-radius: 0%;
        }
        
        .nav-pills>li>a {
            border-radius: 0%;
            box-shadow: 3px 3px 3px #b7b7b7
        }
        
        .nav {
            border-radius: 0%;
            border-bottom: 1px solid #ddd
        }
        /*====================*/
        
        #data {
            /* if one specifies "arial", characters are centered vertically, otherwise they may be not */
            display: block;
            font-family: "arial", sans-serif;
            text-align: center;
            width: 300px;
            font-size: 25px;
            height: 1.5em;
            line-height: 1.25em;
            margin: 0 auto;
            padding: 0;
            vertical-align: middle;
        }
        
        #ok {
            -webkit-appearance: none;
            margin-top: 0.5em;
            padding: 5px 15px;
            font-size: 1.5em;
            border: 0;
            background: #257dda;
            color: #fff;
            border-radius: 3px;
            width: 254px;
            position: fixed;
            right: 75px;
        }
        
        #a {
            position: relative;
            width: 256px;
            height: 256px;
            margin: 1em auto;
        }
        
        #a {
            border: 1px solid #ccc;
            background: transparent;
            color: #000;
        }
        
        #a.noBorder {
            border-color: transparent
        }
        
        #ok:hover,
        #joyoSection button:hover,
        #frequentSection button:hover {
            cursor: pointer;
        }
        
        #ok:focus,
        #ok:active,
        #ok:hover {
            box-shadow: 3px 3px 3px #827f7f;
            transition: 0.5s;
        }
        
        #ok::-moz-focus-inner {
            border: 0;
        }
        
        label {
            display: inline-block;
            white-space: normal;
            margin: 0 0.5em 1em 0.5em;
        }
        
        label input {
            vertical-align: text-bottom;
        }
        
        svg {
            width: 256px;
            height: 256px;
        }
        
        svg.error {
            font-size: 256px;
        }
        
        #b {
            width: 256px;
            min-height: 9.5em;
            margin: 1em auto;
        }
        
        div.dico {
            margin: 0 0.25em;
            padding-top: 0.25em;
            text-align: left;
            line-height: 1.25em;
        }
        
        span.cjkChar {
            vertical-align: top;
        }
        
        div.grid {
            position: absolute;
            box-sizing: border-box;
            z-index: 1;
        }
        
        div.grid0 {
            z-index: 1;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            border: 1px solid #ccc;
        }
        
        div.grid1 {
            z-index: 1;
            top: 25%;
            left: 0;
            width: 100%;
            height: 50%;
            border-top: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
        }
        
        div.grid2 {
            z-index: 1;
            top: 0;
            left: 25%;
            width: 50%;
            height: 100%;
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
        }
        
        div.grid3 {
            z-index: 1;
            top: 0;
            left: 0;
            width: 100%;
            height: 50%;
            border-bottom: 1px solid #ccc;
        }
        
        div.grid4 {
            z-index: 1;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            border-right: 1px solid #ccc;
        }
        
        div.grid5 {
            z-index: 1;
            left: 9.175%;
            top: 9.175%;
            width: 81.65%;
            height: 81.65%;
            border: 1px solid #ccc;
        }
        
        #joyoSection {
            display: block;
        }
        
        #frequentSection {
            display: none;
        }
        
        #joyoSection button,
        #frequentSection button {
            border: 0;
            background: transparent;
            color: #000;
            font-size: 2.25em;
            margin: 0.1em;
        }
        
        #joyoSection button.sameInBoth,
        #frequentSection button.sameInBoth {
            color: #000;
        }
        
        span.sameInBoth {
            display: inline-block;
            width: 1em;
            color: transparent;
            background: #000;
        }
        
        #joyoSection button.notSameInBoth,
        #frequentSection button.notSameInBoth {
            color: #00f;
        }
        
        span.notSameInBoth {
            display: inline-block;
            width: 1em;
            color: transparent;
            background: #00f;
        }
        
        #joyoSection button.notInBoth,
        #frequentSection button.notInBoth {
            color: #0058ff;
        }
        
        span.notInBoth {
            display: inline-block;
            width: 1em;
            color: transparent;
            background: #090;
        }
        
        #joyoSection button.missing,
        #frequentSection button.missing {
            color: #c00;
        }
        
        span.missing {
            display: inline-block;
            width: 1em;
            color: transparent;
            background: #c00;
        }
        
        footer {
            padding-top: 1em;
        }
        
        footer a {
            color: #000;
        }
        /*========================================================*/
        
        #joyoSection button.notInBoth:hover {
            box-shadow: 3px 3px 3px 2px #8a8a8a;
            transition: all 0.2s linear;
        }
        
        #joyoSection button.notInBoth {
            margin-right: 15px;
        }
        
        .alphabet {
            float: left;
            width: 70%;
        }
        
        .drawFrame {
            float: left;
            width: 30%;
        }
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
            <div class="navbar- sidebar" role="navigation">
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
            <div class="row" style="padding-top: 10px;top: 50px; position: fixed; z-index: 9999; background: #fff; width: 100%; height: 60px;">
                <div class="col-md-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#hiragana" onclick="hiragana()" data-toggle="tab" aria-expanded="false">Hiragana</a>
                        </li>
                        <li class=""><a href="#hiragana" onclick="katakana()" data-toggle="tab" aria-expanded="true">Katakana</a>
                        </li>
                        <li><a href="#testHiragana" data-toggle="tab">Kiểm tra Hiragana</a>
                        </li>
                        <li><a href="#testKatakana" data-toggle="tab">Kiểm tra Katakana</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12" style="margin-top: 115px;">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="hiragana">
                            <?php include "/view/alphabet/index.php";?>
                        </div>
                        <div class="tab-pane fade" id="Katakana"></div>
                        <div class="tab-pane fade" id="testHiragana">
                            <h4>Kiểm tra Hiragana</h4>
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
                            <div class="col-md-7" style="margin-top: 50px; margin-bottom: 100px;">
                                <input type="submit" class="btn btn-primary btn-block" value="Xem kết quả">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testKatakana">
                            <h4>Kiểm tra Katakana</h4>
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
                            <div class="col-md-7" style="margin-top: 50px; margin-bottom: 100px;">
                                <input type="submit" class="btn btn-primary btn-block" value="Xem kết quả">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <script src="public/jquery/jquery.min.js"></script>
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/metisMenu/metisMenu.min.js"></script>
    <script src="public/js/sb-admin-2.js"></script>
    <script type="text/javascript">
        function katakana() {
            var katakana = document.getElementById('hidekatakana');
            katakana.removeAttribute('style');

            var hiragana = document.getElementById('hidehiragana');
            hiragana.setAttribute("style", "display: none;");
        }

        function hiragana() {

            var hiragana = document.getElementById('hidehiragana');
            hiragana.removeAttribute('style');

            var katakana = document.getElementById('hidekatakana');
            katakana.setAttribute("style", "display: none;");

        }
    </script>
</body>

</html>