<?php 
    $name = isset($_SESSION["username"]) ? $_SESSION["username"]:"";
    $arr_profile = fetch("select * from tbl_admin where username = '$name'");
    $arr_profile = $arr_profile[0];
    include "view/view_profile_sidebar.php";
?>