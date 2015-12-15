
@extends('template/layout/main')

@section('title')
    Chi tiết thông báo
@endsection

@section('content-box')
	
    <div class="panel panel-primary">
    	  <div class="panel-heading">
    			<h3 class="panel-title">Chi tiết tin nhắn</h3>
    	  </div>
    	  <div class="panel-body col-md-12">
    			<div class="col-md-6 detail-message">
					<div class="information">
						<span class="glyphicon glyphicon-time"></span> Ngày 20/10/2015 
						<a href="#" class="member"><b> => Từ : Nguyễn Song Hào </b></a>
					</div>
					<div class="subject">
						<h4>Tiêu đề : Lỗi hệ thống</h4>
					</div>
					<div class="content">
						<p>Nội dung : Không chạy được phần chuyển Đảng viên</p>
					</div>
					<button type="button" class="btn btn-custom">Xóa tin nhắn</button>
    			</div>
    			<div class="col-md-6 rep-message">
					<form action="" method="POST" role="form">
						<legend>Trả lời tin nhắn</legend>
					
						<div class="form-group">
							<label for="">Tiêu đề</label>
							<input type="text" class="form-control" name="subject" required>
						</div>
					
						<div class="form-group">
							<label for="">Tiêu đề</label>
							<textarea name="content" class="form-control" rows="3" required></textarea>
						</div>	
					
						<button type="submit" class="btn btn-primary">Trả lời</button>
					</form>
    			</div>
    	  </div>
    </div>
    

@endsection