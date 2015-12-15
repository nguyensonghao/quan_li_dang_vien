
@extends('template/layout/main')

@section('title')
    Thay đổi thông tin cá nhân
@endsection

@section('content-box')
    
    <form action="" method="POST" role="form">
        <legend>Thay đổi thông tin người dùng</legend>
    
        <div class="form-group">
            <label for="">Tên: </label>
            <input type="text" class="form-control" id="" placeholder="Tên" value="Nguyễn Song Hào">
        </div>
        
        <div class="form-group">
            <label for="">Ngày sinh: </label>
            <input type="date" class="form-control" id="" placeholder="Ngày sinh" value="20/9/2015">
        </div>

        <div class="form-group">
            <label for="">Ngày vào Đảng: </label>
            <input type="date" class="form-control" id="" placeholder="Ngày vào Đảng" value="20/9/2015">
        </div>

        <div class="form-group">
            <label for="">Email: </label>
            <input type="email" class="form-control" id="" placeholder="Email" value="Nguyensonghao974@gmail.com">
        </div>

        <div class="form-group">
            <label for="">Quê quán: </label>
            <input type="text" class="form-control" id="" placeholder="Quê quán" value="Thụy Dân, Thái Thụy, Thái Bình">
        </div>

        <div class="form-group">
            <label for="">Công tác: </label>
            <input type="text" class="form-control" id="" placeholder="Công tác" value="Đại học Bách Khoa Hà Nội">
        </div>
    
        <button type="submit" class="btn btn-primary">Thay đổi</button>
        <button type="reset" class="btn btn-custom">Làm mới</button>
    </form>
@endsection