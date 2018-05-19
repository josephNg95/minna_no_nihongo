<div class="row">
    <div class="col-md-12">
        <div class="col-md-12"  style="margin-bottom: 15px; ">
            <p class="bd-primary" style="width: 350px;">Danh sách bảng chữ cái hiragana/katakana</p>
            <p class="pull-right">
                <a class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    <i class="glyphicon glyphicon-plus"></i> Thêm chữ cái
                </a>
            </p>
            <?php include_once "view_add_alphabet.php";?>
            <?php include_once "view_edit_alphabet.php";?>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table cellpadding="5" class="table table-bordered table-hover" style="text-align:center">
                    <tr style="background-color: #ddd; ">
                        <th style="width: 50px; text-align:center">STT</th>
                        <th style="width: 150px; text-align:center">Hiragana</th>
                        <th style="width: 150px; text-align:center">Romaji</th>
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
                        foreach ($hiraganas as $hiragana) {
                            $stt++;
                    ?>
                    <tr>
                        <td style="text-align: center; "><?php echo $stt;?></td>
                        <td style="text-align: center; "><?php echo $hiragana["original"];?></td>
                        <td style="text-align: center; "><?php echo $hiragana["romaji"];?></td>
                        <td class="btn-edit">
                            <a data-toggle="modal" data-target="#editAlphabetModal" href="#" onclick="editAlphabetHira(<?= $hiragana['id'];?>)">
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                        </td>
                        <td class="btn-del">
                            <a onclick="return window.confirm('Bạn có chắc chắn xóa?')" href="index.php?controller=alphabet&act=delete&id=<?php echo $hiragana["id"]?>"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                        <input type="hidden" id="hira_original<?= $hiragana['id'];?>" value="<?php echo $hiragana["original"];?>">
                        <input type="hidden" id="hira_romaji<?= $hiragana['id'];?>" value="<?php echo $hiragana["romaji"];?>">
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="col-md-6">
                <table cellpadding="5" class="table table-bordered table-hover">
                    <tr style="background-color: #ddd; ">
                        <th style="width: 50px; text-align:center">STT</th>
                        <th style="width: 150px; text-align:center">Katakana</th>
                        <th style="width: 150px; text-align:center">Romaji</th>
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
                        foreach ($katakanas as $katakana) {
                            $stt++;
                    ?>
                    <tr>
                        <td style="text-align: center; "><?php echo $stt;?></td>
                        <td style="text-align: center; "><?php echo $katakana["original"];?></td>
                        <td style="text-align: center; "><?php echo $katakana["romaji"];?></td>
                        <td class="btn-edit">
                            <a data-toggle="modal" data-target="#editAlphabetModal" href="#" onclick="editAlphabetKata(<?= $katakana['id'];?>)">
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                        </td>
                        <td class="btn-del">
                            <a onclick="return window.confirm('Bạn có chắc chắn xóa?')" href="index.php?controller=alphabet&act=delete&id=<?php echo $katakana["id"]?>"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                        <input type="hidden" id="kata_original<?= $katakana['id'];?>" value="<?php echo $katakana["original"];?>">
                        <input type="hidden" id="kata_romaji<?= $katakana['id'];?>" value="<?php echo $katakana["romaji"];?>">
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
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
                    <a href="index.php?controller=alphabet&p=<?php echo $i;?>"><?php echo $i;?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript">
    function editAlphabetHira(id) {
        document.getElementById('edit_original').value = document.getElementById('hira_original'+id).value;
        document.getElementById('edit_romaji').value = document.getElementById('hira_romaji'+id).value;
        document.getElementById('hira_op').selected  = 'selected';
        document.getElementById('id_kana').value = id;
    }
    function editAlphabetKata(id) {
        document.getElementById('edit_original').value = document.getElementById('kata_original'+id).value;
        document.getElementById('edit_romaji').value = document.getElementById('kata_romaji'+id).value;
        document.getElementById('kata_op').selected  = 'selected';
        document.getElementById('id_kana').value = id;
    }
</script>