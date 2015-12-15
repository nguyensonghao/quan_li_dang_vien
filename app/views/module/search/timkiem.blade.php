{{ HTML::style('libs/css/module/timkiem.css') }}

@extends('template/layout/main')

@section('title')
    Tìm kiếm Đảng viên
@endsection

@section('content-box')
	<form method="POST" action="{{ Asset('timkiem/ketqua') }}" class="form-search-simple">
        <ul class="list-group list-search">
            <li class="list-group-item">
                <label class="label-title">Chi bộ</label>
                <select name="chibo">
                    @foreach ($dm_chibo as $value)
                        @if ($value->cap != 3)
                        <option value="{{$value->ma_dv}}">
                            {{ $value->dv }}
                        </option>
                        @endif
                    @endforeach
                </select><br>
                <label class="label-title">CB trực thuộc</label>
                <select name="chibotructhuoc">
                
                </select>
            </li>

            <li class="list-group-item row">
                <div class="col-md-6">
                    <label class="label-title">Họ tên</label>
                    <input type="text" name="hoten">
                </div>
                <div class="col-md-6">
                    <label>Số hiệu chuẩn</label>
                    <input type="text" name="shc">
                </div>

            </li>

            <li class="list-group-item row">
                <div class="col-md-6">
                    <label class="label-title">Giới tính</label>
                    <div class="sex">
                        <div class="checkbox" style="float: left; margin-top: 0px; margin-right: 30px">
                            <label>
                                <input type="checkbox" name="gt-nam" value="1">
                                Nam
                            </label>
                        </div>

                        <div class="checkbox" style="float: right; margin-top: 0px">
                            <label>
                                <input type="checkbox" name="gt-nu" value="0">
                                Nữ
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <label style="margin-right: 40px">Tuổi</label>
                    <span>Từ </span>
                    <input type="number" name="tuoitu" style="margin-left: 14px">
                    <span>Đến </span>
                    <input type="number" name="tuoiden">
                </div>

            </li>

            <li class="list-group-item row">
                <div class="col-md-4">
                    <label class="label-title">Diện cán bộ</label>
                    <select name="dcb">
                        <option value="">--Không chọn--</option>
                    @foreach ($dm_dcb as $value)
                        <option value="{{ $value->ma_dcb }}">
                            {{ $value->dcb }}
                        </option>
                    @endforeach
                    </select>
                </div>

                <div class="col-md-4">
                    <label>Hiện nay</label>
                    <select name="tt">
                        <option value="">--Không chọn--</option>
                    @foreach ($dm_tt as $value)
                        <option value="{{ $value->ma_tt }}">{{ $value->tt }}</option>
                    @endforeach
                    </select>
                </div>

                <div class="col-md-4">
                    <label>Khối cán bộ</label>
                    <select name="kcb">
                            <option value="">--Không chọn--</option>
                        @foreach($dm_kcb as $value)
                            <option value="{{ $value->ma_kcb }}">{{ $value->kcb }}</option>
                        @endforeach
                    </select>
                </div>

            </li>

            <li class="list-group-item">
                <button type="submit" class="btn btn-primary btn-sm">Tìm kiếm</button>
                <a class="btn btn-success btn-sm" 
                href="{{ Asset('timkiem/nangcao') }}">
                    Tìm kiếm nâng cao
                </a>
            </li>
        </ul>


    </form>

    <script>
        $(document).ready(function () {
            // Hàm load danh sách cán bộ trực thuộc theo chi bộ
            $('select[name="chibo"]').change(function () {
                var ma_cb = $(this).val();
                if (ma_cb != null) {
                    $.ajax({
                        url : 'dangvien/chibo',
                        type : 'post',
                        data : {ma_cb : ma_cb},
                        success : function (data) {
                            var str = '';
                            for (var i = 0; i < data.length; i++) {
                                var chibotructhuoc = data[i].dv;
                                var ma_chibotructhuoc = data[i].ma_dv;
                                str += '<option value="'+ma_chibotructhuoc+'">'+chibotructhuoc+'</option>';
                            }
                            $('select[name="chibotructhuoc"]').html(str);
                        }
                    })
                }
            })

            // Kiểm tra xem dữ liệu tuổi từ có lớn hơn dữ liệu tuổi đến trước khi submit
            $('form').submit(function () {
                var tuoiTu = $('input[name="tuoitu"]').val();
                var tuoiDen = $('input[name="tuoiden"]').val();
                if (tuoiDen < tuoiTu) {
                    alert('Số tuổi đến với lớn hơn tuổi từ')
                }
            })
        })
    </script>

@endsection

