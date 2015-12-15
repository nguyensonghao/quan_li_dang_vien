<!DOCTYPE html>
<html>
<head>
	<title>Gửi email</title>
	{{ HTML::style('libs/bootstrap/css/bootstrap.css') }}
    {{ HTML::script('libs/bootstrap/js/jquery-2.1.3.min.js') }}
    {{ HTML::script('libs/bootstrap/js/bootstrap.js') }}
    <style type="text/css">
		.container {
			padding-top: 6px;
		}

		.panel-heading {
			border-radius: 0;
		}

		.checkbox {
			margin: 0 !important;
		}

		.panel {
			height: 550px !important;
			overflow: auto;
			border-color: #ccc;
    		border-top: 0;
		}

		.panel-body {
			padding: 6px;
		}

		.stt {
			font-weight: bold;
		    font-size: 11px !important;
		}

		.title {
			margin: 0 !important;
		    background: #121213;
		    padding: 10px;
		    color: white;
		}

		.title img {
			position: absolute;
		    right: 150px;
		    top: 10px;
		}

		.modal input, .modal textarea {
			width: 100%;
		    border: 0;
		    border-bottom: 1px solid #ccc;
		    outline: none !important;
		}

		.modal textarea {
			border-bottom: none !important;
		}

		.modal .btn {
			border-radius: 0 !important;
		}

		.modal-content {
			border-radius: 0 !important;
		}

		.modal-header {
			background: #337ab7;
		    text-align: center;
		    color: white;
		}
    </style>
</head>
<body style="background: url('image/noise.png')">
	<div class="container">
	@if (!isset($ds_dv) || is_null($ds_dv))
		<hr>
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Lỗi!</strong> hãy tìm kiếm và chọn Đảng viên trước khi gửi email.
			<hr>
			<a class="btn btn-primary" href="{{ Asset('search') }}">Tìm kiếm</a>
			<a type="button" class="btn btn-success">Thoát</a>
		</div>
	@else 
		<div class="title">
			<h4>
				Hệ thống gửi email cho Đảng viên
				<img src="{{ Asset('image/send_mail.png') }}" height="50px">
			</h4>
		</div>
		<div class="panel panel-primary">
			<!-- Default panel contents -->
			<div class="panel-heading">
				<span class="glyphicon glyphicon-list"></span> 
				Danh sách kết quả tìm kiếm
			</div>
				<div class="panel-body">
					<p class="number_checked">
						Số người được chọn 0
					</p>
				</div>
		
				<!-- Table -->
				<table class="table">
					<thead>
						<tr>
							<th>Stt</th>
							<th>Họ tên</th>
							<th>Số hiệu chuẩn</th>
							<th>Chức vụ</th>
							<th>Email</th>
							<th>
								<div class="checkbox btn_check_all">
									<label>
										<input type="checkbox" value="">
										<b>Chọn tất</b>
									</label>
								</div>
							</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($ds_dv as $key => $value)
						<tr>
							<td class="stt">{{ $key + 1 }}</td>
							<td>
								<a href="#">
									<b>{{ $value->ttd }}</b>
								</a>
							</td>
							<td>{{ $value->sohieuchuan }}</td>
							<td>{{ $value->vdpc }}</td>
							<td>{{ $value->email }} 1</td>
							<td>
								<input type="checkbox" class="check_member" 
								value="{{ $value->email }}">
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
		</div>

		<div class="btn-group">
			<button type="button" class="btn btn-custom btn_send_mail">
				Gửi email
			</button>
			<button type="button" class="btn btn-custom btn_close">Thoát</button>
		</div>
		

		<div class="box-send-mail">
			<div class="modal fade" id="modal-send-mail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Gửi mail</h4>
			      </div>
			      <div class="modal-body">
			      		<form>
			      			<div class="form-group">
			      				<input type="text" name="title_email" placeholder="Tiêu đề">
			      			</div>

			      			<div class="form-group">
			      				<textarea name="content_email" rows="5" placeholder="Nội dung"></textarea>
			      			</div>
			      		
			      		</form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default"
			         data-dismiss="modal">Thoát</button>
			        <button type="button" class="btn btn-primary btn_modal_send_mail">Gửi</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	@endif
	</div>
	<script>
	$(document).ready(function () {
		var check_all = false;
		var list_member_checked;

		function getListCheckBox () {
			list_member_checked = [];
			$('input:checked').each(function() {
			    list_member_checked.push($(this).val());
			});
			showListEmailChecked(list_member_checked);
		}

		function showListEmailChecked (listEmail) {
			if (listEmail == null || listEmail.length == 0) {
				$('.number_checked').html('Số người được chọn 0');
			} else {
				if (listEmail.length < 8) {
					string = '';
					for (var i = 0; i < listEmail.length; i++) {
						string += '<span class="badge">'+listEmail[i]+'</span>';
					}
					string = 'Số người được chọn ' +listEmail.length+ ' | ' + string;
					$('.number_checked').html(string);
				} else {
					string = '';
					for (var i = 0; i < 8; i++) {
						string += '<span class="badge">'+listEmail[i]+'</span>';
					}
					string = 'Số người được chọn ' +listEmail.length+ ' | ' + string + '  <b>...</b>   ';
					$('.number_checked').html(string);
				}
			}
			
		}

		$('.check_member').change(function () {
			getListCheckBox();
		})

		$('.btn_send_mail').click(function () {
			if (list_member_checked == null || list_member_checked.length == 0) {
				alert('Bạn chưa chọn người để gửi email');
				return;
			} else {
				getListCheckBox();	
				$('#modal-send-mail').modal('show');
			}
			
		})

		$('.btn_modal_send_mail').click(function () {
			if (list_member_checked == null || list_member_checked.length == 0) {
				return;
			} else {
				
			}
		})

		$('.btn_check_all').change(function () {
			if (check_all) {
				$('.check_member').removeAttr('checked');
				check_all = false;
			} else {
				$('.check_member').prop('checked', true);
				check_all = true;
			}
			getListCheckBox();
		})

		$('.btn_close').click(function () {
			window.close();
		})

	})
	</script>
</body>
</html>