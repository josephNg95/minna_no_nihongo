<?php foreach ($answerData as $key => $answer) { ?>
    <div class="form-group">
        <label for="answer<?= $key+1;?>" class="col-sm-2 control-label">Đáp án <?= $key+1;?></label>
        <div class="col-sm-10">
            <input type="text" name="answer<?= $key+1;?>" id="answer<?= $key+1;?>" value="<?= $answer['answer'];?>" class="form-control input-sm">
        </div>
    </div>
<?php } ?>
<div class="form-group">
    <label for="answer" class="col-sm-2 control-label">Đáp án đúng</label>
    <label class="radio-inline" style="margin-left: 20px;">
        <input type="radio" name="ra_answer" id="ra_answer1" value="1" <?php echo ($questionData['answer_id'] == 1)?"checked":"";?>> Đáp án 1
    </label>
    <label class="radio-inline">
        <input type="radio" name="ra_answer" id="ra_answer2" value="2" <?php echo ($questionData['answer_id'] == 2)?"checked":"";?>> Đáp án 2
    </label>
    <label class="radio-inline">
        <input type="radio" name="ra_answer" id="ra_answer3" value="3" <?php echo ($questionData['answer_id'] == 3)?"checked":"";?>> Đáp án 3
    </label>
    <label class="radio-inline">
        <input type="radio" name="ra_answer" id="ra_answer3" value="4" <?php echo ($questionData['answer_id'] == 4)?"checked":"";?>> Đáp án 4
    </label>
</div>
<div class="form-group">
    <label for="show" class="col-sm-2 control-label">Trạng thái hiện thị</label>
    <div class="col-sm-4">
        <select name="flag" id="show" class="form-control input-sm">
            <option value="1" <?php echo ($questionData['flag'] == 1)?"selected":"";?>>Hiện</option>
            <option value="0" <?php echo ($questionData['flag'] == 1)?"":"selected";?>>Ẩn</option>
        </select>
    </div>
</div>