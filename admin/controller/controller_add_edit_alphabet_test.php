<?php 
    $act = isset($_GET["act"]) ? $_GET["act"]:"";
    switch ($act) {
        case 'edit':
            // $id = isset($_GET["id"]) ? $_GET["id"]:0;
            $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
            // lấy bản ghi của id vừa truyền vào
            $questionData = fetch_one("select * from tbl_test_and_jlpt where id=$id");
            //$answerData = fetch("select * from tbl_answer where question_id=$id");
            // trỏ đến action của form
            $form_control = "index.php?controller=add_edit_alphabet_test&act=do_edit&id=$id";
            break;
        case 'do_edit':
            $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
            if (isset($_POST['alphabetTest'])) {
                $type_alphabet_test = $_POST['type_alphabet_test'];
                $question_alphabet = $_POST['question_alphabet'];
                $answer1 = mysql_escape_string($_POST['answer1']);
                $answer2 = mysql_escape_string($_POST['answer2']);
                $answer3 = mysql_escape_string($_POST['answer3']);
                $answer4 = mysql_escape_string($_POST['answer4']);
                $is_answer = $_POST['ra_answer'];
                $flag = $_POST['flag'];
                $admin_id = $_SESSION['id'];
                $sql_upd_question = "update tbl_test_and_jlpt set
                    type = '$type_alphabet_test',
                    question = '$question_alphabet',
                    answer_1 = '$answer1',
                    answer_2 = '$answer2',
                    answer_3 = '$answer3',
                    answer_4 = '$answer4',
                    is_answer = '$is_answer',
                    admin_id = '$admin_id',
                    flag = '$flag'
                    where id = '$id'";
                execute($sql_upd_question);
            }

            header("location:index.php?controller=alphabet_test");
            break;
        case 'add':
            $form_control = "index.php?controller=add_edit_alphabet_test&act=do_add";
            break;
        case 'do_add':
            $type = $_POST['type_alphabet_test'];
            $question = mysql_escape_string($_POST['question_alphabet']);
            $answer1 = mysql_escape_string($_POST['answer1']);
            $answer2 = mysql_escape_string($_POST['answer2']);
            $answer3 = mysql_escape_string($_POST['answer3']);
            $answer4 = mysql_escape_string($_POST['answer4']);
            $is_answer = $_POST['ra_answer'];
            $flag = $_POST['flag'];
            $admin_id = $_SESSION['id'];

            $sql_question = "insert into tbl_test_and_jlpt(type, question, answer_1, answer_2, answer_3, answer_4, is_answer, flag, admin_id) 
            values('$type', '$question', '$answer1', '$answer2', '$answer3', '$answer4', '$is_answer', '$flag', '$admin_id')";
            execute($sql_question);
            header("location:index.php?controller=alphabet_test");
            break;
        default:
            # code...
            break;
    }
        include "view/view_add_edit_alphabet_test.php";
?>