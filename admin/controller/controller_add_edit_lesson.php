<?php
    $act = isset($_GET["act"]) ? $_GET["act"]:"";
    switch ($act) {
        case 'edit':
            if (isset($_POST['editLesson'])) {
                $id = $_POST['lessID'];
                $flag = $_POST['editFlag'];
                $name = $_POST['lessonName'];
                $sql = "update tbl_lesson set name='$name',flag='$flag' where id = $id";
                execute($sql);

                if(isset($_FILES['ed_audio_word']) && $_FILES['ed_audio_word']["name"] != "" ) {
                    $audioFileName = $_FILES['ed_audio_word']["name"];
                    $audioSize = $_FILES['ed_audio_word']["size"];
                    $audioTmpName = $_FILES['ed_audio_word']["tmp_name"];
                    $audioPath = "upload/audios/word/".time().$audioFileName;
                    move_uploaded_file($audioTmpName,"../admin/".$audioPath);

                    $sql = "update tbl_lesson set new_words_audio='$audioPath' where id = $id";
                    execute($sql);
                }
                if(isset($_FILES['ed_audio_kaiwa']) && $_FILES['ed_audio_kaiwa']["name"] != "" ) {
                    $audioFileName = $_FILES['ed_audio_kaiwa']["name"];
                    $audioSize = $_FILES['ed_audio_kaiwa']["size"];
                    $audioTmpName = $_FILES['ed_audio_kaiwa']["tmp_name"];
                    $audioPath = "upload/audios/kaiwa/".time().$audioFileName;
                    move_uploaded_file($audioTmpName,"../admin/".$audioPath);

                    $sql = "update tbl_lesson set kaiwa_audio='$audioPath' where id = $id";
                    execute($sql);
                }
            }
            header("location:index.php?controller=lesson");
            break;
        case 'add':
            $listPath = uploadAudio();
            $status = $_POST['status'];
            $lessonName = $_POST['lessonName'];
            $sql = "insert into tbl_lesson(name,new_words_audio,kaiwa_audio,flag)
            values('$lessonName','$listPath[0]','$listPath[1]','$status')";
            execute($sql);
            header("location:index.php?controller=lesson");
            break;
        default:
            break;
    }
    include "view/view_lesson.php";
// hàm trả về một mảng lấy tên folder
    function uploadAudio() {
        $listPath = [];
        $listAudio = array(
            'word' => 'audio_word',
            'kaiwa' => 'audio_kaiwa',
        );
        foreach ($listAudio as $key => $audioName) {
            if(isset($_FILES[$audioName]) && $_FILES[$audioName]["name"] != "" ) {
                $audioFileName = $_FILES[$audioName]["name"];
                $audioSize = $_FILES[$audioName]["size"];
                $audioTmpName = $_FILES[$audioName]["tmp_name"];
                $audioPath = "upload/audios/".$key."/".time().$audioFileName;
                $listPath[] = $audioPath;
                move_uploaded_file($audioTmpName,"../admin/".$audioPath);
            }
        }

        return $listPath;
    }
?>