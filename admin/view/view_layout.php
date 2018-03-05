<!DOCTYPE html>
<html>
<head>
  <title>Trang Quản lý</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="public/css/style.css">
  <!-- load editor -->
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <script src="./public/js/jquery-3.1.0.min.js"></script>
  <script src="./public/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="<?= $rootURL;?>">Minna Nihongo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="home"?"active":"";?>"><a href="index.php?controller=home">Trang chủ</a></li>
          <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="alphabet"?"active":"";?> dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bảng chữ cái
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="index.php?controller=alphabet">Alphabet</a></li>
              <li><a href="index.php?controller=alphabet_test">Kiểm tra alphabet</a></li>
            </ul>
          </li>
          <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="lesson"?"active":"";?>"><a href="index.php?controller=lesson">50 bài Minna</a></li>
          <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="basickanji"?"active":"";?>"><a href="index.php?controller=basickanji">512 từ Kanji cơ bản</a></li>
          <li class="<?php echo isset($_GET["controller"])&&($_GET["controller"]=="conversation" || $_GET["controller"]=="add_edit_conversation")?"active":"";?>"><a href="index.php?controller=conversation">Mẫu câu giao tiếp</a></li>
          <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="jlpttest"?"active":"";?>">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Luyện thi
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="index.php?controller=jlpttest&lv=4">Thi N4</a></li>
              <li><a href="index.php?controller=jlpttest&lv=5">Thi N5</a></li>
            </ul>
          </li>
          <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="reference"||$_GET["controller"]=="add_edit_reference"?"active":"";?>"><a href="index.php?controller=reference">Bài viết</a></li>
          <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="user"?"active":"";?>"><a href="index.php?controller=user">Người dùng</a></li>
        </ul>
    </div>
  </div>
</nav>
<!-- 336.75 -->
    <div class="wrapper-admin" style="margin-top: 100px;">
      <div class="col-md-12" style="padding: 0px;">
        <div class="col-md-3" style="padding: 0px;">
          <!-- ==========side bar============ -->
            <?php include "controller/controller_profile_sidebar.php";?>
          <!-- ==========side bar============ -->
        </div>
        <div class="col-md-8" style="padding: 0px; right: 0px;">
          <?php if(file_exists($load_controller)){ include $load_controller;} ?>
        </div>
      </div>
    </div>
</body>
</html>