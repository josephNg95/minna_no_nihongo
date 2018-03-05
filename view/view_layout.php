<!DOCTYPE html PUBLIC>
<html>
<head>
    <title>Mina Nihongo</title>
    <meta charset="UTF-8"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
    <link href="public/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="public/bootstrap/css/jquery-3.1.0.min.js" rel="stylesheet" type="text/js"/>
    <script src='./public/js/jquery-1.11.3.min.js' type='text/javascript'></script>
</head>
<body>
<div id="wrapper">
    <?php include "view/view_header.php";?>
    <div id="top_content" class="clearfix">
        <?php
            if(isset($load_controller))
                include $load_controller;
        ?>
    </div>
    <?php include "view/view_footer.php";?>
</div>

<script type='text/javascript'>
$(function() {
 $(window).scroll(function() {
 if ($(this).scrollTop() != 0) {
 $('#bttop').fadeIn();
 } else {
 $('#bttop').fadeOut();
 }
 });
 $('#bttop').click(function() {
 $('body,html').animate({
 scrollTop: 0
 }, 800);
 });
});
</script>
<div id='bttop'><img src="public/images/back-top.png"></div>
</body>
</html>
