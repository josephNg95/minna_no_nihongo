<?php 
    $act = isset($_GET["act"]) ? $_GET["act"]:"";
    $lessId = isset($_GET["id"]) ? $_GET["id"]:0;
    switch ($act) {
        case 'edit':
            $kaiwa = fetch_one("select * from tbl_talk where lesson_id=$lessId");

            $titleKana = mysql_escape_string($_POST["ed_title1"]);
            $titleRomaji = mysql_escape_string($_POST["ed_title2"]);
            $titleVn = mysql_escape_string($_POST["ed_title3"]);
            $status = mysql_escape_string($_POST["ed_status"]);
            $lessonId = mysql_escape_string($_POST["ed_lessonId"]);
            $kid = mysql_escape_string($_POST["kid"]);

            execute("update tbl_talk set title='$titleKana',romaji_title='$titleRomaji',vietnam_title = '$titleVn', flag='$status' where id = $kid");
            header("location:index.php?controller=kaiwas&id=$lessonId");
            break;
        case 'add':
            $titleKana = mysql_escape_string($_POST["title1"]);
            $titleRomaji = mysql_escape_string($_POST["title2"]);
            $titleVn = mysql_escape_string($_POST["title3"]);
            $status = mysql_escape_string($_POST["status"]);
            $lessonId = mysql_escape_string($_POST["lessonId"]);
            
            execute("insert into tbl_talk(lesson_id,title,romaji_title,vietnam_title,flag)
            values('$lessonId','$titleKana','$titleRomaji','$titleVn', '$status')");
            header("location:index.php?controller=kaiwas&id=$lessonId");
            break;
        case 'addcon':
            $kaiwa = fetch_one("select * from tbl_talk where lesson_id=$lessId");
            $kaiwaId = $kaiwa['id'];
            $name_jp = $_POST['name_jp'];
            $name_rm = $_POST['name_rm'];
            $content_jp = $_POST['content_jp'];
            $content_rm = $_POST['content_rm'];
            $content_vn = $_POST['content_vn'];
            $status = $_POST['status'];
            
            execute("insert into tbl_talk_content(name_jp, name_rm, content_jp, content_rm, content_vn, kaiwa_id, flag) 
            values('$name_jp','$name_rm','$content_jp','$content_rm','$content_vn',$kaiwaId,'$status')");

            header("location:index.php?controller=kaiwas&id=$lessId");
            break;
        case 'editcon':
            $kaiwaId = $_POST['con_id'];
            $name_jp = $_POST['m_name_jp'];
            $name_rm = $_POST['m_name_rm'];
            $content_jp = $_POST['m_content_jp'];
            $content_rm = $_POST['m_content_rm'];
            $content_vn = $_POST['m_content_vn'];
            $flag = $_POST['m_status'];

            execute("update tbl_talk_content set name_jp='$name_jp', name_rm='$name_rm', content_jp='$content_jp', content_rm='$content_rm', content_vn='$content_vn', flag='$flag' where id=$kaiwaId");

            header("location:index.php?controller=kaiwas&id=$lessId");
            break;
        default:
            break;
    }
?>