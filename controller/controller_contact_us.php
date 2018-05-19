<?php

if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != '') {
	$userID = $_SESSION['user_id'];
	$userInfo = fetch_one("select * from tbl_user where id = '$userID'");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$fullname = isset($_POST['fullname']) && trim($_POST['fullname']) != '' ? trim($_POST['fullname']):'';
	$email = isset($_POST['email']) && trim($_POST['email']) != '' ? trim($_POST['email']):'';
	$content = isset($_POST['content']) && trim($_POST['content']) != '' ? trim($_POST['content']):'';

	if ($content != '') {
		$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id']:'';
		$sql = "insert into tbl_contact_us(name, email, content, user_id, create_date) values('$fullname', '$email', '$content', '$user_id', now())";
		execute($sql);
		$msg = "<p style='color: blue'>Bạn đã gửi liên hệ tới quản trị viên thành công!</p>";
	}
}


include_once "view/view_contact_us.php";