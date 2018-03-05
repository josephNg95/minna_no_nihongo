<?php
	// =========================================
	$act = isset($_GET["act"]) ? $_GET["act"]: "";
	switch ($act) {
		case 'delete':
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			// xóa bản ghi bằng truy vấn SQL
			execute("delete from tbl_alphabet where id = $id");
			// chuyển đến trang chỉ định
			header("location:index.php?controller=alphabet");
			break;
		
		default:
			# code...
			break;
	}
	// ====================phân trang============
    // số bản ghi trên 1 trang
    $record_perpage = 50;
    // tổng số bản ghi
    $total_hira_record = fetch_one("select count(*) as total from tbl_alphabet where type=1");
	$total_kata_record = fetch_one("select count(*) as total from tbl_alphabet where type=2");
	if ($total_hira_record > $total_kata_record) {
		$total_record = $total_hira_record;
	} else {
		$total_record = $total_kata_record;
	}
    // lấy tổng số trang
    $num_page = ceil($total_record["total"]/$record_perpage);
    $page = 1;
    // lấy trang hiện tại
    $page = isset($_GET["p"]) ? $_GET["p"]:0;
    $page = $page <= 0 ? 0:$page-1;
    // các bản ghi trên trang đó
    $from = $page * $record_perpage;
	// thực hiện truy vấn khi có các thông tin ở trên
	$hiraganas = fetch("select * from tbl_alphabet where type=1 order by id asc limit $from,$record_perpage");
	$katakanas = fetch("select * from tbl_alphabet where type=2 order by id asc limit $from,$record_perpage");
    // ==================phân trang==================
	// load view
	include "view/view_alphabet.php";
?>