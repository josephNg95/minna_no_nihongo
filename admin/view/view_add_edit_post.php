<!-- <script src="tinymce/js/tinymce/tinymce.min.js"></script> -->
<div class="col-md-12">
    <div class="row">
        <p class="bd-primary" style="width: 300px;">Thêm mới / Chỉnh sửa bài viết</p>
    </div>
    <div class="row" style="margin-bottom: 80px;">
        <form method="post" class="form-horizontal" action="<?php echo $form_control;?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="">Trạng thái</label>
                <div class="col-sm-2">
                    <select name="flag" id="" class="form-control input-sm">
                        <option <?php echo (isset($postEdit) && $postEdit['flag'] == 1) ? 'selected':'';?> value="1">Hiển thị</option>
                        <option <?php echo (isset($postEdit) && $postEdit['flag'] != 1) ? 'selected':'';?> value="0">Tạm ẩn</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Tiêu đề</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control input-sm" value="<?php echo isset($postEdit) ? $postEdit['title']:'';?>" placeholder="Nhập tiêu đề">
                </div>
            </div>
            <div class="form-group">
                <label for="content" class="col-sm-2 control-label">Nội dung</label>
                <div class="col-md-10">
                    <textarea name="content" id="content"><?php echo isset($postEdit) ? $postEdit['content']:'';?></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace('content');
                    </script>
                </div>
            </div>
            <!-- row -->
            <div class="form-group" style="margin-top:25px;">
                <label for="answer" class="col-sm-2"></label>
                <button type="submit" class="btn btn-primary">
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
<!-- <script>
    tinymce.init({
    selector: '#tinymce1',
    height: 300,
    plugins: ' print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
    toolbar1: 'formatselect | table | bold italic underline forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
    image_advtab: true,
    menubar:false,
    statusbar: false,
    });
</script> -->