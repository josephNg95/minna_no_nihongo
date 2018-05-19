<?php  
    session_start();
    include "../config.php";
    include "model/model.php";
    $rootURL = "http://localhost/project/";
    $controller = isset($_GET["controller"]) ? $_GET["controller"]:"";
    if($controller == "login")
        include "controller/controller_login.php";
    else if($controller == "logout")
        unset($_SESSION["username"]);
    else 
        $load_controller = "controller/controller_home.php";

    if(file_exists("controller/controller_".$controller.".php"))
        $load_controller = "controller/controller_".$controller.".php";
    if(isset($_SESSION["username"]) == true) {
        include "view/view_layout.php";
    } else {
        include "view/login.php";
    }
    
?>