<div id="page-wrapper">
    <div class="row" style="margin-top: 50px; padding-top: 20px">
        <p style="padding-left: 25px;font-size: 24px"><i class="glyphicon glyphicon-list"></i> Các bài viết tham khảo</p>
        <hr>
        <?php
            foreach ($listOfPost as $key => $post) {
        ?>
        <div class="col-md-10">
            <div class="">
                <p style="color: #018DD0; font-size: 18px; margin-bottom: 0px;">
                    <a href="index.php?con=post_detail&id=<?= $post['id'];?>">
                        <i class="glyphicon glyphicon-bookmark"></i> <?= $post['title'];?>
                    </a>
                </p>
                <div class="text-muted" style="padding-left: 25px;">
                    <?php

                        $adminName = fetch_one("select fullname from tbl_admin where id=".$post['admin_id']);
                    ?>
                    <i><span>By <?= $adminName['fullname'];?></span>&nbsp;-&nbsp;<span>Ngày đăng: <?= date("d-m-Y", strtotime($post['create_date']));?></span></i>
                </div>
                <div class="" style="margin: 10px; 0px;">
                    <?php echo substr($post['content'],0, 450);?>
                </div>
            </div>
            <hr>
        </div>
        <?php } ?>
    </div>
    <div style="margin-bottom: 30px; margin-left: 40%;">
        <ul class="pagination" style="margin: 0px; padding: 0px;">
            <?php 
                for($i=1; $i<=$num_page; $i++) {
                    if (!isset($_GET['p'])) {
                        $page = 1;
                    } else {
                        $page = $_GET['p'];
                    }
            ?>
            <li class="<?php echo ($page == $i) ? "active":"";?>">
                <a href="index.php?con=post&p=<?php echo $i;?>" style="cursor: pointer"><?php echo $i;?></a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>