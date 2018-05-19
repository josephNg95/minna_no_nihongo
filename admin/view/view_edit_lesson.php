<form method="post" class="form-horizontal" action="index.php?controller=add_edit_lesson&act=edit" enctype="multipart/form-data">
    <div class="modal fade" id="editLessonModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top:50px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius:3px;">
                <div class="modal-header" style="background: #428bca; color: #fff">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Sửa bài học</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="editFlag" class="col-sm-3 control-label">Trạng thái</label>
                        <div class="col-sm-9">
                            <select name="editFlag" id="editFlag" class="form-control">
                                <option value="1" id="showLesson">Cho phép hiện</option>
                                <option value="2" id="hideLesson">Tạm ẩn</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lessonName" class="col-sm-3 control-label">Tên bài học</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="lessonName" id="lessonName1" maxlength="30" placeholder="Nhập tên bài học" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="audio_word" class="col-sm-3 control-label">File nghe từ mới</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control input-sm" name="ed_audio_word" id="audio_word">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="audio_kaiwa" class="col-sm-3 control-label">File nghe kaiwa</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control input-sm" name="ed_audio_kaiwa" id="audio_kaiwa">
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label for="audio_mondai" class="col-sm-3 control-label">File nghe mondai</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control input-sm" name="ed_audio_mondai" id="audio_mondai">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="audio_bunkei" class="col-sm-3 control-label">File nghe bunkei</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control input-sm" name="ed_audio_bunkei" id="audio_bunkei">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="audio_reibun" class="col-sm-3 control-label">File nghe reibun</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control input-sm" name="ed_audio_reibun" id="audio_reibun">
                        </div>
                    </div> -->
                    <input type="hidden" name="lessID" id="lessID">
                </div>
                <div class="modal-footer" style="margin-top:-5px;">
                    <button type="reset" class="btn btn-default">
                        <i class="glyphicon glyphicon-remove"></i>
                        <span style="margin-left:1px;">Nhập lại</span>
                    </button>
                    <button type="submit" class="btn btn-primary" name="editLesson">
                        <i class="glyphicon glyphicon-ok"></i>
                        <span style="margin-left:1px;">Lưu</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>