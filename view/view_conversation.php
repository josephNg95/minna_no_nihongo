<div id="page-wrapper">
    <div class="row" style="margin-top: 50px; padding-top: 20px">
        <div class="col-md-4">
            <div class="panel panel-default" style="position: fixed;width: 23%">
                <div class="panel-heading">
                    <span><i class="fa fa-list"></i> 1000 câu giao tiếp cơ bản</span>
                </div>
                <div class="panel-body listItem">
                    <a href="index.php?con=conversation&t=chaohoi"> <p class="<?php echo ($type == 'chaohoi') ? 'lesson-active':'';?>">Chào hỏi</p> </a>
                    <a href="index.php?con=conversation&t=hoithoai"> <p class="<?php echo ($type == 'hoithoai') ? 'lesson-active':'';?>">Hội thoại</p> </a>
                    <a href="index.php?con=conversation&t=sodem"> <p class="<?php echo ($type == 'sodem') ? 'lesson-active':'';?>">Số đếm</p> </a>
                    <a href="index.php?con=conversation&t=ngaythang"> <p class="<?php echo ($type == 'ngaythang') ? 'lesson-active':'';?>">Ngày tháng</p> </a>
                    <a href="index.php?con=conversation&t=phuonghuong"> <p class="<?php echo ($type == 'phuonghuong') ? 'lesson-active':'';?>">Phương hướng</p> </a>
                    <a href="index.php?con=conversation&t=giaothong"> <p class="<?php echo ($type == 'giaothong') ? 'lesson-active':'';?>">Giao thông</p> </a>
                    <a href="index.php?con=conversation&t=choo"> <p class="<?php echo ($type == 'choo') ? 'lesson-active':'';?>">Chỗ ở</p> </a>
                    <a href="index.php?con=conversation&t=anuong"> <p class="<?php echo ($type == 'anuong') ? 'lesson-active':'';?>">Ăn uống</p> </a>
                    <a href="index.php?con=conversation&t=muasam"> <p class="<?php echo ($type == 'muasam') ? 'lesson-active':'';?>">Mua sắm</p> </a>
                    <a href="index.php?con=conversation&t=mausac"> <p class="<?php echo ($type == 'mausac') ? 'lesson-active':'';?>">Màu sắc</p> </a>
                    <a href="index.php?con=conversation&t=thanhpho"> <p class="<?php echo ($type == 'thanhpho') ? 'lesson-active':'';?>">Thành phố</p> </a>
                    <a href="index.php?con=conversation&t=tennuoc"> <p class="<?php echo ($type == 'tennuoc') ? 'lesson-active':'';?>">Tên nước</p> </a>
                    <a href="index.php?con=conversation&t=dulich"> <p class="<?php echo ($type == 'dulich') ? 'lesson-active':'';?>">Du lịch</p> </a>
                    <a href="index.php?con=conversation&t=giadinh"> <p class="<?php echo ($type == 'giadinh') ? 'lesson-active':'';?>">Gia đình</p> </a>
                    <a href="index.php?con=conversation&t=henho"> <p class="<?php echo ($type == 'henho') ? 'lesson-active':'';?>">Hẹn hò</p> </a>
                    <a href="index.php?con=conversation&t=khancap"> <p class="<?php echo ($type == 'khancap') ? 'lesson-active':'';?>">Khẩn cấp</p> </a>
                    <a href="index.php?con=conversation&t=dauom"> <p class="<?php echo ($type == 'dauom') ? 'lesson-active':'';?>">Đau ốm</p> </a>
                    <a href="index.php?con=conversation&t=thanhngu"> <p class="<?php echo ($type == 'thanhngu') ? 'lesson-active':'';?>">Thành ngữ</p> </a>
                </div>
                <div class="panel-footer">
                    
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="content-right">
                <div class="containe1r">
                    <div class="panel-group" id="accordion" style="padding-top: 10px">
                        <div style="border-top: 1px solid #c3c3c3"></div>
                        <!-- conversation -->
                        <?php
                            $stt = 0;
                            foreach ($conversations as $key => $conversation) {
                            $stt++;
                        ?>
                        <div class="panel panel-default1">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $stt;?>">
                                <h4 class="panel-title">
                                    <p style="color: rgba(1,141,208,.8);cursor: pointer; font-size: 18px;"><?php echo $conversation['vietnam_con'];?></p>
                                </h4>
                            </div>
                            <div id="collapse<?= $stt;?>" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p style="color: rgba(17,3,234,.81); font-size: 18px; font-weight: 500"><?php echo $conversation['japan_con'];?></p>
                                    <p style="color: rgba(0,0,0,.56); font-size: 18px;"><?php echo $conversation['romaji_con'];?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- end conversation -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>