@if (Session::get('success-delete') == 1)
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Thông báo!</strong> Xóa thông tin khen thưởng thành công
  </div>
@endif

@if (Session::get('success-delete') == -1)
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Lỗi!</strong> có lỗi trong quá trình xóa thông tin khen thưởng.
  </div>
@endif

<div class="title-page">
  <p class="title">Khen thưởng</p>
  <p>
    <span class="username">{{ $dangvien->ttd }}</span> 
    <span class="date">({{ $dangvien->ntns }})</span> 
    <span class="chibo">- Đại học Bách Khoa Hà Nội</span> 
  </p>
</div>

<table class="table table-hover table-bordered">
  <thead class="bg-primary">
    <tr>
      <th>Hình thức khen thưởng</th>
      <th>Năm khen thưởng</th>
      <th>Quyết định số</th>
      <th>Sửa</th>
      <th>Xóa</th>
    </tr>
  </thead>
  <tbody>
    @foreach($khenthuong as $value)
      <tr>
        <td>{{ $value->kt }}</td>
        <td>{{ $value->nkt_qtkt }}</td>
        <td></td>
        <td>
          <a class="btn btn-link btn-sm">
            <span class="glyphicon glyphicon-pencil"></span> 
            Sửa
          </a>
        </td>
        <td>
          <a class="btn btn-link btn-sm"
          href="{{ Asset('dangvien/quatrinh/xoa/').'/qtkt_tbl/'.$value->id }}">
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
    <label>Hình thức khen thưởng</label>
    <select name="nn" class="form-control" required="required">
      @foreach ($dm_kt as $value)
        <option value="{{ $value->ma_kt }}">{{ $value->kt }}</option>
      @endforeach
    </select>

    <label>Lý do khen thưởng</label>
    <textarea class="form-control" name=""></textarea>
  </div>
  <div class="col-md-6">
    <label>Năm khen thưởng</label>
    <input type="date" name="" class="form-control">

    <label>Thông tin khác</label>
    <textarea class="form-control" name=""></textarea>
  </div>
  <div class="col-md-12">
    <center>
      <button type="button" class="btn btn-primary btn-sm">Ghi lại</button>
    </center>
  </div>
</div>