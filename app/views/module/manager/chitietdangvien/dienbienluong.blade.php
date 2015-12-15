<div class="title-page">
  <p class="title">Diễn biến lương</p>
  <p>
    <span class="username">{{ $dangvien->ttd }}</span> 
    <span class="date">({{ $dangvien->ntns }})</span> 
    <span class="chibo">- Đại học Bách Khoa Hà Nội</span> 
  </p>
</div>

<table class="table table-hover table-bordered">
  <thead class="bg-primary">
    <tr>
      <th>Thời gian</th>
      <th>Ngạch</th>
      <th>Bậc</th>
      <th>Hệ số</th>
      <th>%Lương</th>
      <th>Các phụ cấp</th>
      <th>Sửa</th>
      <th>Xóa</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Tiếng Anh</td>
      <td>Trình độ C</td>
      <td></td>
      <td>
        <a class="btn btn-link btn-sm">
          <span class="glyphicon glyphicon-pencil"></span> 
          Sửa
        </a>
      </td>
      <td>
        <a class="btn btn-link btn-sm">
          <span class="glyphicon glyphicon-remove"></span> 
          Xóa
        </a>
      </td>
    </tr>
  </tbody>
</table>

<div class="col-md-12 new">
  <p class="title-text">
    <span class="glyphicon glyphicon-plus"></span> 
    Thêm mới dữ liệu
  </p>

  <div class="col-md-6">
    <label>Ngạch</label>
    <select class="form-control">
      @foreach($dm_ngach as $value)
          <option value="{{ $value->ma_ngach }}">{{ $value->ten_ngach }}</option>
      @endforeach
    </select>

    <div class="col-md-6 no-padding">
      <label>Bậc lương</label>
      <select class="form-control"></select>
    </div>

    <div class="col-md-6 no-padding">
      <label>Hệ số phụ cấp</label>
      <input type="number" class="form-control">
    </div>

    <div class="col-md-6 no-padding">
      <label>Hệ số lương</label>
      <input type="number" class="form-control">
    </div>

    <div class="col-md-6 no-padding">
      <label>Hệ số CLBL</label>
      <input type="text" class="form-control">
    </div>      
  </div>

  <div class="col-md-6">
    <label>Phần trăm được hưởng</label>
    <select class="form-control">
      <option></option>
    </select>

    <label>Hưởng từ</label>
    <input type="date" class="form-control">

    <label>Mốc tính lương lần sau</label>
    <input type="date" class="form-control">
  </div>

  <div class="col-md-12">
    <div class="col-md-12 no-padding" style="margin-bottom: 15px !important">
      <label>Các loại phụ cấp</label>
    </div>

    <div class="col-md-3 no-padding">
      <label class="with-80">Chức vụ</label>
      <input type="text" class="with-150">
      <br>
      <label class="with-80">Độc hại</label>
      <input type="number" class="with-150">
    </div>
    <div class="col-md-3 no-padding">
      <label class="with-80">Ưu đãi</label>
      <input type="text" class="with-150">
      <br>
      <label class="with-80">Khu vực</label>
      <input type="text" class="with-150">
    </div>
    <div class="col-md-3 no-padding">
      <label class="with-80">Thâm niên</label>
      <input type="number" class="with-150">
      <br>
      <label class="with-80">Đặc thù</label>
      <input type="number" class="with-150">
    </div>
    <div class="col-md-3 no-padding">
      <label class="with-80">Giảng dạy</label>
      <input type="text" class="with-150">
      <br>
      <label class="with-80">Khác</label>
      <input type="number" class="with-150">
    </div>
  </div>
  
  <div class="col-md-12" style="margin-top: 15px !important">
    <label>Thông tin khác</label>
    <textarea class="form-control"></textarea>
  </div>
  
  <div class="col-md-12">
    <center>
      <button type="button" class="btn btn-primary btn-sm">Ghi lại</button>
    </center>
  </div>
</div>