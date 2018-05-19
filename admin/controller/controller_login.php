<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = isset($_POST["username"]) ? $_POST["username"] : '';
        $password1 = isset($_POST["password"]) ? $_POST["password"] : '';
        $password = md5($password1);
        $check = fetch_one("select username,password,flag, id, level from tbl_admin where username='$username'");
        if($check > 0){
            if($check["password"] == $password){
                if ($check['flag'] == 1) {
                    $_SESSION["username"] = $username;
                    $_SESSION["id"] = $check['id'];
                    $_SESSION["level"] = $check['level'];
                    header("location:index.php");
                } else {
                    $msg = "Tài khoản của bạn đã bị ngừng hoạt động,<br/>Vui lòng liên hệ admin để tiếp tục.";
                }
            } else {
                $msg = "Bạn đã nhập sai mật khẩu!";
            }
            
        } else {
            $msg = "Sai tên đăng nhập hoặc mật khẩu!";
        }
    }
?>