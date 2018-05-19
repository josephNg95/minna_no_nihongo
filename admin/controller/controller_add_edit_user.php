<?php 
    $act = isset($_GET["act"]) ? $_GET["act"]:"";
    switch ($act) {
        case 'edit':
            $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;

            $arr = fetch_one("select * from tbl_admin where id=$id");

            $form_control = "index.php?controller=add_edit_user&act=do_edit&id=$id";
            break;
        case 'do_edit':
            $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
            $arr = fetch_one("select * from tbl_admin where id=$id");
            $username = mysql_escape_string($_POST["username"]);
            $fullname = mysql_escape_string($_POST["fullname"]);
            $email = mysql_escape_string($_POST["email"]);
            if ($arr['level'] != 0) {
                $flag = $_POST["flag"];
            } else {
                $flag = 1; 
            }
            $imgPath = $arr['avatar'];

            if(isset($_FILES["avatar"]) && $_FILES["avatar"]["name"] != "" ) {
                $img_name = $_FILES["avatar"]["name"];
                $img_size = $_FILES["avatar"]["size"];
                $img_tmp_name = $_FILES["avatar"]["tmp_name"];
                $imgPath = "upload/avatars/".time().$img_name;
                // thực hiện di chuyển file vừa upload và thư mục chỉ định trên website
                move_uploaded_file($img_tmp_name,"../admin/".$imgPath);
            }

            execute("update tbl_admin set username='$username',fullname='$fullname', email='$email', avatar='$imgPath', flag='$flag' where id = $id");
            if(empty($password)==false){
                $password = md5($password);
                execute("update tbl_admin set password='$password' where id=$id");
            }
            header("location:index.php?controller=user");
            break;
        case 'add':
            $form_control = "index.php?controller=add_edit_user&act=do_add";
            break;
        case 'do_add':
            $username = mysql_escape_string($_POST["username"]);
            $fullname = mysql_escape_string($_POST["fullname"]);
            $email = mysql_escape_string($_POST["email"]);
            $password = md5('123456');
            $insertPath = 'upload/avatars/default.png';

            if(isset($_FILES["avatar"]) && $_FILES["avatar"]["name"] != "" ) {
                $img_name = $_FILES["avatar"]["name"];
                $img_size = $_FILES["avatar"]["size"];
                $img_tmp_name = $_FILES["avatar"]["tmp_name"];
                $originPath = 'admin/';
                $insertPath = "upload/avatars/".time().$img_name;
                // thực hiện di chuyển file vừa upload và thư mục chỉ định trên website
                move_uploaded_file($img_tmp_name,"../".$originPath.$insertPath);
            }
            execute("insert into tbl_admin(username,password,fullname,email, avatar) values('$username','$password','$fullname', '$email', '$insertPath')");
            header("location:index.php?controller=user");
            break;
        default:
            break;
    }
    include "view/view_add_edit_user.php";
?>