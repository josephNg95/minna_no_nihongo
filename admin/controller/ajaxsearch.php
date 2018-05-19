<?php
    include_once "../../config.php";
    include_once "../model/model.php";

    $record_perpage = 50;
    $total_record = fetch_one("select count(*) as total from tbl_kana_test");
    $num_page = ceil($total_record["total"]/$record_perpage);
    $page = 1;
    $page = isset($_GET["p"]) ? $_GET["p"]:0;
    $page = $page <= 0 ? 0:$page-1;
    $from = $page * $record_perpage;

    if (isset($_POST['textSearch'])) {
        $textSearch = $_POST['textSearch'];
        $textSearch = str_replace(' ','',$textSearch);
        $textSearch = str_replace("&nbsp;",'',$textSearch);
        $allQuestion = fetch("select * from tbl_kana_test");
        createTempTable();
        foreach ($allQuestion as $key => $value) {
            $re = '/(<([^>]+)>)/';
            $minQuestion = preg_replace($re,'',$value['question']);
            $minQuestion = str_replace(' ','',$minQuestion);
            $minQuestion = str_replace("&nbsp;",'',$minQuestion);
            $minQuestion = mb_convert_encoding($minQuestion, "UTF-8", "auto");
            $id = $value['id'];
            $type = $value['type'];
            $answer_id = $value['answer_id'];
            $flag = $value['flag'];
            $sql = "insert into tmp_filter_question(id,type,question,answer_id,flag) values('$id','$type','$minQuestion','$answer_id', '$flag')";
            execute($sql);
        }
        $arr_kana_test = fetch("select k.id,k.type,k.question,k.answer_id,k.flag from tbl_kana_test as k
        left join tmp_filter_question as t on k.id = t.id
        where t.question like '%$textSearch%' order by id desc limit $from,$record_perpage");
    }

    if (isset($_POST['typeSearch']) && $_POST['typeSearch'] != 0) {
        $typeSearch = $_POST['typeSearch'];
        $arr_kana_test = fetch("select * from tbl_kana_test where type='$typeSearch' order by id desc limit $from,$record_perpage");
    }
    if (isset($_POST['typeSearch']) && $_POST['typeSearch'] == 0) {
        $arr_kana_test = fetch("select * from tbl_kana_test order by id desc limit $from,$record_perpage");
    }

    function createTempTable() {
        $sql = "CREATE TEMPORARY TABLE tmp_filter_question (
        `id` int(5) NOT NULL AUTO_INCREMENT,
        `type` tinyint(1) NOT NULL DEFAULT 1,
        `question` varchar(1000) not null,
        `answer_id` tinyint(1),
        `flag` tinyint(1) DEFAULT 1,
        PRIMARY KEY (id)
        )";
        execute($sql);
    }
    function unicodeVn($str) {
        $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
            'a'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd'=>'Đ',
            'e'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i'=>'Í|Ì|Ỉ|Ĩ|Ị',
            'o'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
            
        foreach($unicode as $nonUnicode => $uni) {
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
        }
        $str = str_replace(' ','_',$str);
        return $str;
    }
?>
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
<tr class="filterTr<?= $kana["type"];?>">
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