<style type="text/css">
    
    input , select{
        width: 350px !important;
    }

    .btn-add-user {
        margin-left: 30px !important;
    }

</style>

@extends('template/layout/main')

@section('title')
    Thêm tài khoản
@endsection

@section('content-box')
    
    <form action="{{ Asset('add-user') }}" method="POST" role="form">
        <legend>Thêm người dùng</legend>
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tài khoản</label>
                    <input type="text" class="form-control" name="username">
                </div>
            
                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="password" class="form-control" name="password">
                </div>    

                <div class="form-group">
                    <label for="">Nhập lại mật khẩu</label>
                    <input type="password" class="form-control" name="password-confirm">
                </div>

                <div class="form-group">
                    <label for="">Tên đầy đủ</label>
                    <input type="text" class="form-control" name="fullname">
                </div>                

                <div class="form-group">
                    <label for="">Chức vụ</label>
                    <select name="position" class="form-control" required="required">
                        <option value="2">Cán bộ tác nghiệp viện</option>
                        <option value="1">Lãnh đạo viện</option>
                        <option value="4">Cán bộ tác nghiệp trường</option>
                        <option value="3">Lãnh đạo trường</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <label>Là admin :</label><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="isadmin" checked="checked">
                        Có
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="isadmin" checked="checked">
                        Không
                    </label>
                </div><hr>
                <label>Quyền xóa :</label><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="isxoa" checked="checked">
                        Có
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="isxoa" checked="checked">
                        Không
                    </label>
                </div>
                <div class="form-group">
                    <label for="">Chi tiết</label>
                    <input type="text" class="form-control" name="detail">
                </div>
                <div class="form-group">
                    <label for="">Đơn vị</label>
                    <input type="password" class="form-control" name="password-confirm">
                </div>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary btn-add-user">Thêm</button>
        <button type="reset" class="btn btn-default">Làm mới</button>
    </form>

@endsection