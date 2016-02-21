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
                        <li><a href="{{ Asset('timkiem') }}">Mặc định</a></li>
                        <li><a href="{{ Asset('timkiem/nangcao') }}">Nâng cao</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-send"></span> 
                        Quản lí Đảng viên
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ Asset('dangvien/danhsach') }}">Danh sách Đảng viên</a>
                        </li>
                        <li>
                            <a href="{{ Asset('dangvien/them') }}">Kết nạp Đảng viên</a>
                        </li>
                        <li>
                            <a href="{{ Asset('manager') }}">Quản lí Đảng phí</a>
                        </li>
                        <li>
                            <a href="{{ Asset('dangvien/khaitru') }}">Khai trừ và phục hổi đảng viên</a>
                        </li>
                        <li>
                            <a href="{{ Asset('rate-member') }}">Đánh giá Đảng viên</a>
                        </li>
                        <li>
                            <a href="{{ Asset('dangvien/chuyen') }}">Chuyển Đảng viên</a>
                        </li>
                    </ul>
                </li>
                

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-briefcase"></span> 
                        Quản lí tài khoản
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ Asset('nguoidung/danhsach') }}">Danh sách tài khoản</a>
                        </li>
                        <li>
                            <a href="{{ Asset('nguoidung/them') }}">Thêm tài khoản</a>
                        </li>
                        <li>
                            <a href="{{ Asset('nguoidung/khoa') }}">Xóa và khôi phục tài khoản</a>
                        </li>
                        <li>
                            <a href="{{ Asset('nguoidung/doimatkhau') }}">Cấp lại mật khẩu</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-print"></span> 
                        In báo cáo
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ Asset('bieumau1') }}">Báo cáo 1</a></li>
                        <li><a href="{{ Asset('bieumau2') }}">Báo cáo 2</a></li>
                        <li><a href="{{ Asset('bieumau3') }}">Báo cáo 3</a></li>
                        <li><a href="{{ Asset('bieumau4') }}">Báo cáo 4</a></li>
                        <li><a href="{{ Asset('bieumau5') }}">Báo cáo 5</a></li>
                        <li><a href="{{ Asset('bieumau6') }}">Báo cáo 6</a></li>
                        <li><a href="{{ Asset('bieumau7') }}">Báo cáo 7</a></li>
                        <li><a href="{{ Asset('bieumau8') }}">Báo cáo 8</a></li>
                        <li><a href="{{ Asset('bieumau9') }}">Báo cáo 9</a></li>
                        <li><a href="{{ Asset('bieumau10') }}">Báo cáo 10</a></li>
                        <li><a href="{{ Asset('bieumau11') }}">Báo cáo 11</a></li>
                        <li><a href="{{ Asset('bieumau12') }}">Báo cáo 12</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ Asset('list-notify') }}">
                        <span class="glyphicon glyphicon-bell"></span>
                        Tin nhắn
                        <span class="badge number-message">3</span>
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
