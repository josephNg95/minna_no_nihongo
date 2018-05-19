<style>#tinymce{width: 85%}</style>
<div id="page-wrapper">
    <div class="row" style="margin-top: 20px; padding-top: 20px">
        <div class="container-fluid">
            <div class="page-header">
                <h2>Gửi liên hệ tới chúng tôi</h2>
            </div><!-- div.page-header -->
        </div><!-- div.container -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <?= isset($msg) ? $msg:'';?>
                    <i><p style="color: #fb5757">(*) Thư trả lời sẽ được gửi tới hòm thư của bạn. Vì vậy, vui lòng nhập đúng email</p></i>
                    <form method="POST" id="formSignin" action="index.php?con=contact_us">
                        <div class="form-group">
                            <div class="input-group col-md-8">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" class="form-control" placeholder="Tên của bạn" name="fullname" value="<?php echo isset($_SESSION['user_id']) && isset($userInfo) ? $userInfo['fullname']:'';?>" required>
                            </div><!-- div.input-group -->
                        </div><!-- div.form-group -->
                        <div class="form-group">
                            <div class="input-group col-md-8">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo isset($_SESSION['user_id']) && isset($userInfo) ? $userInfo['email']:'';?>" required>
                            </div><!-- div.input-group -->
                        </div><!-- div.form-group -->
                        <div class="form-group">
                            <textarea class="form-control" name="content" id="tinymce" rows="6" maxlength="500"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i> Gửi đi</button>
                            <button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-refresh"></i> Nhập lại</button>
                        </div><!-- div.form-group -->
                        <div class="alert alert-danger hidden"></div>
                    </form><!-- form#formSignin -->
                    <div class="row" style="margin-top: 50px;">
                        <h4>Thảo luận qua facebook</h4>
                      <div class="fb-comments" data-href="https://www.facebook.com/Ti%E1%BA%BFng-Nh%E1%BA%ADt-cho-ng%C6%B0%E1%BB%9Di-m%E1%BB%9Bi-b%E1%BA%AFt-%C4%91%E1%BA%A7u-229790777579717/" data-numposts="20"></div>
                    </div>
                </div><!-- dib.col-md-6 -->
                <div class="col-md-4">
                    <div class="col-md-12">
                        <h3>Ghé thăm Fanpage của chúng tôi</h3>
                    </div>
                    <div class="fb-page" data-href="https://www.facebook.com/Ti%E1%BA%BFng-Nh%E1%BA%ADt-cho-ng%C6%B0%E1%BB%9Di-m%E1%BB%9Bi-b%E1%BA%AFt-%C4%91%E1%BA%A7u-229790777579717/" data-tabs="timeline" data-height="450" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Ti%E1%BA%BFng-Nh%E1%BA%ADt-cho-ng%C6%B0%E1%BB%9Di-m%E1%BB%9Bi-b%E1%BA%AFt-%C4%91%E1%BA%A7u-229790777579717/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Ti%E1%BA%BFng-Nh%E1%BA%ADt-cho-ng%C6%B0%E1%BB%9Di-m%E1%BB%9Bi-b%E1%BA%AFt-%C4%91%E1%BA%A7u-229790777579717/">Tiếng Nhật cho người mới bắt đầu</a></blockquote></div>
                </div>
            </div><!-- div.row -->
        </div><!-- div.container -->
    </div>
</div>

<script src="public/tinymce/js/tinymce/tinymce.min.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>