<?php
    $act = isset($_GET['act']) ? $_GET['act']:'';
    $id = isset($_GET['id']) ? $_GET['id']:0;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $adminID = $_SESSION['id'];
        $title = mysql_escape_string($_POST['title']);
        $content = mysql_escape_string($_POST['content']);
        $email = $_POST['email'];
        $contact_id = $_POST['contact_id'];

        $headers = "Content-type: text/html; charset=utf-8\r\nFrom: Minanihongo.com";
        mail($email,$title, $content, $headers);
        execute("update tbl_contact_us set flag = 1, admin_id = $adminID where id = '$contact_id'");

        $msg = "<span style='color: blue'>Đã gửi câu trả lời tới người dùng</span>";
    }


    $sql = "select * from tbl_contact_us where id = '$id'";
    $contactData = fetch_one($sql);

    include_once "view/view_reply_contact.php";