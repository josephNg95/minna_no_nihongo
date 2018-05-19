<?php
    include_once "../../config.php";
    include_once "../model/model.php";

    if (isset($_POST['typeSearch']) && $_POST['typeSearch'] != 0) {
        $typeSearch = $_POST['typeSearch'];

        $record_perpage = 1;
        $total_record = fetch_one("select count(*) as total from tbl_kana_test where type = '$typeSearch'");
        $num_page = ceil($total_record["total"]/$record_perpage);
        $page = 1;
        $page = isset($_GET["p"]) ? $_GET["p"]:0;
        $page = $page <= 0 ? 0:$page-1;
        $from = $page * $record_perpage;

        $arr_kana_test = fetch("select * from tbl_kana_test where type='$typeSearch' order by id desc limit $from,$record_perpage");
    }
    if (isset($_POST['typeSearch']) && $_POST['typeSearch'] == 0) {

        $record_perpage = 1;
        $total_record = fetch_one("select count(*) as total from tbl_kana_test");
        $num_page = ceil($total_record["total"]/$record_perpage);
        $page = 1;
        $page = isset($_GET["p"]) ? $_GET["p"]:0;
        $page = $page <= 0 ? 0:$page-1;
        $from = $page * $record_perpage;

        $arr_kana_test = fetch("select * from tbl_kana_test order by id desc limit $from,$record_perpage");
    }
?>
<tr style="background-color: #ddd; ">
    <th style="width: 50px; ">ID</th>
    <th style="width: 100px; text-align: center; ">Loại</th>
    <th style="width: 550px; text-align: center; ">Câu hỏi</th>
    <th style="width: 100px;text-align: center;  ">Đáp án</th>
    <th style="width: 80px; text-align: center; ">Trạng thái</th>
    <th style="">Sửa</th>
    <th style="">Xóa</th>
</tr>
<?php 
    foreach ($arr_kana_test as $kana) {
?>
<tr class="filterTr<?= $kana["type"];?>">
    <td style="text-align: center; "><?php echo $kana["id"];?></td>
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
        <span style="padding: 6px;" class="label <?php echo ($kana["flag"] == 1) ? "label-primary" : 'label-danger';?>"><?php echo ($kana["flag"] == 1) ? "Hiện" : 'Ẩn';?></span>
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