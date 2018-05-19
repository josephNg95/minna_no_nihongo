<div id="page-wrapper">
    <div class="row"  style="padding-top: 10px;top: 50px; position: fixed; z-index: 9999; background: #fff; width: 100%; height: 60px;">
        <div class="col-md-12">
                    <!-- Nav tabs -->
                <ul class="nav nav-pills" id="tabmenu">
                    <li class="active" onclick="pauseAudio()"><a href="#newWord" data-toggle="tab" aria-expanded="false">Từ mới</a></li>
                    <li onclick="pauseAudio()"><a href="#grammar" data-toggle="tab" aria-expanded="true">Ngữ pháp</a></li>
                    <li onclick="pauseAudio()"><a href="#kaiwa" data-toggle="tab">Kaiwa</a></li>
                    <li onclick="pauseAudio()"><a href="#mondai"  data-toggle="tab">Mondai</a></li>
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
                    <div class="panel-body listItem" id="linkHash">
                        <?php
                            foreach ($lessons as $key => $lesson) {
                        ?>
                        <a href="index.php?con=minna&lid=<?= $lesson['id'];?>">
                            <p class="<?php echo ($lessonID == $lesson['id']) ? 'lesson-active':'';?>"><?php echo $lesson['name'];?></p>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="content-right">
                    <div class="col-lg-12">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="newWord">
                                <div class="" >
                                    <div class="" style="margin-top: 15px; padding-bottom: 15px; text-align:center; border-bottom: 1px solid #C3C3C3">
                                        <audio id="audio" controls><source src="<?php echo (isset($lessonAudio)) ? "admin/".$lessonAudio['new_words_audio'] : '';?>" type="audio/mpeg"></audio>
                                    </div>
                                    <!-- new words-->
                                    <?php
                                        $stt = 0;
                                        foreach ($lessonWord as $key => $newWord) {
                                            $stt++;
                                    ?>
                                    <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                        <div class="col-md-1">
                                            <div style=""><b><h4><?php echo $stt;?></h4></b></div>
                                        </div>
                                        <div class="col-md-11">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500">
                                                <?php echo $newWord['kana_word'];?>
                                            </p>
                                            <?php
                                                if (isset($newWord['kanji_word']) && $newWord['kanji_word'] != '') {
                                            ?>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;">
                                                <?php echo $newWord['kanji_word'];?> : 
                                                <?php echo $newWord['kanji_mean'];?>
                                            </p>
                                            <?php } ?>
                                            <p style="color: rgba(1,141,208,.8); font-size: 18px;">
                                                <?php echo $newWord['vietnam_word'];?>
                                            </p>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!-- end new word-->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="grammar">
                                <!-- grammar -->
                                <div class=" ">
                                    <?php
                                        $sttGrammar = 0;
                                        foreach ($lessonGrammar as $key => $grammar) {
                                            $sttGrammar++;
                                    ?>
                                    <div data-parent="#grammar"  data-toggle="collapse" data-target="#demo<?php echo $grammar['id'];?>" class="col-md-12" style="cursor:pointer ;padding-top: 8px; border-top: 1px solid #C3C3C3">
                                        <h4><b><span style="float: left"><?php echo $sttGrammar;?></span></b></h4>
                                        <div style="margin-left: 30px;">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500"><?php echo $grammar['title'];?></p>
                                        </div>
                                        <div id="demo<?php echo $grammar['id'];?>" class="collapse">
                                            <?php echo $grammar['content'];?>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <!--end grammar -->
                                <div class="col-md-12" style="border-top: 1px solid #C3C3C3"></div>
                            </div>
                            <div class="tab-pane fade" id="kaiwa">
                                <div class="" >
                                    <div class="" style="margin-top: 15px; padding-bottom: 15px; text-align:center; border-bottom: 1px solid #C3C3C3">
                                        <audio id="audio1" controls><source src="<?php echo (isset($lessonAudio)) ? "admin/".$lessonAudio['kaiwa_audio']:'';?>" type="audio/mpeg"></audio>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                        <div class="col-md-12" style="text-align: center">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500"><?php echo (isset($lessonTalkTitle)) ? $lessonTalkTitle['title']:'';?></p>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;"><?php echo (isset($lessonTalkTitle)) ? $lessonTalkTitle['romaji_title']:'';?></p>
                                            <p style="color: rgba(1,141,208,.8); font-size: 18px;"><?php echo (isset($lessonTalkTitle)) ? $lessonTalkTitle['vietnam_title']:'';?></p>
                                        </div>
                                    </div>
                                    <!-- kaiwa-->
                                    <?php
                                        foreach ($lessonTalk as $key => $talkContent) {
                                    ?>
                                    <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                                        <div class="col-md-2">
                                            <p><?php echo $talkContent['name_jp'];?></p>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;"><?php echo $talkContent['name_rm'];?></p>
                                        </div>
                                        <div class="col-md-10">
                                            <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500"><?php echo $talkContent['content_jp'];?></p>
                                            <p style="color: rgba(0,0,0,.56); font-size: 18px;"><?php echo $talkContent['content_rm'];?></p>
                                            <p style="color: rgba(1,141,208,.8); font-size: 18px;"><?php echo $talkContent['content_vn'];?></p>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!-- end kaiwa-->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="mondai">
                                <?php
                                    if (!$viewResult) {
                                ?>
                                <div class="">
                                    <h4>Câu hỏi phần Mondai</h4><hr>
                                    <form method="post" action="">
                                        <div class="">
                                            <?php
                                                $stt = 0;
                                                foreach ($questionMondais as $questionMondai) {
                                                    $stt++;
                                            ?>

                                                <div class="" style="margin-bottom: 10px; width: 40%; display: inline-block">
                                                    <p style="float:left; padding-top: 0px;"><b>Câu <?= $stt;?>: </b>&nbsp;</p>
                                                    <?php echo $questionMondai['question'];?>
                                                    <div class="" style="margin-left: 25px;">
                                                        <div class="radio"><label><input type="radio" value="1" name="aid_<?= $stt;?>" ><?= $questionMondai['answer_1'];?></label></div>
                                                        <div class="radio"><label><input type="radio" value="2" name="aid_<?= $stt;?>" ><?= $questionMondai['answer_2'];?></label></div>
                                                        <div class="radio"><label><input type="radio" value="3" name="aid_<?= $stt;?>" ><?= $questionMondai['answer_3'];?></label></div>
                                                        <div class="radio"><label><input type="radio" value="4" name="aid_<?= $stt;?>" ><?= $questionMondai['answer_4'];?></label></div>
                                                        <input type="hidden" name="qid_<?= $stt;?>" value="<?= $stt;?>">
                                                        <input type="hidden" name="isanswer_<?= $stt;?>" value="<?= $questionMondai['is_answer'];?>">
                                                    </div>
                                                </div>
                                            
                                            <?php } ?>
                                            <input type="hidden" name="totalQuestion" value="<?php echo count($questionMondais);?>">
                                            <input type="hidden" name="current_url" id="current_url">
                                        </div>
                                        <!--  -->
                                        <div class="row">
                                            <div class="col-md-7" style="margin-top: 50px; margin-bottom: 100px;">
                                                    <button type="submit" name="submit_mondaitest" class="btn btn-primary btn-block">Xem kết quả</button>
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
                                                    <a href="<?= $curentURL;?>"> << Quay lại</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
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

<script>
    var audio_id = document.getElementById("audio"); 
    var audio_id1 = document.getElementById("audio1");
    function pauseAudio() { 
        audio_id.pause();
        audio_id.currentTime = 0;
        audio_id1.pause();
        audio_id1.currentTime = 0;
    }

    var url = window.location.href;
    var hash = url.substring(url.indexOf("#"));
    if (hash == "#mondai") {
            $(function(){
            $('#tabmenu a:last').tab('show');
        });
    }

    // set value for mondai form
    $('#current_url').val(url);
</script>