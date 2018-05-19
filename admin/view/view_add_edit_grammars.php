<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<div class="col-md-12">
    <div class="row">
        <p class="bd-primary">Thêm mới / Chỉnh sửa ngữ pháp</p>
    </div>
    <div class="row" style="margin-bottom: 80px; margin-top:20px;">
        <form method="post" class="form-horizontal" action="<?php echo $form_control;?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Tiêu đề</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control input-sm" value="<?= isset($grammar['title']) ? $grammar['title']:"";?>">
                </div>
            </div>
            <div class="form-group">
                <label for="tinymce" class="col-sm-2 control-label">Nội dung kiến thức</label>
                <div class="col-md-10">
                    <textarea name="content" id="tinymce"><?= isset($grammar['content']) ? $grammar['content']:"";?></textarea>
                </div>
            </div>
            <input type="hidden" name="gid" value="<?= isset($gid)?$gid:"";?>">
            <input type="hidden" name="lessId" value="<?= isset($lessId)?$lessId:"";?>">
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
    selector: '#tinymce',
    height: 200,
    plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
    toolbar1: 'formatselect | bold italic underline forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
    image_advtab: true,
    });
</script>
