<div class="row">
    <div class="col-md-12">
        <div class="col-md-12" >
            <p class="bd-primary" style="width: 250px;">Các bài viết tham khảo</p>
            <p class="pull-right">
                <a class="btn btn-primary" href="?controller=add_edit_post&act=add">
                    <i class="glyphicon glyphicon-pencil"></i> Thêm bài viết mới
                </a>
            </p>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <tr style="background-color: #ddd;">
                    <th style="width: 50px;">STT</th>
                    <th style="width: 600px; ">Tiêu đề</th>
                    <th style="width: 100px; ">Ngày đăng</th>
                    <th style="width: 100px; ">Người viết</th>
                    <th style="width: 80px; ">Trạng thái</th>
                    <th style="">Sửa</th>
                    <th style="">Xóa</th>
                </tr>
                <?php
                    $stt = 0;
                    foreach ($posts as $key => $value) {
                        $stt++;
                ?>
                <tr>
                    <td><?= $stt;?></td>
                    <td><?= $value['title'];?></td>
                    <td><?php echo date('d-m-Y', strtotime($value['create_date']));?></td>
                    <td>
                        <?php 
                            $adminData = fetch_one("select * from tbl_admin where id = ".$value['admin_id']);
                            echo $adminData['fullname'];
                        ?>
                    </td>
                    <td>
                        <span class="label <?php echo ($value["flag"] == 1) ? "label-success":"label-danger";?>">
                            <?php echo ($value["flag"] == 1) ? "Hiển thị":"Tạm ẩn";?>
                        </span>
                    </td>
                    <td class="btn-edit" style="<?php echo ($value['admin_id'] != $_SESSION['id'] && $_SESSION['level'] != 0)?'pointer-events: none':'';?>">
                        <a href="?controller=add_edit_post&act=edit&id=<?= $value['id'];?>"><i class="glyphicon glyphicon-<?php echo ($value['admin_id'] != $_SESSION['id'] && $_SESSION['level'] != 0)?'ban-circle':'edit';?>"></i></a>
                    </td>
                    <td class="btn-del" style="<?php echo ($value['admin_id'] != $_SESSION['id'] && $_SESSION['level'] != 0)?'pointer-events: none':'';?>">
                        <a href="?controller=post&act=delete&id=<?= $value['id'];?>"><i class="glyphicon glyphicon-<?php echo ($value['admin_id'] != $_SESSION['id'] && $_SESSION['level'] != 0)?'ban-circle':'trash';?>"></i></a>
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
                        <a href="index.php?controller=post&p=<?php echo $i;?>"><?php echo $i;?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
