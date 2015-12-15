@if (Session::get('success-delete') == 1)
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Thông báo!</strong> Xóa thông tin quan hệ gia đình thành công.
  </div>
@endif

@if (Session::get('success-delete') == -1)
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Lỗi!</strong> có lỗi trong quá trình xóa thông tin quan hệ gia đình.
  </div>
@endif

<div class="title-page">
  <p class="title">Quan hệ gia đình</p>
  <p>
    <span class="username">{{ $dangvien->ttd }}</span> 
    <span class="date">({{ $dangvien->ntns }})</span> 
    <span class="chibo">- Đại học Bách Khoa Hà Nội</span> 
  </p>
</div>

<table class="table table-hover table-bordered">
  <thead class="bg-primary">
    <tr>
      <th>Họ tên</th>
      <th>Quan hệ</th>
      <th>Năm sinh</th>
      <th>Nghệ nghiệp</th>
      <th>Sửa</th>
      <th>Xóa</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($quanhe as $value)
      <tr>
        <td>{{ $value->ht_qhgd }}</td>
        <td>{{ $value->qhgd }}</td>
        <td>{{ $value->ns_qhgd }}</td>
        <td>{{ $value->nn_qhgd }}</td>
        <td>
          <a class="btn btn-link btn-sm">
            <span class="glyphicon glyphicon-pencil"></span> 
            Sửa
          </a>
        </td>
        <td>
          <a class="btn btn-link btn-sm"
          href="{{ Asset('dangvien/quatrinh/xoa').'/qhgd_tbl/'.$value->id }}">
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
    <label>Họ và tên</label>
    <input type="text" class="form-control">

    <label>Ngày sinh</label>
    <input type="date" class="form-control">

    <label>Quan hệ gia đình</label>
    <select class="form-control">
      @foreach ($dm_qhgd as $value)
        <option value="{{ $value->ma_qhgd }}">{{ $value->qhgd }}</option>
      @endforeach
    </select>

    <label>Quốc tịch</label>
    <select class="form-control">
      @foreach ($dm_qg as $value)
        <option value="{{ $value->ma_qg }}">{{ $value->qg }}</option>
      @endforeach
    </select>

    <label>Nơi định cư</label>
    <select class="form-control">
      @foreach ($dm_qg as $value)
        <option value="{{ $value->ma_qg }}">{{ $value->qg }}</option>
      @endforeach
    </select>
  </div>

  <div class="col-md-6">
    <label>Nghề nghiệp</label>
    <input type="text" class="form-control">

    <label>Chức vụ</label>
    <input type="text" class="form-control">

    <label>Nơi công tác</label>
    <input type="text" class="form-control">

    <label>Nơi ở hiện nay</span>
    <input type="text" class="form-control">

    <label>Thông tin khác</label>
    <textarea class="form-control"></textarea>
  </div>
  <div class="col-md-12">
    <center>
      <button type="button" class="btn btn-primary btn-sm">Ghi lại</button>
    </center>
  </div>
</div>