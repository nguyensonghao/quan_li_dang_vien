{{ HTML::style('libs/css/module/manager.css') }}
<style type="text/css">
    
    .menu-list-user {
        padding-left: 15px;
    }

    .menu-list-user li{
        list-style: none;
        padding: 10px 10px;
        background: white;
        color: #484747;
        font-weight: bold;
        float: left;
        margin-right: 1px;
        border: 1px solid #ccc;
    }

    .menu-list-user li a{
        color: #484747 !important;
        text-decoration: none;
    }

    .panel-body {
        clear: both;
        padding-top: 0 !important;
    }

    .menu-list-user-active {
        background: #337AB7 !important;
        color: white !important;
    }

</style>

@extends('template/layout/main')

@section('title')
    Quản lí tài khoản
@endsection

@section('content-box')
    @if (Session::get('result_delete_user') == 1)
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Thông báo!</strong> 
            Xóa tài khoản {{Session::get('user_delete')}} thành công
        </div>
    @endif

    <div class="panel panel-default">
        <div class="panel-header">
            <ul class="menu-list-user">
                <li class="menu-list-user-active">Tài khoản hoạt động</li>
                <li>
                    <a href="{{ Asset('list-user-block') }}">
                        Tài khoản bị khóa
                    </a>
                </li>
            </ul>
        </div>
        <div class="panel-body">
            <p class="bg-primary">
                <span class="glyphicon glyphicon-th-list"></span>
                Danh sách tài khoản đang hoạt động
            </p>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Người dùng</th>
                            <th>Tên đầy đủ</th>
                            <th>Chức vụ</th>
                            <th>Admin</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($list_user as $value)
                        <tr>
                            <td>{{ $value->user }}</td>
                            <td>{{ $value->fullname }}</td>
                            <td>{{ $value->detail }}</td>
                            <td>
                                @if ($value->isadmin == 1)
                                    Có
                                @else
                                    Không
                                @endif
                            </td>
                            <td>
                                <a href="#" data-toggle="tooltip" 
                                data-placement="left" title="Chỉnh sửa tài khoản">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
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
                {{ $list_user->links() }}
            </div>
        </div>
    </div>

@endsection