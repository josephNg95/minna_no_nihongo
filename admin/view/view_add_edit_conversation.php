<div class="col-md-12">
    <div class="row">
        <p class="bd-primary">Thêm mới / Chỉnh sửa câu hội thoại </p>
    </div>
    <div class="row" style="margin-bottom: 80px;">
        <form method="post" class="form-horizontal" action="<?php echo $form_control;?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Loại hội thoại</label>
                <div class="col-sm-3">
                    <select name="con_type" id="" class="form-control" required required>
                        <option value="">-- Chọn loại hội thoại --</option>
                        <option <?php echo (isset($conversationEdit) && $conversationEdit['type'] == 'chaohoi') ? 'selected':'';?> value="chaohoi">Chào hỏi</option>
                        <option <?php echo (isset($conversationEdit) && $conversationEdit['type'] == 'hoithoai') ? 'selected':'';?> value="hoithoai">Hội thoại</option>
                        <option <?php echo (isset($conversationEdit) && $conversationEdit['type'] == 'sodem') ? 'selected':'';?> value="sodem">Số đếm</option>
                        <option <?php echo (isset($conversationEdit) && $conversationEdit['type'] == 'ngaythang') ? 'selected':'';?> value="ngaythang">Ngày tháng</option>
                        <option <?php echo (isset($conversationEdit) && $conversationEdit['type'] == 'phuonghuong') ? 'selected':'';?> value="phuonghuong">Phương hướng</option>
                        <option <?php echo (isset($conversationEdit) && $conversationEdit['type'] == 'giaothong') ? 'selected':'';?> value="giaothong">Giao thông</option>
                        <option <?php echo (isset($conversationEdit) && $conversationEdit['type'] == 'choo') ? 'selected':'';?> value="choo">Chỗ ở</option>
                        <option <?php echo (isset($conversationEdit) && $conversationEdit['type'] == 'anuong') ? 'selected':'';?> value="anuong">Ăn uống</option>
                        <option <?php echo (isset($conversationEdit) && $conversationEdit['type'] == 'muasam') ? 'selected':'';?> value="muasam">Mua sắm</option>
                        <option <?php echo (isset($conversationEdit) && $conversationEdit['type'] == 'mausac') ? 'selected':'';?> value="mausac">Màu sắc</option>
                        <option <?php echo (isset($conversationEdit) && $conversationEdit['type'] == 'thanhpho') ? 'selected':'';?> value="thanhpho">Thành phố</option>
                        <option <?php echo (isset($conversationEdit) && $conversationEdit['type'] == 'tennuoc') ? 'selected':'';?> value="tennuoc">Tên nước</option>
                        <option <?php echo (isset($conversationEdit) && $conversationEdit['type'] == 'dulich') ? 'selected':'';?> value="dulich">Du lịch</option>
                        <option <?php echo (isset($conversationEdit) && $conversationEdit['type'] == 'giadinh') ? 'selected':'';?> value="giadinh">Gia đình</option>
                        <option <?php echo (isset($conversationEdit) && $conversationEdit['type'] == 'henho') ? 'selected':'';?> value="henho">Hẹn hò</option>
                        <option <?php echo (isset($conversationEdit) && $conversationEdit['type'] == 'khancap') ? 'selected':'';?> value="khancap">Khẩn cấp</option>
                        <option <?php echo (isset($conversationEdit) && $conversationEdit['type'] == 'dauom') ? 'selected':'';?> value="dauom">Đau ốm</option>
                        <option <?php echo (isset($conversationEdit) && $conversationEdit['type'] == 'thanhngu') ? 'selected':'';?> value="thanhngu">Thành ngữ</option>
                    </select>
                </div>
                <label for="" class="col-sm-2 control-label" style="margin-left:-65px">Trạng thái</label>
                <div class="col-sm-2">
                    <select name="status" id="" class="form-control">
                         <option value="1" <?php echo (isset($conversationEdit) && $conversationEdit['flag'] == 1) ? 'selected':'';?> >Hiển thị</option>
                        <option value="0" <?php echo (isset($conversationEdit) && $conversationEdit['flag'] != 1) ? 'selected':'';?> >Tạm ẩn</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Hội thoại tiếng việt</label>
                <div class="col-sm-9">
                    <input type="text" name="con_vn" class="form-control" value="<?php echo isset($conversationEdit) ? $conversationEdit['vietnam_con']:'';?>" required placeholder="Chào buổi sáng">
                </div>
            </div>
            
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Hội thoại kana</label>
                <div class="col-sm-9">
                    <input type="text" name="con_kana" class="form-control" value="<?php echo isset($conversationEdit) ? $conversationEdit['japan_con']:'';?>" required placeholder="おはようございます">
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Hội thoại romaji</label>
                <div class="col-sm-9">
                    <input type="text" name="con_romaji" class="form-control" value="<?php echo isset($conversationEdit) ? $conversationEdit['romaji_con']:'';?>" required placeholder="Ohayo gozaimasu">
                </div>
            </div>
            <!-- <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Audio</label>
                <div class="col-sm-4">
                    <input type="file" name="audio">
                </div>
            </div> -->
            <!-- row -->
            <div class="form-group" style="margin-top:25px;">
                <label for="answer" class="col-sm-2"></label>
                <button type="submit" class="btn btn-primary">
                    <i class="glyphicon glyphicon-ok"></i>
                    <span style="margin-left:1px;">Lưu</span>
                </button>
                <button type="reset" class="btn btn-warning">
                    <i class="glyphicon glyphicon-refresh"></i>
                    <span style="margin-left:1px;">Nhập lại</span>
                </button>
            </div>
            <!-- end row -->
        </form>
    </div>
</div>

