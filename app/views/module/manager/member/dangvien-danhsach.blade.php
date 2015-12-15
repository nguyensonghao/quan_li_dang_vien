{{ HTML::style('libs/css/module/manager.css') }}

@extends('template/layout/main')

@section('title')
    Quản lí tài khoản
@endsection

@section('content-box')
    
    <div class="panel panel-default">
        <div class="panel-body">
            <p class="bg-primary">
                <span class="glyphicon glyphicon-th-list"></span>
                Danh sách Đảng viên
            </p>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Tên đầy đủ</th>
                            <th>Năm sinh</th>
                            <th>Email</th>
                            <th>Thẻ Đảng viên</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($ds_dv as $value)
                        <tr>
                            <td><b>
                                <a href="{{ Asset('information-member').'/'.$value->shcc }}" target="_blank">
                                {{ $value->ttd }}
                                </a>
                            </b></td>
                            <td>{{ $value->ntns }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->so_the_dv }}</td>
                            <td>
                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"
                                data-toggle="tooltip" data-placement="left" title="Gửi email">
                                    
                                </span>
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"
                                data-toggle="tooltip" data-placement="top" title="Xem thông tin">
                                    
                                </span>
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"
                                data-toggle="tooltip" data-placement="bottom" title="Chuyển Đảng viên">
                                    
                                </span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $ds_dv->links() }}
            </div>
        </div>
    </div>

@endsection