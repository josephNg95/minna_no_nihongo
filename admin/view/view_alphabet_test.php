<div class="row">
    <div class="col-md-12">
        <div style="margin-bottom: 15px; ">
            <p class="bd-primary">Danh sách câu hỏi kiểm tra kana</p>
            <p class="pull-right">
                <a class="btn btn-primary" href="index.php?controller=add_edit_alphabet_test&act=add">
                    <i class="glyphicon glyphicon-plus"></i> Thêm câu hỏi
                </a>
            </p>
        </div>
        <table cellpadding="5" class="table table-bordered table-hover">
            <tbody class="questionList">
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
                    foreach ($arr_kana_test as $kana) {
                        $stt++;
                ?>
                <tr>
                    <td style="text-align: center; "><?php echo $stt;?></td>
                    <td style="text-align: center; ">
                        <span style="padding: 6px;" class="label <?php echo ($kana["type"] == 1) ? "label-info":"label-success";?>">
                            <?php echo ($kana["type"] == 1) ? "Hiragana":"Katakana";?>
                        </span>
                    </td>
                    <td style=""><?php echo $kana["question"];?></td>
                    <td style="text-align: center; "><b style="font-size: 13px;">
                        <b><?php echo $kana["answer_".$kana['is_answer']];?></b>
                    </td>
                    <td style="text-align: center; ">
                        <span style="padding: 3px;" class="label <?php echo ($kana["flag"] == 1) ? "label-success" : 'label-danger';?>"><?php echo ($kana["flag"] == 1) ? "Hiển thị" : 'Tạm ẩn';?></span>
                    </td>
                    <td class="btn-edit">
                        <a href="index.php?controller=add_edit_alphabet_test&act=edit&id=<?php echo $kana["id"]?>"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="index.php?controller=alphabet_test&act=delete&id=<?php echo $kana["id"]?>"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                    <input type="hidden" value="<?= $kana["type"];?>">
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <div>
            <ul class="pagination" style="margin: 0px; padding: 0px;  ">
                <?php  
                    for($i=1; $i<=$num_page; $i++) {
                        if (!isset($_GET['p'])) {
                            $page = 1;
                        } else {
                            $page = $_GET['p'];
                        }
                ?>
                <input type="hidden" value="<?= $i?>" id="paginate">
                <li class="<?php echo ($page == $i) ? "active":"";?>">
                    <a style="border-radius: unset" href="index.php?controller=alphabet_test&p=<?php echo $i;?>"><?php echo $i;?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
