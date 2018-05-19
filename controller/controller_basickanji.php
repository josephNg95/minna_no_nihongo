<?php
$lessonId =  isset($_GET['ls']) ? $_GET['ls']:1;
$kanijs = fetch("select * from tbl_kanji_basic where lesson = $lessonId and flag = 1");

// var_dump($kanijs);
include "view/view_basickanji.php";