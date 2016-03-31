@extends('template/layout/main')

@section('title')
    Đánh giá Đảng viên
@endsection

@section('content-box')
    <div class="col-m-12" style="margin-top: 30px">
        <div class="col-md-8">
            @if (Session::get('result-export-member') == 1)
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Thông báo!</strong> 
                    đã khai trừ Đảng viên <b>{{ Session::get('name-member-export') }}</b>
                    thành công.
                </div>
            @endif

            @if (Session::get('result-backup-member') == 1)
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Thông báo!</strong> bạn vừa phục hổi Đảng viên 
                    <b>{{ Session::get('name-member-backup') }}</b> thành công.
                </div>
            @endif
            <form action="{{ Asset('khai-tru-dang-vien') }}" method="POST" class="form-inline">
            
                <div class="form-group">
                    <label>Chọn Đảng viên :</label>
                    <select name="ds_dv" class="form-control search_select" required="required">
                        @foreach ($ds_dv as $value)
                            <option>{{ $value->ttd }}</option>
                        @endforeach
                    </select>
                </div>
                                    
                <button type="submit" class="btn btn-primary btn-sm">
                    <span class="glyphicon glyphicon-remove"></span> 
                    Khai trừ
                </button>
            </form>
        </div>        

        <div class="col-md-12" style="margin-top: 20px">
        @if (!is_array($ds_dv_kt) || count($ds_dv_kt) == 0)
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Thông báo!</strong> không có Đảng viên nào bị khai trừ
            </div>
        @else 
            <div class="panel panel-primary" style="border-color: #ccc !important">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-th-list"></span> 
                    Danh sách Đảng viên bị khai trừ
                </div>

                    <table class="table"> 
                        <thead>
                            <tr>
                                <th class="stt">#</th>
                                <th>Họ tên đầy đủ</th>
                                <th>Email</th>
                                <th class="td-action">Phục hồi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($ds_dv_kt as $key=>$value)
                            <tr>
                                <td class="stt">{{ $key + 1 }}</td>
                                <td>
                                    <a href="{{ Asset('thong-tin-dang-vien') . '/' . $value->sohieuchuan }}">
                                        <b>{{ $value->ttd }}</b>
                                    </a>
                                </td>
                                <td>{{ $value->email }}</td>
                                <td class="td-action">
                                    <a 
                                    href="{{ Asset('phuc-hoi-dang-vien').'/'.$value->sohieuchuan }}">
                                        Phục hồi
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
            
        </div>

    </div>
    <script>
    
        $(document).ready(function () {
            $('.search_select').editableSelect({ effects: 'slide' });
        })

    </script>
@endsection