<?php if ($haveRd) { $style1 = "display: none";}?>
<?php if (!$haveRd) { $style2 = "display: none";}?>
<div class="row">
    <div class="col-md-12">
        <div style="margin-bottom: 15px; ">
            <p class="bd-primary">Đáp án bài tập <?= (isset($lesson['name']))?$lesson['name']:"";?></p>
            <p class="pull-right" style="<?= isset($style1)?$style1:"";?>">
                <a class="btn btn-primary" href="index.php?controller=add_edit_mondais&act=add&id=<?= $lessId;?>">
                    <i class="glyphicon glyphicon-plus"></i> Thêm đáp án
                </a>
            </p>
        </div>
        <div class="btn-group pull-right" role="group" aria-label="..." style="<?= isset($style2)?$style2:"";?>">
            <a class="btn btn-primary" href="index.php?controller=add_edit_mondais&id=<?= $lessId;?>&act=edit">
                <i class="glyphicon glyphicon-edit"></i> Sửa đáp án
            </a>
            <a class="btn btn-danger" onclick="return window.confirm('Bạn có muốn xóa!')" href="index.php?controller=mondais&id=<?= $lessId;?>&act=delete">
                <i class="glyphicon glyphicon-trash"></i> Xóa đáp án
            </a>
        </div>
    </div>
    <div class="col-md-12" style="margin-top: 25px; <?= isset($style2)?$style2:"";?>">
        <p> <label for="">Trạng thái hiển thị: </label>
            <span style="margin-left: 15px; padding: 5px 20px" class="label <?= (!empty($mondai) && $mondai["flag"] == 1) ? "label-success":"label-danger";?>">
                <?=(!empty($mondai) && $mondai["flag"] == 1) ? "Hiển thị":"Tạm ẩn";?>
            </span>
        </p>
        <hr />
        <div class="col-dm-10">
            <label for="" style="margin-bottom: 15px;">Đáp án câu 1</label>
            <div style="margin-left: 50px;">
                <?= !empty($mondai)?$mondai['answer_st']:"";?>
            </div>
        </div>
        <hr />
        <div class="col-dm-10">
            <label for="" style="margin-bottom: 15px;">Đáp án câu 2</label>
            <div style="margin-left: 50px;">
                <?= !empty($mondai)?$mondai['answer_nd']:"";?>
            </div>
        </div>
        <hr />
        <div class="col-dm-10">
            <label for="" style="margin-bottom: 15px;">Đáp án câu 3</label>
            <div style="margin-left: 50px;">
                <?= !empty($mondai)?$mondai['answer_rd']:"";?>
            </div>
        </div>
    </div>
</div>
