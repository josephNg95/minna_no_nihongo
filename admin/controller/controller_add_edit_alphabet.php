<?php 
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'edit':
			if (isset($_POST['editAlphabet'])) {
				$id = $_POST['id_kana'];
				$type = $_POST['edit_type_alphabet'];
				$original = $_POST['edit_original'];
				$romaji = strtolower($_POST['edit_romaji']);
				$sql = "update tbl_alphabet set type = '$type', original = '$original', romaji = '$romaji' where id = $id";
				execute($sql);
			}
			header("location:index.php?controller=alphabet");
			break;
		case 'add':
			if (isset($_POST['addAlphabet'])) {
				$type = $_POST['type_alphabet'];
				$original = $_POST['original'];
				$romaji = strtolower($_POST['romaji']);
				$sql = "insert into tbl_alphabet (type, original, romaji, flag) values('$type', '$original', '$romaji', 1)";
				execute($sql);
			}
			header("location:index.php?controller=alphabet");
			break;
		default:
			# code...
			break;
	}
?>