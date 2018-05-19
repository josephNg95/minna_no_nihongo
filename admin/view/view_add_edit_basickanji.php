<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<div class="col-md-12">
    <div class="row">
        <p class="bd-primary">Thêm mới / Chỉnh sửa kanji </p>
    </div>
    <div class="row" style="margin-bottom: 80px;">
        <form method="post" class="form-horizontal" action="<?php echo $form_control;?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Bài học</label>
                <div class="col-sm-2">
                    <select name="lesson" id="" class="form-control input-sm">
                        <?php
                            for($i = 1; $i < 32; $i++) {
                        ?>
                            <option value="<?= $i;?>" <?php echo (isset($kanji) && $kanji['lesson'] == $i) ? 'selected':'';?> >Bài <?= $i;?></option>
                        <?php } ?>
                    </select>
                </div>
                <label for="" class="col-sm-2 control-label" style="margin-left:-65px">Trạng thái</label>
                <div class="col-sm-2">
                    <select name="status" id="" class="form-control input-sm">
                        <option value="1" <?php echo (isset($kanji) && $kanji['flag'] == 1) ? 'selected':'';?> >Hiển thị</option>
                        <option value="0" <?php echo (isset($kanji) && $kanji['flag'] != 1) ? 'selected':'';?> >Tạm ẩn</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Từ kanji</label>
                <div class="col-sm-4">
                    <input type="text" name="kanji" class="form-control input-sm" value="<?php echo (isset($kanji['kanji_word'])) ? $kanji['kanji_word']:'';?>" placeholder="語">
                </div>
            </div>
            
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Âm hán</label>
                <div class="col-sm-4">
                    <input type="text" name="china" class="form-control input-sm" value="<?php echo (isset($kanji['china_sound'])) ? $kanji['china_sound']:'';?>" placeholder="Ngữ">
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Nghĩa</label>
                <div class="col-sm-4">
                    <input type="text" name="vietnam" class="form-control input-sm" value="<?php echo (isset($kanji['vietnam_word'])) ? $kanji['vietnam_word']:'';?>" placeholder="từ,ngôn ngữ">
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Kunyomi</label>
                <div class="col-sm-4">
                    <input type="text" name="kun" class="form-control input-sm" value="<?php echo (isset($kanji['kunyomi'])) ? $kanji['kunyomi']:'';?>" placeholder="かた_る">
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Onyomi</label>
                <div class="col-sm-4">
                    <input type="text" name="on" class="form-control input-sm" value="<?php echo (isset($kanji['onyomi'])) ? $kanji['onyomi']:'';?>" placeholder="ゴ">
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Nét vẽ</label>
                <div class="col-sm-4">
                    <input type="file" name="draw">
                </div>
            </div>

            <div class="form-group">
                <label for="question_alphabet" class="col-sm-2 control-label">Ví dụ</label>
                <div class="col-md-10">
                    <textarea name="example" id="tinymce1"><?php echo (isset($kanji['example'])) ? $kanji['example']:'';?></textarea>
                </div>
            </div>
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

<script>
    tinymce.init({
    selector: '#tinymce1',
    height: 200,
    plugins: ' print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
    toolbar1: 'formatselect | table | bold italic underline forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
    image_advtab: true,
    menubar:false,
    statusbar: false,
    });
</script>