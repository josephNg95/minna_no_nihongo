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
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            execute("delete from tbl_mondai where lesson_id = $id");
            header("location:index.php?controller=mondais&id=$lessId");
            break;
        default: break;
    }

    $isEmpty = fetch_one("select count(*) as total from tbl_mondai where lesson_id=$lessId");
    $haveRd = false;
    $mondai = [];
    if ($isEmpty['total'] > 0) {
        $haveRd = true;
        $mondai = fetch_one("select * from tbl_mondai where lesson_id=$lessId order by id asc");
    }
    
    // load view
    include "view/view_mondais.php";
?>