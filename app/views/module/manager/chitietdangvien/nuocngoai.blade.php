<div class="title-page">
  <p class="title">Các nước đã đến</p>
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
      <th>Ngày về thực tế</th>
      <th>Nước đã đến</th>
      <th>Mục đích đến</th>
      <th>Trạng thái</th>
      <th>Sửa</th>
      <th>Xóa</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($nuocngoai as $value)
    <tr>
      <td>{{ $value->nd_nndd }}</td>
      <td>{{ $value->nvtt_nndd }}</td>
      <td>{{ $value->qg }}</td>
      <td>{{ $value->mdnndd }}</td>
      <td>{{ $value->ttnndd }}</td>
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

  <div class="col-md-6 no-padding">
    <label>Thời điểm bắt đầu</label>
    <input type="date" class="form-control">

    <label>Thời điểm kết thúc</label>
    <input type="date" class="form-control">

    <label>Ngày về thực tế</label>
    <input type="date" class="form-control">

    <label>Tên nước đã đến</label>
    <select class="form-control">
      @foreach ($dm_qg as $value)
        <option value="{{ $value->ma_qg }}">{{ $value->qg }}</option>
      @endforeach
    </select>
  </div>

  <div class="col-md-6 no-padding">
    <label>Mục đích chuyến đi</label>
    <select class="form-control">
      @foreach ($dm_mdnndd as $value)
        <option value="{{ $value->ma_mdnndd }}">{{ $value->mdnndd }}</option>
      @endforeach
    </select>

    <label>Nguồn kinh phí</label>
    <select class="form-control">
      @foreach ($dm_nkpnndd as $value)
        <option value="{{ $value->ma_nkpnndd }}">{{ $value->nkpnndd }}</option>
      @endforeach
    </select>

    <label>Trạng thái</label>
    <select class="form-control">
      @foreach ($dm_ttnndd as $value)
        <option value="{{ $value->ma_ttnndd }}">{{ $value->ttnndd }}</option>
      @endforeach
    </select>

    <label>Địa chỉ nơi đến</label>
    <input type="text" class="form-control">

  </div>
  
  <div class="col-md-12 no-padding" style="margin-top: 15px">
    <label>Đánh giá chuyến đi</label>
    <textarea class="form-control"></textarea>  
  </div>

  <div class="col-md-12 no-padding" style="margin-top: 15px">
    <label>Ghi chú</label>
    <textarea class="form-control"></textarea>
  </div>

  <div class="col-md-12">
    <center>
      <button type="button" class="btn btn-primary btn-sm">Ghi lại</button>
    </center>
  </div>
</div>