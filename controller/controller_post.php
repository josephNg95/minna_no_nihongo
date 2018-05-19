<?php

$record_perpage = 10;
$total_record = fetch_one("select count(*) as total from tbl_post");
$num_page = ceil($total_record["total"]/$record_perpage);
$page = 1;
$page = isset($_GET["p"]) ? $_GET["p"]:0;
$page = $page <= 0 ? 0:$page-1;
$from = $page * $record_perpage;
$listOfPost = fetch("select * from tbl_post where flag = 1 order by create_date desc limit $from,$record_perpage");

include_once "view/view_post.php";