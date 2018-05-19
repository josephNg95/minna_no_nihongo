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
            $gid = isset($_GET["gid"]) ? $_GET["gid"]:0;
            execute("delete from tbl_grammar where id = $gid");
            header("location:index.php?controller=grammars&id=$lessId");
            break;
        default: break;
    }
    // ====================phân trang============
    $record_perpage = 10;
    $total_record = fetch_one("select count(*) as total from tbl_grammar");
    $num_page = ceil($total_record["total"]/$record_perpage);
    $page = 1;
    $page = isset($_GET["p"]) ? $_GET["p"]:0;
    $page = $page <= 0 ? 0:$page-1;
    $from = $page * $record_perpage;
    $grammars = fetch("select * from tbl_grammar where lesson_id=$lessId order by id asc limit $from,$record_perpage");
    include "view/view_grammars.php";
?>