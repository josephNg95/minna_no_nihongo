<form method="post" class="form-horizontal" action="index.php?controller=add_edit_new_words&act=add">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top:50px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius:3px;">
                <div class="modal-header" style="background: #428bca; color: #fff">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Thêm từ mới</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Trạng thái</label>
                        <div class="col-sm-9">
                            <select name="status" id="status" class="form-control input-sm">
                                <option value="1">Hiển thị</option>
                                <option value="2">Tạm ẩn</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_word" class="col-sm-3 control-label">Từ mới</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" name="new_word" id="new_word" maxlength="30" placeholder="がくせい" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mean_vn" class="col-sm-3 control-label">Nghĩa tiếng việt</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" name="mean_vn" id="mean_vn" maxlength="30" placeholder="học sinh, sinh viên" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kanji" class="col-sm-3 control-label">Kanji</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" name="kanji" id="kanji" maxlength="30" placeholder="学生" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mean_ch" class="col-sm-3 control-label">Nghĩa Hán-Việt</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" name="mean_ch" id="mean_ch" placeholder="học sinh" maxlength="30" required>
                        </div>
                    </div>
                    <input type="hidden" name="lesson_id" id="lesson_id" value="<?= $lessId;?>">
                </div>
                <div class="modal-footer" style="margin-top:-5px;">
                    <button type="reset" class="btn btn-default">
                        <i class="glyphicon glyphicon-remove"></i>
                        <span style="margin-left:1px;">Nhập lại</span>
                    </button>
                    <button type="submit" class="btn btn-primary" name="addNewWord">
                        <i class="glyphicon glyphicon-ok"></i>
                        <span style="margin-left:1px;">Lưu</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>