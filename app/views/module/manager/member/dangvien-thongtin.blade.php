<html>
<head>
  <title>Thông tin Đảng viên</title>
  {{ HTML::style('libs/bootstrap/css/bootstrap.css') }}
  {{ HTML::style('libs/css/module/thongtindangvien.css') }}
  {{ HTML::script('libs/bootstrap/js/jquery-2.1.3.min.js') }}
  {{ HTML::script('libs/bootstrap/js/bootstrap.js') }}

</head>
<body style="background: url('{{Asset('image/noise.png')}}')">
  <div class="col-md-12 content-body">
  <!-- Nav tabs -->
  <div class="col-md-2 style-search">
    <ul class="nav nav-pills list-group list-information" role="tablist">
      <li class="list-group-item list-title">
        <div class="img">
          <img src="{{Asset('thongtindangvien/image').'/'.$dangvien->sohieuchuan}}.jpg" 
          height="100px" width="75px">
        </div>
        <div class="information">
          <ul>
            <li>
              Số hiệu: <br>
              {{ $dangvien->sohieuchuan }}
            </li>
            <li>
              Họ và Tên: <br>
              {{ $dangvien->ttd }}
            </li>
            <li>
              Giới tính: 
              @if ($dangvien->gt == 0)
                Nữ
              @else
                Nam
              @endif
            </li>
            <li>
              N/s: {{ $dangvien->ntns }}
            </li>
          </ul>
        </div>  
        <a class="btn btn-dark btn-sm btn-print" target="_blank"
        href="{{ Asset('dangvien/inthongtin').'/'.$dangvien->shcc }}">
          In hồ sơ cán bộ
        </a>
      </li>

      <li class="title">Thông tin cán bộ</li>
      <li role="presentation" class="active" style="clear: both">
        <a href="#thongtinchhung" aria-controls="thongtinchhung"role="tab" data-toggle="tab">       Thông tin cá nhân
        </a>
      </li>
      <li role="presentation">
        <a href="#trinhdongoaingu" aria-controls="trinhdongoaingu"role="tab" data-toggle="tab">
          Trình độ ngoại ngữ
        </a>
      </li>
      <li role="presentation">
        <a href="#chucdanh" aria-controls="chucdanh"role="tab" data-toggle="tab">
          Các chức danh
        </a>
      </li>
      <li role="presentation">
        <a href="#chucvuchinhquyen" aria-controls="chucvuchinhquyen"role="tab" data-toggle="tab">
          Chức vụ chính quyền
        </a>
      </li>
      <li role="presentation">
        <a href="#chucvudang" aria-controls="chucvudang"role="tab" data-toggle="tab">
          Chức vụ Đảng
        </a>
      </li>
      <li role="presentation">
        <a href="#chucvudoanthe" aria-controls="chucvudoanthe"role="tab" data-toggle="tab">
          Chức vụ Đoàn thể
        </a>
      </li>
      <li role="presentation">
        <a href="#khenthuong" aria-controls="khenthuong"role="tab" data-toggle="tab">
          Khen thưởng
        </a>
      </li role="presentation">
      <li role="presentation">
        <a href="#kyluat" aria-controls="kyluat"role="tab" data-toggle="tab">
          Kỷ luật
        </a>
      </li>
      <li role="presentation">
        <a href="#dienbienluong" aria-controls="dienbienluong"role="tab" data-toggle="tab">
          Diễn biến lương
        </a>
      </li>
      <li role="presentation">
        <a href="#quanhe" aria-controls="quanhe"role="tab" data-toggle="tab">
          Quan hệ gia đình
        </a>
      </li>
      <li role="presentation">
        <a href="#nuocngoai" aria-controls="nuocngoai"role="tab" data-toggle="tab">
          Nước ngoài đã đến
        </a>
      </li>
      <li role="presentation">
        <a href="#quatrinhdaotao" aria-controls="quatrinhdaotao"role="tab" data-toggle="tab">
          Quá trình đào tạo
        </a>
      </li>
      <li>
        <a href="#quatrinhboiduong" aria-controls="quatrinhboiduong"role="tab" data-toggle="tab">
          Quá trình bồi dưỡng
        </a>
      </li>
      <li role="presentation">
        <a href="#quatrinhcongtac" aria-controls="quatrinhcongtac"role="tab" data-toggle="tab">
          Quá trình công tác
        </a>
      </li>
    </ul>

  </div>

  <div class="col-md-10 content-search-advance">
    <div class="content" style="background: url('{{Asset('image/noise.png')}}')">
    <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="thongtinchhung">
          @include('module.manager.chitietdangvien.thongtinchung')
        </div>

        <div role="tabpanel" class="tab-pane" id="trinhdongoaingu">
          @include('module.manager.chitietdangvien.trinhdongoaingu')
        </div>

        <div role="tabpanel" class="tab-pane" id="chucdanh">
          @include('module.manager.chitietdangvien.chucdanh')
        </div>

        <div role="tabpanel" class="tab-pane" id="chucvudang">
          @include('module.manager.chitietdangvien.chucvudang')  
        </div>

        <div role="tabpanel" class="tab-pane" id="chucvuchinhquyen">
          @include('module.manager.chitietdangvien.chucvuchinhquyen')
        </div>
        
        <div role="tabpanel" class="tab-pane" id="chucvudoanthe">
          @include('module.manager.chitietdangvien.chucvudoanthe')  
        </div>
        
        <div role="tabpanel" class="tab-pane" id="khenthuong">
          @include('module.manager.chitietdangvien.khenthuong')
        </div>
        
        <div role="tabpanel" class="tab-pane" id="kyluat">
          @include('module.manager.chitietdangvien.kyluat')
        </div>
           
        <div role="tabpanel" class="tab-pane" id="dienbienluong">
          @include('module.manager.chitietdangvien.dienbienluong')  
        </div>
        
        <div role="tabpanel" class="tab-pane" id="quanhe">
          @include('module.manager.chitietdangvien.quanhe')
        </div>
        
        <div role="tabpanel" class="tab-pane" id="nuocngoai">
          @include('module.manager.chitietdangvien.nuocngoai')  
        </div>
        
        <div role="tabpanel" class="tab-pane" id="quatrinhdaotao">
          @include('module.manager.chitietdangvien.quatrinhdaotao')  
        </div>
        
        <div role="tabpanel" class="tab-pane" id="quatrinhcongtac">
          @include('module.manager.chitietdangvien.quatrinhcongtac')    
        </div>
        
        <div role="tabpanel" class="tab-pane" id="quatrinhboiduong">
          @include('module.manager.chitietdangvien.quatrinhboiduong')  
        </div>           
      </div>
    </div>
  </div>

</div>
</body>
</html>