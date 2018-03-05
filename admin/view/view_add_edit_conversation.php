<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<div class="col-md-12">
    <div class="row">
        <p class="bd-primary">Thêm mới / Chỉnh sửa câu hội thoại </p>
    </div>
    <div class="row" style="margin-bottom: 80px;">
        <form method="post" class="form-horizontal" action="<?php echo $form_control;?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Loại hội thoại</label>
                <div class="col-sm-3">
                    <select name="" id="" class="form-control" required required>
                        <option value="">-- Chọn loại hội thoại --</option>
                        <option value="">Chào hỏi</option>
                        <option value="">Hội thoại</option>
                        <option value="">Số đếm</option>
                        <option value="">Ngày tháng</option>
                        <option value="">Phương hướng</option>
                        <option value="">Giao thông</option>
                        <option value="">Chỗ ở</option>
                        <option value="">Ăn uống</option>
                        <option value="">Mua sắm</option>
                        <option value="">Màu sắc</option>
                        <option value="">Thành phố</option>
                        <option value="">Tên nước</option>
                        <option value="">Du lịch</option>
                        <option value="">Gia đình</option>
                        <option value="">Hẹn hò</option>
                        <option value="">Khẩn cấp</option>
                        <option value="">Đau ốm</option>
                        <option value="">Thành ngữ</option>
                    </select>
                </div>
                <label for="" class="col-sm-2 control-label" style="margin-left:-65px">Trạng thái</label>
                <div class="col-sm-2">
                    <select name="" id="" class="form-control">
        required                 <option value="1">Hiển thị</option>
                        <option value="0">Tạm ẩn</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Hội thoại tiếng việt</label>
                <div class="col-sm-9">
                    <input type="text" name="title" class="form-control" value="" required placeholder="Chào buổi sáng">
                </div>
            </div>
            
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Hội thoại kana</label>
                <div class="col-sm-9">
                    <input type="text" name="title" class="form-control" value="" required placeholder="おはようございます">
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Hội thoại romaji</label>
                <div class="col-sm-9">
                    <input type="text" name="title" class="form-control" value="" required placeholder="Ohayo gozaimasu">
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Audio</label>
                <div class="col-sm-4">
                    <input type="file" name="title">
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