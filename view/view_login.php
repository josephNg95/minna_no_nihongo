<div id="page-wrapper">
    <div class="col-md-12" style="margin-top: 20px; padding-top: 20px">
        <div class="container1">
            <div class="page-header">
                <h2>Xin chào, <small> mời bạn đăng nhập</small></h2>
            </div><!-- div.page-header -->
        </div><!-- div.container -->
        <div class="container1">
            <div class="row">
                <div class="col-md-6">
                    <i class="text-muted"><p>Vui lòng đăng nhập để tiếp tục.</p></i>
                    <p style="color:#ef4747;"><?= isset($msg) ? $msg:'';?></p>
                    <form method="POST" id="formSignin" action="index.php?con=login">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" name="username" class="form-control" placeholder="Tên đăng nhập" id="user_signin">
                            </div><!-- div.input-group -->
                        </div><!-- div.form-group -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" name="password" class="form-control" placeholder="Mật khẩu" id="pass_signin">
                            </div><!-- div.input-group -->
                        </div><!-- div.form-group -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i> Đăng nhập</button>
                            <button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-refresh"></i> Nhập lại</button>
                        </div><!-- div.form-group -->
                        <div class="alert alert-danger hidden"></div>
                    </form><!-- form#formSignin -->
                </div><!-- dib.col-md-6 -->
            </div><!-- div.row -->
        </div><!-- div.container -->
    </div>
</div>