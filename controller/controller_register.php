<?php 
$act = isset($_GET["act"]) ? $_GET["act"]:"";
if ($act == 'submit') {
    $username = mysql_escape_string($_POST["username"]);
    $fullname = mysql_escape_string($_POST["fullname"]);
    $email = mysql_escape_string($_POST["email"]);
    $password = md5(mysql_escape_string($_POST["password"]));
    $verify_code = createRandomCode();

    $mailUique = fetch_one("select count(*) as count from tbl_user where email='$email' and verify=1");
    $userNameUique = fetch_one("select count(*) as count from tbl_user where username='$username' and verify=1");
    if ($mailUique['count'] == 0 && $userNameUique['count'] == 0) {

        execute("insert into tbl_user(username,password,fullname,email,create_date,verify_code) values('$username','$password','$fullname', '$email', now(), '$verify_code')");
        header('location:index.php?con=verify&mail='.$email);
        $message = "Đây là mã xác nhận của bạn:".$verify_code;
        $headers = "Content-type: text/html; charset=utf-8\r\nFrom: Minanihongo.com";
        mail($email,"Mã xác nhận đăng ký", $message, $headers);
    }
    if ($mailUique['count'] > 0 || $userNameUique['count'] > 0) {
        $msg = ($mailUique['count'] > 0) ? "<p style='color:#f35f5f; font-size: 12px;'>Email đã tồn tại, vui lòng kiểm tra lại</p>" : '';
        $msgUsername = ($userNameUique['count'] > 0) ? "<p style='color:#f35f5f; font-size: 12px;'>Tên đăng nhập đã tồn tại, vui lòng kiểm tra lại</p>" : '';

        include "view/view_register.php";
    }
} else {
    if(!isset($_SESSION["user_name"]) == true) {
        include "view/view_register.php";
    } else {
        header("location:index.php?con=profile");
    }
}


function createRandomCode() { 
    $chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
    srand((double)microtime()*1000000); 
    $i = 0; 
    $pass = '' ; 

    while ($i <= 7) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $pass = $pass . $tmp; 
        $i++; 
    } 

    return $pass; 
}