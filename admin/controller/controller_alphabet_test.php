<?php
    // =========================================
    $act = isset($_GET["act"]) ? $_GET["act"]: "";
    switch ($act) {
        case 'delete':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            // xóa bản ghi bằng truy vấn SQL
            execute("delete from tbl_kana_test where id = $id");
            // chuyển đến trang chỉ định
            header("location:index.php?controller=alphabet_test");
            break;
        default:
            # code...
            break;
    }

    if (isset($_POST['typeFilter']) && $_POST['typeFilter'] != 0) {
        $typeFilter = $_POST['typeFilter'];
        $record_perpage = 20;
        $total_record = fetch_one("select count(*) as total from tbl_kana_test where type='$typeFilter'");
        $num_page = ceil($total_record["total"]/$record_perpage);
        $page = 1;
        $page = isset($_GET["p"]) ? $_GET["p"]:0;
        $page = $page <= 0 ? 0:$page-1;
        $from = $page * $record_perpage;

        $arr_kana_test = fetch("select * from tbl_kana_test where type='$typeFilter' order by id desc limit $from,$record_perpage");
        include "view/view_alphabet_test.php";
    } else {
        $record_perpage = 20;
        $typeFilter = isset($_GET["type"]) ? $_GET["type"]:0;
        if ($typeFilter != 0) {
            $total_record = fetch_one("select count(*) as total from tbl_kana_test where type='$typeFilter'");
        } else {
            $total_record = fetch_one("select count(*) as total from tbl_kana_test");
        }
        $num_page = ceil($total_record["total"]/$record_perpage);
        $page = 1;
        $page = isset($_GET["p"]) ? $_GET["p"]:0;
        $page = $page <= 0 ? 0:$page-1;
        $from = $page * $record_perpage;
        if ($typeFilter != 0) {
            $arr_kana_test = fetch("select * from tbl_kana_test where type='$typeFilter' order by id desc limit $from,$record_perpage");
            include "view/view_alphabet_test.php";
        } else {
            $arr_kana_test = fetch("select * from tbl_kana_test order by id desc limit $from,$record_perpage");
            include "view/view_alphabet_test.php";
        }
    }
?>