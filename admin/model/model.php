<?php
    $db = mysqli_connect($hostname,$username,$password,$database);
    mysqli_set_charset($db,"UTF8");

    function fetch($sql){
        global $db;
        $result = mysqli_query($db,$sql);
        $arr = array();
        while($rows = mysqli_fetch_assoc($result)) {
            $arr[] = $rows;
        }

        return $arr;
    }

    function fetch_one($sql) {
        global $db;
        $query = mysqli_query($db,$sql);
        
        return mysqli_fetch_assoc($query);
    }

    function execute($sql) {
        global $db;
        mysqli_query($db,$sql);
    }

    function get_insert_id() {
        global $db;
        
        return mysqli_insert_id($db);
    }
?>