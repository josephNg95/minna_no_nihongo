<div class="row">
    <div class="col-md-12">
        <div class="col-md-12"  style="margin-bottom: 15px; ">
            <p class="bd-primary" style="width: 200px;">Hội thoại <?= (isset($lesson['name']))?$lesson['name']:"";?></p>
            <?php if ($flag) { $style = "display: none";}?>
            <p class="pull-right" style="<?= isset($style)?$style:"";?>">
                <a class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    <i class="glyphicon glyphicon-plus"></i> Thêm tiêu đề
                </a>
            </p>
            <?php if (!$flag) { include_once "view_add_kaiwa.php";}?>
            <?php if ($flag) { include_once "view_edit_kaiwa.php";}?>
            <?php if ($flag) { include_once "view_add_con_kaiwa.php";}?>
            <?php if ($flag) { include_once "view_edit_con_kaiwa.php";}?>
        </div>
        <?php if (!$flag) { $style_ed = "display: none";}?>
        <div class="col-md-12" style="<?= isset($style_ed)?$style_ed:"";?>">
            <div style="float:left">
                <p>
                    <b style="margin-right:60px; ";>Tiêu đề kana: </b>
                    <span style="color: #428bca;font-size: 16px; font-weight: 600";><?= isset($kaiwaTitle['title'])?$kaiwaTitle['title']:"";?></span>
                </p>
                <p>
                    <b style="margin-right:51px; ";>Tiêu đề romaji: </b>
                    <span style="color: #428bca;";><?= isset($kaiwaTitle['romaji_title'])?$kaiwaTitle['romaji_title']:"";?></span>
                </p>
                <p>
                    <b style="margin-right:34px; ";>Tiêu đề tiếng việt: </b>
                    <span style="color: #428bca;";><?= isset($kaiwaTitle['vietnam_title'])?$kaiwaTitle['vietnam_title']:"";?></span>
                </p>
            </div>
            <div class="btn-group pull-right" role="group" aria-label="...">
                    <a class="btn btn-primary" data-toggle="modal" onclick="editTitleKaiwa(<?= $kaiwaTitle['id']?>)" data-target="#editModal">
                        <i class="glyphicon glyphicon-edit"></i> Sửa tiêu đề
                    </a>
                    <a class="btn btn-primary" data-toggle="modal" data-target="#con_kaiwa">
                        <i class="glyphicon glyphicon-headphones"></i> Thêm câu thoại
                    </a>
            </div>
            <input type="hidden" id="ed_status" value="<?php echo $kaiwaTitle["flag"];?>">
            <input type="hidden" id="ed_title1" value="<?php echo $kaiwaTitle["title"];?>">
            <input type="hidden" id="ed_title2" value="<?php echo $kaiwaTitle["romaji_title"];?>">
            <input type="hidden" id="ed_title3" value="<?php echo $kaiwaTitle["vietnam_title"];?>">
        </div>
        <table cellpadding="5" class="table table-bordered table-hover">
            <tbody class="questionList">
                <tr style="background-color: #ddd; text-align: center; ">
                    <th style="width: 50px; ">STT</th>
                    <th style="width: 300px; text-align: center; ">Tên nhân vật</th>
                    <th style="width: 550px; text-align: center; ">Nội dung câu thoại</th>
                    <th style="width: 80px; text-align: center; ">Trạng thái</th>
                    <th style="width: 40px;">Sửa</th>
                    <th style="width: 40px;">Xóa</th>
                </tr>
                <?php 
                    $stt = 0;
                    foreach ($kaiwaContents as $kaiwaContent) {
                        $stt++;
                ?>
                <tr style="text-align: center;">
                    <td><?= $stt;?></td>
                    <td>
                        <p><?= $kaiwaContent['name_jp']?></p>
                        <p><?= $kaiwaContent['name_rm']?></p>
                    </td>
                    <td style="text-align: left">
                        <p><?= $kaiwaContent['content_jp']?></p>
                        <p><?= $kaiwaContent['content_rm']?></p>
                        <p><?= $kaiwaContent['content_vn']?></p>
                    </td>
                    <td>
                        <span class="label <?php echo ($kaiwaContent["flag"] == 1) ? "label-success":"label-danger";?>">
                            <?php echo ($kaiwaContent["flag"] == 1) ? "Hiển thị":"Tạm ẩn";?>
                        </span>
                    </td>
                    <td class="btn-edit">
                        <a data-toggle="modal" data-target="#edit_con_kaiwa" href="#" onclick="editContentKaiwa(<?= $kaiwaContent['id'];?>)"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a onclick="return window.confirm('Bạn có muốn xóa!')" href="index.php?controller=kaiwas&id=<?= $lessId;?>&act=delete&cid=<?php echo $kaiwaContent["id"]?>"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <input type="hidden" id="ed_name_jp<?= $kaiwaContent['id'];?>" value="<?= $kaiwaContent['name_jp'];?>">
                <input type="hidden" id="ed_name_rm<?= $kaiwaContent['id'];?>" value="<?= $kaiwaContent['name_rm']?>">
                <input type="hidden" id="ed_content_jp<?= $kaiwaContent['id'];?>" value="<?= $kaiwaContent['content_jp']?>">
                <input type="hidden" id="ed_content_rm<?= $kaiwaContent['id'];?>" value="<?= $kaiwaContent['content_rm']?>">
                <input type="hidden" id="ed_content_vn<?= $kaiwaContent['id'];?>" value="<?= $kaiwaContent['content_vn']?>">
                <input type="hidden" id="ed_flag<?= $kaiwaContent['id'];?>" value="<?= $kaiwaContent["flag"]?>">
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
                    <a style="border-radius: unset" href="index.php?controller=kaiwas&id=<?= $lessId;?>&p=<?php echo $i;?>"><?php echo $i;?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript">
    function editTitleKaiwa(id) {
        var ed_status = document.getElementById('ed_status').value;
        document.getElementById('m_title1').value = document.getElementById('ed_title1').value;
        document.getElementById('m_title2').value = document.getElementById('ed_title2').value;
        document.getElementById('m_title3').value = document.getElementById('ed_title3').value;
        document.getElementById('kid').value = id;

        if (ed_status == 1) {
            document.getElementById('showK').selected  = 'selected';
        } else {
            document.getElementById('hiddenK').selected  = 'selected';
        }
    }

    function editContentKaiwa(id) {
        var ed_status = document.getElementById('ed_flag'+id).value;
        document.getElementById('m_name_jp').value = document.getElementById('ed_name_jp'+id).value;
        document.getElementById('m_name_rm').value = document.getElementById('ed_name_rm'+id).value;
        document.getElementById('m_content_jp').value = document.getElementById('ed_content_jp'+id).value;
        document.getElementById('m_content_rm').value = document.getElementById('ed_content_rm'+id).value;
        document.getElementById('m_content_vn').value = document.getElementById('ed_content_vn'+id).value;
        document.getElementById('con_id').value = id;

        if (ed_status == 1) {
            document.getElementById('showConKaiwa').selected  = 'selected';
        } else {
            document.getElementById('hiddenConKaiwa').selected  = 'selected';
        }
    }
</script>