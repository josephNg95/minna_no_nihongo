<?php
$postID = isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] : 0;
$post = fetch_one("select * from tbl_post where id='$postID'");

include_once "view/view_post_detail.php";