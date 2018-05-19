<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<div class="col-md-12">
    <div class="row">
        <p class="bd-primary">Thêm mới / Chỉnh sửa câu hỏi </p>
    </div>
    <div class="row" style="margin-bottom: 80px;">
        <form method="post" class="form-horizontal" action="<?php echo $form_control;?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="type_alphabet_test" class="col-sm-2 control-label">Loại câu hỏi</label>
                <div class="col-sm-3">
                    <select name="type_alphabet_test" id="type_alphabet_test" class="form-control input-sm">
                        <option value="1" <?php echo (isset($questionData) && $questionData['type'] == 1)?"selected":"";?>>Câu hỏi Hiragana</option>
                        <option value="2" <?php echo (isset($questionData) && $questionData['type'] == 2)?"selected":"";?>>Câu hỏi Katakana</option>
                    </select>
                </div>
                <label for="show" class="col-sm-2 control-label">Trạng thái hiện thị</label>
                <div class="col-sm-3">
                    <select name="flag" id="show" class="form-control input-sm">
                        <option value="1" <?php echo (isset($questionData) && $questionData['flag'] == 1)? "selected":"";?>>Hiện</option>
                        <option value="0" <?php echo (isset($questionData) && $questionData['flag'] != 1)? "selected":"";?>>Ẩn</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="question_alphabet" class="col-sm-2 control-label">Nội dung câu hỏi</label>
                <div class="col-md-10">
                    <textarea name="question_alphabet" id="tinymce1"><?php echo isset($questionData["question"])?$questionData["question"]:"";?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="answer1" class="col-sm-2 control-label">Đáp án 1</label>
                <div class="col-sm-10">
                    <input type="text" name="answer1" id="answer1" value="<?php echo isset($questionData['answer_1']) ? $questionData['answer_1']:"";?>" class="form-control input-sm">
                </div>
            </div>
            <div class="form-group">
                <label for="answer2" class="col-sm-2 control-label">Đáp án 2</label>
                <div class="col-sm-10">
                    <input type="text" name="answer2" id="answer2" value="<?php echo isset($questionData['answer_2']) ? $questionData['answer_2']:"";?>" class="form-control input-sm">
                </div>
            </div>
            <div class="form-group">
                <label for="answer3" class="col-sm-2 control-label">Đáp án 3</label>
                <div class="col-sm-10">
                    <input type="text" name="answer3" id="answer3" value="<?php echo isset($questionData['answer_3']) ? $questionData['answer_3']:"";?>" class="form-control input-sm">
                </div>
            </div>
            <div class="form-group">
                <label for="answer4" class="col-sm-2 control-label">Đáp án 4</label>
                <div class="col-sm-10">
                    <input type="text" name="answer4" id="answer4" value="<?php echo isset($questionData['answer_4']) ? $questionData['answer_4']:"";?>" class="form-control input-sm">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Đáp án đúng</label>
                <label class="radio-inline" style="margin-left: 20px;">
                    <input type="radio" name="ra_answer" id="ra_answer1" value="1" <?php echo (!isset($questionData) || $questionData['is_answer'] == 1)?"checked":"";?>> Đáp án 1
                </label>
                <label class="radio-inline">
                    <input type="radio" name="ra_answer" id="ra_answer2" value="2" <?php echo (isset($questionData) && $questionData['is_answer'] == 2)?"checked":"";?>> Đáp án 2
                </label>
                <label class="radio-inline">
                    <input type="radio" name="ra_answer" id="ra_answer3" value="3" <?php echo (isset($questionData) && $questionData['is_answer'] == 3)?"checked":"";?>> Đáp án 3
                </label>
                <label class="radio-inline">
                    <input type="radio" name="ra_answer" id="ra_answer3" value="4" <?php echo (isset($questionData) && $questionData['is_answer'] == 4)?"checked":"";?>> Đáp án 4
                </label>
            </div>
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