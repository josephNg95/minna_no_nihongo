<div class="col-md-12 sidebar">
<ul class="list-group">
<li class="list-group-item">
<div class="media">
<a class="pull-left">
<img class="media-object" src="./img/def.png" alt="Ảnh đại diện của admin" width="64px" height="64px">
</a>
<div class="media-body"  style="margin-top:10px; margin-left:85px">
<h4 class="media-heading"><?php echo $arr_profile['fullname'];?></h4>
<p class="label <?php echo ($arr_profile["level"] == 0) ? "label-primary":"label-warning";?>"><?php echo ($arr_profile["level"] == 0) ? "Quản trị viên":"Cộng tác viên";?></p>
</div>
</div>
</li>
<a class="list-group-item active" href="">
<span class="glyphicon glyphicon-dashboard"></span> Bảng điều khiển
</a>
<a class="list-group-item" href="profile">
<span class="glyphicon glyphicon-user"></span> Đổi mật khẩu
</a>
<a class="list-group-item" href="posts">
<span class="glyphicon glyphicon-edit"></span> Bài viết
</a>  
<a class="list-group-item" href="' . $_DOMAIN . 'setting">
<span class="glyphicon glyphicon-cog"></span> Cài đặt chung
</a>
<a class="list-group-item" onclick="return window.confirm('Đăng xuất ngay ?')" href="?controller=logout">
<span class="glyphicon glyphicon-off"></span> Đăng xuất
</a>
</ul>
</div>