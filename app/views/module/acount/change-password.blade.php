{{ HTML::style('libs/css/module/notify.css') }}

@extends('template/layout/main')

@section('title')
    Thay đổi mật khẩu
@endsection

@section('content-box')

    @if (Session::get('success-change-password') == 1)
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Thông báo!</strong>
            <p>Thay đổi mật khẩu thành công</p>
        </div>
    @endif

    @if (Session::get('error-change-password') == -1)    
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Thông báo!</strong>
            <p>Nhập đầy đủ thông tin các trường</p>
        </div>
    @elseif (Session::get('error-change-password') == 1)    
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Thông báo!</strong>
            <p>Mật khẩu mới không trùng nhau</p>
        </div>
    @elseif(Session::get('error-change-password') == 2)
        <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Thông báo!</strong>
            <p>Mật khẩu cũ không khớp</p>
        </div>
    @elseif(Session::get('error-change-password') == 3)
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Thông báo!</strong>
            <p>Xin lỗi. Có sự cố xảy ra trong quá trình thay đổi mật khẩu</p>
        </div>
    @endif
	
    <form action="{{ Asset('change-password') }}" method="POST" role="form" class="col-md-6">
        <legend>Đổi mật khẩu người dùng</legend>
    
        <div class="form-group">
            <label for="">Mật khẩu cũ :</label>
            <input type="password" class="form-control" name="password">
        </div>
    
        <div class="form-group">
            <label for="">Mật khẩu mới :</label>
            <input type="password" class="form-control" name="password-reset">
        </div>

        <div class="form-group">
            <label for="">Nhập lại mật khẩu :</label>
            <input type="password" class="form-control" name="password-confirm">
        </div>  
    
        <button type="submit" class="btn btn-primary">Thay đổi</button>
    </form>

@endsection