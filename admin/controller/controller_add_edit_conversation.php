<?php
    $act = isset($_GET["act"]) ? $_GET["act"]:"";
    switch ($act) {
        case 'edit':
            $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
            $conversationEdit = fetch_one("select * from tbl_conversation where id=$id");
            $form_control = "index.php?controller=add_edit_conversation&act=do_edit&id=$id";
            break;
        case 'do_edit':
            $name = '';
            $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
            $con_type = $_POST['con_type'];
            switch ($con_type) {
                case 'chaohoi': $name = 'Chào hỏi'; break;
                case 'hoithoai': $name = 'Hội thoại'; break;
                case 'sodem': $name = 'Số đếm'; break;
                case 'ngaythang': $name = 'Ngày tháng'; break;
                case 'phuonghuong': $name = 'Phương hướng'; break;
                case 'giaothong': $name = 'Giao thông'; break;
                case 'choo': $name = 'Chỗ ở'; break;
                case 'anuong': $name = 'Ăn uống'; break;
                case 'muasam': $name = 'Mua sắm'; break;
                case 'mausac': $name = 'Màu sắc'; break;
                case 'thanhpho': $name = 'Thành phố'; break;
                case 'tennuoc': $name = 'Tên nước'; break;
                case 'dulich': $name = 'Du lịch'; break;
                case 'giadinh': $name = 'Gia đình'; break;
                case 'henho': $name = 'Hẹn hò'; break;
                case 'khancap': $name = 'Khẩn cấp'; break;
                case 'dauom': $name = 'Đau ốm'; break;
                case 'thanhngu': $name = 'Thành ngữ'; break;
                default:
            }
            $con_vn = $_POST['con_vn'];
            $con_kana = $_POST['con_kana'];
            $con_romaji = $_POST['con_romaji'];
            $flag = $_POST['status'];
            $adminId =  $_SESSION['id'];
            
            $sql = " update tbl_conversation set
            type = '$con_type', 
            name = '$name', 
            vietnam_con = '$con_vn', 
            japan_con = '$con_kana', 
            romaji_con = '$con_romaji', 
            admin_id = '$adminId', 
            flag = '$flag' 
            where id = $id";
            execute($sql);
            header("location:index.php?controller=conversation");
            break;
        case 'add':
            $form_control = "index.php?controller=add_edit_conversation&act=do_add";
            break;
        case 'do_add':
            $name = '';
            $con_type = $_POST['con_type'];
            switch ($con_type) {
                case 'chaohoi': $name = 'Chào hỏi'; break;
                case 'hoithoai': $name = 'Hội thoại'; break;
                case 'sodem': $name = 'Số đếm'; break;
                case 'ngaythang': $name = 'Ngày tháng'; break;
                case 'phuonghuong': $name = 'Phương hướng'; break;
                case 'giaothong': $name = 'Giao thông'; break;
                case 'choo': $name = 'Chỗ ở'; break;
                case 'anuong': $name = 'Ăn uống'; break;
                case 'muasam': $name = 'Mua sắm'; break;
                case 'mausac': $name = 'Màu sắc'; break;
                case 'thanhpho': $name = 'Thành phố'; break;
                case 'tennuoc': $name = 'Tên nước'; break;
                case 'dulich': $name = 'Du lịch'; break;
                case 'giadinh': $name = 'Gia đình'; break;
                case 'henho': $name = 'Hẹn hò'; break;
                case 'khancap': $name = 'Khẩn cấp'; break;
                case 'dauom': $name = 'Đau ốm'; break;
                case 'thanhngu': $name = 'Thành ngữ'; break;
                default:
            }
            $con_vn = $_POST['con_vn'];
            $con_kana = $_POST['con_kana'];
            $con_romaji = $_POST['con_romaji'];
            $flag = $_POST['status'];
            $adminId =  $_SESSION['id'];

            $sql = "insert into tbl_conversation(type, name,vietnam_con, japan_con, romaji_con, admin_id, flag)  values('$con_type', '$name', '$con_vn','$con_kana','$con_romaji', '$adminId', '$flag')";
            execute($sql);
            header("location:index.php?controller=conversation");
            break;
        default:
            break;
    }
    include "view/view_add_edit_conversation.php";
?>