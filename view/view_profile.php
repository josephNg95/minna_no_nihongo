<div id="page-wrapper">
    <div class="row" style="margin-top: 50px; padding-top: 20px">
        <p style="padding-left: 25px;font-size: 24px"><i class="glyphicon glyphicon-list"></i> Thông tin cá nhân</p>
        <p class="pull-right">
                    
                </p>
        <hr>
        <div class="row">
            <div class="col-md-10" style="padding-left: 25px;">
                <p><label for="">Họ và Tên:</label> <?= $userInfo['fullname'];?></p>
                <p><label for="">Email:</label> <?= $userInfo['email'];?></p>
                <p><label for="">Tên đăng nhập:</label> <?= $userInfo['username'];?></p>
            </div>
            <div class="col-md-2">
                <div class="btn-group-vertical">
                    <a href="index.php?con=change_info" style="text-align: left" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-user"></i> Chỉnh sửa thông tin</a>
                    <a href="index.php?con=change_password" style="text-align: left" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-lock"></i> Đổi mật khẩu</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid">
            <p style="padding: 15px; font-size: 16px; background:#5cb85c; color: #fff; width: 90%">Bảng kết quả thi jlpt của bạn</p>
            <div class="col-md-12" style="">
                <div class="pull-left">
                    <div style="float:left; margin-right: 15px; line-height: 35px; font-weight: 600">Loại bài thi</div>
                    <div style="float:left; line-height: 35px;">
                        <p style="float: left; margin-right: 30px;"><a href="index.php?con=profile&t=grammar_5">N5 Ngữ pháp</a></p>
                        <p style="float: left; margin-right: 30px;"><a href="index.php?con=profile&t=vocabulary_5">N5 Từ mới</a></p>
                        <p style="float: left; margin-right: 30px;"><a href="index.php?con=profile&t=kanji_5">N5 Kanji</a></p>
                        <p style="float: left; margin-right: 30px;"><a href="index.php?con=profile&t=grammar_4">N4 Ngữ pháp</a></p>
                        <p style="float: left; margin-right: 30px;"><a href="index.php?con=profile&t=vocabulary_4">N4 Từ mới</a></p>
                        <p style="float: left; margin-right: 30px;"><a href="index.php?con=profile&t=kanji_4">N4 Kanji</a></p>
                        
                    </div>
                </div><br><br>
                <table class="table table-hover table-bordered" style="width: 90%; font-size: 13px">
                    <thead>
                        <tr style="background: #d8d8d8">
                            <th style="width: 50px;">STT</th>
                            <th>Loại bài thi</th>
                            <th>Điểm số</th>
                            <th>Ngày làm bài</th>
                            <th>Đánh giá</th>
                        </tr>
                    </thead>
                    <?php
                        $stt = 0; foreach ($testHistorys as $testHistory) { $stt++;    
                    ?>
                    <tr>
                        <td align="center"><?php echo $stt;?></td>
                        <td>
                            <?php
                                switch ($testHistory['exam_type']) {
                                    case 'grammar_5': echo "N5 Ngữ pháp"; break;
                                    case 'vocabulary_5': echo "N5 Từ mới"; break;
                                    case 'kanji_5': echo "N5 Kanji"; break;
                                    case 'grammar_4': echo "N4 Ngữ pháp"; break;
                                    case 'vocabulary_4': echo "N4 Từ mới"; break;
                                    case 'kanji_4': echo "N4 Kanji "; break;
                                    default: break;
                                }
                            ?>
                        </td>
                        <td align="center"><?php echo $testHistory['scores'];?></td>
                        <td align="center"><?php echo date('d-m-Y H:m:s',strtotime($testHistory['create_date']));?></td>
                        <td align="center"><span class="label <?php echo ($testHistory['evaluate'] == 1) ? 'label-success':'label-danger';?>">
                            <?php echo ($testHistory['evaluate'] == 1) ? 'Tốt hơn lần thi trước':'Kém hơn lần thi trước';?>
                        </span></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>