<form method="post" class="form-horizontal" action="index.php?controller=add_edit_kaiwas&id=<?= $lessId;?>&act=addcon">
    <div class="modal fade" id="con_kaiwa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top:50px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius:3px;">
                <div class="modal-header" style="background: #428bca; color: #fff; ">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Thêm một câu thoại</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Trạng thái</label>
                        <div class="col-sm-3">
                            <select name="status" id="status" class="form-control input-sm">
                                <option value="1">Hiển thị</option>
                                <option value="2">Tạm ẩn</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name_jp" class="col-sm-3 control-label">Tên nhân vật (jp)</label>
                        <div class="col-sm-4">
                            <input type="text" name="name_jp" id="name_jp" class="form-control input-sm" placeholder="山田">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name_rm" class="col-sm-3 control-label">Tên nhân vật (romaji)</label>
                        <div class="col-sm-4">
                            <input type="text" name="name_rm" id="name_rm" class="form-control input-sm" placeholder="yamada">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content_jp" class="col-sm-3 control-label">Câu thoại (jp)</label>
                        <div class="col-sm-9">
                            <input type="text" name="content_jp" id="content_jp" class="form-control input-sm" placeholder="おはよう　ございます。">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="content_rm" class="col-sm-3 control-label">Câu thoại (romaji)</label>
                        <div class="col-sm-9">
                            <input type="text" name="content_rm" id="content_rm" class="form-control input-sm" placeholder="ohayou gozai masu.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content_vn" class="col-sm-3 control-label">Câu thoại (vn)</label>
                        <div class="col-sm-9">
                            <input type="text" name="content_vn" id="content_vn" class="form-control input-sm" placeholder="Chào anh!">
                        </div>
                    </div>

                    <input type="hidden" name="lessonId"  value="<?= $lessId;?>">
                </div>
                <div class="modal-footer" style="margin-top:-5px;">
                    <button type="reset" class="btn btn-default">
                        <i class="glyphicon glyphicon-remove"></i>
                        <span style="margin-left:1px;">Nhập lại</span>
                    </button>
                    <button type="submit" class="btn btn-primary" name="addConKaiwa">
                        <i class="glyphicon glyphicon-ok"></i>
                        <span style="margin-left:1px;">Lưu</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>