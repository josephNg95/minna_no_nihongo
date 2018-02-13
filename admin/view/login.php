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
                    <h3 class="panel-title">Đăng nhập trang quản trị</h3>
                </div>
                <div class="panel-body">
                	<p style="color: red; text-align: center;">
                		<?php 
                			if (isset($msg)) {
                				echo $msg;
                			}
                		?>
                	</p>
                    <form id="formSignin" role="form" action="index.php?controller=login" method="post">
                        <fieldset>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="text"
                                        class="form-control"
                                        placeholder="Tên đăng nhập"
                                        name="username"
                                        autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" id="btnLogin">
                                    <span class="glyphicon glyphicon-log-in"></span>&nbsp;<span class="txtBtnLogin">Đăng nhập</span>
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
