<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lỗi</title>
    {{ HTML::style('libs/bootstrap/css/bootstrap.css') }}
    <style type="text/css">
		.container {
			text-align: center;
		    padding-top: 100px;
		}

		.alert-error {
			padding: 20px;
		    background-color: #87BEF7;
		    color: black;
		    font-size: 18px;
		    border-radius: 4px;
		}

		a {
			color: black !important;
			text-decoration: underline;
		}

		.btn {
			text-decoration: none !important;
		}
    </style>
</head>
<body>
	<div class="container">
		<div class="alert-error">
			@if (Session::get('error') == 1)
				<p>Bạn đang đăng nhập mà</p>
				<p>Hãy <a href="{{ Asset('logout') }}">đăng xuất trước</a></p>
				<a type="button" class="btn btn-danger" href="{{Asset('search')}}">
					Quay lại trang chủ
				</a>
			@endif
			
		</div>
	</div>
</body>
</html>