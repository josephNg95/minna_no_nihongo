<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $msg = '';
        if (!empty($_POST['oldPass'])) {
            $userID = $_SESSION['user_id'];
            $adminInfor = fetch_one("select * from tbl_user where id=$userID");
            if ($adminInfor['password'] != md5($_POST['oldPass'])) {
                $msg = "<p style='color:#ef4747'>Mật khẩu cũ của bạn không đúng!</p>";
            } elseif ($_POST['newPass'] != $_POST['rePass']) {
                $msg = "<p style='color:#ef4747'>Mật khẩu nhập lại phải trùng với mật khẩu mới!</p>";
            } else {
                $newPassword = md5($_POST['newPass']);
                $sql = "update tbl_user set password = '$newPassword' where id = $userID";
                execute($sql);
                $msg = "<p style='color:blue'>Mật khẩu của bạn đã được thay đổi!</p>";
            }
            
        }
    }
    
    include "view/view_change_password.php";
?>