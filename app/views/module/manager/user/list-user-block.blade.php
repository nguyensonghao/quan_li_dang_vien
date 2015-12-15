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

    .btn-custom {
        font-size: 12px !important;
        padding: 2px 6px;
    }

</style>

@extends('template/layout/main')

@section('title')
    Quản lí tài khoản
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

    <div class="panel panel-default">
        <div class="panel-header">
            <ul class="menu-list-user">
                <li>
                    <a href="{{ Asset('list-user') }}">
                        Tài khoản hoạt động
                    </a>
                </li>
                <li class="menu-list-user-active">Tài khoản bị khóa</li>
            </ul>
        </div>
        <div class="panel-body">
            <p class="bg-primary">
                <span class="glyphicon glyphicon-th-list"></span>
                Danh sách tài khoản bị khóa
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
                    @foreach($list_user_block as $value)
                        <tr>
                            <td>
                                <b><a href="#">
                                    {{ $value->user }}
                                </a></b>
                            </td>
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
                                <a class="btn btn-custom btn-sm" 
                                href="{{ Asset('un-block-user').'/'.$value->user }}"
                                data-toggle="tooltip" data-placement="left" title="Khôi phục trạng thái hoạt động">
                                    Khôi phục
                                </a>
                                <a class="btn btn-custom btn-sm" 
                                href="{{ Asset('delete-user-forever').'/'.$value->user }}"
                                data-toggle="tooltip" data-placement="right" title="Xóa vĩnh viễn">
                                    Xóa
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $list_user_block->links() }}
            </div>
        </div>
    </div>

@endsection