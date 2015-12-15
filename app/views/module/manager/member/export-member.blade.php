<style type="text/css">
    
.panel {
    border-color: #ccc !important;
}

</style>

@extends('template/layout/main')

@section('title')
    Đánh giá Đảng viên
@endsection

@section('content-box')
    <div class="col-m-12" style="margin-top: 30px">
        <div class="col-md-6">
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
            <form method="POST" action="{{ Asset('dangvien/khaitru') }}">
                <div class="form-group">
                    <label>Chọn Đảng viên :</label>
                    <select name="ds_dv" class="form-control search_select" required="required">
                        @foreach ($ds_dv as $value)
                            <option>{{ $value->ttd }}</option>
                        @endforeach
                    </select>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-sm">Khai trừ</button>
                </div>
            </form>
        </div>

        <div class="col-md-6">
        @if (!is_array($ds_dv_kt) || count($ds_dv_kt) == 0)
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Thông báo!</strong> không có Đảng viên nào bị khai trừ
            </div>
        @else 
            <div class="panel panel-primary">
                <!-- Default panel contents -->
                <div class="panel-heading">Danh sách Đảng viên bị khai trừ</div>
            
                    <!-- Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tên Đảng viên</th>
                                <th>Phục hồi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($ds_dv_kt as $value)
                            <tr>
                                <td>
                                    <a>
                                        <b>{{ $value->ttd }}</b>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-success btn-sm" 
                                    href="{{ Asset('dangvien/phuchoi').'/'.$value->sohieuchuan }}">
                                        Phục hồi
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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