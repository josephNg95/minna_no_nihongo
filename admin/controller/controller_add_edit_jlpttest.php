<?php
    $level = isset($_GET['lv']) ? $_GET['lv']:0;
    $act = isset($_GET['act']) ? $_GET['act']:0;
    switch ($act) {
        case 'edit':
            $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
            $level = isset($_GET['lv']) ? $_GET['lv']:0;
            $questionData = fetch_one("select * from tbl_test_and_jlpt where id=$id");
            // trỏ đến action của form
            $form_control = "index.php?controller=add_edit_jlpttest&lv=$level&act=do_edit&id=$id";
            break;
        case 'do_edit':
        	$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
        	$level = isset($_GET['lv']) ? $_GET['lv']:0;
            $name = $_POST['question_type'];
            $question_content = mysql_escape_string($_POST['question_content']);
            $answer1 = mysql_escape_string($_POST['answer1']);
            $answer2 = mysql_escape_string($_POST['answer2']);
            $answer3 = mysql_escape_string($_POST['answer3']);
            $answer4 = mysql_escape_string($_POST['answer4']);
            $answer = $_POST['ra_answer'];
            $flag = $_POST['flag'];
            $admin_id = $_SESSION['id'];

            $sql_upd_question = "update tbl_test_and_jlpt set
                    type = '$level',
                    name = '$name',
                    question = '$question_content',
                    answer_1 = '$answer1',
                    answer_2 = '$answer2',
                    answer_3 = '$answer3',
                    answer_4 = '$answer4',
                    is_answer = '$answer',
                    flag = '$flag',
                    admin_id = '$admin_id'
                    where id = '$id'";
            execute($sql_upd_question);
            header("location:index.php?controller=jlpttest&lv=".$level);
            break;
        case 'add':
         	$level = isset($_GET['lv']) ? $_GET['lv']:0;
            $form_control = "index.php?controller=add_edit_jlpttest&act=do_add&lv=$level";
            break;
        case 'do_add':
			$level = isset($_GET['lv']) ? $_GET['lv']:0;
            $name = $_POST['question_type'];
            $question_content = mysql_escape_string($_POST['question_content']);
            $answer1 = mysql_escape_string($_POST['answer1']);
            $answer2 = mysql_escape_string($_POST['answer2']);
            $answer3 = mysql_escape_string($_POST['answer3']);
            $answer4 = mysql_escape_string($_POST['answer4']);
            $answer = $_POST['ra_answer'];
            $flag = $_POST['flag'];
            $admin_id = $_SESSION['id'];

            $sql_question = "insert into tbl_test_and_jlpt(type, name, question, answer_1,answer_2,answer_3,answer_4,is_answer, flag, admin_id) values($level ,'$name', '$question_content', '$answer1', '$answer2', '$answer3', '$answer4', '$answer', '$flag', '$admin_id')";
            execute($sql_question);
            header("location:index.php?controller=jlpttest&lv=".$level);
            break;
        default:
            # code...
            break;
    }
    include "view/view_add_edit_jlpttest.php";
?>