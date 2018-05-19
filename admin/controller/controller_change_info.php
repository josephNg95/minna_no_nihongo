<?php
    $adminID = $_SESSION['id'];
    $arr = fetch_one("select * from tbl_admin where id = $adminID");
    $msg = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = mysql_escape_string($_POST["username"]);
        $fullname = mysql_escape_string($_POST["fullname"]);
        $email = mysql_escape_string($_POST["email"]);
        $imgPath = $arr['avatar'];

        if(isset($_FILES["avatar"]) && $_FILES["avatar"]["name"] != "" ) {
            $img_name = $_FILES["avatar"]["name"];
            $img_size = $_FILES["avatar"]["size"];
            $img_tmp_name = $_FILES["avatar"]["tmp_name"];
            $imgPath = "upload/avatars/".time().$img_name;
            move_uploaded_file($img_tmp_name,"../admin/".$imgPath);
        }
        $msg = "<p style='color: red'>Mật khẩu không đúng!</p>";
        if (md5($_POST['password']) == $arr['password']) {
            execute("update tbl_admin set username='$username',fullname='$fullname', email='$email', avatar='$imgPath' where id = $adminID");
            if ($arr['username'] == $username) {
                header('location: index.php?controller=change_info');
            } else {
                header('location: index.php?controller=logout');
            }
        }
    }
    include "view/view_change_info.php";
?>