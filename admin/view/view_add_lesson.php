<form method="post" class="form-horizontal" action="index.php?controller=add_edit_lesson&act=add" enctype="multipart/form-data">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top:50px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius:3px;">
                <div class="modal-header" style="background: #428bca; color: #fff">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Thêm bài học mới</h4>
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
                        <label for="lessonName" class="col-sm-3 control-label">Tên bài học</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" name="lessonName" id="lessonName" maxlength="30" placeholder="Nhập tên bài học" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="audio_word" class="col-sm-3 control-label">File nghe từ mới</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control input-sm" name="audio_word" id="audio_word" value="E:\PHP\Experiment\project\admin\upload\audios\bunkei\1518084413Galantis - No Money.mp3" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="audio_kaiwa" class="col-sm-3 control-label">File nghe kaiwa</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control input-sm" name="audio_kaiwa" id="audio_kaiwa" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="audio_mondai" class="col-sm-3 control-label">File nghe mondai</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control input-sm" name="audio_mondai" id="audio_mondai" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="audio_bunkei" class="col-sm-3 control-label">File nghe bunkei</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control input-sm" name="audio_bunkei" id="audio_bunkei" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="audio_reibun" class="col-sm-3 control-label">File nghe reibun</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control input-sm" name="audio_reibun" id="audio_reibun" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin-top:-5px;">
                    <button type="reset" class="btn btn-default">
                        <i class="glyphicon glyphicon-remove"></i>
                        <span style="margin-left:1px;">Nhập lại</span>
                    </button>
                    <button type="submit" class="btn btn-primary" name="addLesson">
                        <i class="glyphicon glyphicon-ok"></i>
                        <span style="margin-left:1px;">Lưu</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>