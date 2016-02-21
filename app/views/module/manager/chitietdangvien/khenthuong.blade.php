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
    @if (count($khenthuong) == 0)
      <tr>
        <td class="center">Không có thông tin khen thưởng</td>
      </tr>
    @else
      @foreach($khenthuong as $value)
        <tr>
          <td>{{ $value->kt }}</td>
          <td>{{ $value->nkt_qtkt }}</td>
          <td></td>
          <td>
            <a class="btn btn-link btn-sm" onClick="updateKhenthuong({{$value->id}})">
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
    @endif    
  </tbody>
</table>

<div class="col-md-12 new">

  <div class="col-md-6">
    <label>Hình thức khen thưởng</label>
    <select name="ma_htkt" class="form-control" disabled="true">
      @foreach ($dm_kt as $value)
        <option value="{{ $value->ma_kt }}">{{ $value->kt }}</option>
      @endforeach
    </select>

    <label>Lý do khen thưởng</label>
    <textarea class="form-control" name="ldkt" disabled="true"></textarea>
  </div>
  <div class="col-md-6">
    <label>Năm khen thưởng</label>
    <input type="text" name="nkt_qtkt" class="form-control" disabled="true">

    <label>Thông tin khác</label>
    <textarea class="form-control" name="ttk_qtkt" disabled="true"></textarea>
  </div>
</div>

<script>
  function updateKhenthuong (id) {
    $.ajax({
      url : 'hienthi/chinhsua',
      type : 'post',
      data : {id : id, table : 'qtkt_tbl'},
      success : function (data) {
        if (data == null) {
          alert('Có lỗi kết nối cơ sở dữ liệu');
        } else {
          data = JSON.parse(data);
          $('input[name="ldkt"]').val(data.ldkt);
          $('input[name="nkt_qtkt"]').val(data.nkt_qtkt);
          $('select[name="ma_htkt"]').val(data.ma_htkt);
          $('textarea[name="ttk_qtkt"]').val(data.ttk_qtkt);
        }
      }
    })
  }
</script>