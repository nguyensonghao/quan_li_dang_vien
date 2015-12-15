<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="{{ Asset('image/member.png') }}" height="40px">
                <span>Đảng viên</span>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-search"></span>
                        Tìm kiếm
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ Asset('search') }}">Mặc định</a></li>
                        <li><a href="{{ Asset('search-advance') }}">Nâng cao</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-send"></span>
                        Kết nạp/khai trừ
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ Asset('add') }}">Kết nạp đảng viên là sinh viên</a></li>
                        <li><a href="#">Kết nạp đảng viên là cán bộ</a></li>
                        <li><a href="{{ Asset('exclude') }}">Khai trừ đảng viên</a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-print"></span>
                        In báo cáo 
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ Asset('print') }}">11 biểu mẫu</a></li>
                        <li><a href="#">Đảng viên chi bộ</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-briefcase"></span> 
                        Quản lí tài khoản
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ Asset('manager') }}">Danh sách tài khoản</a></li>
                        <li><a href="{{ Asset('change-information') }}">Thêm tài khoản</a></li>
                        <li><a href="{{ Asset('delete-member') }}">Xóa tài khoản</a></li>
                        <li><a href="{{ Asset('reset-password') }}">Cấp lại mật khẩu</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ Asset('rep-message') }}">
                        <span class="glyphicon glyphicon-envelope"></span>
                        Báo lỗi
                    </a>
                </li>
                <li>
                    <a href="{{ Asset('notify') }}">
                        <span class="glyphicon glyphicon-gift"></span>
                            Thông báo
                        <span class="badge quantity-notify">10</span>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="a-user dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-user"></span><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" style="left: 0">
                        <li><a href="{{ Asset('information') }}">Xem thông tin</a></li>
                        <li><a href="{{ Asset('change-information') }}">Chỉnh sửa thông tin</a></li>
                        <li><a href="{{ Asset('change-password') }}">Đổi mật khẩu</a></li>
                        <li><a href="#">Đăng xuất</a></li>
                    </ul>
                </li>
                <li><a href="{{ Asset('information') }}" class="btn-username">Nguyễn Song Hào</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
