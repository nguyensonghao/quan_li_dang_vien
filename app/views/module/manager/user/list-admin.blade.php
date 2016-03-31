{{ HTML::style('libs/css/module/manager.css') }}
{{ HTML::style('libs/css/module/danhsachnguoidung.css') }}

@extends('template/layout/main')

@section('title')
    Danh sách admin
@endsection

@section('content-box')
    @if (Session::get('result_unlock_user') == 1)
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Thông báo!</strong> 
            tài khoản {{Session::get('user_unlock')}} đã được khôi phục
        </div>
    @endif

    @if (Session::get('result_delete_user') == 1)
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Thông báo! </strong> 
            đã xóa vĩnh viễn tài khoản {{Session::get('user_delete_forever')}}
        </div>
    @endif

    @if (Session::has('delete-user'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Thông báo! </strong> 
            Xóa tài khoản thành công
        </div>
    @endif

    <div class="panel panel-default">
        <div class="panel-header">
            <ul class="menu-list-user">
                <li>
                    <a href="{{ Asset('danh-sach-nguoi-dung') }}">
                        Tài khoản người dùng
                    </a>
                </li>
                <li class="menu-list-user-active">
                    <a href="{{ Asset('danh-sach-admin') }}">
                        Tài khoản admin
                    </a>
                </li>
                <li>
                    <a href="{{ Asset('danh-sach-tai-khoan-bi-khoa') }}">
                        Tài khoản bị khóa
                    </a>
                </li>
            </ul>
        </div>
        <div class="panel-body">
            <p class="bg-primary">
                <span class="glyphicon glyphicon-th-list"></span>
                Danh sách tài khoản admin
            </p>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Người dùng</th>
                            <th>Tên đầy đủ</th>
                            <th>Chức vụ</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($list_admin as $value)
                        <tr>
                            <td>
                                <b><a href="#">{{ $value->user }}</a></b>
                            </td>
                            <td>{{ $value->fullname }}</td>
                            <td>{{ $value->detail }}</td>                            
                            <td>                                
                                <a href="#" data-toggle="tooltip" 
                                data-placement="top" title="Xem chi tiết">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </a>
                                <a href="{{ Asset('delete-user').'/'.$value->user }}" 
                                data-toggle="tooltip" data-placement="right" title="Xóa tài khoản">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $list_admin->links() }}
            </div>
        </div>
    </div>

@endsection