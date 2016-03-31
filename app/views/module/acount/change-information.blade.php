
@extends('template/layout/main')

@section('title')
    Thông tin cá nhân tài khoản
@endsection

@section('content-box')
    <p></p>
    <div class="col-md-8">
        @if (Session::has('error'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Thông báo!</strong> {{ Session::get('error') }}
            </div>
        @endif

        @if (Session::has('notify'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Thông báo!</strong> {{ Session::get('notify') }}
            </div>
        @endif

        <form action="{{ Asset('thay-doi-thong-tin') }}" method="POST" style="margin-top: 20px">
            <legend>Thông tin cá nhân người dùng</legend>
            
            <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="form-group">
                <label>Tài khoản: </label>
                <input type="text" class="form-control" value="{{ $user->user }}" name="user">
            </div>                                

            <div class="form-group">
                <label>Tên đầy đủ: </label>
               <input type="text" class="form-control" value="{{ $user->fullname }}" name="fullname">
            </div>
            
            @if (isset($donvi))
            <div class="form-group">
                <label>Đơn vị: </label>
                <input type="text" class="form-control" value="{{ $donvi->dv }}" disabled>
            </div>
            @endif

            <div class="form-group">
                <label>Chức vụ: </label>
                <input type="text" class="form-control" value="{{ $chucvu }}" disabled>
            </div>
        
            <button type="submit" class="btn btn-primary">Thay đổi</button>
            <button type="reset" class="btn btn-default">Làm mới</button>
            <p></p>
        </form>
    </div>
@endsection