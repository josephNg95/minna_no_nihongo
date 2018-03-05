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
            <div class="row"  style="padding-top: 10px;top: 50px; position: fixed; z-index: 9999; background: #fff; width: 100%; height: 60px;">
                <div class="col-md-12">
                            <!-- Nav tabs -->
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#newWord" data-toggle="tab" aria-expanded="false">Từ mới</a></li>
                            <li onclick="pauseAudio()" class=""><a href="#grammar" data-toggle="tab" aria-expanded="true">Ngữ pháp</a></li>
                            <li onclick="pauseAudio()"><a href="#kaiwa" data-toggle="tab">Kaiwa</a></li>
                            <li onclick="pauseAudio()"><a href="#mondai" data-toggle="tab">Mondai</a></li>
                            <!-- <li><a href="#bunkei" data-toggle="tab">Bunkei</a></li>
                            <li><a href="#reibun" data-toggle="tab">Reibun</a></li>
                            <li><a href="#refer" data-toggle="tab">Tham khảo</a></li> -->
                        </ul>
                    </div>
            </div>
            <div class="row">
                <!-- /.col-lg-12 -->
                <div class="row" style="margin-top: 100px; padding-top: 20px">
                <div class="col-md-4">
                    <div class="panel panel-default" style="position: fixed;width: 23%">
                        <div class="panel-heading">
                            <span><i class="fa fa-list"></i> Danh sách bài học</span>
                        </div>
                        <div class="panel-body listItem">
                            <p>Bài 1</p>
                            <p>Bài 2</p>
                            <p>Bài 3</p>
                            <p>Bài 4</p>
                            <p>Bài 5</p>
                            <p>Bài 6</p>
                            <p>Bài 7</p>
                            <p>Bài 8</p>
                            <p>Bài 9</p>
                            <p>Bài 10</p>
                            <p>Bài 11</p>
                            <p>Bài 12</p>
                            <p>Bài 13</p>
                            <p>Bài 14</p>
                            <p>Bài 15</p>
                            <p>Bài 16</p>
                            <p>Bài 17</p>
                            <p>Bài 18</p>
                            <p>Bài 19</p>
                            <p>Bài 20</p>
                            <p>Bài 21</p>
                            <p>Bài 22</p>
                            <p>Bài 23</p>
                            <p>Bài 24</p>
                            <p>Bài 25</p>
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
                                    <div class="" >
                                        <div class="" style="margin-top: 15px; padding-bottom: 15px; text-align:center; border-bottom: 1px solid #C3C3C3">
                                            <audio id="audio" controls><source src="upload/audio/word/tumoi_1.mp3" type="audio/mpeg"></audio>
                                        </div>
                                        <!-- new words-->
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-1">
                                                <div style=""><b><h4>1</h4></b></div>
                                            </div>
                                            <div class="col-md-11">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">これ</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">cái này, đây (vật ở gần người nói)</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-1">
                                                <div style=""><b><h4>2</h4></b></div>
                                            </div>
                                            <div class="col-md-11">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">それ</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">cái đó, đó (vật ở gần người nghe)</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-1">
                                                <div style=""><b><h4>3</h4></b></div>
                                            </div>
                                            <div class="col-md-11">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">あれ</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">cái kia, kia (vật ở xa cả người nói và người nghe)</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-1">
                                                <div style=""><b><h4>4</h4></b></div>
                                            </div>
                                            <div class="col-md-11">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">この～</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">~ này</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-1">
                                                <div style=""><b><h4>5</h4></b></div>
                                            </div>
                                            <div class="col-md-11">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">その～</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">~ đó</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-1">
                                                <div style=""><b><h4>6</h4></b></div>
                                            </div>
                                            <div class="col-md-11">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">あの～</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">~ kia</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-1">
                                                <div style=""><b><h4>7</h4></b></div>
                                            </div>
                                            <div class="col-md-11">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">ほん</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">本 - bản</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">sách</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-1">
                                                <div style=""><b><h4>8</h4></b></div>
                                            </div>
                                            <div class="col-md-11">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">じしょ</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">辞書 - từ thư</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">từ điển</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-1">
                                                <div style=""><b><h4>9</h4></b></div>
                                            </div>
                                            <div class="col-md-11">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">ざっし</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">雑誌 - tạp chí</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">tạp chí</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-1">
                                                <div style=""><b><h4>10</h4></b></div>
                                            </div>
                                            <div class="col-md-11">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">しんぶん</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">新聞 - tân văn</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">báo</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-1">
                                                <div style=""><b><h4>11</h4></b></div>
                                            </div>
                                            <div class="col-md-11">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">ノート</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">vở</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-1">
                                                <div style=""><b><h4>12</h4></b></div>
                                            </div>
                                            <div class="col-md-11">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">てちょう</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">手帳 - thủ trướng</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">sổ tay</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-1">
                                                <div style=""><b><h4>13</h4></b></div>
                                            </div>
                                            <div class="col-md-11">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">めいし</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">名詞 - danh từ</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">danh thiếp</p>
                                            </div>
                                        </div>
                                        <!-- end new word-->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="grammar">
                                    <!-- grammar -->
                                    <div class=" ">
                                        <div data-parent="#grammar"  data-toggle="collapse" data-target="#demo" class="col-md-12" style="cursor:pointer ;padding-top: 8px; border-top: 1px solid #C3C3C3">
                                            <h4><b><span style="float: left">1</span></b></h4>
                                            <div style="margin-left: 30px;">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">これ/それ/あれ</p>
                                            </div>
                                            <div id="demo" class="collapse">
                                                <p>これ」 「それ」 và 「あれ」 là những đại từ chỉ thị. Về mặt ngữ pháp chúng được dùng như những danh từ.</p>
                                                <p>「これ」 dùng để chỉ một vật ở gần người nói.</p>
                                                <p>「それ」 dùng để chỉ một vật ở gần người nghe.</p>
                                                <p>「あれ」 dùng để chỉ một vật ở xa người nói và người nghe.</p>
                                                <p style="color: #D75AEC">それはじしょですか。</p>
                                                <p style="color: #0BB581">Đó có phải là quyển từ điển không ?</p>
                                                <p style="color: #D75AEC">これをください。</p>
                                                <p style="color: #0BB581">Cho tôi cái này.</p>
                                            </div>
                                        </div>
                                        <div data-parent="#grammar" data-toggle="collapse" data-target="#demo2" class="col-md-12" style="cursor:pointer ;padding-top: 8px; border-top: 1px solid #C3C3C3">
                                            <h4><b><span style="float: left">2</span></b></h4>
                                            <div style="margin-left: 30px;">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">この Danh từ その Danh từ あの Danh từ</p>
                                            </div>
                                            <div id="demo2" class="collapse">
                                                <p>「この」 「その」 「あの」 bổ nghĩa cho danh từ.</p>
                                                <p>「このDanh từ」 dùng để nói tới một vật hay một người nào đó ở gần người nói.</p>
                                                <p>「そのDanh từ」 dùng để nói tới một vật hay một người nào đó ở gần người nghe.</p>
                                                <p>「あのDanh từ」 dùng để nói tới một vật hay một người nào đó xa cả người nói và người nghe.</p>
                                                <p style="color: #D75AEC">あのほんはわたしのです。</p>
                                                <p style="color: #0BB581">Quyển sách này là của tôi.</p>
                                                <p style="color: #D75AEC">あのかたはどなたですか。</p>
                                                <p style="color: #0BB581">Vị kia là ai?</p>
                                            </div>
                                        </div>
                                        <div data-parent="#grammar" data-toggle="collapse" data-target="#demo3" class="col-md-12" style="cursor:pointer ;padding-top: 8px; border-top: 1px solid #C3C3C3">
                                            <h4><b><span style="float: left">3</span></b></h4>
                                            <div style="margin-left: 30px;">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">そうです。 そうじゃありません。</p>
                                            </div>
                                            <div id="demo3" class="collapse">
                                                <p>「そうです/そうじゃありませｎ」 được dùng trong câu nghi vấn danh từ để xác định xem một nội dung nào đó là đúng hay sai. Khi đúng thì trả lời là 「はい。そうです」 khi sai thì là 「いいえ、そうじゃありません」 .</p>
                                                <p style="color: #D75AEC">それはテレホンかードですか。</p>
                                                <p style="color: #0BB581">Đó có phải là thẻ điện thoại không?</p>
                                                <p style="color: #D75AEC">はい、そうです。</p>
                                                <p style="color: #0BB581">Vâng, phải.</p>
                                                <p style="color: #D75AEC">それはテレホンかードですか。</p>
                                                <p style="color: #0BB581">Đó có phải là thẻ điện thoại không.</p>
                                                <p style="color: #D75AEC">いいえ、そうじゃありません。</p>
                                                <p style="color: #0BB581">Không, không phải</p>
                                                <p>Đôi lúc động từ 「ちがいます」 (sai, nhầm, không phải) được dùng với nghĩa tương đương với 「そうじゃありません」 .</p>
                                                <p style="color: #D75AEC">それはテレホンカードですか。</p>
                                                <p style="color: #0BB581">Đó có phải là thẻ điện thoại không.</p>
                                                <p style="color: #D75AEC">いいえ。ちがいます。</p>
                                                <p style="color: #0BB581">Không, không phải</p>
                                            </div>
                                        </div>
                                        <div data-parent="#grammar" data-toggle="collapse" data-target="#demo4" class="col-md-12" style="cursor:pointer ;padding-top: 8px; border-top: 1px solid #C3C3C3">
                                            <h4><b><span style="float: left">4</span></b></h4>
                                            <div style="margin-left: 30px;">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">Câu 1 か, Câu 2 か。</p>
                                            </div>
                                            <div id="demo4" class="collapse">
                                                <p>Mẫu câu nghi vấn này dùng để hỏi về sự lựa chọn của người nghe. Người nghe sẽ lựa chọn Câu 1 hoặc Câu 2. Đối với câu nghi vấn loại này, khi trả lời không dùng 「はい」 hay 「いいえ」 mà để nguyên câu lựa chọn.</p>
                                                <p style="color: #D75AEC">これは 「9」 ですか。 「7」 ですか。</p>
                                                <p style="color: #0BB581">Đây là 「9」 hay 「7」 ?</p>
                                                <p style="color: #D75AEC">「7」 です。</p>
                                                <p style="color: #0BB581">Đó là 「7」 .</p>
                                            </div>
                                        </div>
                                        <div data-parent="#grammar" data-toggle="collapse" data-target="#demo5" class="col-md-12" style="cursor:pointer ;padding-top: 8px; border-top: 1px solid #C3C3C3">
                                            <h4><b><span style="float: left">5</span></b></h4>
                                            <div style="margin-left: 30px;">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">Danh từ 1 の Danh từ 2</p>
                                            </div>
                                            <div id="demo5" class="collapse">
                                                <p>Ở bài 1, chúng ta đã học từ 「の」 dùng để nối hai danh từ khi danh từ 1 bổ nghĩa cho danh từ 2. Ở bài này chúng ta sẽ học hai cách dùng khác của 「の」 . Danh từ 1 giải thích danh từ 2 nói về cái gì.</p>
                                                <p style="color: #D75AEC">これはコンピューターのほんです。</p>
                                                <p style="color: #0BB581">Đây là quyển sách về máy vi tính.</p>
                                                <p>Danh từ 1 giải thích Danh từ 2 nói về cái gì.</p>
                                                <p style="color: #D75AEC">これはわたしのほんです。</p>
                                                <p style="color: #0BB581">Đây là quyển sách của tôi.</p>
                                                <p>Danh từ 2 thường được giản lược trong trường hợp đã rõ nghĩa. Tuy nhiên nếu danh từ 2 là danh từ chỉ người thì không giản lược được.</p>
                                                <p style="color: #D75AEC">あれはだれのかばんですか。</p>
                                                <p style="color: #0BB581">Kia là cặp sách của ai?</p>
                                                <p style="color: #D75AEC">さとうさんのです</p>
                                                <p style="color: #0BB581">Đó là cặp sách của chị Sato</p>
                                                <p style="color: #D75AEC">このかばんはあなたのですか。</p>
                                                <p style="color: #0BB581">Cái cặp sách này là của bạn phải không?</p>
                                                <p style="color: #D75AEC">いいえ、わたしのじゃありません</p>
                                                <p style="color: #0BB581">Không, không phải là của tôi.</p>
                                                <p style="color: #D75AEC">ミラーさんはIMCのしゃいんですか。</p>
                                                <p style="color: #0BB581">Anh Miller có phải là nhân viên của công ty IMC không?</p>
                                                <p style="color: #D75AEC">はい、IMCのしゃいんです。</p>
                                                <p style="color: #0BB581">Vâng, anh ấy là nhân viên công ty IMC</p>
                                            </div>
                                        </div>
                                        <div data-parent="#grammar" data-toggle="collapse" data-target="#demo6" class="col-md-12" style="cursor:pointer ;padding-top: 8px; border-top: 1px solid #C3C3C3">
                                            <h4><b><span style="float: left">6</span></b></h4>
                                            <div style="margin-left: 30px;">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">そうですか。</p>
                                            </div>
                                            <div id="demo6" class="collapse">
                                                <p>「そうですか」 được dùng khi người nói tiếp nhận được thông tin mới nào đó và muốn bày thái độ tiếp nhận của mình đối với thông tin đó.</p>
                                                <p style="color: #D75AEC">このかさはあなたのですか。</p>
                                                <p style="color: #0BB581">Cái ô này có phải là của anh không?</p>
                                                <p style="color: #D75AEC">いいえ、ちがいます。シュミットさんのです。</p>
                                                <p style="color: #0BB581">Không, không phải. Của anh Schmidt.</p>
                                                <p style="color: #D75AEC">そうですか。</p>
                                                <p style="color: #0BB581">Thế này.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end grammar -->
                                    <div class="col-md-12" style="border-top: 1px solid #C3C3C3"></div>
                                </div>
                                <div class="tab-pane fade" id="kaiwa">
                                    <div class="" >
                                        <div class="" style="margin-top: 15px; padding-bottom: 15px; text-align:center; border-bottom: 1px solid #C3C3C3">
                                            <audio id="audio" controls><source src="upload/audio/kaiwa/lesson_1.mp3" type="audio/mpeg"></audio>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-12" style="text-align: center">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">はじめまして</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">hajimemashite</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">Rất vui được làm quen với chị.</p>
                                            </div>
                                        </div>
                                        <!-- kaiwa-->
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-2">
                                                <p>佐藤</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">satou</p>
                                            </div>
                                            <div class="col-md-10">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">おはよう　ございます。</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">ohayou gozai masu.</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">Chào anh!</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-2">
                                                <p>山田</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">yamada</p>
                                            </div>
                                            <div class="col-md-10">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">おはよう　ございます。</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">ohayou gozai masu.</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">Chào chị!</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-2">
                                                <p>山田</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">yamada</p>
                                            </div>
                                            <div class="col-md-10">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">佐藤さん、こちらは　マイク・ミラーさんです。</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">satou san, kochira ha maiku. mira san desu.</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">Chị Sato, đây là anh Mike Miller.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-2">
                                                <p>ミラー</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">mira</p>
                                            </div>
                                            <div class="col-md-10">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">初めまして。</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">hajime mashite.</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">Rất vui được làm quen với chị.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-2">
                                                <p>ミラー</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">mira</p>
                                            </div>
                                            <div class="col-md-10">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">マイク・ミラーです。</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">maiku. mira desu.</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">Tôi là Mike Miller.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-2">
                                                <p>ミラー</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">mira</p>
                                            </div>
                                            <div class="col-md-10">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">アメリカから　来ました。</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">amerika kara ki mashi ta.</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">Tôi đến từ Mỹ.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-2">
                                                <p>ミラー</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">mira</p>
                                            </div>
                                            <div class="col-md-10">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">どうぞ　よろしく。</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">douzo yoroshiku.</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">Rất mong sẽ nhận được sự giúp đỡ của chị.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-2">
                                                <p>佐藤</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">satou</p>
                                            </div>
                                            <div class="col-md-10">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">佐藤けい子です。</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">satou keiko desu.</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">Tôi là Sato Keiko.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                            <div class="col-md-2">
                                                <p>佐藤</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">satou</p>
                                            </div>
                                            <div class="col-md-10">
                                                <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">どうぞ　よろしく。</p>
                                                <p style="color: rgba(0,0,0,.56); font-size: 18px;">douzo yoroshiku.</p>
                                                <p style="color: rgba(1,141,208,.8); font-size: 18px;">Rất vui được làm quen với anh.</p>
                                            </div>
                                        </div>
                                        <!-- end kaiwa-->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="mondai">
                                    <h4>Đáp án phần Mondai</h4>
                                    <hr>
                                    <div class="">
                                        <label for="">Đáp án câu 1</label>
                                        <p>1: <span style="font-size: 18px;">…<ruby>例<rp>(</rp><rt>れい</rt><rp>)</rp></ruby>:　いいえ、サントスじゃ　ありません。</span></p>
                                        <p>2: <span style="font-size: 18px;">…<ruby>例<rp>(</rp><rt>れい</rt><rp>)</rp></ruby>:　マイク　ミラーです。</span></p>
                                        <p>3: <span style="font-size:18px;">…<ruby>例<rp>(</rp><rt>れい</rt><rp>)</rp></ruby>:　２８ さいです。</span></p>
                                        <p>4: <span style="font-size: 18px;">…<ruby>例<rp>(</rp><rt>れい</rt><rp>)</rp></ruby>:　はい、アメリカじんです。</span></p>
                                        <p>5: <span style="font-size: 18px;">…<ruby>例<rp>(</rp><rt>れい</rt><rp>)</rp></ruby>:　いいえ、エンジニアじゃ　ありません。</span></p>
                                    </div><hr>
                                    <div class="">
                                        <label for="">Đáp án câu 2</label>
                                        <p>1: <span style="font-size: 16px;">chọn số 1</p>
                                        <p>2: <span style="font-size: 16px;">chọn số 3</p>
                                    </div><hr>
                                    <div class="">
                                        <label for="">Đáp án câu 3</label>
                                        <p>1: <span style="font-size: 16px;">Đúng</p>
                                        <p>2: <span style="font-size: 16px;">Sai</p>
                                        <p>2: <span style="font-size: 16px;">Đúng</p>
                                    </div>
                                </div>
                                <!-- <div class="tab-pane fade" id="bunkei">
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
                                </div> -->
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


    <!-- Custom Theme JavaScript -->
    <script src="public/js/sb-admin-2.js"></script>
    <script>
        var audio_id = document.getElementById("audio"); 
        function pauseAudio() { 
            audio_id.pause();
            audio_id.currentTime = 0;
        } 
    </script>
</body>

</html>
