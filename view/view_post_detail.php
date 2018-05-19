<div id="page-wrapper">
    <div class="row" style="margin-top: 50px; padding-top: 20px">
        <p style="padding-left: 25px;font-size: 24px"><i class="glyphicon glyphicon-list"></i> Các bài viết tham khảo</p>
        <hr>
        <div class="col-md-10">
            <div class="">
                <p style="color: #018DD0; font-size: 24px; margin-bottom: 0px;"><i class="glyphicon glyphicon-bookmark"></i> <?= $post['title'];?></p>
                <div class="text-muted" style="padding-left: 25px;">
                <?php
                    $adminName = fetch_one("select fullname from tbl_admin where id=".$post['admin_id']);
                ?>
                    <i><span>By <?= $adminName['fullname'];?></span>&nbsp;-&nbsp;<span>Ngày đăng: <?= date("d-m-Y", strtotime($post['create_date']));?></span></i>
                </div>
                <div style="margin: 10px 0px; padding-bottom: 25px;">
                    <?= $post['content'];?>
                </div>
            </div>
        </div>
    </div>
</div>
