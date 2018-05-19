<?php

    if ($_SESSION['level'] != 0) {
        header("location:index.php?controller=home");
    }
    // =========================================
    $act = isset($_GET["act"]) ? $_GET["act"]: "";
    switch ($act) {
        case 'delete':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            if ($id != 1) {
                execute("delete from tbl_admin where id = $id");
            }
            header("location:index.php?controller=user");
            break;
        default:
            # code...
            break;
    }
    // ==========================================
    $record_perpage = 5;
    $total_record = fetch_one("select count(*) as total from tbl_admin");
    $num_page = ceil($total_record["total"]/$record_perpage);
    $page = 1;
    $page = isset($_GET["p"]) ? $_GET["p"]:0;
    $page = $page <= 0 ? 0:$page-1;
    $from = $page * $record_perpage;
    $arr_user = fetch("select * from tbl_admin order by id asc limit $from,$record_perpage");
    // ==================phân trang==================
    include "view/view_user.php";
?>