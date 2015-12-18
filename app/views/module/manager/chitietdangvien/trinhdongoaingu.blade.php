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
      <td>{{ $value->tnn }}</td>
      <td>{{ $value->tdnn }}</td>
      <td>{{ $value->ttk_tdnn }}</td>
      <td>
        <a class="btn btn-link btn-sm" onClick="updateNgoaingu({{$value->id}})">
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
        @foreach ($dm_tnn as $value)
          <option value="{{$value->ma_tnn}}">{{$value->tnn}}</option>
        @endforeach
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
      <textarea name="ttk_tdnn" class="form-control" rows="5"></textarea>
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

  <script>
    function updateNgoaingu (id) {
      $.ajax({
        url : 'hienthi/chinhsua',
        type : 'post',
        data : {id : id, table : 'tdnn_tbl'},
        success : function (data) {
          if (data == null) {
            alert('Có lỗi kết nối cơ sở dữ liệu');
          } else {
            data = JSON.parse(data);
            $('select[name="nn"]').val(data.ma_nn);
            $('select[name="td"]').val(data.ma_td);
            $('textarea[name="ttk_tdnn"]').val(data.ttk_tdnn);
          }
        }
      })
    }
  </script>