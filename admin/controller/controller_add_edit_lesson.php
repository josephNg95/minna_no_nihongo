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

                if(isset($_FILES['ed_audio_mondai']) && $_FILES['ed_audio_mondai']["name"] != "" ) {
                    $audioFileName = $_FILES['ed_audio_mondai']["name"];
                    $audioSize = $_FILES['ed_audio_mondai']["size"];
                    $audioTmpName = $_FILES['ed_audio_mondai']["tmp_name"];
                    $audioPath = "upload/audios/mondai/".time().$audioFileName;
                    move_uploaded_file($audioTmpName,"../admin/".$audioPath);

                    $sql = "update tbl_lesson set mondai_audio='$audioPath' where id = $id";
                    execute($sql);
                }

                if(isset($_FILES['ed_audio_bunkei']) && $_FILES['ed_audio_bunkei']["name"] != "" ) {
                    $audioFileName = $_FILES['ed_audio_bunkei']["name"];
                    $audioSize = $_FILES['ed_audio_bunkei']["size"];
                    $audioTmpName = $_FILES['ed_audio_bunkei']["tmp_name"];
                    $audioPath = "upload/audios/bunkei/".time().$audioFileName;
                    move_uploaded_file($audioTmpName,"../admin/".$audioPath);

                    $sql = "update tbl_lesson set bunkei_audio='$audioPath' where id = $id";
                    execute($sql);
                }

                if(isset($_FILES['ed_audio_reibun']) && $_FILES['ed_audio_reibun']["name"] != "" ) {
                    $audioFileName = $_FILES['ed_audio_reibun']["name"];
                    $audioSize = $_FILES['ed_audio_reibun']["size"];
                    $audioTmpName = $_FILES['ed_audio_reibun']["tmp_name"];
                    $audioPath = "upload/audios/reibun/".time().$audioFileName;
                    move_uploaded_file($audioTmpName,"../admin/".$audioPath);

                    $sql = "update tbl_lesson set reibun_audio='$audioPath' where id = $id";
                    execute($sql);
                }
            }
            header("location:index.php?controller=lesson");
            break;
        case 'add':
            $listPath = uploadAudio();
            $status = $_POST['status'];
            $lessonName = $_POST['lessonName'];
            $sql = "insert into tbl_lesson(name,new_words_audio,kaiwa_audio,mondai_audio,bunkei_audio,reibun_audio,flag)
            values('$lessonName','$listPath[0]','$listPath[1]','$listPath[2]','$listPath[3]','$listPath[4]','$status')";
            execute($sql);
            header("location:index.php?controller=lesson");
            break;
        default:
            break;
    }
    // load view
    include "view/view_lesson.php";

    function uploadAudio() {
        $listPath = [];
        $listAudio = array(
            'word' => 'audio_word',
            'kaiwa' => 'audio_kaiwa',
            'mondai' => 'audio_mondai',
            'bunkei' => 'audio_bunkei',
            'reibun' => 'audio_reibun'
        );
        foreach ($listAudio as $key => $audioName) {
            if(isset($_FILES[$ed_audioName]) && $_FILES[$ed_audioName]["name"] != "" ) {
                $audioFileName = $_FILES[$ed_audioName]["name"];
                $audioSize = $_FILES[$ed_audioName]["size"];
                $audioTmpName = $_FILES[$ed_audioName]["tmp_name"];
                $audioPath = "upload/audios/".$key."/".time().$audioFileName;
                $listPath[] = $audioPath;
                move_uploaded_file($audioTmpName,"../admin/".$audioPath);
            }
        }

        return $listPath;
    }
?>