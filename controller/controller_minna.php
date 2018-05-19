<?php
$lessonID = isset($_GET['lid']) ? $_GET['lid'] : 1;
$lessons = fetch("select id,name from tbl_lesson where flag=1");

$lessonAudio = fetch_one("select new_words_audio, kaiwa_audio from tbl_lesson where id = $lessonID and flag=1");
$lessonWord = fetch("select * from tbl_new_words where lesson_id = $lessonID and flag=1");
$lessonGrammar = fetch("select * from tbl_grammar where lesson_id = $lessonID and flag=1");

// kaiwa
$lessonTalkTitle = fetch_one("select *  from tbl_talk where lesson_id = $lessonID and flag=1");
$kaiwaId = $lessonTalkTitle['id'];
$lessonTalk = (!empty($kaiwaId)) ? fetch("select * from tbl_talk_content where kaiwa_id = $kaiwaId and flag=1 order by id asc") : [];

// mondai

$questionMondais = fetch("select * from tbl_test_and_jlpt where type = 3 and lesson_id = '$lessonID' and flag = 1 order by rand() limit 0,20");
$viewResult = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit_mondaitest'])) {
        $point = 0;
        for ($i = 1; $i <= $_POST['totalQuestion']; $i++) {
            if (isset($_POST['aid_'.$i]) && $_POST['aid_'.$i] == $_POST['isanswer_'.$i]) {
                $point++;
            }
        }

        $viewResult = true;
        $curentURL = $_POST['current_url'];
    }
}

include_once "view/view_minna.php";