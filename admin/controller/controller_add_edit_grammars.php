<?php 
    $act = isset($_GET["act"]) ? $_GET["act"]:"";
    $lessId = isset($_GET["id"]) ? $_GET["id"]:0;
    switch ($act) {
        case 'edit':
            $gid = isset($_GET["gid"])&&is_numeric($_GET["gid"]) ? $_GET["gid"]:0;
            $grammar = fetch_one("select * from tbl_grammar where id=$gid");
            $form_control = "index.php?controller=add_edit_grammars&act=do_edit&id=$gid";
            break;
        case 'do_edit':
            $gid = $_POST["gid"];
            $lessId = $_POST["lessId"];
            $title = mysql_escape_string($_POST["title"]);
            $content = mysql_escape_string($_POST["content"]);
            execute("update tbl_grammar set title='$title',content='$content' where id = $gid");
            header("location:index.php?controller=grammars&id=$lessId");
            break;
        case 'add':
            $form_control = "index.php?controller=add_edit_grammars&act=do_add&id=$lessId";
            break;
        case 'do_add':
            $title = mysql_escape_string($_POST["title"]);
            $content = mysql_escape_string($_POST["content"]);
            
            execute("insert into tbl_grammar(title,content,lesson_id) values('$title','$content','$lessId')");
            header("location:index.php?controller=grammars&id=$lessId");
            break;
        default:
            break;
    }
    
    include "view/view_add_edit_grammars.php";
?>