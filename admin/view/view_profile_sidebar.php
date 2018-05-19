<div class="col-md-12 sidebar">
<ul class="list-group">
<li class="list-group-item">
<div class="media">
<a class="pull-left">
<img class="media-object" src="<?= $arr_profile['avatar'];?>" alt="Ảnh đại diện của admin" width="64px" height="64px">
</a>
<div class="media-body"  style="margin-top:10px; margin-left:85px">
<h4 class="media-heading"><?= $arr_profile['fullname'];?></h4>
<p class="label <?= ($arr_profile["level"] == 0)?"label-primary":"label-warning";?>"><?= ($arr_profile["level"] == 0) ? "Quản trị viên":"Cộng tác viên";?></p>
</div>
</div>
</li>
<a class="list-group-item <?= empty($_GET["controller"])||$_GET["controller"]=="home"?"active":"";?>" href="index.php">
<span class="glyphicon glyphicon-dashboard"></span> Trang chủ
</a>
<a class="list-group-item <?= isset($_GET["controller"])&&$_GET["controller"]=="change_password"?"active":"";?>" href="index.php?controller=change_password">
<span class="glyphicon glyphicon-user"></span> Đổi mật khẩu
</a>
<a class="list-group-item <?= isset($_GET["controller"])&&$_GET["controller"]=="add_edit_post"?"active":"";?>" href="index.php?controller=add_edit_post&act=add">
<span class="glyphicon glyphicon-edit"></span> Viết bài
</a>  
<a class="list-group-item <?= isset($_GET["controller"])&&$_GET["controller"]=="change_info"?"active":"";?>" href="index.php?controller=change_info">
<span class="glyphicon glyphicon-cog"></span> Sửa thông tin
</a>
<a class="list-group-item" onclick="return window.confirm('Đăng xuất ngay ?')" href="?controller=logout">
<span class="glyphicon glyphicon-off"></span> Đăng xuất
</a>
</ul>
</div>