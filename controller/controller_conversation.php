<?php

$type = isset($_GET['t']) ? $_GET['t'] : 'chaohoi';
$conversations = fetch("select * from tbl_conversation where type='$type' and flag = 1");

include_once "view/view_conversation.php";