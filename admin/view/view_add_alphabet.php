<form method="post" class="form-horizontal" action="index.php?controller=add_edit_alphabet&act=add">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top:100px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius:3px;">
                <div class="modal-header" style="background: #428bca; color: #fff">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Thêm chữ cái mới</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="original" class="col-sm-3 control-label">Loại chữ</label>
                        <div class="col-sm-9">
                            <select name="type_alphabet" id="" class="form-control">
                                <option value="1">Chữ Hiragana</option>
                                <option value="2">Chữ Katakana</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="original" class="col-sm-3 control-label">Chữ cái mới</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="original" id="original" maxlength="5" placeholder="Nhập chữ của bạn" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="romaji" class="col-sm-3 control-label">Romaji</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="romaji" id="romaji" maxlength="10" placeholder="Nhập romaji" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin-top:-5px;">
                    <button type="reset" class="btn btn-default">
                        <i class="glyphicon glyphicon-remove"></i>
                        <span style="margin-left:1px;">Nhập lại</span>
                    </button>
                    <button type="submit" class="btn btn-primary" name="addAlphabet">
                        <i class="glyphicon glyphicon-ok"></i>
                        <span style="margin-left:1px;">Lưu</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>