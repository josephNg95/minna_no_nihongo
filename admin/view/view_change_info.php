<div class="col-md-12">
    <div class="row">
        <p class="bd-primary">Chỉnh sửa thông tin của bạn </p>
    </div>
    <div class="row">
        <div class="col-md-8"><br>
            <?php
                echo !empty($msg) ? $msg:'';
            ?>
            <form method="post" action="index.php?controller=change_info" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="uname">Tên đăng nhập</label>
                    <input type="text" name="username" class="form-control input-sm" id="uname" value="<?php echo isset($arr["username"])?$arr["username"]:"";?>" required>
                    <span class="text-muted" style="color:#ef4343">(Bạn sẽ phải đăng nhập lại nếu đổi tên đăng nhập)</span>
                </div>
                <div class="form-group">
                    <label for="fname">Tên hiển thị</label>
                    <input type="text" name="fullname" class="form-control input-sm" id="fname" value="<?php echo isset($arr["fullname"])?$arr["fullname"]:"";?>" required>
                </div>
                <div class="form-group">
                    <label for="mail">Email</label>
                    <input type="email" name="email" class="form-control input-sm" id="mail" value="<?php echo isset($arr["email"])?$arr["email"]:"";?>" required>
                </div>
                <div class="form-group">
                    <span for="pass" style="color:#ef4343">Nhập mật khẩu để cho phép thay đổi</span>
                    <input type="password" name="password" class="form-control input-sm" id="pass" required>
                </div>
                <div class="form-group">
                    <label for="avt">Ảnh đại diện</label>
                    <input type="file" name="avatar" id="avt" onchange="previewImage(event)">
                </div>
                <!-- row -->
                <div class="row" style="margin-top: 15px; ">
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-primary" name="change">
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
        <div class="col-md-4">
            <img src="<?php echo isset($arr["avatar"])? $arr["avatar"]:"./img/def.png";?>" alt="" id="imgPrev" style="width: 200px; height: 200px; border-radius: 5px;">
            <p style="margin-top: 15px; color: red;">
                <i>Ảnh đại diện của bạn</i>
            </p>
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