{{ HTML::style('libs/css/module/notify.css') }}

@extends('template/layout/main')

@section('title')
    Thông tin cá nhân
@endsection

@section('content-box')
	<h3>Thông tin Đảng viên {{ $dangvien->ttd }}</h3>
    <?php 
    echo '<pre>';
    print_r($dangvien);
    echo '</pre>';
    ?>
    
    <hr>
    <a href="{{ Asset('change-information') }}">
        <button type="button" class="btn btn-primary">In thông tin</button>
    </a>
    <a href="{{ Asset('change-password') }}">
        <button type="button" class="btn btn-info">Thay đổi hồ sơ</button>
    </a>
@endsection