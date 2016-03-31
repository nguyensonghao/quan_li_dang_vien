{{ HTML::style('libs/css/module/manager.css') }}

@extends('template/layout/main')

@section('title')
    Danh sách Đảng viên
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
                                <a href="{{ Asset('thong-tin-dang-vien').'/'.$value->sohieuchuan }}" target="_blank">
                                {{ $value->ttd }}
                                </a>
                            </b></td>
                            <td>{{ $value->ntns }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->so_the_dv }}</td>
                            <td class="td-action">
                                <a>Xóa</a>
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