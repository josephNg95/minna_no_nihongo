<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<div class="col-md-12">
    <div class="row">
        <p class="bd-primary">Thêm mới / Chỉnh sửa đáp án</p>
    </div>
    <div class="row" style="margin-bottom: 80px; margin-top:20px;">
        <form method="post" class="form-horizontal" action="<?php echo $form_control;?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="flag" class="col-sm-2 control-label">Trạng thái</label>
                <div class="col-md-2">
                    <select name="flag" id="flag" class="form-control input-sm">
                        <option value="1" <?= (!empty($mondai) && $mondai['flag'] == 1)?"selected":"";?>>Hiển thị</option>
                        <option value="2" <?= (!empty($mondai) &&  $mondai['flag'] != 1)?"selected":"";?>>Tạm ẩn</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="tinymce1" class="col-sm-2 control-label">Đáp án câu 1</label>
                <div class="col-md-10">
                    <textarea name="answer1" id="tinymce1"><?= isset($mondai['answer_st']) ? $mondai['answer_st']:"";?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="tinymce2" class="col-sm-2 control-label">Đáp án câu 2</label>
                <div class="col-md-10">
                    <textarea name="answer2" id="tinymce2"><?= isset($mondai['answer_nd']) ? $mondai['answer_nd']:"";?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="tinymce3" class="col-sm-2 control-label">Đáp án câu 3</label>
                <div class="col-md-10">
                    <textarea name="answer3" id="tinymce3"><?= isset($mondai['answer_rd']) ? $mondai['answer_rd']:"";?></textarea>
                </div>
            </div>
            <!-- <input type="hidden" name="gid" value="<?= isset($gid)?$gid:"";?>">
            <input type="hidden" name="lessId" value="<?= isset($lessId)?$lessId:"";?>"> -->
            <!-- row -->
            <div class="form-group" style="margin-top:25px;">
                <label for="answer" class="col-sm-2"></label>
                <button type="submit" class="btn btn-primary" name="alphabetTest">
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
    plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
    toolbar1: 'formatselect | bold italic underline forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
    image_advtab: true,
    menubar:false,
    statusbar: false,
    });

    tinymce.init({
    selector: '#tinymce2',
    height: 200,
    plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
    toolbar1: 'formatselect | bold italic underline forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
    image_advtab: true,
    menubar:false,
    statusbar: false,
    });

    tinymce.init({
    selector: '#tinymce3',
    height: 200,
    plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
    toolbar1: 'formatselect | bold italic underline forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
    image_advtab: true,
    menubar:false,
    statusbar: false,
    });
</script>
