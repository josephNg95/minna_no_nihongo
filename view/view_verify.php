<div id="page-wrapper">
	<div class="col-md-12" style="margin-top: 20px; padding-top: 20px">
		<div class="container1">
			<div class="page-header">
				<h2>Xin chào, <small> mời bạn nhập mã xác minh</small></h2>
			</div><!-- div.page-header -->
		</div><!-- div.container -->
		<div class="container1">
			<div class="row">
				<div class="col-md-6">
                <i>
                    <p style='color:blue'>Vui lòng nhập mã xác nhận đã được gửi tới email của bạn để hoàn tất đăng ký!</p>
                </i>
					<form method="POST" id="formSignin" action="index.php?con=verify">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-qrcode"></span></span>
								<input type="text" name="code" class="form-control" placeholder="Nhập mã xác minh" id="code">
							</div><!-- div.input-group -->
                        </div><!-- div.form-group -->
                        <input type="hidden" name="email" value="<?= $email;?>">
						<div class="form-group">
							<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i> Xác nhận</button>
						</div><!-- div.form-group -->
					</form><!-- form#formSignin -->
				</div><!-- dib.col-md-6 -->
			</div><!-- div.row -->
		</div><!-- div.container -->
	</div>
</div>