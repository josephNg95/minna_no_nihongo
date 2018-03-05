<div class="row">
    <div class="col-md-12">
        <div style="margin-bottom: 15px; ">
            <p class="bd-primary">Danh sách câu hỏi kiểm tra kana</p>
            <div class="pull-left">
                <div style="float:left; margin-right: 15px; line-height: 35px;">Loại câu hỏi</div>
                <div style="float:left">
                    <select name="filterTest" id="filterTest" class="form-control input-sm" onchange="filterTest()">
                        <option value="0">----- Chọn loại câu hỏi -----</option>
                        <option value="1" <?php echo (isset($typeFilter) && $typeFilter == 1)?"selected":"";?>>Câu hỏi Hiragana</option>
                        <option value="2" <?php echo (isset($typeFilter) && $typeFilter == 2)?"selected":"";?>>Câu hỏi Katakana</option>
                    </select>
                    <form name="filterForm" method="post">
                        <input type="hidden" id="typeFilter" name="typeFilter" value="">
                    </form>
                </div>
            </div>
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
                        <?php
                            $arr_answer = fetch_one("select * from tbl_answer where is_answer = 1 and question_id = {$kana['id']}");
                            echo $arr_answer["answer"];
                        ?>
                        </b>
                    </td>
                    <td style="text-align: center; ">
                        <span style="padding: 3px;" class="label <?php echo ($kana["flag"] == 1) ? "label-success" : 'label-danger';?>"><?php echo ($kana["flag"] == 1) ? "Hiển thị" : 'Tạm ẩn';?></span>
                    </td>
                    <td class="btn-edit">
                        <a href="index.php?controller=add_edit_alphabet_test&act=edit&id=<?php echo $kana["id"]?>"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a onclick="return window.confirm('Bạn có muốn xóa!')" href="index.php?controller=alphabet_test&act=delete&id=<?php echo $kana["id"]?>"><i class="glyphicon glyphicon-trash"></i></a>
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
                    <a style="border-radius: unset" href="index.php?controller=alphabet_test&type=<?= $type;?>&p=<?php echo $i;?>"><?php echo $i;?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript">
    function filterTest() {
        var type = document.getElementById('filterTest').value;
        document.getElementById('typeFilter').value = type;
        document.filterForm.action = 'index.php?controller=alphabet_test';
        document.filterForm.submit();
        console.log('submit form success!');
    }
</script>