<?php  
	// load session
	session_start();
	// load config
	include "config.php";
	// load model
	include "admin/model/model.php";
	
	$con = isset($_GET["con"]) ? $_GET["con"]:"";
	if ($con == 'logout') {
		unset($_SESSION["user_name"]);
		unset($_SESSION["user_id"]);
		header('location: index.php?con=login');
	}
	$load_con = "controller/controller_main.php";
	if(file_exists("controller/controller_".$con.".php")) {
		$load_con = "controller/controller_".$con.".php";
	}
	
	include "view/view_layout.php";

?>