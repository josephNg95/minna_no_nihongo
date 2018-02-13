<?php
    // =========================================
    $act = isset($_GET["act"]) ? $_GET["act"]: "";
    $lessId = isset($_GET["id"]) ? $_GET["id"]:0;
    $lesson = [];
    if ($lessId) {
        $lesson = fetch_one("select * from tbl_lesson where id = '$lessId'");
    } else {
        header("location:index.php?controller=lesson");
    }
    switch ($act) {
        case 'delete':
            $wid = isset($_GET["wid"]) ? $_GET["wid"]:0;
            execute("delete from tbl_new_words where id = $wid");
            header("location:index.php?controller=new_words&id=$lessId");
            break;
        default: break;
    }
    // ====================phân trang============
    $record_perpage = 50;
    $total_record = fetch_one("select count(*) as total from tbl_new_words");
    $num_page = ceil($total_record["total"]/$record_perpage);
    $page = 1;
    $page = isset($_GET["p"]) ? $_GET["p"]:0;
    $page = $page <= 0 ? 0:$page-1;
    $from = $page * $record_perpage;
    $newWords = fetch("select * from tbl_new_words where lesson_id='$lessId' order by id asc limit $from,$record_perpage");
    // load view
    include "view/view_new_words.php";
?>