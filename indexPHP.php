<?php  
	// load session
	session_start();
	// load config
	include "config.php";
	// load model
	include "admin/model/model.php";
	
	$controller = isset($_GET["controller"]) ? $_GET["controller"]:"";
	$load_controller = "controller/controller_main.php";
	if(file_exists("controller/controller_".$controller.".php"))
		$load_controller = "controller/controller_".$controller.".php";
	
	include "view/view_layout.php";

?>