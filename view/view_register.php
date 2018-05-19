<div id="page-wrapper">
	<div class="col-md-12" style="margin-top: 20px; padding-top: 20px">
		<div class="container1">
			<div class="page-header">
				<h2>Xin chào, <small> mời bạn đăng ký tài khoản</small></h2>
			</div><!-- div.page-header -->
		</div><!-- div.container -->
		<div class="container1">
			<div class="row">
				<div class="col-md-6">
				<i><p class="" style="color: #f35f5f">(*) Mail xác nhận sẽ được gửi tới hòm thư của bạn. Vui lòng nhập đúng email</p></i>
					<form method="POST" id="formSignin" action="index.php?con=register&act=submit">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" name="username" class="form-control" placeholder="Tên đăng nhập" id="user_signin" required>
							</div><!-- div.input-group -->
							<?php echo isset($msgUsername) && $msgUsername!='' ? $msgUsername:'' ;?>
						</div><!-- div.form-group -->
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" name="password" class="form-control" placeholder="Mật khẩu" id="pass_signin" required>
							</div><!-- div.input-group -->
						</div><!-- div.form-group -->
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-glyphicon glyphicon-envelope"></span></span>
								<input type="email" name="email" class="form-control" placeholder="Email" id="email" required>
							</div><!-- div.input-group -->
							<?php echo isset($msg) && $msg!='' ? $msg:'' ;?>
						</div><!-- div.form-group -->
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-font"></span></span>
								<input type="text" name="fullname" class="form-control" placeholder="Họ và tên" id="fullname" required>
							</div><!-- div.input-group -->
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