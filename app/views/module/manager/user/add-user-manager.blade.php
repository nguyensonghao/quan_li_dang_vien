<style type="text/css">
    
    input , select{
        width: 350px !important;
    }

    .btn-add-user {
        margin-left: 30px !important;
    }

    .radio label {
        font-size: 16px !important;
        padding-left: 0px !important;
    }

    .radio input[type="radio"] {
        margin-left: -100px !important;
    }

    ul.menu-add-user li {
        list-style: none;
        float: left;
        height: 40px;
        width: 150px;
        background: #FFF;
        line-height: 40px;
        text-align: center;
        border: 1px solid #ccc;
        border-left: 0px;
    }

    ul.menu-add-user li a {
        color: black;
    }

    ul.menu-add-user .active {
        background: #337ab7;
        border-color : #337ab7;
    }

    ul.menu-add-user .active a  {
        color: white !important;
        background: transparent !important;
    }

    ul.menu-add-user {
        margin-top: 10px;
        margin-left: 30px;
    }

</style>

@extends('template/layout/main')

@section('title')
    Thêm tài khoản
@endsection

@section('content-box')
    @if (isset($error)) 
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endif
    @if (isset($notify)) 
        <div class="alert alert-info">
            {{ $notify }}
        </div>
    @endif
    <ul class="menu-add-user col-md-12 no-padding">
        <li class="active">
            <a href="{{ Asset('them-quan-ly') }}">Thêm quản lý</a>
        </li>
        <li>
            <a href="{{ Asset('them-nguoi-dung') }}">Thêm người dùng</a>
        </li>
    </ul>

    <form action="{{ Asset('nguoidung/them') }}" method="POST">
        <legend></legend>
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tài khoản</label>
                    <input type="text" class="form-control" name="username">
                </div>
            
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" class="form-control" name="password">
                </div>    

                <div class="form-group">
                    <label>Nhập lại mật khẩu</label>
                    <input type="password" class="form-control" name="pass-confirm">
                </div>

                <div class="form-group">
                    <label>Tên đầy đủ</label>
                    <input type="text" class="form-control" name="fullname">
                </div>                                
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Chức vụ</label>
                    <select name="token" class="form-control" required="required">
                        <option value="2">Cán bộ tác nghiệp viện</option>
                        <option value="1">Lãnh đạo viện</option>
                        <option value="4">Cán bộ tác nghiệp trường</option>
                        <option value="3">Lãnh đạo trường</option>
                    </select>
                </div>
                
                <label class="col-md-12 no-padding">Quyền xóa :</label>
                <div class="col-md-12 no-padding">
                    <div class="col-md-6 no-padding">
                        <div class="radio">
                            <label>
                                <input type="radio" name="isxoa" checked="checked" value="1">
                                Có
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 no-padding">
                        <div class="radio">
                            <label>
                                <input type="radio" name="isxoa" checked="checked" value="0">
                                Không
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label style="margin-top: 5px">Chi tiết</label>
                    <input type="text" class="form-control" name="detail">
                </div>
                <div class="form-group">
                    <label>Đơn vị</label>
                    <select class="form-control" name="donvi">
                        @foreach($ds_dv as $value)
                            <option value="{{ $value->ma_dv }}">{{ $value->dv }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <input type="hidden" name="isadmin" value="1">
        </div>
        
        <button type="submit" class="btn btn-primary btn-add-user">Thêm</button>
        <button type="reset" class="btn btn-default">Làm mới</button>
    </form>

@endsection