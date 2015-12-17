<div class="title-page">
  <p class="title">Chức vụ chính quyền</p>
  <p>
    <span class="username">{{ $dangvien->ttd }}</span> 
    <span class="date">({{ $dangvien->ntns }})</span> 
    <span class="chibo">- Đại học Bách Khoa Hà Nội</span> 
  </p>
</div>

<table class="table table-hover table-bordered">
  <thead class="bg-primary">
    <tr>
      <th>Khoảng thời gian</th>
      <th>Chức vụ chính quyền</th>
      <th>Đơn vị quản lí</th>
      <th>Sửa</th>
      <th>Xóa</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($chucvucq as $value)
    <tr>
      <td></td>
      <td>{{$value->cv}}</td>
      <td>{{$value->donvi}}</td>
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
    @endforeach
  </tbody>
</table>

<div class="col-md-12 new">
  <p class="title-text">
    <span class="glyphicon glyphicon-plus"></span> 
    Thêm mới dữ liệu
  </p>

  <div class="col-md-6">
    <label>Đơn vị quản lí</label>
    <select name="nn" class="form-control" required="required">
      @foreach($dm_cv as $value)
          <option value="{{ $value->ma_cv }}">{{ $value->cv }}</option>
      @endforeach
    </select>

    <label>Ngày bổ nhiệm</label>
    <input type="date" name="" class="form-control">

    <label>Ngày kết thúc</label>
    <input type="date" name="" class="form-control">

    <label>Chức vụ</label>
    <select name="nn" class="form-control" required="required">
      @foreach($dm_cv as $value)
          <option value="{{ $value->ma_cv }}">{{ $value->cv }}</option>
      @endforeach
    </select>
    
    <label>Hệ số phụ cấp</label>
    <input type="number" name="" class="form-control">
  </div>
  <div class="col-md-6">
    <label>Thông tin khác</label>
    <textarea name="" class="form-control" rows="3"></textarea>
  </div>
  <div class="col-md-12">
    <center>
      <button type="button" class="btn btn-primary btn-sm">Ghi lại</button>
    </center>
  </div>
</div>