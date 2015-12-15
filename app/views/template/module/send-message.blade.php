<style type="text/css">
	
	input, textarea {
		border-radius: 0px !important;
	}

	.title .glyphicon-chevron-right, .title .glyphicon-chevron-left {
		float: right;
	}

	.title .glyphicon-chevron-left {
		display: none;
	}

	.btn-send-message {
		background: orange;
	    border-color: orange;
	    color: white;
	}

	.btn-send-message:hover {
		color: white;
	}

</style>
<div class="message-box">
	<p class="title">
		<span class="glyphicon glyphicon-envelope"></span> 
		<span class="text">Gửi góp ý</span>
	</p>
	<form class="message-box-toogle">
	
		<div class="form-group">
			<label>Tiêu đề :</label>
			<input type="text" class="form-control">
		</div>
	
		<div class="form-group">
			<label>Nội dung :</label>
			<textarea class="form-control" rows="3"></textarea>
		</div>	
	
		<button type="button" class="btn btn-custom btn-send-message">
			Gửi
		</button>
		<button type="button" class="btn btn-custom btn-close-message-box">Đóng</button>

	</form>
	<script>
	$(document).ready(function () {
		var stateOpenMessage = false;

		$('.message-box .title').click(function () {
			if (!stateOpenMessage) {
				$('.message-box').css('height', '300px');
			} else {
				$('.message-box').css('height', '32px');
			}

			stateOpenMessage = !stateOpenMessage;
			
		}) 

		$('.message-box .btn-close-message-box').click(function () {
			$('.message-box').css('height', '32px');
		})
	})
	</script>
</div>