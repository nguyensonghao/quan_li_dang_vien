<style type="text/css">
	
	.list-report .dropdown{
		position: absolute !important;
		top: 5px;
		right: 6px;
	}

	input {
		width: 300px !important;
	}

</style>

<script>
	
	$(document).ready(function () {
		$('.close').click(function() {

		   $('.alert').hide();

		})
	})

</script>
@extends('template/layout/main')

@section('title')
    Thêm biểu mẫu
@endsection

@section('content-box')
	<div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Thông báo</strong>
		<p>Hãy thêm file word (docx)
	</div>

	@if (Session::get('error-add-print') == -1)
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Lỗi</strong>
			<p>Bạn phải nhập đủ thông tin</p>
		</div>
	@endif

	@if (Session::get('error-add-print') == 1)
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Lỗi</strong>
			<p>File bạn chọn không phải là file word</p>
		</div>
	@endif

	@if (Session::get('success-add-print') == 1)
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Thông báo</strong>
			<p>Bạn đã thêm biểu mẫu thành công</p>
		</div>
	@endif

	<form action="{{ Asset('addPrint') }}" method="POST" enctype="multipart/form-data">
		<legend>Thêm biểu mẫu</legend>
	
		<div class="form-group">
			<label for="">File biểu mẫu</label>
			<input type="file" class="form-control" name="file">
		</div>
	
		<div class="form-group">
			<label for="">Tên biểu mẫu</label>
			<input type="text" class="form-control" name="name">
		</div>	
	
		<button type="submit" class="btn btn-primary">Thêm</button>

		
	</form>
@endsection