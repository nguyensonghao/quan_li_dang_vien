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
    @if (count($kyluat) == 0)
      <tr>
        <td>Không có thông tin kỷ luật</td>
      </tr>
    @else
      @foreach ($kyluat as $value)
        <tr>
          <td>{{ $value->kl }}</td>
          <td>{{ $value->nkl }}</td>
          <td>{{ $value->ldkl }}</td>
          <td>
            <a class="btn btn-link btn-sm" onClick="updateKyluat({{$value->id}})">
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
    @endif
    
  </tbody>
</table>

<div class="col-md-12 new">
  <label>Hình thức kỷ luật</label>
  <select name="ma_htkl"  class="form-control" disabled="true">
    @foreach ($dm_kl as $value)
      <option value="{{ $value->ma_kl }}">{{ $value->kl }}</option>
    @endforeach
  </select>

  <div class="col-md-6">
    <label>Năm kỷ luật</label>
    <input type="text" class="form-control" name="nkl" disabled="true">

    <label>Lý do kỷ luật</label>
    <textarea class="form-control" name="ldkl" disabled="true"></textarea>
  </div>
  <div class="col-md-6">
    <label>Năm xóa kỷ luật</label>
    <input type="text" name="nxkl" class="form-control" disabled="true">

    <label>Thông tin khác</label>
    <textarea class="form-control" name="ttk_qtkl" disabled="true"></textarea>
  </div>
</div>

<script>
    function updateKyluat (id) {
      $.ajax({
        url : 'hienthi/chinhsua',
        type : 'post',
        data : {id : id, table : 'qtkl_tbl'},
        success : function (data) {
          if (data == null) {
            alert('Có lỗi kết nối cơ sở dữ liệu');
          } else {
            data = JSON.parse(data);
            $('select[name="ma_htkl"]').val(data.ma_htkl);
            $('input[name="nkl"]').val(data.nkl);
            $('input[name="nxkl"]').val(data.nxkl);
            $('textarea[name="ldkl"]').val(data.ldkl);
            $('textarea[name="ttk_qtkl"]').val(data.ttk_qtkl);
          }
        }
      })
    }
  </script>