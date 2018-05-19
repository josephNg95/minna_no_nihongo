<?php 
    $act = isset($_GET["act"]) ? $_GET["act"]:"";
    $lessId = isset($_GET["id"]) ? $_GET["id"]:0;
    switch ($act) {
        case 'edit':
            $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
            $mondai = fetch_one("select * from tbl_mondai where lesson_id=$id");
            $form_control = "index.php?controller=add_edit_mondais&act=do_edit&id=$id";
            break;
        case 'do_edit':
            $answer1 = mysql_escape_string($_POST["answer1"]);
            $answer2 = mysql_escape_string($_POST["answer2"]);
            $answer3 = mysql_escape_string($_POST["answer3"]);
            $flag = mysql_escape_string($_POST["flag"]);

            execute("update tbl_mondai set answer_st='$answer1',answer_nd='$answer2', answer_rd='$answer3', flag='$flag' where lesson_id = $lessId");
            header("location:index.php?controller=mondais&id=$lessId");
            break;
        case 'add':
            $form_control = "index.php?controller=add_edit_mondais&act=do_add&id=$lessId";
            break;
        case 'do_add':
            $answer1 = mysql_escape_string($_POST["answer1"]);
            $answer2 = mysql_escape_string($_POST["answer2"]);
            $answer3 = mysql_escape_string($_POST["answer3"]);
            $flag = mysql_escape_string($_POST["flag"]);

            execute("insert into tbl_mondai(lesson_id, answer_st,answer_nd,answer_rd, flag) values('$lessId', '$answer1','$answer2','$answer3', $flag)");
            header("location:index.php?controller=mondais&id=$lessId");
            break;
        default:
            break;
    }
    // load view
    include "view/view_add_edit_mondais.php";
?>