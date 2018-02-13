<?php  
    // file config
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "minna_nihongo";
    $db = mysqli_connect($hostname,$username,$password,$database);
    mysqli_set_charset($db,"UTF8");
?>
