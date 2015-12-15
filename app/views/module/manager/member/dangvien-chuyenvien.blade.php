<style type="text/css">
    select[name="ds_dv"] {
        width: 400px;
    }

    .radio {
        width: 50%;
        float: left;
    }

    .dm_chibo {
        height: 500px;
        overflow: auto;
        background: #d9edf7;
        padding: 10px;
    }

</style>
@extends('template/layout/main')

@section('title')
    Chuyển Đảng viên
@endsection

@section('content-box')
    
    <div class="change-department">
        @if (Session::get('result-change-department') == -1)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Thông báo!</strong> hãy chọn Đảng viên và viện cần chuyển trước
            </div>
        @endif

        @if (Session::get('result-change-department') == 1)
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Thông báo!</strong> đã chuyển thành công Đảng viên.
            </div>
        @endif

        <form action="{{ Asset('change-department') }}" method="POST">
            <legend>Chuyển Đảng viên</legend>
        
            <div class="form-inline">
                <label>Chọn Đảng viên :</label>
                <select name="ds_dv" class="form-control search_select" required="required">
                    @foreach ($ds_dv as $value)
                        <option>{{ $value->ttd }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">Chuyển</button>
            </div>

            <label>Chuyển tới :</label>
            <div class="dm_chibo">
                @foreach ($dm_chibo as $value)
                    <div class="radio">
                        <label>
                            <input type="radio" name="dm_chibo" value="{{ $value->ma_dv }}" required="required">
                            {{$value->dv}}
                        </label>
                    </div>
                @endforeach
            </div>
            
        
            
        </form>
    </div>
    <script>
    
        $(document).ready(function () {
            $('.search_select').editableSelect({ effects: 'slide' });
        })

    </script>

@endsection