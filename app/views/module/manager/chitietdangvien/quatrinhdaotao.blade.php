<div class="title-page">
  <p class="title">Quá trình đào tạo</p>
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
      <th>Văn bằng</th>
      <th>Chuyên ngành</th>
      <th>Sửa</th>
      <th>Xóa</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($daotao as $key => $value)
    <tr>
      <td>{{ $value['tgbd_dtcm'] }} > {{ $value['tgkt_dtcm'] }}</td>
      <td>{{ $value['vbdt'] }}</td>
      <td>{{ $value['cn'] }}</td>
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