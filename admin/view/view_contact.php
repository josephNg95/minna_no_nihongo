<div class="row">
    <div class="col-md-12">
        <div style="margin-bottom: 15px; ">
            <p class="bd-primary">Danh sách các câu hỏi liên hệ</p>
        </div>
        <table cellpadding="5" class="table table-bordered table-hover">
            <tbody class="questionList">
                <tr style="background-color: #ddd; ">
                    <th style="width: 50px; ">STT</th>
                    <th style="width: 600px; text-align: center; ">Câu hỏi</th>
                    <th style="width: 150px;text-align: center;  ">Ngày hỏi</th>
                    <th style="">Trả lời</th>
                    <th style="">Xóa</th>
                </tr>
                <?php
                    $stt = 0;
                    foreach ($contacts as $key => $contact) {
                        $stt++;
                ?>
                <tr>
                    <td style="text-align: center; "><?= $stt;?></td>
                    <td style=""><?= substr($contact['content'],0,250)?></td>
                    <td style="text-align: center; ">
                        <?php echo date('d-m-Y', strtotime($contact['create_date']));?>
                    </td>
                    <td class="btn-edit" style="text-align: center">
                        <a href="index.php?controller=reply_contact&id=<?= $contact['id']?>" class="glyphicon glyphicon-send"></a>
                    </td>
                    <td class="btn-del" style="text-align: center">
                        <a href="index.php?controller=contact&act=delete&id=<?= $contact['id']?>" class="glyphicon glyphicon-trash"></a>   
                    </td>
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
                    <a style="border-radius: unset" href="index.php?controller=contact&p=<?php echo $i;?>"><?php echo $i;?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>