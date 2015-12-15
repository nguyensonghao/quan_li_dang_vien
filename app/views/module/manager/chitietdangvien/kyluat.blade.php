@if (Session::get('success-delete') == 1)
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Thông báo!</strong> Xóa thông tin kỷ luật thành công
  </div>
@endif

@if (Session::get('success-delete') == -1)
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Lỗi!</strong> có lỗi trong quá trình xóa thông tin kỷ luật.
  </div>
@endif

<div class="title-page">
  <p class="title">Kỷ luật</p>
  <p>
    <span class="username">{{ $dangvien->ttd }}</span> 
    <span class="date">({{ $dangvien->ntns }})</span> 
    <span class="chibo">- Đại học Bách Khoa Hà Nội</span> 
  </p>
</div>

<table class="table table-hover table-bordered">
  <thead class="bg-primary">
    <tr>
      <th>Hình thức kỷ luật</th>
      <th>Năm kỷ luật</th>
      <th>Lý do kỷ luật</th>
      <th>Sửa</th>
      <th>Xóa</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($kyluat as $value)
      <tr>
        <td>{{ $value->kl }}</td>
        <td>{{ $value->nkl }}</td>
        <td>{{ $value->ldkl }}</td>
        <td>
          <a class="btn btn-link btn-sm">
            <span class="glyphicon glyphicon-pencil"></span> 
            Sửa
          </a>
        </td>
        <td>
          <a class="btn btn-link btn-sm"
          href="{{ Asset('dangvien/quatrinh/xoa/').'/qtkl_tbl/'.$value->id }}">
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

  <label>Hình thức kỷ luật</label>
  <select name=""  class="form-control">
    @foreach ($dm_kl as $value)
      <option value="{{ $value->ma_kl }}">{{ $value->kl }}</option>
    @endforeach
  </select>

  <div class="col-md-6">
    <label>Năm kỷ luật</label>
    <input type="date" class="form-control">

    <label>Lý do kỷ luật</label>
    <textarea class="form-control" name=""></textarea>
  </div>
  <div class="col-md-6">
    <label>Năm xóa kỷ luật</label>
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