<form method="post" class="form-horizontal" action="index.php?controller=add_edit_new_words&act=edit">
    <div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top:50px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius:3px;">
                <div class="modal-header" style="background: #428bca; color: #fff">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Sửa từ mới</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="ed_status" class="col-sm-3 control-label">Trạng thái</label>
                        <div class="col-sm-9">
                            <select name="ed_status" id="ed_status" class="form-control input-sm">
                                <option value="1" id="showWord">Hiển thị</option>
                                <option value="2" id="hiddenWord">Tạm ẩn</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ed_new_word" class="col-sm-3 control-label">Từ mới</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" name="ed_new_word" id="ed_new_word" maxlength="30" placeholder="がくせい" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ed_mean_vn" class="col-sm-3 control-label">Nghĩa tiếng việt</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" name="ed_mean_vn" id="ed_mean_vn" maxlength="30" placeholder="học sinh, sinh viên" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ed_kanji" class="col-sm-3 control-label">Kanji</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" name="ed_kanji" id="ed_kanji" maxlength="30" placeholder="学生">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ed_mean_ch" class="col-sm-3 control-label">Nghĩa Hán-Việt</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" name="ed_mean_ch" id="ed_mean_ch" placeholder="học sinh" maxlength="30">
                        </div>
                    </div>
                    <input type="hidden" name="ed_word_id" id="ed_word_id">
                    <input type="hidden" name="less_id" value="<?= $lessId;?>">
                </div>
                <div class="modal-footer" style="margin-top:-5px;">
                    <button type="reset" class="btn btn-default">
                        <i class="glyphicon glyphicon-remove"></i>
                        <span style="margin-left:1px;">Nhập lại</span>
                    </button>
                    <button type="submit" class="btn btn-primary" name="editNewWord">
                        <i class="glyphicon glyphicon-ok"></i>
                        <span style="margin-left:1px;">Lưu</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>