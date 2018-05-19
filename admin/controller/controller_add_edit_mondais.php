<?php 
    $act = isset($_GET["act"]) ? $_GET["act"]:"";
    $lessId = isset($_GET["id"]) ? $_GET["id"]:0;
    switch ($act) {
        case 'edit':
            $lesson_id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
            $qid = isset($_GET["qid"])&&is_numeric($_GET["qid"]) ? $_GET["qid"]:0;
            $questionData = fetch_one("select * from tbl_test_and_jlpt where id=$qid");
            $form_control = "index.php?controller=add_edit_mondais&act=do_edit&id=$lesson_id&qid=$qid";
            break;
        case 'do_edit':
            $lesson_id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
            $qid = isset($_GET["qid"])&&is_numeric($_GET["qid"]) ? $_GET["qid"]:0;
            $question = mysql_escape_string($_POST["question_content"]);
            $answer1 = mysql_escape_string($_POST["answer1"]);
            $answer2 = mysql_escape_string($_POST["answer2"]);
            $answer3 = mysql_escape_string($_POST["answer3"]);
            $answer4 = mysql_escape_string($_POST["answer4"]);
            $is_answer = $_POST["ra_answer"];
            $flag = $_POST["flag"];
            $adminId = $_SESSION['id'];

            execute("update tbl_test_and_jlpt set 
            question = '$question', 
            answer_1='$answer1', 
            answer_2='$answer2', 
            answer_3='$answer3', 
            answer_4='$answer4', 
            is_answer='$is_answer', 
            admin_id='$adminId', 
            flag='$flag' 
            where id = $qid");
            header("location:index.php?controller=mondais&id=$lesson_id");
            break;
        case 'add':
            $form_control = "index.php?controller=add_edit_mondais&act=do_add&id=$lessId";
            break;
        case 'do_add':
            $lessId = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
            $question = mysql_escape_string($_POST["question_content"]);
            $answer1 = mysql_escape_string($_POST["answer1"]);
            $answer2 = mysql_escape_string($_POST["answer2"]);
            $answer3 = mysql_escape_string($_POST["answer3"]);
            $answer4 = mysql_escape_string($_POST["answer4"]);
            $is_answer = mysql_escape_string($_POST["ra_answer"]);
            $flag = mysql_escape_string($_POST["flag"]);
            $adminId = $_SESSION['id'];

            execute("insert into tbl_test_and_jlpt(type,lesson_id,question ,answer_1,answer_2,answer_3, answer_4, is_answer,flag, admin_id) values(3,'$lessId', '$question', '$answer1','$answer2','$answer3','$answer4','$is_answer', $flag, $adminId)");
            header("location:index.php?controller=mondais&id=$lessId");
            break;
        default:
            break;
    }
    include "view/view_add_edit_mondais.php";
?>