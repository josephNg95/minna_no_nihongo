<div id="page-wrapper">
	<div class="col-md-12" style="margin-top: 20px; padding-top: 20px">
		<div class="container1">
			<div class="page-header">
				<h3>Thay đổi thông tin tài khoản</small></h3>
			</div><!-- div.page-header -->
		</div><!-- div.container -->
		<div class="container1">
			<div class="row">
				<div class="col-md-6">
					<form method="POST" id="formSignin" action="index.php?con=change_info">
						<i><p class="text-muted">(*) Bạn sẽ đăng nhập lại nếu thay đổi tên đăng nhập</p></i>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" name="username" class="form-control" placeholder="Tên đăng nhập" value="<?= $userInfo['username'];?>" required>
							</div><!-- div.input-group -->
							<?php echo isset($msgUsername) && $msgUsername!='' ? $msgUsername:'' ;?>
						</div><!-- div.form-group -->
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-glyphicon glyphicon-envelope"></span></span>
								<input type="email" name="email" class="form-control" placeholder="Email" value="<?= $userInfo['email'];?>" required>
							</div><!-- div.input-group -->
						</div><!-- div.form-group -->
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-font"></span></span>
								<input type="text" name="fullname" class="form-control" placeholder="Họ và tên" value="<?= $userInfo['fullname'];?>" required>
							</div><!-- div.input-group -->
						</div><!-- div.form-group -->
						<i><p class="text-muted" >(*) Bạn phải nhập mật khẩu để cho phép thay đổi</p></i>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" name="password" class="form-control" placeholder="Mật khẩu" id="pass_signin" required>
							</div><!-- div.input-group -->
							<?php echo isset($msgPassword) && $msgPassword!='' ? $msgPassword:'' ;?>
						</div><!-- div.form-group -->
						<div class="form-group">
							<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i> Đăng ký</button>
							<button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-refresh"></i> Nhập lại</button>
						</div><!-- div.form-group -->
						<div class="alert alert-danger hidden"></div>
					</form><!-- form#formSignin -->
				</div><!-- dib.col-md-6 -->
			</div><!-- div.row -->
		</div><!-- div.container -->
	</div>
</div>