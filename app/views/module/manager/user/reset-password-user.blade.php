<style type="text/css">
	
	input[type='password'], select {
		width: 300px !important;
	}

	.search_select {
		width: 300px !important;
	}

</style>

@extends('template/layout/main')

@section('title')
    Cấp lại mật khẩu cho người dùng
@endsection

@section('content-box')
	<h4>Cấp lại mật khẩu cho người dùng</h4><hr>
	@if (Session::get('result_reset_password') == -2)
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Lỗi!</strong> hãy điền đầy đủ các trường
		</div>
	@endif

	@if (Session::get('result_reset_password') == -1)
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Lỗi!</strong> mật khẩu không khớp
		</div>
	@endif

	@if (Session::get('result_reset_password') == 1)
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Thông báo!</strong> đổi mật khẩu thành công
		</div>
	@endif

	<div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Chú ý :</strong> Chọn tài khoản người dùng và tìm kiếm trước khi đổi mật khẩu
	</div>

	<form action="{{ Asset('reset-password-user') }}" method="POST" role="form">
	
		<select name="user" class="form-control search_select" required="required">
		@foreach ($list_user as $value)
			<option>{{ $value->user }}</option>
		@endforeach
		</select>
		<hr>	
		<div class="form-group">
			<label for="">Mật khẩu mới :</label>
			<input type="password" name="password_new" class="form-control" 
			placeholder="Mật khẩu">
		</div>
	
		<div class="form-group">
			<label for="">Nhập lại mật khẩu mới :</label>
			<input type="password" name="password_confirm" class="form-control" 
			placeholder="Nhập lại">
		</div>	
	
		<button type="submit" class="btn btn-primary">Cấp lại</button>
	</form>

	<script>
    
        $(document).ready(function () {
            $('.search_select').editableSelect({ effects: 'slide' });
        })

    </script>
@endsection