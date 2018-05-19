<?php
    $lv = isset($_GET['lv']) ? $_GET['lv']: 5;
    $name = isset($_GET['n']) ? $_GET['n']: 'grammar_5';

    $questions = fetch("select * from tbl_test_and_jlpt where type = '$lv' and name = '$name' and flag = 1 order by rand() limit 0,15");
    $viewResult = false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['submit_jlpt'])) {
            $point = 0;
            for ($i = 1; $i <= $_POST['totalQuestion']; $i++) {
                if (isset($_POST['aid_'.$i]) && $_POST['aid_'.$i] == $_POST['isanswer_'.$i]) {
                    $point++;
                }
            }
    
            $viewResult = true;
            $curentURL = $_POST['current_url'];

            $userID = $_SESSION['user_id'];
            $exam_type = $name;
            $scoreRecord = fetch_one("select scores from tbl_test_history where user_id='$userID' and exam_type = '$exam_type' order by create_date desc limit 0,1");
            $oldScore = isset($scoreRecord['scores']) ? $scoreRecord['scores'] : 0;
            if ($point >= $oldScore) {
                $evaluate = 1;
            } else {
                $evaluate = 0;
            }

            $sql = "insert into tbl_test_history(user_id,exam_type, scores, create_date, evaluate)
             values('$userID', '$exam_type', $point, now(), $evaluate)";
            if (isset($_SESSION['user_id'])) {
                execute($sql);
             }
        }
    }

include_once "view/view_jlpttest.php";