<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
</head>
<body style="background: #ededed">
<div class="container" style="margin-top: 150px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="login-panel panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Quên mật khẩu</h3>
                </div>
                <div class="panel-body">
                	<p style="text-align: center;">
                		<?php 
                			if (isset($msg)) {
                				echo $msg;
                			}
                		?>
                	</p>
                    <form id="formSignin" role="form" action="reset_pass.php?act=send" method="post">
                        <fieldset>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                    <input type="email"
                                        class="form-control"
                                        placeholder="Email tài khoản của bạn"
                                        name="email"
                                        autofocus>
                                </div>
                            </div>
                            <div>
                                <p class="pull-right">
                                    <a href="index.php">Quay lại đăng nhập</a>
                                </p>
                                <br>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" id="btnLogin">
                                    <span class="glyphicon glyphicon-send"></span>&nbsp;<span class="txtBtnLogin">Gửi lại mật khẩu</span>
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
