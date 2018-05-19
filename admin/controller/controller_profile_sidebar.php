<?php
    ob_start();
    $name = isset($_SESSION["username"]) ? $_SESSION["username"]:"";
    $arr_profile = fetch_one("select * from tbl_admin where username = '$name'");
    include "view/view_profile_sidebar.php";
?>