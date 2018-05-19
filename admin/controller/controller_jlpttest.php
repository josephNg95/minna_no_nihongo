<?php
    $level = isset($_GET['lv']) ? $_GET['lv']:0;
    $act = isset($_GET["act"]) ? $_GET["act"]: "";
    switch ($act) {
        case 'delete':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            $level = isset($_GET['lv']) ? $_GET['lv']:0;
            execute("delete from tbl_test_and_jlpt where id = $id");
            header("location:index.php?controller=jlpttest&lv=$level");
            break;
    }

	$record_perpage = 10;
	$typeFilter = isset($_GET["name"]) ? $_GET["name"]:0;
	$total_record = fetch_one("select count(*) as total from tbl_test_and_jlpt where type='$level'");
    $num_page = ceil($total_record["total"]/$record_perpage);
    $page = 1;
    $page = isset($_GET["p"]) ? $_GET["p"]:0;
    $page = $page <= 0 ? 0:$page-1;
    $from = $page * $record_perpage;

    $exam_jlpt = fetch("select * from tbl_test_and_jlpt where type='$level' order by id asc limit $from,$record_perpage");

    include "view/view_jlpttest.php";
?>