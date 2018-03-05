<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<div class="col-md-12">
    <div class="row">
        <p class="bd-primary">Thêm mới / Chỉnh sửa câu hỏi </p>
    </div>
    <div class="row" style="margin-bottom: 80px;">
        <form method="post" class="form-horizontal" action="<?php echo $form_control;?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Loại câu hỏi</label>
                <div class="col-sm-4">
                    <select name="" id="" class="form-control input-sm">
                    <option value="">--- Chọn loại câu hỏi ---</option>
                    <option value="">N4 Ngữ pháp</option>
                    <option value="">N4 Từ vựng</option>
                    <option value="">N4 Kanji</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="question_alphabet" class="col-sm-2 control-label">Nội dung câu hỏi</label>
                <div class="col-md-10">
                    <textarea name="" id="tinymce1"></textarea>
                </div>
            </div>
            <!-- row -->
            <div class="form-group">
                <label for="answer1" class="col-sm-2 control-label">Đáp án 1</label>
                <div class="col-sm-10">
                    <input type="text" name="answer1" id="answer1" class="form-control input-sm">
                </div>
            </div>
            <div class="form-group">
                <label for="answer2" class="col-sm-2 control-label">Đáp án 2</label>
                <div class="col-sm-10">
                    <input type="text" name="answer2" id="answer2" class="form-control input-sm">
                </div>
            </div>
            <div class="form-group">
                <label for="answer3" class="col-sm-2 control-label">Đáp án 3</label>
                <div class="col-sm-10">
                    <input type="text" name="answer3" id="answer3" class="form-control input-sm">
                </div>
            </div>
            <div class="form-group">
                <label for="answer4" class="col-sm-2 control-label">Đáp án 4</label>
                <div class="col-sm-10">
                    <input type="text" name="answer4" id="answer4" class="form-control input-sm">
                </div>
            </div>
            <div class="form-group">
                <label for="answer" class="col-sm-2 control-label">Đáp án đúng</label>
                <label class="radio-inline" style="margin-left: 20px;">
                    <input type="radio" name="ra_answer" id="ra_answer1" value="1" checked> Đáp án 1
                </label>
                <label class="radio-inline">
                    <input type="radio" name="ra_answer" id="ra_answer2" value="2"> Đáp án 2
                </label>
                <label class="radio-inline">
                    <input type="radio" name="ra_answer" id="ra_answer3" value="3"> Đáp án 3
                </label>
                <label class="radio-inline">
                    <input type="radio" name="ra_answer" id="ra_answer3" value="4"> Đáp án 4
                </label>
            </div>
            <!-- end row -->
            <!-- row -->
            <div class="form-group" style="margin-top:25px;">
                <label for="answer" class="col-sm-2"></label>
                <button type="submit" class="btn btn-primary" name="alphabetTest">
                    <i class="glyphicon glyphicon-ok"></i>
                    <span style="margin-left:1px;">Lưu</span>
                </button>
                <button type="reset" class="btn btn-warning" onclick="resetBtn()">
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