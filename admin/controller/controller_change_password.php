<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $msg = '';
        if (!empty($_POST['oldPass'])) {
            $adminId = $_SESSION['id'];
            $adminInfor = fetch_one("select * from tbl_admin where id=$adminId");
            if ($adminInfor['password'] != md5($_POST['oldPass'])) {
                $msg = "<p style='color:red'>Mật khẩu cũ của bạn không đúng!</p>";
            } elseif ($_POST['newPass'] != $_POST['rePass']) {
                $msg = "<p style='color:red'>Mật khẩu nhập lại phải trùng với mật khẩu mới!</p>";
            } else {
                $newPassword = md5($_POST['newPass']);
                $sql = "update tbl_admin set password = '$newPassword' where id = $adminId";
                execute($sql);
                $msg = "<p style='color:blue'>Mật khẩu của bạn đã được thay đổi!</p>";
            }
            
        }
    }
    
    include "view/view_change_password.php";
?>