<div class="col-md-12">
    <div class="row" style="margin-bottom: 10px;">
        <p class="bd-primary">Thay đổi mật khẩu </p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form method="post" action="index.php?controller=change_password" enctype="multipart/form-data">
                <?php echo !empty($msg) ? $msg:'';?>
                <div class="form-group">
                    <label for="mail">Mật khẩu hiện tại</label>
                    <input type="password" name="oldPass" class="form-control input-sm" id="oldPass" required placeholder="Nhập mật khẩu cũ">
                </div>
                <div class="form-group">
                    <label for="mail">Mật khẩu mới</label>
                    <input type="password" name="newPass" class="form-control input-sm" id="newPass" required placeholder="Nhập mật khẩu mới">
                </div>
                <div class="form-group">
                    <label for="mail">Nhập lại mật khẩu mới</label>
                    <input type="password" name="rePass" class="form-control input-sm" id="rePass" required placeholder="Nhập lại mật khảu mới">
                </div>
                <!-- row -->
                <div class="row" style="margin-top: 15px; ">
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-primary">
                            <i class="glyphicon glyphicon-ok"></i> Lưu
                        </button>
                        <button type="reset" class="btn btn-warning">
                            <span class="glyphicon glyphicon-refresh" style="word-spacing: -8px;"></span> Nhập lại
                        </button>
                    </div>
                </div>
                <!-- end row -->
            </form>
        </div>
    </div>
</div>
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('imgPrev');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>