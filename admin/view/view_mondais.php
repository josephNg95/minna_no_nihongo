<div class="row">
    <div class="col-md-12">
        <div style="margin-bottom: 15px; ">
            <p class="bd-primary">Danh sách câu hỏi luyện tập <?= $lesson['name'];?></p>
            <p class="pull-right">
                <a class="btn btn-primary" href="index.php?controller=add_edit_mondais&act=add&id=<?= $lesson['id']?>">
                    <i class="glyphicon glyphicon-plus"></i> Thêm câu hỏi
                </a>
            </p>
        </div>
        <table cellpadding="5" class="table table-bordered table-hover">
            <tbody class="questionList">
                <tr style="background-color: #ddd; ">
                    <th style="width: 50px; ">STT</th>
                    <th style="width: 600px; text-align: center; ">Câu hỏi</th>
                    <th style="width: 150px;text-align: center;  ">Đáp án</th>
                    <th style="width: 80px; text-align: center; ">Trạng thái</th>
                    <th style="">Sửa</th>
                    <th style="">Xóa</th>
                </tr>
                <?php 
                    $stt = 0;
                    foreach ($mondais as $mondai) {
                        $stt++;
                ?>
                <tr>
                    <td style="text-align: center; "><?php echo $stt;?></td>
                    <td style=""><?php echo $mondai["question"];?></td>
                    <td style="text-align: center; "><b style="font-size: 13px;">
                        <b><?php echo $mondai["answer_".$mondai['is_answer']];?></b>
                    </td>
                    <td style="text-align: center; ">
                        <span style="padding: 3px;" class="label <?php echo ($mondai["flag"] == 1) ? "label-success" : 'label-danger';?>"><?php echo ($mondai["flag"] == 1) ? "Hiển thị" : 'Tạm ẩn';?></span>
                    </td>
                    <td class="btn-edit">
                        <a href="index.php?controller=add_edit_mondais&act=edit&id=<?= $mondai["lesson_id"]?>&qid=<?php echo $mondai["id"]?>"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="index.php?controller=mondais&act=delete&id=<?= $mondai["lesson_id"]?>&qid=<?php echo $mondai["id"]?>"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                    <input type="hidden" value="<?= $mondai["type"];?>">
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
                    <a style="border-radius: unset" href="index.php?controller=mondais&id=<?php echo $lessId;?>&p=<?php echo $i;?>"><?php echo $i;?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>