<?php
if(isset($_SESSION["user_name"])) {
    $username = $_SESSION["user_name"];
    $userID = $_SESSION["user_id"];
    $sql = "select * from tbl_user where username = '$username'";
    $userInfo = fetch_one($sql);

    $type = isset($_GET['t']) ? $_GET['t']:'grammar_5';
    $testHistorys = fetch("select * from tbl_test_history where exam_type = '$type' and user_id = $userID order by create_date desc");
    
    include "view/view_profile.php";
} else {
    include "view/view_login.php";
}