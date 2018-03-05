<?php 
    $act = isset($_GET["act"]) ? $_GET["act"]:"";
    switch ($act) {
        case 'edit':
            if (isset($_POST['editNewWord'])) {
                $less_id = $_POST['less_id'];
                $word_id = $_POST['ed_word_id'];
                $status = $_POST['ed_status'];
                $new_word = $_POST['ed_new_word'];
                $mean_vn = $_POST['ed_mean_vn'];
                $kanji = $_POST['ed_kanji'];
                $mean_ch = $_POST['ed_mean_ch'];

                $sql = "update tbl_new_words set kana_word='$new_word', vietnam_word='$mean_vn', kanji_word='$kanji', kanji_mean='$mean_ch', flag='$status' where id='$word_id'";
                execute($sql);
            }
            header("location:index.php?controller=new_words&id=$less_id");
            break;
        case 'add':
            if (isset($_POST['addNewWord'])) {
                $status = $_POST['status'];
                $new_word = $_POST['new_word'];
                $mean_vn = $_POST['mean_vn'];
                $kanji = $_POST['kanji'];
                $mean_ch = $_POST['mean_ch'];
                $lesson_id = $_POST['lesson_id'];
                
                $sql = "insert into tbl_new_words (lesson_id, kana_word, vietnam_word, kanji_word, kanji_mean, flag)
                        values('$lesson_id', '$new_word', '$mean_vn','$kanji','$mean_ch', '$status')";
                execute($sql);
            }
            header("location:index.php?controller=new_words&id=$lesson_id");
            break;
        default:
            # code...
            break;
    }
?>