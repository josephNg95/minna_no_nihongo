<div class="row">
    <div class="col-md-12">
        <div class="col-md-12"  style="margin-bottom: 15px; ">
            <p class="bd-primary" style="width: 200px;">Kanji cơ bản</p>
            <p class="pull-right">
                <a class="btn btn-primary" href="?controller=add_edit_basickanji&act=add">
                    <i class="glyphicon glyphicon-plus"></i> Thêm từ mới
                </a>
            </p>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <tr style="background-color: #ddd;">
                    <th style="width: 50px; ">STT</th>
                    <th style="width: 50px; ">Kanji</th>
                    <th style="width: 100px; ">Âm hán</th>
                    <th style="width: 200px; ">Nghĩa</th>
                    <th style="width: 150px; ">Âm kun</th>
                    <th style="width: 150px; ">Âm on</th>
                    <th style=" ">Nét vẽ</th>
                    <th style="width: 80px; ">Trạng thái</th>
                    <th style="">Sửa</th>
                    <th style="">Xóa</th>
                </tr>
                <?php
                    $stt = 0;
                    foreach ($kanjis as $kanji) {
                        $stt++ ;
                ?>
                <tr>
                    <td><?= $stt;?></td>
                    <td><?= $kanji['kanji_word'];?></td>
                    <td><?= $kanji['china_sound'];?></td>
                    <td><?= $kanji['vietnam_word'];?></td>
                    <td><?= $kanji['kunyomi'];?></td>
                    <td><?= $kanji['onyomi'];?></td>
                    <td><img src="../<?= $kanji['draw_img'];?>" style="width:45px; height: 45px;" alt=""></td>
                    <td>
                        <span class="label <?php echo ($kanji["flag"] == 1) ? "label-success":"label-danger";?>">
                            <?php echo ($kanji["flag"] == 1) ? "Hiển thị":"Tạm ẩn";?>
                        </span>
                    </td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_basickanji&act=edit&id=<?= $kanji['id']?>"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="?controller=basickanji&act=delete&id=<?= $kanji['id']?>"<i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </table>
            <div>
                <ul class="pagination" style="margin: 0px; padding: 0px; ">
                    <?php 
                        for($i=1; $i<=$num_page; $i++) {
                            if (!isset($_GET['p'])) {
                                $page = 1;
                            } else {
                                $page = $_GET['p'];
                            }
                    ?>
                    <li class="<?php echo ($page == $i) ? "active":"";?>">
                        <a href="index.php?controller=basickanji&p=<?php echo $i;?>"><?php echo $i;?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
