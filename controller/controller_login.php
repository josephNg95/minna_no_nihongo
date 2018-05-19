<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = isset($_POST["username"]) ? $_POST["username"] : '';
        $password1 = isset($_POST["password"]) ? $_POST["password"] : '';
        $password = md5($password1);
        $check = fetch_one("select username,password,id,email,fullname from tbl_user where username='$username' and verify=1");
        if($check > 0) {
            if($check["password"] == $password){
                $_SESSION["user_name"] = $username;
                // $_SESSION["email"] = $check['email'];
                // $_SESSION["fullname"] = $check['fullname'];
                $_SESSION["user_id"] = $check['id'];
                header("location:index.php?con=profile");
            } else {
                $msg = "Bạn đã nhập sai mật khẩu!";
            }
            
        } else {
            $msg = "Sai tên đăng nhập hoặc mật khẩu!";
        }
    }

    if(!isset($_SESSION["user_name"]) == true) {
        include "view/view_login.php";
    } else {
        header("location:index.php?con=profile");
    }
?>