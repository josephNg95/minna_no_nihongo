<style>.jp-text {font-size: 13px;font-weight:500;}</style>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12"  style="margin-bottom: 15px; ">
            <p class="bd-primary" style="width: 250px; margin-bottom:15px;">Luyện thi JLPT N5</p>
            <div class="pull-left">
                <div style="float:left; margin-right: 15px; line-height: 35px;">Loại câu hỏi</div>
                <div style="float:left">
                    <select name="filterTest" id="filterTest" class="form-control input-sm" onchange="filterTest()">
                        <option value="0">----- Chọn loại câu hỏi -----</option>
                        <option value="">N5 Ngữ pháp</option>
                        <option value="">N5 Từ vựng</option>
                        <option value="">N5 Kanji</option>
                    </select>
                    <form name="filterForm" method="post">
                        <input type="hidden" id="typeFilter" name="typeFilter" value="">
                    </form>
                </div>
            </div>
            <p class="pull-right">
                <a class="btn btn-primary" href="?controller=add_edit_jlpttest&lv=5">
                    <i class="glyphicon glyphicon-plus"></i> Thêm câu hỏi
                </a>
            </p>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <tr style="background-color: #ddd; ">
                    <th style="width: 50px; ">STT</th>
                    <th style="width: 100px; text-align: center; ">Loại</th>
                    <th style="width: 550px; text-align: center; ">Câu hỏi</th>
                    <th style="width: 100px;text-align: center;  ">Đáp án</th>
                    <th style="width: 80px; text-align: center; ">Trạng thái</th>
                    <th style="">Sửa</th>
                    <th style="">Xóa</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>N5 Ngữ pháp</td>
                    <td class="jp-text">テーブルに　ケーキが　おいて(___)。</td>
                    <td class="jp-text"><あります</td>
                    <td><span class="label label-success">Hiển thị</span></td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_basickanji"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>N5 Từ vựng</td>
                    <td class="jp-text">あなたはこの計画について(___)思いますか。</td>
                    <td class="jp-text">どう</td>
                    <td><span class="label label-success">Hiển thị</span></td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_basickanji"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>N5 Ngữ pháp</td>
                    <td class="jp-text">きょうは　きのう(___)　いそがしいです。</td>
                    <td class="jp-text">より</td>
                    <td><span class="label label-success">Hiển thị</span></td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_basickanji"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>N5 Kanji</td>
                    <td class="jp-text">たいしかん</td>
                    <td class="jp-text">大使館</td>
                    <td><span class="label label-success">Hiển thị</span></td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_basickanji"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>N5 Kanji</td>
                    <td class="jp-text">あいて</td>
                    <td class="jp-text">開いて</td>
                    <td><span class="label label-success">Hiển thị</span></td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_basickanji"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>N5 Từ vựng</td>
                    <td class="jp-text">さむいから　まどを(___)ください。</td>
                    <td class="jp-text">しめて</td>
                    <td><span class="label label-success">Hiển thị</span></td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_basickanji"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>N5 Từ vựng</td>
                    <td class="jp-text">学校まで遠いので、毎日電車で(___)のはたいへんです。</td>
                    <td class="jp-text">かよう</td>
                    <td><span class="label label-success">Hiển thị</span></td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_basickanji"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
            </table>
            <div>
            <ul class="pagination">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
