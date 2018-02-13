<?php
    // =========================================
    $act = isset($_GET["act"]) ? $_GET["act"]: "";
    $lessId = isset($_GET["id"]) ? $_GET["id"]:0;
    $lesson = [];
    if ($lessId) {
        $lesson = fetch_one("select * from tbl_lesson where id = '$lessId'");
        $kaiwa = fetch_one("select count(*) as count from tbl_kaiwa where lesson_id = '$lessId'");
        $flag = false;
        if ($kaiwa['count'] > 0) {
            $flag = true;
        }
    } else {
        header("location:index.php?controller=kaiwas");
    }
    switch ($act) {
        case 'delete':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            $cid = isset($_GET["cid"]) ? $_GET["cid"]:0;
            // xóa bản ghi bằng truy vấn SQL
            execute("delete from tbl_kaiwa_content where id = $cid");
            // chuyển đến trang chỉ định
            header("location:index.php?controller=kaiwas&id=$id");
            break;
        
        default:
            # code...
            break;
    }
    // ====================phân trang============
    $record_perpage = 10;
    $total_record = fetch_one("select count(*) as total from tbl_kaiwa_content");
    $num_page = ceil($total_record["total"]/$record_perpage);
    $page = 1;
    $page = isset($_GET["p"]) ? $_GET["p"]:0;
    $page = $page <= 0 ? 0:$page-1;
    $from = $page * $record_perpage;
    $kaiwaTitle = fetch_one("select * from tbl_kaiwa where lesson_id=$lessId");
    $kaiwa_id = $kaiwaTitle['id'];
    if (empty($kaiwaTitle)) {
        $kaiwaContents = [];
    } else {
        $kaiwaContents = fetch("select * from tbl_kaiwa_content where kaiwa_id=$kaiwa_id order by id asc limit $from,$record_perpage");
    }

    // load view
    include "view/view_kaiwas.php";
?>