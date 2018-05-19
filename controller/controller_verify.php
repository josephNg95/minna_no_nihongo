<?php

$email = isset($_GET['mail']) && $_GET['mail'] != '' ? $_GET['mail']:'';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['code']) && $_POST['code'] != '') {
    $email = isset($_POST['email']) & $_POST['email'] != '' ? $_POST['email']:'';
    $code = trim($_POST['code']);

    $userRegisterInfo = fetch_one("select count(*) as count from tbl_user where email='$email' and verify_code='$code'");
    if ($userRegisterInfo['count'] > 0) {
        $sql = "update tbl_user set verify = 1 where email='$email' and verify_code='$code'";
        execute($sql);
        header('location:index.php?con=login');
    }

}

include_once "view/view_verify.php";
