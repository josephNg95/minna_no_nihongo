<?php
    // =========================================
    $act = isset($_GET["act"]) ? $_GET["act"]: "";
    switch ($act) {
        case 'delete':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            $adminPostId = fetch_one("select admin_id from tbl_post where id = $id");
            if ($adminPostId['admin_id'] != $_SESSION['id'] && $_SESSION['id'] != 1) {
                header("location:index.php?controller=post");
                break;
            }
            execute("delete from tbl_post where id = $id");
            header("location:index.php?controller=post");
            break;
    }

    $adminData = fetch("select * from tbl_admin");
    $record_perpage = 10;
    $total_record = fetch_one("select count(*) as total from tbl_post");
    $num_page = ceil($total_record["total"]/$record_perpage);
    $page = 1;
    $page = isset($_GET["p"]) ? $_GET["p"]:0;
    $page = $page <= 0 ? 0:$page-1;
    $from = $page * $record_perpage;
    $posts = fetch("select * from tbl_post order by id desc limit $from,$record_perpage");

    include "view/view_post.php";
?>