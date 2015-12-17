@if (Session::get('success-delete') == 1)
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Thông báo!</strong> Xóa thông tin ngoại ngữ thành công
  </div>
@endif

@if (Session::get('success-delete') == -1)
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Lỗi!</strong> có lỗi trong quá trình xóa thông tin ngoại ngữ.
  </div>
@endif

<div class="title-page">
  <p class="title">Trình độ ngoại ngữ</p>
  <p>
    <span class="username">{{ $dangvien->ttd }}</span> 
    <span class="date">({{ $dangvien->ntns }})</span> 
    <span class="chibo">- Đại học Bách Khoa Hà Nội</span> 
  </p>
</div>

<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th>Ngoại ngữ</th>
      <th>Trình độ</th>
      <th>Thông tin khác</th>
      <th>Sửa</th>
      <th>Xóa</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ngoaingu as $value)
    <tr>
      <td>Tiếng Anh</td>
      <td>{{ $value->ma_td }}</td>
      <td>{{ $value->ttk_tdnn }}</td>
      <td>
        <a class="btn btn-link btn-sm">
          <span class="glyphicon glyphicon-pencil"></span> 
          Sửa
        </a>
      </td>
      <td>
        <a class="btn btn-link btn-sm"
        href="{{ Asset('dangvien/quatrinh/xoa/').'/tdnn_tbl/'.$value->id }}">
          <span class="glyphicon glyphicon-remove"></span> 
          Xóa
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
  </table>

  <div class="col-md-12 new">
    <p class="title-text">
      <span class="glyphicon glyphicon-plus"></span> 
      Thêm mới dữ liệu
    </p>
    <div class="col-md-6">
      <label>Ngoại ngữ :</label>
      <select name="nn" class="form-control" required="required">
        <option value="01"> Tiếng Anh</option>
        <option value="02"> Tiếng Pháp</option>
        <option value="03"> Tiếng Nga</option>
        <option value="04"> Tiếng Trung</option>
        <option value="05"> Tiếng Nhật</option>
        <option value="06"> Tiếng Lào</option>
        <option value="07"> Tiếng Cam-Pu-Chia</option>
        <option value="08"> Tiếng Thái Lan</option>
        <option value="09"> Tiếng Đức</option>
        <option value="10"> Tiếng Bungari</option>
        <option value="11"> Tiếng Bồ Đào Nha</option>
        <option value="12"> Tiếng Tây Ban Nha</option>
        <option value="13"> Tiếng Ba Lan</option>
        <option value="14"> Tiếng An Ba Ni</option>
        <option value="15"> Tiếng Hàn Quốc</option>
        <option value="16"> Tiếng Singapore</option>
        <option value="02"> Tiếng Ấn Độ</option>
        <option value="02"> Tiếng Philippin</option>
        <option value="02"> Tiếng Ytalia</option>
        <option value="02"> Tiếng Ả-rập</option>
        <option value="02"> Tiếng Thổ Nhĩ Kì</option>
        <option value="02"> Tiếng Rumani</option>
        <option value="02"> Tiếng Hungari</option>
      </select>
      <label>Trình độ :</label>
      <select name="td" class="form-control" required="required">
        @foreach($dm_tdnn as $value)
          <option value="{{ $value->ma_tdnn }}">{{ $value->tdnn }}</option>
        @endforeach
      </select>
    </div>
    <div class="col-md-6">
      <label>Thông tin khác :</label>
      <textarea name="" class="form-control" rows="5"></textarea>
    </div>
    <div class="col-md-12">
      <center>
        <button type="button" class="btn btn-primary btn-sm btn-register">
          <span class="glyphicon glyphicon-ok"></span> 
          Ghi lại
        </button>
      </center>
    </div>
  </div>