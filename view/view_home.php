<div id="page-wrapper">
    <div class="row" style="padding-top: 10px;top: 50px; position: fixed; z-index: 9999; background: #fff; width: 100%; height: 60px;">
        <div class="col-md-12">
            <!-- Nav tabs -->
            <ul class="nav nav-pills">
                <li class="active"><a href="#hiragana" onclick="hiragana()" data-toggle="tab" aria-expanded="false">Hiragana</a>
                </li>
                <li class=""><a href="#katakana" onclick="katakana()" data-toggle="tab" aria-expanded="true">Katakana</a>
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
                    <?php include_once "alphabet.php";?>
                </div>
                <div class="tab-pane fade" id="Katakana"></div>
                <div class="tab-pane fade" id="testHiragana">
                    <h4>Kiểm tra Hiragana</h4>
                    <form method="post" action="">
                        <div class="">
                            <?php
                                $stt = 0;
                                foreach ($hiraganaTestData as $hiraganaTest) {
                                    $stt++;
                            ?>

                                <div class="" style="margin-bottom: 10px; width: 40%; display: inline-block">
                                    <p style="float:left; padding-top: 2px;"><b>Câu <?= $stt;?>: </b></p>
                                    <?php echo $hiraganaTest['question'];?>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" value="1" name="aid_<?= $stt;?>" ><?= $hiraganaTest['answer_1'];?></label></div>
                                        <div class="radio"><label><input type="radio" value="2" name="aid_<?= $stt;?>" ><?= $hiraganaTest['answer_2'];?></label></div>
                                        <div class="radio"><label><input type="radio" value="3" name="aid_<?= $stt;?>" ><?= $hiraganaTest['answer_3'];?></label></div>
                                        <div class="radio"><label><input type="radio" value="4" name="aid_<?= $stt;?>" ><?= $hiraganaTest['answer_4'];?></label></div>
                                        <input type="hidden" name="qid_<?= $stt;?>" value="<?= $stt;?>">
                                        <input type="hidden" name="isanswer_<?= $stt;?>" value="<?= $hiraganaTest['is_answer'];?>">
                                    </div>
                                </div>
                            
                            <?php } ?>
                            <input type="hidden" name="totalQuestion" value="<?php echo count($hiraganaTestData);?>">
                        </div>
                        <!--  -->
                        <div class="row">
                            <div class="col-md-7" style="margin-top: 50px; margin-bottom: 100px;">
                                    <button type="submit" name="submit_hiragana" class="btn btn-primary btn-block">Xem kết quả</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="testKatakana">
                    <h4>Kiểm tra Katakana</h4>
                    <form method="post" action="">
                    <div class="">
                            <?php
                                $stt = 0;
                                foreach ($katakanaTestData as $katakanaTest) {
                                    $stt++;
                            ?>

                                <div class="" style="margin-bottom: 10px; width: 40%; display: inline-block">
                                    <p style="float:left; padding-top: 2px;"><b>Câu <?= $stt;?>: </b></p>
                                    <?php echo $katakanaTest['question'];?>
                                    <div class="" style="margin-left: 25px;">
                                        <div class="radio"><label><input type="radio" value="1" name="aid_<?= $stt;?>" ><?= $katakanaTest['answer_1'];?></label></div>
                                        <div class="radio"><label><input type="radio" value="2" name="aid_<?= $stt;?>" ><?= $katakanaTest['answer_2'];?></label></div>
                                        <div class="radio"><label><input type="radio" value="3" name="aid_<?= $stt;?>" ><?= $katakanaTest['answer_3'];?></label></div>
                                        <div class="radio"><label><input type="radio" value="4" name="aid_<?= $stt;?>" ><?= $katakanaTest['answer_4'];?></label></div>
                                        <input type="hidden" name="qid_<?= $stt;?>" value="<?= $stt;?>">
                                        <input type="hidden" name="isanswer_<?= $stt;?>" value="<?= $katakanaTest['is_answer'];?>">
                                    </div>
                                </div>
                            
                            <?php } ?>
                            <input type="hidden" name="totalQuestion" value="<?php echo count($katakanaTestData);?>">
                        </div>
                        <!--  -->
                        <div class="row">
                            <div class="col-md-7" style="margin-top: 50px; margin-bottom: 100px;">
                                    <button type="submit" name="submit_katakana" class="btn btn-primary btn-block">Xem kết quả</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>