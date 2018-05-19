<div id="page-wrapper">
    <div class="row" style="margin-top: 50px; padding-top: 20px">
        <div class="col-md-4">
            <div class="panel panel-default" style="position: fixed;width: 23%">
                <div class="panel-heading">
                    <span><i class="fa fa-list"></i> 512 từ Kanji cơ bản</span>
                </div>
                <div class="panel-body listItem">
                    <?php
                        for ($i=1; $i <= 32; $i++) { 
                    ?>
                        <a href="index.php?con=basickanji&ls=<?php echo $i;?>">
                            <p class="<?php echo ($lessonId == $i) ? 'lesson-active':'';?>">Bài <?php echo $i;?></p>
                        </a>
                    <?php }?>
                </div>
                <div class="panel-footer">
                    
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="content-right">
                <hr>
                <div class="">
                <?php 
                    foreach ($kanijs as $key => $kanij) {
                ?>

                    <div class="col-md-12" style="margin-top: 8px; border-bottom: 1px solid #C3C3C3">
                        <div class="col-md-2">
                            <p style="font-weight: 500;font-size: 18px;color: rgba(17,3,234,.81);"><?php echo $kanij['kanji_word'];?></p>
                            <p style="color: rgba(0,0,0,.56); font-size: 18px;"><?php echo $kanij['china_sound'];?></p>
                            <p style="color: rgba(1,141,208,.8); font-size: 18px;"><?php echo $kanij['vietnam_word'];?></p>
                        </div>
                        <div class="col-md-10">
                            <div>
                                <p style=" font-size: 16px; font-weight: 500">
                                    <span>Kunyomi: </span><span  style="color: #EF3E09; margin-right: 100px;"><?php echo $kanij['kunyomi'];?></span>
                                    <span>Onyomi: </span><span  style="color: #00A1DE;"><?php echo $kanij['onyomi'];?></span>
                                </p>
                            </div>
                            <div style="padding-left: 20%">
                                <img src="<?php echo $kanij['draw_img'];?>" alt="">
                            </div>
                            <div>
                                <label for="">Ví dụ: </label>
                                <p>
                                    <?php echo $kanij['example'];?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>