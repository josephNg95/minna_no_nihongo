<div class="row">
    <div class="col-md-12">
        <div style="margin-bottom: 15px; ">
            <p class="bd-primary">Danh sách thành viên</p>
            <p class="pull-right">
                <a class="btn btn-primary" href="index.php?controller=add_edit_user&act=add">
                    <i class="glyphicon glyphicon-plus"></i> Thêm thành viên
                </a>
            </p>
        </div>
        <table cellpadding="5" class="table table-bordered table-hover">
            <tr style="background-color: #ddd; ">
                <th style="width: 50px; ">STT</th>
                <th style="width: 150px; ">Tên đăng nhập</th>
                <th style="width: 150px; ">Tên hiển thị</th>
                <th style="width: 150px; ">Email</th>
                <th style="width: 150px; ">Cấp bậc</th>
                <th style="width: 150px; ">Ảnh đại diện</th>
                <th style="width: 100px; ">Hoạt động</th>
                <th style="">Sửa</th>
                <th style="">Xóa</th>
            </tr>
            <?php 
                $stt = 0;
                foreach ($arr_user as $rows_user) {
                    $stt++;
            ?>
            <tr>
                <td style="text-align: center; "><?php echo $stt;?></td>
                <td style="text-align: center; "><?php echo $rows_user["username"];?></td>
                <td style="text-align: center; "><?php echo $rows_user["fullname"];?></td>
                <td style="text-align: center; "><?php echo $rows_user["email"];?></td>
                <td style="text-align: center; ">
                <span class="label <?php echo ($rows_user["level"] == 0) ? "label-primary":"label-warning";?>">
                    <?php 
                    echo ($rows_user["level"] == 0) ? "Quản trị viên":"Cộng tác viên";
                    ?>
                </span>
                </td>
                <td style="text-align: center; ">
                    <img src="<?php echo $rows_user["avatar"];?>" alt=""  width="64" height="64">
                </td>
                <td style="text-align: center; ">
                    <label class="switch">
                        <input type="checkbox"
                            <?php 
                                echo ($rows_user["flag"] == 1) ? "checked" : '';
                            ?>
                        >
                        <div class="switch-btn" onclick="changeStatus(<?= $rows_user["id"];?>)"></div>
                    </label>
                    <input type="hidden" id="status" name="status<?= $rows_user["id"];?>" value="<?= $rows_user["flag"];?>">
                </td>
                <td class="btn-edit">
                    <a href="index.php?controller=add_edit_user&act=edit&id=<?php echo $rows_user["id"]?>"><i class="glyphicon glyphicon-edit"></i></a>
                </td>
                <td class="btn-del">
                    <a onclick="return window.confirm('Bạn có muốn xóa!')" href="index.php?controller=user&act=delete&id=<?php echo $rows_user["id"]?>"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <div>
            <ul class="pagination" style="margin: 0px; padding: 0px; ">
                <?php  
                    $type = (isset($typeFilter) && $typeFilter != 0)? $typeFilter:"";
                    for($i=1; $i<=$num_page; $i++) {
                        if (!isset($_GET['p'])) {
                            $page = 1;
                        } else {
                            $page = $_GET['p'];
                        }
                ?>
                <li class="<?php echo ($page == $i) ? "active":"";?>">
                    <a href="index.php?controller=user&p=<?php echo $i;?>"><?php echo $i;?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript">
    function changeStatus(idUser) {
        $.ajax({
            type: 'POST',
            url: './controller/statusAjax.php',
            data: {id: idUser, status: true},
            success: function() {
                console.log('change status successfully!');
            },
            error: function() {
                console.log('change status failed!');
            },
        });
    }
</script>