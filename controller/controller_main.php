<?php 
    $hiraganas = fetch("select * from tbl_alphabet where type = 1");
    $katakanas = fetch("select * from tbl_alphabet where type = 2");
    $hiraganaTestData = fetch("select * from tbl_test_and_jlpt where type = 1 and flag = 1 order by rand() limit 0,20");
    $katakanaTestData = fetch("select * from tbl_test_and_jlpt where type = 2 and flag = 1 order by rand() limit 0,20");
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['submit_hiragana'])) {
            $point = 0;
            for ($i = 1; $i <= $_POST['totalQuestion']; $i++) {
                if (isset($_POST['aid_'.$i]) && $_POST['aid_'.$i] == $_POST['isanswer_'.$i]) {
                    $point++;
                }
            }
            
            include "view/view_result.php";
        }

        if (isset($_POST['submit_katakana'])) {
            $point = 0;
            for ($i = 1; $i <= $_POST['totalQuestion']; $i++) {
                if (isset($_POST['aid_'.$i]) && $_POST['aid_'.$i] == $_POST['isanswer_'.$i]) {
                    $point++;
                }
            }
            
            include "view/view_result.php";
        }
    } else {
        include "view/view_home.php";
    }
?>