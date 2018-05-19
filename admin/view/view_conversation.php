<div class="row">
    <div class="col-md-12">
        <div class="col-md-12"  style="margin-bottom: 15px; ">
            <p class="bd-primary" style="width: 250px;">1000 câu hội thoại cơ bản</p>
            <p class="pull-right">
                <a class="btn btn-primary" href="?controller=add_edit_conversation&act=add">
                    <i class="glyphicon glyphicon-plus"></i> Thêm câu hội thoại mới
                </a>
            </p>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <tr style="background-color: #ddd;">
                    <th style="width: 50px; ">STT</th>
                    <th style="width: 90px; ">Loại</th>
                    <th style="width: 250px" >Tiếng việt</th>
                    <th style="width: 200px; ">Kana</th>
                    <th style="width: 150px; ">Romaji</th>
                    <th style="width: 80px; ">Trạng thái</th>
                    <th style="">Sửa</th>
                    <th style="">Xóa</th>
                </tr>
                <?php
                    $stt = 0;
                    foreach ($conversation as $key => $value) {
                        $stt++;
                ?>
                <tr>
                    <td><?php echo $stt;?></td>
                    <td><?php echo $value['name'];?></td>
                    <td><?php echo $value['vietnam_con'];?></td>
                    <td style="font-weight: 500; font-size:14px;"><?php echo $value['japan_con'];?></td>
                    <td><?php echo $value['romaji_con'];?></td>
                    <td>
                        <span class="label <?php echo ($value["flag"] == 1) ? "label-success":"label-danger";?>">
                            <?php echo ($value["flag"] == 1) ? "Hiển thị":"Tạm ẩn";?>
                        </span>
                    </td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_conversation&act=edit&id=<?php echo $value['id'];?>"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="?controller=conversation&act=delete&id=<?php echo $value['id'];?>""><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
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
                        <a href="index.php?controller=conversation&p=<?php echo $i;?>"><?php echo $i;?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
