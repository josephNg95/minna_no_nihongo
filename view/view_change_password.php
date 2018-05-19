<div id="page-wrapper">
    <div class="col-md-12" style="margin-top: 20px; padding-top: 20px">
        <div class="container1">
            <div class="page-header">
                <h3>Thay đổi mật khẩu</h3>
            </div><!-- div.page-header -->
        </div><!-- div.container -->
        <div class="container1">
            <div class="row">
                <div class="col-md-6">
                    <p style="color:#ef4747;"><?= isset($msg) ? $msg:'';?></p>
                    <form method="POST" id="formSignin" action="index.php?con=change_password">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                                <input type="password" name="oldPass" class="form-control" placeholder="Mật khẩu cũ" id="pass_signin">
                            </div><!-- div.input-group -->
                        </div><!-- div.form-group -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-edit"></span></span>
                                <input type="password" name="newPass" class="form-control" placeholder="Mật khẩu mới" id="pass_signin">
                            </div><!-- div.input-group -->
                        </div><!-- div.form-group -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-repeat"></span></span>
                                <input type="password" name="rePass" class="form-control" placeholder="Nhập lại mật khẩu mới" id="pass_signin">
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