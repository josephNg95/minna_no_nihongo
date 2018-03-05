<div class="row">
    <div class="col-md-12">
        <div class="col-md-12" >
            <p class="bd-primary" style="width: 250px;">Các bài viết tham khảo</p>
            <div class="pull-left" style="margin-top: 10px; ">
                <div style="float:left; margin-right: 15px; line-height: 35px;">Người đăng</div>
                <div style="float:left">
                    <select name="filterTest" id="filterTest" class="form-control input-sm" onchange="filterTest()">
                        <option value="0">----- Tất cả -----</option>
                        <option value="">admin1</option>
                        <option value="">admin2</option>
                        <option value="">admin3</option>
                        <option value="">admin4</option>
                        <option value="">admin5</option>
                    </select>
                    <form name="filterForm" method="post">
                        <input type="hidden" id="typeFilter" name="typeFilter" value="">
                    </form>
                </div>
            </div>
            <p class="pull-right">
                <a class="btn btn-primary" href="?controller=add_edit_reference">
                    <i class="glyphicon glyphicon-pencil"></i> Thêm bài viết mới
                </a>
            </p>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <tr style="background-color: #ddd;">
                    <th style="width: 50px;">STT</th>
                    <th style="width: 600px; ">Tiêu đề</th>
                    <th style="width: 100px; ">Ngày đăng</th>
                    <th style="width: 100px; ">Người viết</th>
                    <th style="width: 80px; ">Trạng thái</th>
                    <th style="">Sửa</th>
                    <th style="">Xóa</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>38 mẫu câu tiếng Nhật sử dụng khẩn cấp</td>
                    <td>22-02-2018</td>
                    <td>admin1</td>
                    <td><span class="label label-success">Hiển thị</span></td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_reference"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Học ngữ pháp tiếng Nhật: Phân biệt  ほど、くらい và ころ</td>
                    <td>19-02-2018</td>
                    <td>admin1</td>
                    <td><span class="label label-success">Hiển thị</span></td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_reference"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Lý do học tiếng Nhật nhiều mà vẩn kém</td>
                    <td>18-02-2018</td>
                    <td>admin5</td>
                    <td><span class="label label-success">Hiển thị</span></td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_reference"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Luyện nghe tiếng Nhật hiệu quả với 6 bước</td>
                    <td>17-02-2018</td>
                    <td>admin5</td>
                    <td><span class="label label-success">Hiển thị</span></td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_reference"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Khám phá ý nghĩa ngày sinh trong tiếng Nhật</td>
                    <td>17-02-2018</td>
                    <td>admin4</td>
                    <td><span class="label label-success">Hiển thị</span></td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_reference"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Danh sách các điểm ngữ pháp N3</td>
                    <td>15-02-2018</td>
                    <td>admin4</td>
                    <td><span class="label label-success">Hiển thị</span></td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_reference"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>7 quy tắc cần biết khi học nói tiếng Nhật</td>
                    <td>12-02-2018</td>
                    <td>admin2</td>
                    <td><span class="label label-success">Hiển thị</span></td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_reference"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Các Mẫu Ngữ Pháp Liên Quan Tới Thể Te （Vて）</td>
                    <td>10-02-2018</td>
                    <td>admin1</td>
                    <td><span class="label label-success">Hiển thị</span></td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_reference"><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                    <td class="btn-del">
                        <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>42 từ vựng tiếng Nhật cần biết  về tính cách con người</td>
                    <td>09-02-2018</td>
                    <td>admin3</td>
                    <td><span class="label label-success">Hiển thị</span></td>
                    <td class="btn-edit">
                        <a href="?controller=add_edit_reference"><i class="glyphicon glyphicon-edit"></i></a>
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
