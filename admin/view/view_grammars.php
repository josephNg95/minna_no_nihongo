<div class="row">
    <div class="col-md-12">
        <div style="margin-bottom: 15px; ">
            <p class="bd-primary">Danh sách ngữ pháp <?= (isset($lesson['name']))?$lesson['name']:"";?></p>
            <p class="pull-right">
                <a class="btn btn-primary" href="index.php?controller=add_edit_grammars&act=add&id=<?= $lessId;?>">
                    <i class="glyphicon glyphicon-plus"></i> Thêm ngữ pháp mới
                </a>
            </p>
        </div>
        <table cellpadding="5" class="table table-bordered table-hover">
            <tbody class="questionList">
                <tr style="background-color: #ddd; text-align: center; ">
                    <th style="width: 50px; ">STT</th>
                    <th style="width: 300px; text-align: center; ">Tiêu đề</th>
                    <th style="width: 550px; text-align: center; ">Nội dung ngữ pháp</th>
                    <th style="width: 40px;">Sửa</th>
                    <th style="width: 40px;">Xóa</th>
                </tr>
                <?php 
                    $stt = 0;
                    foreach ($grammars as $grammar) {
                        $stt++;
                ?>
                <tr style="text-align: center;">
                    <td ><?php echo $stt;?></td>
                    <td style="text-align: left;word-wrap: break-word; font-weight: bold">
                        <?php
                            if (strlen($grammar["title"]) > 100) {
                                echo substr($grammar["title"],0,100)."...";
                            } else { echo $grammar["title"];}
                        ?>
                    </td>
                    <td style="text-align: left;word-wrap: break-word; ">
                        <?php
                            if (strlen($grammar["content"]) > 350) {
                                echo substr($grammar["content"],0,350)."...";
                            } else { echo $grammar["content"];}
                        ?>
                    </td>
                    <td class="btn-edit">
                        <a href="index.php?controller=add_edit_grammars&id=<?= $lessId;?>&act=edit&gid=<?php echo $grammar["id"]?>"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a onclick="return window.confirm('Bạn có muốn xóa!')" href="index.php?controller=grammars&id=<?= $lessId;?>&act=delete&gid=<?php echo $grammar["id"]?>"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <div>
            <ul class="pagination" style="margin: 0px; padding: 0px;  ">
                <?php  
                    for($i=1; $i<=$num_page; $i++) {
                        if (!isset($_GET['p'])) {
                            $page = 1;
                        } else {
                            $page = $_GET['p'];
                        }
                ?>
                <input type="hidden" value="<?= $i?>" id="paginate">
                <li class="<?php echo ($page == $i) ? "active":"";?>">
                    <a style="border-radius: unset" href="index.php?controller=grammars&type=<?= $type;?>&p=<?php echo $i;?>"><?php echo $i;?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
