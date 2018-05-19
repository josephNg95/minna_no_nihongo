<!DOCTYPE html PUBLIC>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="http://localhost/All_project/minna_no_nihongo/">
    <title>Minna no Nihongo</title>
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="public/css/sb-admin-2.css" rel="stylesheet">
    <link href="public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="public/css/custom.css" rel="stylesheet">
    <script src="public/js/index.js"></script>
    <script src="public/jquery/jquery.min.js"></script>
    <style type="text/css">
        .btn,.form-control,.input-group-addon,.nav,.nav-pills>li>a,.panel,.panel-group .panel,.panel-heading{border-radius:0}#a,svg{height:256px}#a,#b{width:256px;margin:1em auto}#data,div.dico{line-height:1.25em}#data,#joyoSection{display:block}.nav-pills>li>a{box-shadow:3px 3px 3px #b7b7b7}.nav{border-bottom:1px solid #ddd}#data{font-family:arial,sans-serif;text-align:center;width:300px;font-size:25px;height:1.5em;margin:0 auto;padding:0;vertical-align:middle}#ok{-webkit-appearance:none;margin-top:.5em;padding:5px 15px;font-size:1.5em;border:0;background:#257dda;color:#fff;border-radius:3px;width:254px;position:fixed;right:75px}#a,#frequentSection button.sameInBoth,#joyoSection button.sameInBoth{color:#000}#a{position:relative;border:1px solid #ccc;background:0 0}#a.noBorder{border-color:transparent}#frequentSection button:hover,#joyoSection button:hover,#ok:hover{cursor:pointer}#ok:active,#ok:focus,#ok:hover{box-shadow:3px 3px 3px #827f7f;transition:.5s}#ok::-moz-focus-inner{border:0}div.grid1,div.grid3{border-bottom:1px solid #ccc}div.grid2,div.grid4{border-right:1px solid #ccc}div.grid0,div.grid5{border:1px solid #ccc}label{display:inline-block;white-space:normal;margin:0 .5em 1em}label input{vertical-align:text-bottom}svg{width:256px}svg.error{font-size:256px}#b{min-height:9.5em}div.dico{margin:0 .25em;padding-top:.25em;text-align:left}span.cjkChar{vertical-align:top}div.grid{position:absolute;box-sizing:border-box;z-index:1}div.grid0{z-index:1;left:0;top:0;bottom:0;right:0}div.grid1{z-index:1;top:25%;left:0;width:100%;height:50%;border-top:1px solid #ccc}div.grid2{z-index:1;top:0;left:25%;width:50%;height:100%;border-left:1px solid #ccc}div.grid3,div.grid4{top:0;left:0;z-index:1}div.grid3{width:100%;height:50%}div.grid4{width:50%;height:100%}div.grid5{z-index:1;left:9.175%;top:9.175%;width:81.65%;height:81.65%}#frequentSection{display:none}span.missing,span.notInBoth,span.notSameInBoth,span.sameInBoth{display:inline-block;width:1em}#frequentSection button,#joyoSection button{border:0;background:0 0;color:#000;font-size:2.25em;margin:.1em}span.sameInBoth{color:transparent;background:#000}#frequentSection button.notSameInBoth,#joyoSection button.notSameInBoth{color:#00f}span.notSameInBoth{color:transparent;background:#00f}#frequentSection button.notInBoth,#joyoSection button.notInBoth{color:#0058ff}span.notInBoth{color:transparent;background:#090}#frequentSection button.missing,#joyoSection button.missing{color:#c00}span.missing{color:transparent;background:#c00}footer{padding-top:1em}footer a{color:#000}#joyoSection button.notInBoth:hover{box-shadow:3px 3px 3px 2px #8a8a8a;transition:all .2s linear}#joyoSection button.notInBoth{margin-right:15px}.alphabet{float:left;width:70%}.drawFrame{float:left;width:30%}
    </style>
</head>
<body>
<div id="wrapper">
    <?php ob_start(); include "view/view_header.php";?>
    <div id="top_content1" class="clearfix">
        <?php
            if(isset($load_con)) {
                include $load_con;
            }
        ?>
    </div>
</div>

<script src="public/bootstrap/js/bootstrap.min.js"></script>
<script src="public/metisMenu/metisMenu.min.js"></script>
<script src="public/js/sb-admin-2.js"></script>
<script type="text/javascript">
    function katakana() {
        var katakana = document.getElementById('hidekatakana');
        katakana.removeAttribute('style');

        var hiragana = document.getElementById('hidehiragana');
        hiragana.setAttribute("style", "display: none;");
    }

    function hiragana() {

        var hiragana = document.getElementById('hidehiragana');
        hiragana.removeAttribute('style');

        var katakana = document.getElementById('hidekatakana');
        katakana.setAttribute("style", "display: none;");
    }
</script>
<script>
// Javascript to enable link to tab
var url = document.location.toString();
if (url.match('#')) {
    $('.nav-pills a[href="#' + url.split('#')[1] + '"]').tab('show');
}
// Change hash for page-reload
$('.nav-pills a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash;
})
</script>
</body>
</html>
