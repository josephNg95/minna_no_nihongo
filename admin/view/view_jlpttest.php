<style>.jp-text {font-size: 13px;font-weight:500;}</style>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12"  style="margin-bottom: 15px; ">
            <p class="bd-primary" style="width: 250px; margin-bottom:15px;">Luyện thi JLPT N<?= $level;?></p>
            <p class="pull-right">
                <a class="btn btn-primary" href="?controller=add_edit_jlpttest&lv=<?= $level;?>&act=add">
                    <i class="glyphicon glyphicon-plus"></i> Thêm câu hỏi
                </a>
            </p>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <tr style="background-color: #ddd; ">
                    <th style="width: 50px; ">STT</th>
                    <th style="width: 100px; text-align: center; ">Loại</th>
                    <th style="width: 550px; text-align: center; ">Câu hỏi</th>
                    <th style="width: 100px;text-align: center;  ">Đáp án</th>
                    <th style="width: 80px; text-align: center; ">Trạng thái</th>
                    <th style="">Sửa</th>
                    <th style="">Xóa</th>
                </tr>
                <?php
                    $stt = 0;
                    foreach ($exam_jlpt as $key => $value) {
                       $stt++;
                ?>
                <tr>
                    <td><?= $stt;?></td>
                    <td><?php if ($value['name'] == 'grammar_4') {echo "N4 Ngữ pháp";}
                            if ($value['name'] == 'grammar_5') {echo "N5 Ngữ pháp";}
                            if ($value['name'] == 'vocabulary_4') {echo "N4 Từ vựng";}
                            if ($value['name'] == 'vocabulary_5') {echo "N5 Từ vựng";}
                            if ($value['name'] == 'kanji_4') {echo "N4 Kanji";}
                            if ($value['name'] == 'kanji_5') {echo "N5 Kanji";}?></td>
                    <td class="jp-text"><?= $value['question'];?></td>
                    <td class="jp-text">
                        <?php
                            echo $value['answer_'.$value['is_answer']];
                        ?>
                    </td>
                    <td align="center">
                        <span class="label <?php echo ($value["flag"] == 1) ? "label-success":"label-danger";?>">
                            <?php echo ($value["flag"] == 1) ? "Hiển thị":"Tạm ẩn";?>
                        </span>
                    </td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_jlpttest&lv=<?= $level;?>&act=edit&id=<?= $value['id']?>"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="?controller=jlpttest&lv=<?= $level;?>&act=delete&id=<?= $value['id']?>"><i class="glyphicon glyphicon-trash"></i></a>
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
                        <a href="index.php?controller=jlpttest&lv=<?= $level;?>&p=<?php echo $i;?>"><?php echo $i;?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>