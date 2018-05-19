<div class="col-md-12">
    <div class="row">
        <p class="bd-primary">Thêm mới / Chỉnh sửa câu hỏi </p>
    </div>
    <div class="row" style="margin-bottom: 80px;">
        <form method="post" class="form-horizontal" action="<?php echo $form_control;?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="type_alphabet_test" class="col-sm-2 control-label">Loại câu hỏi</label>
                <div class="col-sm-10">
                    <select name="type_alphabet_test" id="type_alphabet_test" class="form-control input-sm">
                        <option value="1" <?php echo (isset($questionData) && $questionData['type'] == 1)?"selected":"";?>>Câu hỏi Hiragana</option>
                        <option value="2" <?php echo (isset($questionData) && $questionData['type'] == 2)?"selected":"";?>>Câu hỏi Katakana</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="question_alphabet" class="col-sm-2 control-label">Nội dung câu hỏi</label>
                <div class="col-md-10">
                    <textarea name="question_alphabet" id="question_alphabet" style="width:500px;"><?php echo isset($questionData["question"])?$questionData["question"]:"";?>
                    </textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace('question_alphabet');
                    </script>
                </div>
            </div>
            <?php 
                if($_GET["controller"]=="add_edit_alphabet_test" && $_GET["act"]=="add"){
                    include "v_add_alphabet_test.php";
                }
                else if($_GET["controller"]=="add_edit_alphabet_test" && $_GET["act"]=="edit"){
                    include "v_edit_alphabet_test.php";
                }
            ?>
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
    function resetBtn() {
        window.location.reload();
    }
</script>