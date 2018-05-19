<?php 
    $name = isset($_SESSION["username"]) ? $_SESSION["username"]:"";
    $arr_profile = fetch("select * from tbl_admin where username = '$name'");
    
    include "view/view_home.php";
?>