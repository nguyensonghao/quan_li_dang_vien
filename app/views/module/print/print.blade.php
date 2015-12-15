<style type="text/css">
	
	.list-report .dropdown{
		position: absolute !important;
		top: 5px;
		right: 6px;
	}

</style>

@extends('template/layout/main')

@section('title')
    In thông tin đảng viên
@endsection

@section('content-box')
	<div class="panel panel-info">
		  	<div class="panel-heading">
				<h3 class="panel-title">Danh sách {{ sizeof($listFileName) }} biểu mẫu</h3>
		  	</div>
		  	<div class="panel-body">
				<ul class="list-group list-report">
					@foreach ($listFileName as $fileName)
			        <li class="list-group-item">
			        	{{ $fileName }}
				        <div class="dropdown">
						  <a href="{{ Asset('printFile/'.$fileName) }}">
						    In báo cáo
						  </a>
						</div>
			        </li>     
			        @endforeach   
			    </ul>
		  </div>
	</div>
@endsection