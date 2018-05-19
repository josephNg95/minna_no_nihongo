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
            $qid = isset($_GET["qid"]) ? $_GET["qid"]:0;
            execute("delete from tbl_test_and_jlpt where id = $qid");
            header("location:index.php?controller=mondais&id=$lessId");
            break;
        default: break;
    }

    $record_perpage = 10;
    $total_record = fetch_one("select count(*) as total from tbl_test_and_jlpt where type='3' and lesson_id='$lessId'");
    $num_page = ceil($total_record["total"]/$record_perpage);
    $page = 1;
    $page = isset($_GET["p"]) ? $_GET["p"]:0;
    $page = $page <= 0 ? 0:$page-1;
    $from = $page * $record_perpage;
    $mondais = fetch("select * from tbl_test_and_jlpt where type='3' and lesson_id='$lessId' order by id desc limit $from,$record_perpage");
    include "view/view_mondais.php";
?>