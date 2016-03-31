<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{ HTML::style('libs/bootstrap/css/bootstrap.css') }}
    {{ HTML::style('libs/css/main/style.css') }}
    {{ HTML::style('libs/Filterable-Select-Box/source/jquery.editable-select.css') }}
    {{ HTML::script('libs/bootstrap/js/jquery-2.1.3.min.js') }}
    {{ HTML::script('libs/bootstrap/js/bootstrap.js') }}
    {{ HTML::script('libs/js/main.js') }}
    {{ HTML::script('libs/Filterable-Select-Box/source/jquery.editable-select.js') }}
    {{ HTML::script('libs/Scroll-To-Top/jquery.scrollToTop.js') }}
</head>
<body style="background: url('{{Asset('image/noise.png')}}')">


@if (Auth::user()->token == 1)
    {{-- User is leader of department --}}
    @include('template/module/department/leader/navbar');

@elseif (Auth::user()->token == 2)
    {{-- User is manager of department --}}
    @include('template/module/department/manager/navbar');

@elseif (Auth::user()->token == 3)
    {{-- User is leader of school --}}
    @include('template/module/school/leader/navbar');

@elseif (Auth::user()->token == 4)
    {{-- User is manager of school --}}
    @include('template/module/school/manager/navbar');

@else
    {{-- User is memeber normal --}}
    @include('template/module/member/navbar');
@endif


<div class="link col-md-12" style="min-height: 495px">
    
    @include('template/module/content-left')

    <div class="col-md-10">

        @if (Session::get('info-welcome') == 1)
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Thông báo!</strong><span> bạn đang đăng nhập với quyền</span>
            @if (Auth::user()->token == 1)
                <b>Lãnh đạo khoa viện</b>                
            @elseif (Auth::user()->token == 2)
                <b>Cán bộ tác nhiệm khoa viện</b>
            @elseif (Auth::user()->token == 3)
                <b>Lãnh đạo trường</b>
            @elseif (Auth::user()->token == 4)
                <b>Cán bộ tác nhiệm trường</b>
            @else
                <b>Thành viên</b>
            @endif            
        </div>

        @endif
        <div class="box-search col-md-12 content-search">

            @yield('content-box')
            
        </div>

    </div>

</div>


@include('template/module/footer')
@if (Auth::user()->token != 4)
    @include('template/module/send-message')
@endif
</body>
</html>