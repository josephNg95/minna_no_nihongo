
<div class="alphabet">
	<section id="joyoSection" lang="ja">
        <h3 id='hiragana' style="display: none;"></h3>
        <div id="hidehiragana" >
        <?php
            foreach ($hiraganas as $key_hiragana => $hiragana) {
        ?>
        	<button class="notInBoth" style="width: 85px;" onclick="doIt('<?= $hiragana['original'];?>')"><?= $hiragana['original'];?>
				<span style="color: #000; font-size: 13px;">(<?= $hiragana['romaji'];?>)</span>
        	</button>
        <?php } ?>
        </div>
        <h3 id='katakana' style="display: none;"></h3>
        <div  id="hidekatakana" style="display: none;">
        <?php
            foreach ($katakanas as $key_katakana => $katakana) {
        ?>
        	<button class="notInBoth" style="width: 85px;" onclick="doIt('<?= $katakana['original'];?>')"><?= $katakana['original'];?>
				<span style="color: #000; font-size: 13px;">(<?= $katakana['romaji'];?>)</span>
        	</button>
            <?php } ?>
        </div>
    </section>
    <section id="frequentSection" lang="zh-Hans"></section>	
</div>
<div class="drawFrame" style="position: fixed; right: 0px;">
	<div class="input">
        <div class="sectionSwitch">
            <input id="joyoRadio" type="radio" checked name="sectionSwitch" onclick="switchSection()" checked hidden>
        </div>
        <div class="sectionCheckBox">
            <input id="number" type="checkbox" onclick="switchNumber()" checked hidden>
            <input id="grid" type="checkbox" onclick="switchGrid()" checked hidden>
        </div>
        <div class="sectionSize">
            <input id="fs256" type="radio" checked name="sectionSize" onclick="switchSize(256)" hidden>
        </div>
        <input id="data" style="display: none;" type="text" maxlength="1" value="" placeholder="Nhập chữ muốn vẽ">
    </div>
    <div id="a"></div>
    <input id="ok" type="button" value="Vẽ lại" onclick="ok()" style="">
    <div id="b" style="display: none;"></div>
</div>

<script>
    document.getElementById("data").addEventListener("keyup",function(event) {
    	event.preventDefault();
    	if (event.keyCode==13) ok();
    });
</script>