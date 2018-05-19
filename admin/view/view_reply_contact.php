<style>#tinymce{ width: 100%}</style>
<div class="row">
    <div class="col-md-12">
        <div style="margin-bottom: 15px; ">
            <p class="bd-primary">Trả lời câu hỏi liên hệ</p>
        </div>
        <table cellpadding="5" class="table table-bordered table-hover">
            <tbody class="questionList">
                <tr style="background-color: #ddd; ">
                    <th style="width: 150px; text-align: center; ">Người hỏi</th>
                    <th style="width: 600px; text-align: center; ">Câu hỏi</th>
                    <th style="width: 150px;text-align: center;  ">Ngày hỏi</th>
                </tr>
                <tr>
                    <td style=""><?= isset($contactData) ? $contactData['name']:'' ;?></td>
                    <td style=""><?= isset($contactData) ? $contactData['content']:'' ;?></td>
                    <td style="text-align: center; "><?= isset($contactData) ? $contactData['create_date']:'' ;?></td>
                </tr>
            </tbody>
        </table>
        <hr>
        <div style="margin-bottom: 15px; ">
            <p class="bd-primary">Nội dung trả lời</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <?php echo isset($msg) ? $msg:'';?>
                    <form method="POST" id="formSignin" action="index.php?controller=reply_contact">
                        <div class="form-group">
                            <div class="input-group col-md-12">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                                <input type="text" class="form-control" placeholder="Tiêu đề" name="title" required <?php echo (!isset($_GET['id'])) ? 'disabled':''; ?>>
                            </div><!-- div.input-group -->
                        </div><!-- div.form-group -->
                        
                        <div class="form-group">
                            <br>
                            <label for="tinymce1">Nội dung</label>
                            <textarea class="form-control" name="content" id="tinymce" rows="8" maxlength="1000" placeholder="Nội dung câu trả lời" <?php echo (!isset($_GET['id'])) ? 'disabled':''; ?>></textarea>
                        </div>
                        <input type="hidden" name="email" value="<?= isset($contactData) ? $contactData['email']:'' ;?>">
                        <input type="hidden" name="contact_id" value="<?= isset($contactData) ? $contactData['id']:'' ;?>">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" <?php echo (!isset($_GET['id'])) ? 'disabled':''; ?>><i class="glyphicon glyphicon-send"></i> Gửi đi</button>
                            <button type="reset" class="btn btn-warning" <?php echo (!isset($_GET['id'])) ? 'disabled':''; ?>><i class="glyphicon glyphicon-refresh"></i> Nhập lại</button>
                        </div><!-- div.form-group -->
                        <div class="alert alert-danger hidden"></div>
                    </form><!-- form#formSignin -->
                </div><!-- dib.col-md-6 -->
            </div>
        </div>
    </div>
</div>

<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script>

</script>