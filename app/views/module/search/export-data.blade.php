<!DOCTYPE html>
<html>
<head>
    <title>Xuất dữ liệu Đảng viên</title>
    {{ HTML::style('libs/bootstrap/css/bootstrap.css') }}
    {{ HTML::script('libs/bootstrap/js/jquery-2.1.3.min.js') }}
    {{ HTML::script('libs/bootstrap/js/bootstrap.js') }}
    <style type="text/css">
        .col-md-3 {
            font-weight: 600;
            border: 1px solid #75C1E6;
            border-bottom: 0;
            border-left: 0;    
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>In thông tin cá nhân Đảng viên</h3>
        @foreach ($list_key as $value)
            <div class="col-md-3"><input type="checkbox" name="{{$value}}"> {{$value}}</div>
        @endforeach
    </div>
</body>
</html>