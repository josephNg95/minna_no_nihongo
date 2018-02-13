<?php
    include_once "../../config.php";
    include_once "../model/model.php";
    
    if (isset($_POST['status']) && $_POST['status'] == true) {
        $id = $_POST['id'];
        $adminInfo = fetch_one("select * from tbl_admin where id = $id"); 
        $flag = ($adminInfo['flag'] == 1) ? 0:1;
        execute("update tbl_admin set flag='$flag' where id = $id");
    }
?>
