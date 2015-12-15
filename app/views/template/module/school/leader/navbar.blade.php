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
                        <span class="glyphicon glyphicon-briefcase"></span> 
                        Quản lí Đảng viên
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ Asset('manager') }}">Danh sách Đảng viên</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ Asset('rep-message') }}">
                        <span class="glyphicon glyphicon-envelope"></span>
                        Báo lỗi
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ Asset('information') }}" class="btn-username">
                        {{Auth::user()->username}}
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="a-user dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-cog">
                    </a>
                    <ul class="dropdown-menu" style="right: 0">
                        <li><a href="{{ Asset('information') }}">Xem thông tin</a></li>
                        <li><a href="{{ Asset('change-information') }}">Chỉnh sửa thông tin</a></li>
                        <li><a href="{{ Asset('change-password') }}">Đổi mật khẩu</a></li>
                        <li><a href="{{ Asset('logout') }}">Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
