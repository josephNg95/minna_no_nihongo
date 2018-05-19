<div id="page-wrapper">
    <div class="row" style="margin-top: 50px; padding-top: 20px">
        <div class="col-md-3">
            <div class="panel panel-default" style="position: fixed;width: 18%">
                <div class="panel-heading">
                    <span><i class="fa fa-list"></i> Luyện thi JLPT</span>
                </div>
                <div class="panel-body listItem">
                    <a href="index.php?con=jlpttest&lv=5&n=grammar_5"><p>N5 Ngữ pháp</p></a>
                    <a href="index.php?con=jlpttest&lv=5&n=vocabulary_5"><p>N5 Từ vựng</p></a>
                    <a href="index.php?con=jlpttest&lv=5&n=kanji_5"><p>N5 Kanji</p></a>
                    <a href="index.php?con=jlpttest&lv=4&n=grammar_4"><p>N4 Ngữ pháp</p></a>
                    <a href="index.php?con=jlpttest&lv=4&n=vocabulary_4"><p>N4 Từ vựng</p></a>
                    <a href="index.php?con=jlpttest&lv=4&n=kanji_4"><p>N4 Kanji</p></a>
                </div>
                <div class="panel-footer">
                    
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="content-right">
                <?php
                    if (!$viewResult) {
                ?>
                <div class="">
                    <h4>Kiểm tra JLPT</h4><hr>
                    <form method="post" action="">
                        <div class="">
                            <?php
                                $stt = 0;
                                foreach ($questions as $question) {
                                    $stt++;
                            ?>

                                <div class="" style="margin: 10px; width: 45%; display: inline-block">
                                    <div style="min-height: 40px; display: block;">
                                        <p style="float:left; padding-top: 0px;"><b>Câu <?= $stt;?>: </b>&nbsp;</p>
                                    <?php echo $question['question'];?>
                                    </div>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" value="1" name="aid_<?= $stt;?>" ><?= $question['answer_1'];?></label></div>
                                        <div class="radio"><label><input type="radio" value="2" name="aid_<?= $stt;?>" ><?= $question['answer_2'];?></label></div>
                                        <div class="radio"><label><input type="radio" value="3" name="aid_<?= $stt;?>" ><?= $question['answer_3'];?></label></div>
                                        <div class="radio"><label><input type="radio" value="4" name="aid_<?= $stt;?>" ><?= $question['answer_4'];?></label></div>
                                        <input type="hidden" name="qid_<?= $stt;?>" value="<?= $stt;?>">
                                        <input type="hidden" name="isanswer_<?= $stt;?>" value="<?= $question['is_answer'];?>">
                                    </div>
                                </div>
                            
                            <?php } ?>
                            <input type="hidden" name="totalQuestion" value="<?php echo count($questions);?>">
                            <input type="hidden" name="current_url" id="current_url">
                        </div>
                        <!--  -->
                        <div class="row">
                            <div class="col-md-7" style="margin-top: 50px; margin-bottom: 100px;">
                                    <button type="submit" name="submit_jlpt" class="btn btn-primary btn-block">Xem kết quả</button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
                    }
                    if ($viewResult) {
                ?>
                <div>
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-md-12">
                            <div class="panel panel-success">
                                <div class="panel-heading">Kết quả bài kiểm tra của bạn</div>
                                <div class="panel-body">
                                    <p>
                                        <span style="font-size: 100px;"><?php echo $point;?></span>
                                        <span style="font-size: 32px;"> điểm</span>
                                    </p>
                                </div>
                                <div class="panel-footer">
                                    <a href="<?= $curentURL;?>"> << Làm lại bài khác</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<script>
    var url = window.location.href;
    $('#current_url').val(url);
</script>