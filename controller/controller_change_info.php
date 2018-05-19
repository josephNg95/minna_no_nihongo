<?php

    $id = $_SESSION['user_id'];
    $userInfo = fetch_one("select * from tbl_user where id = $id");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = mysql_escape_string($_POST["username"]);
        $fullname = mysql_escape_string($_POST["fullname"]);
        $email = mysql_escape_string($_POST["email"]);
        $users = fetch_one("select count(*) as count from tbl_user where username='$username'");
        if (md5($_POST['password']) == $userInfo['password']) {
            if ($userInfo['username'] == $username) {
                execute("update tbl_user set fullname='$fullname', email='$email' where id = $id");
                header('location: index.php?con=profile');
            } else {
                if ($users['count'] > 0) {
                    $msgUsername = "<p style='color: #f36363'>Tên đăng nhập đã tồn tại!</p>";
                } else {
                    execute("update tbl_user set username='$username',fullname='$fullname', email='$email' where id = $id");
                    header('location: index.php?con=logout');
                }
            }
        } else {
            $msgPassword = "<p style='color: #f36363'>Mật khẩu không đúng!</p>";
        }
    }

if(isset($_SESSION["user_name"]) == true) {
    include "view/view_change_info.php";
} else {
    include "view/view_login.php";
}