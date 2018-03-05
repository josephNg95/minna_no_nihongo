<div class="container-fluid">
    <div class="alert alert-info" role="alert">
        <marquee width="300px;">
            <span style="color:red">Xin chào: <?php  echo $name;?> </span>
        </marquee>
    </div>
    <div class="panel panel-primary">
        <div class="row">
            <div class="col-md-4" >
                <div class="panel-body" style="width:220px;">
                    <div class="panel panel-primary" style="margin-left: 10px; ">
                        <img src="./img/user1.png" width="150" height="150">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel-body">
                    <div class="row" style="margin-top:80px; font-size: 16px; ">
                        <div class="col-md-2" style="font-weight: 700;">Họ và tên: </div>
                            <?php  foreach ($arr_profile as $key) { ?>
                                <div class="col-md-8"><?= $key["fullname"];?></div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>