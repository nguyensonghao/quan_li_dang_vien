{{ HTML::style('libs/css/module/notify.css') }}

@extends('template/layout/main')

@section('title')
    Danh sách thông báo
@endsection

@section('content-box')
	
    <p class="bg-primary">Danh sách tin nhắn</p>
    <ul class="list-group">
        <li class="list-group-item">
            <div class="alert alert-info">
                <div class="group-button-toolbar">
                    <a href="{{ Asset('detail-notify') }}" 
                    data-toggle="tooltip" data-placement="left" title="Xem chi tiết">
                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                    </a>
                    <a href="#"
                    data-toggle="tooltip" data-placement="top" title="Xóa tin nhắn">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </a>
                </div>
                <p><strong>Nguyễn Song Hào</strong></p>
                Tiêu đề : lỗi hệ thống chuyển Đảng viên
            </div>
        </li>
        
    </ul>

@endsection