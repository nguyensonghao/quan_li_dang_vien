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
      <th>Thời gian</th>
      <th>Biên chế tại đơn vị/Nơi làm việc</th>
      <th>Công việc đảm nhận</th>
      <th>Diện cán bộ/Tình trạng công tác</th>
      <th>Sửa</th>
      <th>Xóa</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($congtac as $key => $value)
    <tr>
      <td>{{ $value['tgbd_qtct'] }} > {{ $value['tgkt_qtct'] }}</td>
      <td>{{ $value['bctdv'] }} / {{ $value['nlv'] }}</td>
      <td>{{ $value['cvdn'] }}</td>
      <td>{{ $value['dcb'] }} / {{ $value['tt'] }}</td>
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

  
    
</div>