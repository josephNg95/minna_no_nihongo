<?php
$act = isset($_GET['act']) ? $_GET['act']:'';

if ($act == 'send' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    include "../config.php";
    include "model/model.php";

    $email = $_POST['email'];
    $userInfo = fetch_one("select * from tbl_admin where email = '$email'");
    if (!empty($userInfo)) {
        $newPass = createRandomPassword();
        $md5Pass = md5($newPass);
        
        $sql = "update tbl_admin set password = '$md5Pass' where email = '$email'";
        execute($sql);

        $message = "Chúng tôi gửi bạn mật khẩu mới để truy cập hệ thống <br/>";
        $message .= "Mật khẩu mới của bạn là: ".$newPass;
        $headers = "Content-type: text/html; charset=utf-8\r\nFrom: Minanihongo.com";
        mail($email,"Cập nhật lại mật khẩu", $message, $headers);

        $msg = "<span style='color: blue'>Thay đổi mật khẩu thành công</span>";
    } else {
        $msg = "<span style='color: red'>Email không tồn tại, vui lòng nhập lại</span>";
    }
}

include_once "forget_pass.php";

function createRandomPassword() { 
    $chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
    srand((double)microtime()*1000000); 
    $i = 0; 
    $pass = '' ; 

    while ($i <= 7) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $pass = $pass . $tmp; 
        $i++; 
    } 

    return $pass; 
}