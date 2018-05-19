<?php 
    $act = isset($_GET["act"]) ? $_GET["act"]:"";
    $lessId = isset($_GET["id"]) ? $_GET["id"]:0;
    switch ($act) {
        case 'edit':
            $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
            $kanji = fetch_one("select * from tbl_kanji_basic where id=$id");
            $form_control = "index.php?controller=add_edit_basickanji&act=do_edit&id=$id";
            break;
        case 'do_edit':
            $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
            $kanji = $_POST['kanji'];
            $china = $_POST['china'];
            $vietnam = $_POST['vietnam'];
            $kun = $_POST['kun'];
            $on = $_POST['on'];
            $example = $_POST['example'];
            if(isset($_FILES["draw"]) && $_FILES["draw"]["name"] != "" ) {
                $img_name = $_FILES["draw"]["name"];
                $img_size = $_FILES["draw"]["size"];
                $img_tmp_name = $_FILES["draw"]["tmp_name"];
                $insertPath = "upload/draw/".time().$img_name;
                // thực hiện di chuyển file vừa upload và thư mục chỉ định trên website
                move_uploaded_file($img_tmp_name,"../".$insertPath);
            }
            $adminId =  $_SESSION['id'];
            $lesson = $_POST['lesson'];
            $flag = $_POST['status'];

            $sql = " update tbl_kanji_basic set
            lesson = '$lesson',
            kanji_word = '$kanji',
            china_sound = '$china' ,
            vietnam_word = '$vietnam',
            kunyomi = '$kun',
            onyomi = '$on',";

            if(isset($_FILES["draw"]) && $_FILES["draw"]["name"] != "" ) {
                $sql .= "draw_img =  '$insertPath',";
            }
            $sql .= "
            example = '$example',
            admin_id = '$adminId',
            flag = '$flag'
            where id = $id";

            execute($sql);
            header("location:index.php?controller=basickanji");
            break;
        case 'add':
            $form_control = "index.php?controller=add_edit_basickanji&act=do_add";
            break;
        case 'do_add':
            $kanji = $_POST['kanji'];
            $china = $_POST['china'];
            $vietnam = $_POST['vietnam'];
            $kun = $_POST['kun'];
            $on = $_POST['on'];
            $example = $_POST['example'];
            $insertPath = '';
            if(isset($_FILES["draw"]) && $_FILES["draw"]["name"] != "" ) {
                $img_name = $_FILES["draw"]["name"];
                $img_size = $_FILES["draw"]["size"];
                $img_tmp_name = $_FILES["draw"]["tmp_name"];
                $insertPath = "upload/draw/".time().$img_name;
               move_uploaded_file($img_tmp_name,"../".$insertPath);
            }
            $adminId =  $_SESSION['id'];
            $lesson = $_POST['lesson'];
            $flag = $_POST['status'];

            $sql = "insert into tbl_kanji_basic(lesson, kanji_word, china_sound, vietnam_word, kunyomi, onyomi, draw_img, example, admin_id, flag)
             values('$lesson', '$kanji','$china','$vietnam', '$kun','$on', '$insertPath', '$example', '$adminId', '$flag')";
            execute($sql);
            header("location:index.php?controller=basickanji");
            break;
        default:
            break;
    }
    
    include "view/view_add_edit_basickanji.php";
?>