<div class="col-md-12">
    <div class="row">
        <p class="bd-primary">Thêm mới / Chỉnh sửa hội thoại</p>
    </div>
    <div class="row" style="margin-bottom: 80px; margin-top:20px;">
        <form method="post" class="form-horizontal" action="<?php echo $form_control;?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Tiêu đề (kana)</label>
                <div class="col-sm-6">
                    <input type="text" name="title" class="form-control input-sm" value="<?= isset($grammar['title']) ? $grammar['title']:"";?>">
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Tiêu đề (romaji)</label>
                <div class="col-sm-6">
                    <input type="text" name="title" class="form-control input-sm" value="<?= isset($grammar['title']) ? $grammar['title']:"";?>">
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Tiêu đề (tiếng việt)</label>
                <div class="col-sm-6">
                    <input type="text" name="title" class="form-control input-sm" value="<?= isset($grammar['title']) ? $grammar['title']:"";?>">
                </div>
            </div>

            <input type="hidden" name="gid" value="<?= isset($kid)?$kid:"";?>">
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