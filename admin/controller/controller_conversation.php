<?php
	$act = isset($_GET["act"]) ? $_GET["act"]: "";
    switch ($act) {
        case 'delete':
        	$id = isset($_GET["id"]) ? $_GET["id"]:0;
            execute("delete from tbl_conversation where id = $id");
            header("location:index.php?controller=conversation");
            break;
    }
	// ====================phân trang============

    $record_perpage = 25;
    $total_record = fetch_one("select count(*) as total from tbl_conversation");
    $num_page = ceil($total_record["total"]/$record_perpage);
    $page = 1;
    $page = isset($_GET["p"]) ? $_GET["p"]:0;
    $page = $page <= 0 ? 0:$page-1;
    $from = $page * $record_perpage;
	$conversation = fetch("select * from tbl_conversation order by id asc limit $from,$record_perpage");


    include "view/view_conversation.php";
?>