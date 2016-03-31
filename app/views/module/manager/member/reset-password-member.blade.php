@extends('template/layout/main')

@section('title')
    Cấp lại mật khẩu cho Đảng viên
@endsection

@section('content-box')
	<h4>Cấp lại mật khẩu cho Đảng viên</h4><hr>

	<div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Chú ý :</strong> Nhập tên tài khoản người dùng và tìm kiếm trước khi đổi mật khẩu
	</div>

	<form action="" method="POST" class="form-inline" role="form">
	
		<div class="form-group">
			<label class="sr-only" for="">Nhập tên tài khoản</label>
			<input type="email" class="form-control" id="" placeholder="Tên tài khoản">
		</div>
	
		<button type="submit" class="btn btn-custom">Tìm kiếm</button>
	</form>
	<hr>

	<form action="" method="POST" role="form">
	
		<div class="form-group">
			<label for="">Mật khẩu mới</label>
			<input type="password" class="form-control" placeholder="Mật khẩu" style="width: 300px !important">
		</div>
	
		<div class="form-group">
			<label for="">Nhập lại mật khẩu mới</label>
			<input type="password" class="form-control" placeholder="Nhập lại">
		</div>	
	
		<button type="submit" class="btn btn-primary">Cấp lại</button>
	</form>
@endsection