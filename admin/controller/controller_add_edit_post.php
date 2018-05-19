<?php
    $act = isset($_GET['act']) ? $_GET['act']:'';
    switch ($act) {
        case 'add': 
            $form_control = 'index.php?controller=add_edit_post&act=do_add';
            break;
        case 'do_add':
            $flag = $_POST['flag'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $adminId = $_SESSION['id'];
            $sql = "insert into tbl_post(title,content,admin_id,create_date,flag)
            values('$title','$content','$adminId', now(), '$flag')";
            execute($sql);
            header("location:index.php?controller=post");
            break;
        case 'edit':
            $id = isset($_GET['id']) ? $_GET['id']:0;
            $adminPostId = fetch_one("select admin_id from tbl_post where id = $id");
            if ($adminPostId['admin_id'] != $_SESSION['id'] && $_SESSION['level'] != 0) {
                header("location:index.php?controller=post");
                break;
            }
            $postEdit = fetch_one("select * from tbl_post where id = $id");
            $form_control = 'index.php?controller=add_edit_post&act=do_edit&id='.$id;
            break;
        case 'do_edit':
            $id = isset($_GET['id']) ? $_GET['id']:0;
            $adminPostId = fetch_one("select admin_id from tbl_post where id = $id");
            if ($adminPostId['admin_id'] != $_SESSION['id'] && $_SESSION['level'] != 0) {
                header("location:index.php?controller=post");
                break;
            }
            $flag = $_POST['flag'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $adminId = $_SESSION['id'];
            $sql = "update tbl_post set 
                title = '$title',
                content = '$content',
                admin_id = '$adminId',
                create_date = now(),
                flag = '$flag' 
                where id = $id";
            execute($sql);
            header("location:index.php?controller=post");
            break;
            break;
    }
	
    include "view/view_add_edit_post.php";
?>