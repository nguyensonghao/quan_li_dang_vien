<style type="text/css">
    input[name="ds_dv"] {
        width: 300px !important;
    }

    form {
        padding-top: 20px;
    }

    .btn {
        border-radius: 0 !important;
    }
</style>

@extends('template/layout/main')

@section('title')
    Đánh giá Đảng viên
@endsection

@section('content-box')
    <form>
        <div class="form-group">
            <label>Chọn Đảng viên :</label>
            <select name="ds_dv" class="form-control search_select" required="required">
                @foreach ($ds_dv as $value)
                    <option value="{{ $value->sohieuchuan }}">{{ $value->ttd }}</option>
                @endforeach
            </select>
            <hr>
            
            <label>Mức độ đánh giá :</label>
                
            <hr>
            <button type="submit" class="btn btn-primary btn-sm">Đánh giá</button>
        </div>
    </form>
    <script>
    
        $(document).ready(function () {
            $('.search_select').editableSelect({ effects: 'slide' });
        })

    </script>
@endsection