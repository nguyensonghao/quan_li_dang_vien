<div class="title-page">
  <p class="title">Quá trình bồi dưỡng</p>
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
      <th>Nơi bồi dưỡng</th>
      <th>Nội dung</th>
      <th>Sửa</th>
      <th>Xóa</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($boiduong as $key => $value)
    <tr>
      <td>{{ $value['tgbd_bd'] }} > {{ $value['tgkt_bd'] }}</td>
      <td>{{ $value['nbd_qtbd'] }}</td>
      <td>{{ $value['ndbd'] }}</td>
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