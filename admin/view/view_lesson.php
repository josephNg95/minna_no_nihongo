<style>
    tr>th { text-align: center;}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12"  style="margin-bottom: 15px; ">
            <p class="bd-primary" style="width: 300px;">Danh sách 50 bài Minna no Nihongo I</p>
            <p class="pull-right">
                <a class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    <i class="glyphicon glyphicon-plus"></i> Thêm bài mới
                </a>
            </p>
            <?php include_once "view_add_lesson.php";?>
            <?php include_once "view_edit_lesson.php";?>
        </div>
        <table cellpadding="5" class="table table-bordered table-hover">
            <tr style="background-color: #ddd;">
                <th style="width: 50px; ">STT</th>
                <th style="width: 150px; ">Tên bài</th>
                <th style="width: 150px; ">Từ mới</th>
                <th style="width: 150px; ">Ngữ pháp</th>
                <th style="width: 150px; ">Kaiwa</th>
                <th style="width: 150px; ">Mondai</th>
                
                <th style="width: 150px; ">Trạng thái</th>
                <th style="">Sửa</th>
                <th style="">Xóa</th>
            </tr>
            <?php
                $stt = 0;
                if (!isset($_GET['p'])) {
                    $page = 1;
                } else {
                    $page = $_GET['p'];
                    $stt = ($page - 1)*$record_perpage;
                }
                foreach ($lessons as $lesson)
                { $stt++;
            ?>
            <tr style="text-align: center; ">
                <td><?= $stt;?></td>
                <td><?= $lesson['name'];?></td>
                <td>
                    <a href="index.php?controller=new_words&id=<?= $lesson['id'];?>">Từ mới</a>
                </td>
                <td>
                    <a href="index.php?controller=grammars&id=<?= $lesson['id'];?>">Ngữ pháp</a>
                </td>
                <td>
                    <a href="index.php?controller=kaiwas&id=<?= $lesson['id'];?>">Kaiwa</a>
                </td>
                <td>
                    <a href="index.php?controller=mondais&id=<?= $lesson['id'];?>">Mondai</a>
                </td>
                <td>
                    <span class="label <?php echo ($lesson["flag"] == 1) ? "label-success":"label-danger";?>">
                        <?php echo ($lesson["flag"] == 1) ? "Hiển thị":"Tạm ẩn";?>
                    </span>
                </td>
                <td class="btn-edit">
                    <a data-toggle="modal" data-target="#editLessonModal" href="#" onclick="editLessonName(<?= $lesson['id'];?>)">
                        <i class="glyphicon glyphicon-edit"></i>
                    </a>
                </td>
                <td class="btn-del">
                    <a onclick="return window.confirm('Bạn có muốn xóa!')" href="index.php?controller=lesson&act=delete&id=<?= $lesson['id'];?>"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
                <input type="hidden" id="name<?= $lesson['id'];?>" value="<?php echo $lesson["name"];?>">
                <input type="hidden" id="flag<?= $lesson['id'];?>" value="<?php echo $lesson["flag"];?>">
            </tr>
            <?php } ?>
        </table>
        <div>
            <ul class="pagination" style="margin: 0px; padding: 0px; ">
                <?php 
                    for($i=1; $i<=$num_page; $i++) {
                        if (!isset($_GET['p'])) {
                            $page = 1;
                        } else {
                            $page = $_GET['p'];
                        }
                ?>
                <li class="<?php echo ($page == $i) ? "active":"";?>">
                    <a href="index.php?controller=lesson&p=<?php echo $i;?>"><?php echo $i;?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript">
    function editLessonName(id) {
        var flag = document.getElementById('flag'+id).value;
        if (flag == 1) {
            document.getElementById('showLesson').selected = 'selected';
        } else {
            document.getElementById('hideLesson').selected = 'selected';
        }
        document.getElementById('lessonName1').value = document.getElementById('name'+id).value;
        document.getElementById('lessID').value = id;
    }
</script>