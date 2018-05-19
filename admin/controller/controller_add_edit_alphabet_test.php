<?php 
    $act = isset($_GET["act"]) ? $_GET["act"]:"";
    switch ($act) {
        case 'edit':
            // $id = isset($_GET["id"]) ? $_GET["id"]:0;
            $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
            // lấy bản ghi của id vừa truyền vào
            $questionData = fetch_one("select * from tbl_kana_test where id=$id");
            $answerData = fetch("select * from tbl_answer where question_id=$id");
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
                $answer = $_POST['ra_answer'];
                $flag = $_POST['flag'];
                $sql_upd_question = "update tbl_kana_test set
                    type = '$type_alphabet_test',
                    question = '$question_alphabet',
                    answer_id = '$answer',
                    flag = '$flag'
                    where id = '$id'";
                execute($sql_upd_question);

                $answerData = fetch_one("select * from tbl_answer where question_id=$id");
                for ($i=1; $i <= 4; $i++) {
                    $answerId = $answerData['id'] + $i-1;
                    $content_answer = 'answer'.$i;
                    $content_answer = $$content_answer;
                    $isAnswer = 0;
                    if ($answer == $i) {
                        $isAnswer = 1;
                    }
                    $sql_upd_answer = "update tbl_answer set
                        is_answer = '$isAnswer',
                        answer = '$content_answer'
                        where question_id='$id'
                        and id = '$answerId'";

                    execute($sql_upd_answer);
                }
            }

            header("location:index.php?controller=alphabet_test");
            break;
        case 'add':
            $form_control = "index.php?controller=add_edit_alphabet_test&act=do_add";
            break;
        case 'do_add':
            $type_alphabet_test = $_POST['type_alphabet_test'];
            $question_alphabet = mysql_escape_string($_POST['question_alphabet']);
            $answer1 = mysql_escape_string($_POST['answer1']);
            $answer2 = mysql_escape_string($_POST['answer2']);
            $answer3 = mysql_escape_string($_POST['answer3']);
            $answer4 = mysql_escape_string($_POST['answer4']);
            $answer = $_POST['ra_answer'];

            $sql_question = "insert into tbl_kana_test(type, question, answer_id) values('$type_alphabet_test', '$question_alphabet', '$answer')";
            execute($sql_question);
            $last_insert_id = get_insert_id();
            for ($i=1; $i <= 4; $i++) { 
                $content_answer = 'answer'.$i;
                $content_answer = $$content_answer;
                $isAnswer = 0;
                if ($answer == $i) {
                    $isAnswer = 1;
                }
                $sql_answer = "insert into 
                    tbl_answer(is_answer, question_id, answer) 
                    values ('$isAnswer', '$last_insert_id', '$content_answer')";
                execute($sql_answer);
            }
            header("location:index.php?controller=alphabet_test");
            break;
        default:
            # code...
            break;
    }
    // load view
    include "view/view_add_edit_alphabet_test.php";
?>