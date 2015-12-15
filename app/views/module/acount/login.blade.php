<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập hệ thống</title>
    {{ HTML::style('libs/bootstrap/css/bootstrap.css') }}
    {{ HTML::style('libs/css/main/login.css') }}
    {{ HTML::script('libs/bootstrap/js/jquery-2.1.3.min.js') }}
    {{ HTML::script('libs/bootstrap/js/bootstrap.js') }}
</head>
<body style="background: url('image/noise.png')">
	<h1>Hệ thống quản lí Đảng viên</h1>
    <h3>Trường đại học Bách Khoa Hà Nội</h3>
    <div class="row">
        <form action=" {{Asset('login')}} " method="POST">
            <div class="form-login col-md-4 col-md-offset-4">
                <div class="panel">
                    <div class="panel-heading">
                        <h3>ĐĂNG NHẬP</h3>
                    </div>
                    
                    @if(Session::get('error-login') == -1)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Tài khoản hoặc mật khẩu không khớp
                    </div>
                    @endif

                    @if(Session::get('error-login') == 1)
                    <div class="alert alert-warning">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Hãy đăng nhập đúng quyền hạn của bạn
                    </div>
                    @endif
                    
                    @if(Session::get('error-login') == 2)
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Hãy đăng nhập trước khi vào hệ thống
                    </div>
                    @endif

                    @if(Session::get('error-login') == 3)
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Không được để trống các trường
                    </div>
                    @endif

                    @if(Session::get('error-login') == 4)
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Bạn vừa đăng xuất ra khỏi hệ thống
                    </div>
                    @endif

                    <div class="panel-body">
                        <label>Tài khoản :</label>
                        <div class="input-group">
                            <input type="text" name="username" id="username" class="form-control">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                        </div>

                        <label>Mật khẩu :</label>
                        <div class="input-group">
                            <input type="password" name="password" id="password" class="form-control">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-lock"></span>
                            </span>
                        </div>

                    </div>
                    <div class="panel-footer">
                        <div class="button-toolbar">
                            <button type="submit" class="btn btn-custom">Đăng nhập</button>
                            <span class="checkbox remember-login">
                                <label>
                                    <input type="checkbox" name="remember"> Ghi nhớ tài khoản
                                </label>
                            </span>
                        </div>
                        <a class="btn btn-link">Quên mật khẩu</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>