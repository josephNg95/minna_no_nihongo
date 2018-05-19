<?php
    // =========================================
    $act = isset($_GET["act"]) ? $_GET["act"]: "";
    switch ($act) {
        case 'delete':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            execute("delete from tbl_test_and_jlpt where id = $id");
            header("location:index.php?controller=alphabet_test");
            break;
        default:
            # code...
            break;
    }

        $record_perpage = 10;        
        $total_record = fetch_one("select count(*) as total from tbl_test_and_jlpt where type='1' or type='2'");
        
        $num_page = ceil($total_record["total"]/$record_perpage);
        $page = 1;
        $page = isset($_GET["p"]) ? $_GET["p"]:0;
        $page = $page <= 0 ? 0:$page-1;
        $from = $page * $record_perpage;
        $arr_kana_test = fetch("select * from tbl_test_and_jlpt where type='1' or type='2' order by id desc limit $from,$record_perpage");
        include "view/view_alphabet_test.php";
    
?>