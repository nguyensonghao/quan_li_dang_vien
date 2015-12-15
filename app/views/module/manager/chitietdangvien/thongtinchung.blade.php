<table class="table table-condensed thongtinchung">
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
            <tr><td><p><b>Thông tin chung</b></p></td></tr>
            <tr>
                <td style="max-width: 400px;">
                    <label>Đơn vị</label>
                    <select name="ma_dvql" style="width: 200px" required>
                        @foreach($dv as $value)
                            <option value="{{$value->ma_dv}}"
                            @if($dangvien->ma_dvql == $value->ma_dv)
                              selected="selected
                            @endif>
                              {{$value->dv}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    
                </td>
                <td>
                    <label style="min-width: 70px;">Số hiệu</label>
                    <input type="text" name="sohieuchuan" required 
                    value="{{$dangvien->sohieuchuan}}">
                </td>
            </tr>
            
            <tr>
                <td>
                    <label>Diện cán bộ</label>
                    <select name="dcb" required>
                        @foreach($dcb as $value)
                            <option value="{{$value->ma_dcb}}"
                            @if($dangvien->dcb == $value->ma_dcb)
                              selected="selected
                            @endif>
                              {{$value->dcb}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label>Hiện nay</label>
                    <select name="tt" required>
                        @foreach($tt as $value)
                            <option value="{{$value->ma_tt}}"
                            @if($dangvien->tt == $value->ma_tt)
                              selected="selected
                            @endif>
                              {{$value->tt}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label style="min-width: 70px">Trạng thái</label>
                    <select name="ttht" style="width: 140px" required>
                        @foreach($ttht as $value)
                            <option value="{{$value->ma_ttht}}"
                            @if($dangvien->ttht == $value->ma_ttht)
                              selected="selected
                            @endif>
                              {{$value->ttht}}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Họ và tên</label>
                    <input type="text" name="hoten" required 
                    value="{{$dangvien->hodem .' '. $dangvien->ten}}">
                </td>
                <td>
                    <label>Tên thường dùng</label>
                    <input type="text" name="ttd" required value="{{$dangvien->ttd}}">
                </td>
                <td>
                    <label style="min-width: 70px">Giới tính</label>
                    <select name="gt" required>
                        <option value="1" 
                        @if($dangvien->gt == 1) selected="selected" @endif>
                          Nam
                        </option>
                        <option value="0"
                        @if($dangvien->gt == 0) selected="selected" @endif>
                          Nữ
                        </option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Ngày sinh</label>
                    <input type="date" name="ntns" required value="{{$dangvien->ntns}}">
                </td>
                <td>
                    <label>Nơi sinh</label>
                    <select name="ma_ns" required style="width: 150px">
                        @foreach($quequan as $value)
                            <option value="{{$value->ma_huyen}}"
                            @if($dangvien->ma_ns == $value->ma_huyen) 
                              selected="selected"
                            @endif>
                                {{$value->ttp}} - {{$value->ten_huyen}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label style="min-width: 70px">Hôn nhân</label>
                    <select name="tthn" style="width: 100px" required>
                        @foreach($tthn as $value)
                            <option value="{{$value->ma_tthn}}"
                            @if($dangvien->tthn == $value->ma_tthn) 
                              selected="selected"
                            @endif>
                              {{$value->tthn}}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label>Quê quán</label>
                    <select name="ma_qq" required style="width: 150px">
                        @foreach($quequan as $value)
                            <option value="{{$value->ma_huyen}}"
                            @if($dangvien->ma_qq == $value->ma_huyen) 
                              selected="selected"
                            @endif>
                                {{$value->ttp}} - {{$value->ten_huyen}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label>Chi tiết</label>
                    <input type="text" name="ctqq" value="{{$dangvien->ctqq}}">
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
                    <select name="ma_hktt" required style="width: 150px">
                        @foreach($quequan as $value)
                            <option value="{{$value->ma_huyen}}"
                            @if($dangvien->ma_hktt == $value->ma_huyen) 
                              selected="selected"
                            @endif>
                              {{$value->ttp}} - {{$value->ten_huyen}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label>Chi tiết</label>
                    <input type="text" name="cthktt" value="{{$dangvien->cthktt}}">
                </td>
            </tr>

            <tr>
                <td>
                    <label>Chỗ ở hiện nay</label>
                    <input type="text" name="dctt" required value="{{$dangvien->dctt}}">
                </td>
                <td>
                    <label>Điện thoại</label>
                    <input type="text" name="tel" required value="{{$dangvien->tel}}">
                </td>
                <td>
                    <label style="min-width: 70px">Email</label>
                    <input type="text" name="email" required value="{{$dangvien->email}}">
                </td>
            </tr>
            
            <tr>
                <td>
                    <label>Số chứng minh nhân dân</label>
                    <input type="text" name="scmnd" required value="{{$dangvien->scmnd}}">
                </td>
                <td>
                    <label>Nơi cấp</label>
                    <select name="nc" required>
                        @foreach($ttp as $value)
                            <option value="{{$value->ttp}}"
                            @if($dangvien->nc == $value->ma_ttp)
                              selected="selected
                            @endif>
                              {{$value->ttp}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label style="min-width: 70px">Ngày cấp</label>
                    <input type="date" name="ngay_cap" required value="{{$dangvien->ngay_cap}}">
                </td>
            </tr>

            <tr>
                <td>
                    <label>Dân tộc</label>
                    <select name="ma_dt" required>
                        @foreach($dt as $value)
                            <option value="{{$value->ma_dt}}"
                            @if ($dangvien->ma_dt == $value->ma_dt)
                              selected="selected"
                            @endif>
                              {{$value->dt}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label>Tôn giáo</label>
                    <select name="ma_tg" required>
                        @foreach($tg as $value)
                            <option value="{{$value->ma_tg}}"
                            @if($dangvien->ma_tg == $value->ma_tg)
                              selected="selected"
                            @endif>
                              {{$value->tg}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label style="min-width: 70px">Thành phần xuất thân</label>
                    <select name="ma_tpxt" style="width: 105px" required>
                        @foreach($tpxt as $value)
                            <option value="{{$value->ma_tpxt}}"
                            @if($dangvien->ma_tpxt == $value->ma_tpxt)
                              selected="selected"
                            @endif>
                              {{$value->tpxt}}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Diện ưu tiên</label>
                    <select name="ma_tb" style="width: 170px" required>
                        @foreach($tb as $value)
                            <option value="{{$value->ma_tb}}"
                            @if($dangvien->ma_tb == $value->ma_tb)
                              selected="selected"
                            @endif>
                              {{$value->tb}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label>Gia đình chính sách</label>
                    <select name="ma_gdtdcs" style="width: 170px" required>
                        @foreach($gdcs as $value)
                            <option value="{{$value->ma_gdcs}}"
                            @if($dangvien->ma_gdtdcs == $value->ma_gdcs)
                              selected="selected
                            @endif>
                              {{$value->gdcs}}
                            </option>
                        @endforeach
                    </select>
                </td>

                <td style="min-width: 10px;"></td>
            </tr>

            <tr>
                <td>
                    <label>Ngày tuyển dụng</label>
                    <input type="date" value="{{$dangvien->ntgcm}}" name="ntgcm">
                </td>
                <td>
                    <label>Ngày thi tuyển viên chức</label>
                    <input type="date" value="{{$dangvien->nvbc}}" name="nvbc">
                </td>
            </tr>       

            <tr>
                <td>
                    <label>Cơ quan tiếp nhận</label>
                    <select name="cqtd" required>
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
                    <select name="vdpc" style="width: 210px" required>
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
                    <input type="date" name="nvcqhn" required value="{{$dangvien->nvcqhn}}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Công việc hiện nay</label>
                    <select name="cvdn" style="width: 210px" required>
                        @foreach($cv as $value)
                            <option value="{{$value->ma_cv}}"
                            @if($dangvien->cvdn == $value->cv)
                              selected="selected
                            @endif>
                              {{$value->cv}}
                            </option>
                        @endforeach
                    </select>
                    {{$dangvien->cvdn}}
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
                    <input type="text" name="sbh" value="{{$dangvien->sbh}}">
                </td>
                <td>
                    <label>Ngày bắt đầu đóng bảo hiểm</label>
                    <input type="date" name="ndbh" value="{{$dangvien->ndbh}}">
                </td>
            </tr>  

            <tr>
                <td>
                    <label>Ngày vào Đảng</label>
                    <input type="date" name="nvd" value="{{$dangvien->nvd}}">
                </td>
                <td>
                    <label>Ngày chính thức</label>
                    <input type="date" name="nct" value="{{$dangvien->nct}}">
                </td>
            </tr>  

            <tr>
                <td>
                    <label>Ngày nhập ngũ</label>
                    <input type="date" name="nnn" value="{{$dangvien->nnn}}">
                </td>
                <td>
                    <label>Ngày xuất ngũ</label>
                    <input type="date" name="nxn" value="{{$dangvien->nxn}}">
                </td>
            </tr>  

            <tr>
                <td>
                    <label>Trình độ LLCT</label>
                    <select name="ma_tdllct">
                        @foreach($tdll as $value)
                            <option value="{{$value->ma_tdll}}"
                            @if($dangvien->ma_tdllct == $value->ma_tdll)
                              selected="selected"
                            @endif>
                              {{$value->tdll}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label>Trình độ QLNN</label>
                    <select name="ma_tdqlnn">
                         @foreach($tdql as $value)
                            <option value="{{$value->ma_tdql}}"
                            @if($dangvien->ma_tdqlnn == $value->ma_tdql)
                              selected="selected"
                            @endif>
                              {{$value->tdql}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label style="min-width: 80px">Trình độ tin học</label>
                    <select name="ma_tdth">
                        @foreach($tdth as $value)
                            <option value="{{$value->ma_tdth}}"
                            @if($dangvien->ma_tdth == $value->ma_tdth)
                              selected="selected"
                            @endif>
                              {{$value->tdth}}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Trình độ học vấn phổ thông</label>
                    <select name="ma_tdhv">
                        @foreach($tdhv as $value)
                            <option value="{{$value->ma_tdhv}}"
                            @if($dangvien->ma_tdhv == $value->ma_tdhv)
                              selected="selected"
                            @endif>
                              {{$value->tdhv}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label>Sức khỏe</label>
                    <select name="ma_ttsk">
                        @foreach($ttsk as $value)
                            <option value="{{$value->ma_ttsk}}"
                            @if($dangvien->ma_ttsk == $value->ma_ttsk)
                              selected="selected"
                            @endif>
                              {{$value->ttsk}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label>Nhóm máu</label>
                    <select name="ma_nm">
                        @foreach($nm as $value)
                            <option value="{{$value->ma_nm}}"
                            @if($dangvien->ma_nm == $value->ma_nm)
                              selected="selected"
                            @endif>
                              {{$value->nm}}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Sở trưởng năng khiếu</label>
                    <textarea name="nlstnk">{{$dangvien->nlstnk}}</textarea>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Lịch sử bản thân</label>
                    <textarea name="ddlsbt">{{$dangvien->ddlsbt}}</textarea>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Thông tin khác</label>
                    <textarea name="ttk">{{$dangvien->ttk}}</textarea>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Ảnh hồ sơ</label>
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
                    <button type="submit" class="btn btn-primary btn-sm btn-save" 
                    style="margin-left: 0px !important;">
                        Lưu thay đổi
                    </button>
                    <button class="btn btn-success btn-sm btn-reset">Reset</button>
                </td>
            </tr>

        </tbody>
        </form>
    </table>