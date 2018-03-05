<?php
    $level = isset($_GET['lv']) ? $_GET['lv']:0;
    if ($level == 4) {
        include "view/view_jlpttest_4.php";
    }
    if ($level == 5) {
        include "view/view_jlpttest_5.php";
    }
?>