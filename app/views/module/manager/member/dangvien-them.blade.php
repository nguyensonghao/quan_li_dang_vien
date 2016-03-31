{{ HTML::style('libs/css/module/themdangvien.css') }}
@extends('template/layout/main')

@section('title')
    Thêm Đảng viên là sinh viên
@endsection

@section('content-box')
    <ul class="menu-add-member">
        <li class="menu-active">
            Đảng viên là sinh viên
        </li>
        <li>
            <a href="{{ Asset('them-can-bo') }}">Đảng viên là cán bộ</a>
        </li>
    </ul>

    <table class="table table-condensed">
        <form method="post" action="{{Asset('dangvien/them')}}" enctype="multipart/form-data">
        <tbody>
            @if (Session::get('result-add-member') == -1)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Lỗi!</strong> số hiệu bị trùng
                </div>
            @endif

            @if (Session::get('result-add-member') == -2)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Lỗi!</strong> có lỗi trong quá trình thêm Đảng viên
                </div>
            @endif

            @if (Session::get('result-add-member') == 1)
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Thông báo!</strong> thêm Đảng viên thành công
                </div>
            @endif

            @if (Session::get('result-add-member') == -4)
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Lỗi!</strong> hãy thêm ảnh cá nhân vào
                </div>
            @endif

            @if (Session::get('result-add-member') == -3)
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Lỗi!</strong> ảnh cá nhân chỉ có thể là file có đuôi png, jpg
                </div>
            @endif
            <tr>
                <td style="max-width: 400px;">
                    <label>Đơn vị</label>
                    <select name="ma_dvql" style="width: 200px">
                        @foreach($dv as $value)
                            <option value="{{$value->ma_dv}}">{{$value->dv}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    
                </td>
                <td>
                    <label style="min-width: 70px;">Số hiệu</label>
                    <input type="text" name="sohieuchuan" required>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label>Diện cán bộ</label>
                    <select name="dcb">
                        @foreach($dcb as $value)
                            <option value="{{$value->ma_dcb}}">{{$value->dcb}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label>Hiện nay</label>
                    <select name="tt">
                        @foreach($tt as $value)
                            <option value="{{$value->ma_tt}}">{{$value->tt}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label style="min-width: 70px">Trạng thái</label>
                    <select name="ttht" style="width: 140px">
                        @foreach($ttht as $value)
                            <option value="{{$value->ma_ttht}}">{{$value->ttht}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Họ và tên</label>
                    <input type="text" name="hoten">
                </td>
                <td>
                    <label>Tên thường dùng</label>
                    <input type="text" name="ttd">
                </td>
                <td>
                    <label style="min-width: 70px">Giới tính</label>
                    <select name="gt">
                        <option value="1">Nam</option>
                        <option value="0">Nữ</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Ngày sinh</label>
                    <input type="date" name="ntns">
                </td>
                <td>
                    <label>Nơi sinh</label>
                    <select name="ma_ns" style="width: 150px">
                        @foreach($quequan as $value)
                            <option value="{{$value->ma_huyen}}">
                                {{$value->ttp}} - {{$value->ten_huyen}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label style="min-width: 70px">Hôn nhân</label>
                    <select name="tthn" style="width: 100px">
                        @foreach($tthn as $value)
                            <option value="{{$value->ma_tthn}}">{{$value->tthn}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label>Quê quán</label>
                    <select name="ma_qq" style="width: 150px">
                        @foreach($quequan as $value)
                            <option value="{{$value->ma_huyen}}">
                                {{$value->ttp}} - {{$value->ten_huyen}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label>Chi tiết</label>
                    <input type="text" name="ctqq">
                </td>
                <!--<td>
                    <label style="min-width: 70px">Học hàm</label>
                    <select name="hh">
                        @foreach($hh as $value)
                            <option value="{{$value->ma_hh}}">{{$value->hh}}</option>
                        @endforeach
                    </select>
                </td>!-->
            </tr>
            
            <tr>
                <td>
                    <label>Hộ khẩu thường chú</label>
                    <select name="ma_hktt" style="width: 150px">
                        @foreach($quequan as $value)
                            <option value="{{$value->ma_huyen}}">
                                {{$value->ttp}} - {{$value->ten_huyen}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label>Chi tiết</label>
                    <input type="text" name="cthktt">
                </td>
            </tr>

            <tr>
                <td>
                    <label>Chỗ ở hiện nay</label>
                    <input type="text" name="dctt">
                </td>
                <td>
                    <label>Điện thoại</label>
                    <input type="text" name="tel">
                </td>
                <td>
                    <label style="min-width: 70px">Email</label>
                    <input type="email" name="email">
                </td>
            </tr>
            
            <tr>
                <td>
                    <label>Số chứng minh nhân dân</label>
                    <input type="text" name="scmnd">
                </td>
                <td>
                    <label>Nơi cấp</label>
                    <select name="nc">
                        @foreach($ttp as $value)
                            <option value="{{$value->ttp}}">{{$value->ttp}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label style="min-width: 70px">Ngày cấp</label>
                    <input type="date" name="ngay_cap">
                </td>
            </tr>

            <tr>
                <td>
                    <label>Dân tộc</label>
                    <select name="ma_dt">
                        @foreach($dt as $value)
                            <option value="{{$value->ma_dt}}">{{$value->dt}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label>Tôn giáo</label>
                    <select name="ma_tg">
                        @foreach($tg as $value)
                            <option value="{{$value->ma_tg}}">{{$value->tg}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label style="min-width: 70px">Thành phần xuất thân</label>
                    <select name="ma_tpxt" style="width: 105px">
                        @foreach($tpxt as $value)
                            <option value="{{$value->ma_tpxt}}">{{$value->tpxt}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Diện ưu tiên</label>
                    <select name="ma_tb" style="width: 170px">
                        @foreach($tb as $value)
                            <option value="{{$value->ma_tb}}">{{$value->tb}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label>Gia đình chính sách</label>
                    <select name="ma_gdtdcs" style="width: 170px">
                        @foreach($gdcs as $value)
                            <option value="{{$value->ma_gdcs}}">{{$value->gdcs}}</option>
                        @endforeach
                    </select>
                </td>

                <td style="min-width: 10px;"></td>
            </tr>

            <tr>
                <td>
                    <label>Ngày tuyển dụng</label>
                    <inpur type="date" name="ntgcm">
                </td>
                <td>
                    <label>Ngày thi tuyển viên chức</label>
                    <inpur type="date" name="nvbc">
                </td>
            </tr>       

            <tr>
                <td>
                    <label>Cơ quan tiếp nhận</label>
                    <select name="cqtd">
                        <option>Trường đại học Bách Khoa Hà Nội</option>
                    </select>
                </td>
                <td style="max-width: 500px">
                    <label>Thêm mới cquan tiếp nhận</label>
                    <input type="text" name="cqtd">
                    <button>Thêm</button>
                </td>
            </tr>     

            <tr>
                <td>
                    <label>Công việc được giao</label>
                    <select name="vdpc" style="width: 210px">
                        @foreach($cv as $value)
                            <option value="{{$value->ma_cv}}">{{$value->cv}}</option>
                        @endforeach
                    </select>
                </td>
                <!--<td>
                    <label>Thêm mới cviệc được giao</label>
                    <input type="text" name="cvdg">
                    <button>Thêm</button>
                </td>!-->
            </tr>   
            <tr>
                <td>
                    <label>Ngày về cơ quan</label>
                    <input type="date" name="nvcqhn">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Công việc hiện nay</label>
                    <select name="cvdn" style="width: 210px">
                        @foreach($cv as $value)
                            <option value="{{$value->ma_cv}}">{{$value->cv}}</option>
                        @endforeach
                    </select>
                </td>
                <!--
                <td style="max-width: 400px">
                    <label>Thêm mới cv được giao hiện nay</label>
                    <input type="text" name="cvhn">
                </td>!-->
                <td>
                    <button>Thêm</button>
                </td>
            </tr>  
            <tr>
                <td>
                    <label>Số bảo hiểm</label>
                    <input type="text" name="sbh">
                </td>
                <td>
                    <label>Ngày bắt đầu đóng bảo hiểm</label>
                    <input type="date" name="ndbh">
                </td>
            </tr>  

            <tr>
                <td>
                    <label>Ngày vào Đảng</label>
                    <input type="date" name="nvd">
                </td>
                <td>
                    <label>Ngày chính thức</label>
                    <input type="date" name="nct">
                </td>
            </tr>  

            <tr>
                <td>
                    <label>Ngày nhập ngũ</label>
                    <input type="date" name="nnn">
                </td>
                <td>
                    <label>Ngày xuất ngũ</label>
                    <input type="date" name="nxn">
                </td>
            </tr>  

            <tr>
                <td>
                    <label>Trình độ LLCT</label>
                    <select name="ma_tdllct">
                        @foreach($tdll as $value)
                            <option value="{{$value->ma_tdll}}">{{$value->tdll}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label>Trình độ QLNN</label>
                    <select name="ma_tdqlnn">
                         @foreach($tdql as $value)
                            <option value="{{$value->ma_tdql}}">{{$value->tdql}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label style="min-width: 80px">Trình độ tin học</label>
                    <select name="ma_tdth">
                        @foreach($tdth as $value)
                            <option value="{{$value->ma_tdth}}">{{$value->tdth}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Trình độ học vấn phổ thông</label>
                    <select name="ma_tdhv">
                        @foreach($tdhv as $value)
                            <option value="{{$value->ma_tdhv}}">{{$value->tdhv}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label>Sức khỏe</label>
                    <select name="ma_ttsk">
                        @foreach($ttsk as $value)
                            <option value="{{$value->ma_ttsk}}">{{$value->ttsk}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label>Nhóm máu</label>
                    <select name="ma_nm">
                        @foreach($nm as $value)
                            <option value="{{$value->ma_nm}}">{{$value->nm}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Sở trưởng năng khiếu</label>
                    <textarea name="nlstnk"></textarea>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Lịch sử bản thân</label>
                    <textarea name="ddlsbt"></textarea>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Thông tin khác</label>
                    <textarea name="ttk"></textarea>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Ảnh cá nhân</label>
                    <input type="file" name="img">
                </td>
            </tr>

            <tr>
                <td><b>Thông tin Đảng viên</b></td>
            </tr>
            <!--<tr>
                <td>
                    <label>Số thẻ Đảng viên</label>
                    <input type="text" name="so_the_dv">
                </td>

            </tr>
            <tr>
                <td>
                    <label>Người giới thiệu 1</label>
                    <input type="text" name="ngt1">
                </td>
                <td>
                    <label>Chức vụ người giới thiệu 1</label>
                    <input type="text" name="cv_ngt1">
                </td>
            </tr>

            <tr>
                <td>
                    <label>Người giới thiệu 2</label>
                    <input type="text" name="ngt2">
                </td>
                <td>
                    <label>Chức vụ người giới thiệu 2</label>
                    <input type="text" name="cv_ngt2">
                </td>
            </tr>!-->

            <tr>
                <td>
                    <button type="submit" class="btn btn-primary btn-sm" 
                    style="margin-left: 0px !important;">
                        Kết nạp Đảng viên
                    </button>
                    <button class="btn btn-success btn-sm">Làm mới</button>
                </td>
            </tr>

        </tbody>
        </form>
    </table>
    <script>
    $(document).ready(function () {
        var date = new Date();

        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();

        if (month < 10) month = "0" + month;
        if (day < 10) day = "0" + day;

        var today = year + "-" + month + "-" + day;     
        $('input[type="date"]').val(today);
    })

    document.addEventListener("DOMContentLoaded", function() {
    var elements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("Trường này không được để trống");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
})
    </script>
@endsection