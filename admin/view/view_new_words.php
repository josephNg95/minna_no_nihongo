<div class="row">
    <div class="col-md-12">
        <div class="col-md-12"  style="margin-bottom: 15px; ">
            <p class="bd-primary" style="width: 300px;">Danh sách từ mới <?= (isset($lesson['name']))?$lesson['name']:"";?></p>
            <p class="pull-right">
                <a class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    <i class="glyphicon glyphicon-plus"></i> Thêm từ mới
                </a>
            </p>
            <?php include_once "view_add_new_word.php";?>
            <?php include_once "view_edit_new_word.php";?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table cellpadding="5" class="table table-bordered table-hover">
                    <tr style="background-color: #ddd; ">
                        <th style="width: 50px; text-align:center">STT</th>
                        <th style="width: 150px;text-align:center">Từ mới</th>
                        <th style="text-align:center">Nghĩa tiếng việt</th>
                        <th style="width: 100px; text-align:center">Kanji</th>
                        <th style="width: 150px; text-align:center">Nghĩa Hán-Việt</th>
                        <th style="width: 80px;">Trạng thái</th>
                        <th style="width: 50px;">Sửa</th>
                        <th style="width: 50px;">Xóa</th>
                    </tr>
                    <?php
                        $stt = 0;
                        foreach ($newWords as $key => $newWord) {
                            $stt++;
                        
                    ?>
                    <tr style="text-align:center">
                        <td><?= $stt;?></td>
                        <td><?= $newWord['kana_word'];?></td>
                        <td style="text-align:left"><?= $newWord['vietnam_word'];?></td>
                        <td><?= $newWord['kanji_word'];?></td>
                        <td><?= $newWord['kanji_mean'];?></td>
                        <td>
                            <span class="label <?php echo ($newWord["flag"] == 1) ? "label-success":"label-danger";?>">
                                <?php echo ($newWord["flag"] == 1) ? "Hiển thị":"Tạm ẩn";?>
                            </span>
                        </td>
                        <td class="btn-edit">
                            <a data-toggle="modal" data-target="#myModalEdit" href="#" onclick="editNewWord(<?= $newWord['id'];?>)">
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                        </td>
                        <td class="btn-del">
                            <a onclick="return window.confirm('Bạn có muốn xóa!')" href="index.php?controller=new_words&id=<?= $lessId;?>&act=delete&wid=<?= $newWord['id'];?>"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                    </tr>
                    <input type="hidden" id="ed_status<?= $newWord['id'];?>" value="<?php echo $newWord["flag"];?>">
                    <input type="hidden" id="ed_new_word<?= $newWord['id'];?>" value="<?php echo $newWord["kana_word"];?>">
                    <input type="hidden" id="ed_mean_vn<?= $newWord['id'];?>" value="<?php echo $newWord["vietnam_word"];?>">
                    <input type="hidden" id="ed_kanji<?= $newWord['id'];?>" value="<?php echo $newWord["kanji_word"];?>">
                    <input type="hidden" id="ed_mean_ch<?= $newWord['id'];?>" value="<?php echo $newWord["kanji_mean"];?>">
                    <?php }?>
                </table>
            </div>
        </div>
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
                    <a href="index.php?controller=alphabet&p=<?php echo $i;?>"><?php echo $i;?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript">
    function editNewWord(id) {
        var ed_status = document.getElementById('ed_status'+id).value;
        document.getElementById('ed_new_word').value = document.getElementById('ed_new_word'+id).value;
        document.getElementById('ed_mean_vn').value = document.getElementById('ed_mean_vn'+id).value;
        document.getElementById('ed_kanji').value = document.getElementById('ed_kanji'+id).value;
        document.getElementById('ed_mean_ch').value = document.getElementById('ed_mean_ch'+id).value;
        document.getElementById('ed_word_id').value = id;

        if (ed_status == 1) {
            document.getElementById('showWord').selected  = 'selected';
        } else {
            document.getElementById('hiddenWord').selected  = 'selected';
        }
    }
</script>