{{ HTML::style('libs/css/module/timkiemnangcao.css') }}

@extends('template/layout/main')

@section('title')
    Tìm kiếm nâng cao
@endsection

@section('content-box')

  <div class="col-md-12 content-body">
  <form method="post" action="{{Asset('timkiem/nangcao')}}">
  <input type="hidden" name="condition">
  <!-- Nav tabs -->
  <div class="col-md-4 style-search">
    <ul class="nav nav-pills list-group" role="tablist">
      <li class="list-group-item list-title">
        Chọn theo danh sách tìm kiếm
      </li>
      <li role="presentation" class="active list-group-item"><a href="#hoten" aria-controls="hoten
      " role="tab" data-toggle="tab">Họ tên</a></li>
      <li role="presentation" class="list-group-item"><a href="#gt" aria-controls="gt" role="tab" data-toggle="tab">Giới tính</a></li>
      <li role="presentation" class="list-group-item"><a href="#tuoi" aria-controls="tuoi" role="tab" data-toggle="tab">Tuổi</a></li>
      <li role="presentation" class="list-group-item"><a href="#donvi" aria-controls="donvi" role="tab" data-toggle="tab">Đơn vị</a></li>
      <li role="presentation" class="list-group-item"><a href="#kcb" aria-controls="kcb" role="tab" data-toggle="tab">Khối cán bộ</a></li>
      <li role="presentation" class="list-group-item"><a href="#tthn" aria-controls="tthn" role="tab" data-toggle="tab">Tình trạng hiện nay</a></li>
      <li role="presentation" class="list-group-item"><a href="#ttht" aria-controls="ttht" role="tab" data-toggle="tab">Trạng thái</a></li>
      <li role="presentation" class="list-group-item"><a href="#shcc" aria-controls="shcc" role="tab" data-toggle="tab">Số hiệu công chức</a></li>
      <li role="presentation" class="list-group-item"><a href="#qq" aria-controls="qq" role="tab" data-toggle="tab">Quê quán</a></li>
      <li role="presentation" class="list-group-item"><a href="#dt" aria-controls="dt" role="tab" data-toggle="tab">Dân tộc</a></li>
      <li role="presentation" class="list-group-item"><a href="#tdth" aria-controls="tdth" role="tab" data-toggle="tab">Trình độ tin học</a></li>
      <li role="presentation" class="list-group-item"><a href="#tdllct" aria-controls="tdllct" role="tab" data-toggle="tab">Trình độ lí luận chính trị</a></li>
      <li role="presentation" class="list-group-item"><a href="#tdqlnn" aria-controls="tdqlnn" role="tab" data-toggle="tab">Trình độ quản lí nhà nước</a></li>
      <li role="presentation" class="list-group-item"><a href="#tnn" aria-controls="tnn" role="tab" data-toggle="tab">Tên ngoại ngữ</a></li>
      <li role="presentation" class="list-group-item"><a href="#tdnn" aria-controls="tdnn" role="tab" data-toggle="tab">Trình độ ngoại ngữ</a></li>
      <li role="presentation" class="list-group-item"><a href="#nvd" aria-controls="nvd" role="tab" data-toggle="tab">Năm vào Đảng</a></li>
      <li role="presentation" class="list-group-item"><a href="#cvd" aria-controls="cvd" role="tab" data-toggle="tab">Chức vụ Đảng</a></li>
      <li role="presentation" class="list-group-item"><a href="#cvdt" aria-controls="cvdt" role="tab" data-toggle="tab">Chức vụ đoàn thể</a></li>
      <li role="presentation" class="list-group-item"><a href="#hh" aria-controls="hh" role="tab" data-toggle="tab">Học hàm</a></li>
      <li role="presentation" class="list-group-item"><a href="#dhdp" aria-controls="dhdp" role="tab" data-toggle="tab">Danh hiệu được phong</a></li>
      <li role="presentation" class="list-group-item"><a href="#np" aria-controls="np" role="tab" data-toggle="tab">Năm phong</a></li>
      <li role="presentation" class="list-group-item"><a href="#cvcq" aria-controls="cvcq" role="tab" data-toggle="tab">Chức vụ chính quyền</a></li>
      <li role="presentation" class="list-group-item"><a href="#ncc" aria-controls="ncc" role="tab" data-toggle="tab">Ngạch công chức</a></li>
      <li role="presentation" class="list-group-item"><a href="#mnhn" aria-controls="mnhn" role="tab" data-toggle="tab">Mã ngạch hiện nay</a></li>
      <li role="presentation" class="list-group-item"><a href="#blhn" aria-controls="blhn" role="tab" data-toggle="tab">Bậc lương hiện nay</a></li>
      <li role="presentation" class="list-group-item"><a href="#hspccv" aria-controls="hspccv" role="tab" data-toggle="tab">Hệ số phụ cấp chức vụ</a></li>
      <li role="presentation" class="list-group-item"><a href="#cndt" aria-controls="cndt" role="tab" data-toggle="tab">Chuyên ngành đào tạo</a></li>
      <li role="presentation" class="list-group-item"><a href="#htdt" aria-controls="htdt" role="tab" data-toggle="tab">Hình thức đào tạo</a></li>
      <li role="presentation" class="list-group-item"><a href="#vbdt" aria-controls="vbdt" role="tab" data-toggle="tab">Văn bằng đào tạo</a></li>
      <li role="presentation" class="list-group-item"><a href="#ndt" aria-controls="ndt" role="tab" data-toggle="tab">Nước đào tạo</a></li>
      <li role="presentation" class="list-group-item"><a href="#tgdt" aria-controls="tgdt" role="tab" data-toggle="tab">Thời gian đào tạo</a></li>
      <li role="presentation" class="list-group-item"><a href="#htkt" aria-controls="htkt" role="tab" data-toggle="tab">Hình thức khen thưởng</a></li>
      <li role="presentation" class="list-group-item"><a href="#nkt" aria-controls="nkt" role="tab" data-toggle="tab">Năm khen thưởng</a></li>
      <li role="presentation" class="list-group-item"><a href="#htkl" aria-controls="htkl" role="tab" data-toggle="tab">Hình thức kỉ luật</a></li>
      <li role="presentation" class="list-group-item"><a href="#ndbd" aria-controls="ndbd" role="tab" data-toggle="tab">Nội dung bồi dưỡng</a></li>
      <li role="presentation" class="list-group-item"><a href="#tndt" aria-controls="tndt" role="tab" data-toggle="tab">Tên nước đã đến</a></li>
    </ul>

  </div>

  <div class="col-md-8 content-search-advance">

    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="hoten">
        Bằng : <input type="text" name="hoten_bang" style="margin-left: 2px"><br>
        <p></p>
        Chứa : <input type="text" name="hoten_chua">
      </div>
      <div role="tabpanel" class="tab-pane" id="gt">
        Giới tính là :
        <select name="gt">
          <option value="1">Nam</option>
          <option value="0">Nữ</option>
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="tuoi">
        Bằng: <input type="number" name="tuoi_bang"><br>
        <p></p>
        Từ : <input type="number" name="tuoi_tu" style="margin-left: 10px">
        Đến : <input type="number" name="tuoi_den">
      </div>
      <div role="tabpanel" class="tab-pane" id="donvi">
        Thuộc :
        <select name="donvi">
          @foreach ($dv as $value)
            <option value="{{$value->ma_dv}}">{{$value->dv}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="kcb">
        Thuộc :
        <select name="kcb">
          @foreach ($kcb as $value)
            <option value="{{$value->ma_kcb}}">{{$value->kcb}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="tthn">
        Thuộc :
        <select name="tthn">
          @foreach ($ttht as $value)
            <option value="{{$value->ma_ttht}}">{{$value->ttht}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="ttht">
        Thuộc : 
        <select name="ttht">
          @foreach ($tt as $value)
            <option value="{{$value->ma_tt}}">{{$value->tt}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="shcc">
        Bằng : <input type="text" name="shcc_bang">
        Chứa : <input type="text" name="shcc_chua">
      </div>
      <div role="tabpanel" class="tab-pane" id="qq">
        Thuộc : 
        <select name="qq">
          @foreach ($qq as $value)
            <option value="{{$value->ma_ttp}}">{{$value->ttp}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="dt">
        Thuộc :
        <select name="dt">
          @foreach ($dt as $value)
            <option value="{{$value->ma_dt}}">{{$value->dt}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="tdth">
        Thuộc : 
        <select name="tdth">
          @foreach ($tdth as $value)
            <option value="{{$value->ma_tdth}}">{{$value->tdth}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="tdllct">
        Thuộc :
        <select name="tdllct">
          @foreach ($tdll as $value)
            <option value="{{$value->ma_tdll}}">{{$value->tdll}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="tdqlnn">
        Thuộc : 
        <select name="tdqlnn">
          @foreach ($tdql as $value)
            <option value="{{$value->ma_tdql}}">{{$value->tdql}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="tnn">
        Thuộc : 
        <select name="tnn">
          @foreach ($qg as $value)
            <option value="{{$value->ma_qg}}">{{$value->qg}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="tdnn">
        Thuộc : 
        <select name="tdnn">
          @foreach ($tdnn as $value)
            <option value="{{$value->ma_tdnn}}">{{$value->tdnn}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="nvd">
        Bằng : <input type="date" name="nvd_bang"><br>
        <p></p>
        Từ : <input type="date" name="nvd_tu" style="margin-left: 15px">
        Đến : <input type="date" name="nvd_den">
      </div>
      <div role="tabpanel" class="tab-pane" id="cvd">
        Thuộc : 
        <select name="cvd">
          @foreach ($cud as $value)
            <option value="{{$value->ma_cud}}">{{$value->cud}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="cvdt">
        Thuộc : 
        <select name="cvdt">
          @foreach ($cu as $value)
            <option value="{{$value->ma_cu}}">{{$value->cu}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="hh">
        Thuộc : 
        <select name="hh">
          @foreach ($hh as $value)
            <option value="{{$value->ma_hh}}">{{$value->hh}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="dhdp">
        Thuộc :
        <select name="dhdp">
          @foreach ($dhdp as $value)
            <option value="{{$value->ma_dhdp}}">{{$value->dhdp}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="np">
        Năm phong : <input type="date" name="np">
      </div>
      <div role="tabpanel" class="tab-pane" id="cvcq">
        Thuộc : 
        <select name="cvcq">
          @foreach ($cv as $value)
            <option value="{{$value->ma_cv}}">{{$value->cv}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="ncc">
        Thuộc :
        <select name="ncc">
          @foreach ($ngach as $value)
            <option value="{{$value->ma_ngach}}">{{$value->ten_ngach}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="mnhn">
        Mã ngạch : <input type="text" name="mnhn">
      </div>
      <div role="tabpanel" class="tab-pane" id="blhn">
        Bậc lương hiện nay :
        <select>
          <option></option>
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="hspccv">
        Bằng : <input type="text" name="hspccv_bang"><br>
        <p></p>
        Từ : <input type="text" name="hspccv_tu" style="margin-left: 15px">
        Đến : <input type="text" name="hspccv_den">
      </div>
      <div role="tabpanel" class="tab-pane" id="cndt">
        Thuộc : 
        <select name="cndt">
          @foreach ($cndt as $value)
            <option value="{{$value->ma_cn}}">{{$value->cn}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="htdt">
        Thuộc : 
        <select name="htdt">
          @foreach ($htdt as $value)
            <option value="{{$value->ma_htdt}}">{{$value->htdt}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="vbdt">
        Thuộc :
        <select name="vbdt">
          @foreach ($vbdt as $value)
            <option value="{{$value->ma_vbdt}}">{{$value->vbdt}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="ndt">
        Thuộc : 
        <select name="ndt">
          @foreach ($qg as $value)
            <option value="{{$value->ma_qg}}">{{$value->qg}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="tgdt">
        Năm : <input type="text" name="tgdt">
      </div>
      <div role="tabpanel" class="tab-pane" id="htkt">
        Thuộc : 
        <select name="htkt">
          @foreach ($kt as $value)
            <option value="{{$value->ma_kt}}">{{$value->kt}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="nkt">
        Năm khen thưởng : <input type="date" name="nkt">
      </div>
      <div role="tabpanel" class="tab-pane" id="htkl">
        Thuộc : 
        <select name="htkl">
          @foreach ($kl as $value)
            <option value="{{$value->ma_kl}}">{{$value->kl}}</option>
          @endforeach
        </select>
      </div>
      <div role="tabpanel" class="tab-pane" id="ndbd">
        Nội dung bồi dưỡng
        <input type="text" name="ndbd">
      </div>
      <div role="tabpanel" class="tab-pane" id="tndt">
        Thuộc :
        <select name="tndt">
          @foreach ($qg as $value)
            <option value="{{$value->ma_qg}}">{{$value->qg}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div>
      <textarea class="form-control searcg-log" rows="8"></textarea><hr>
      <div class="btn-group">
        <button type="button" class="btn btn-primary btn-sm btn-add-search">Thêm</button>
        <button type="submit" class="btn btn-custom btn-search">Tìm kiếm</button>
        <button type="button" class="btn btn-custom btn-new-search">Tìm kiếm mới</button>
      </div>
    </div>
  </div>
</form>
</div>

<script>
$(document).ready(function () {

  // script cho việc tìm kiếm
  var list_search = {}; 
  var list_type = []; // danh sach cac kieu tim kiem
  var old_type_query = 'hoten';
  var current_type_search = 'hoten'; // kieu tim kiem hien tai
  var string_query = '';
  $('.btn-add-search').click(function () {
    get_data_tab();
    console.log(export_query());
    $('textarea').val(export_query());
  })

  $('.btn-new-search').click(function () {
    console.log(list_search);
  })

  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    var target = $(e.target).attr("href").slice(1);
    current_type_search = target;

    // if (list_type.indexOf(target) == -1) {
    //   list_type.push(target);  
    // }

    
  });
  
  // Ham them du lieu tim kiem
  function get_data_tab () {
    if (current_type_search == 'hoten') {
      var hoten_bang = $('input[name="hoten_bang"]').val();
      var hoten_chua = $('input[name="hoten_chua"]').val();
      if (hoten_bang != '' || hoten_chua != '')
      list_search['hoten'] = {};
      if (hoten_bang != '') {
        list_search['hoten'].bang = hoten_bang;
      }
      if (hoten_chua != '') {
        list_search['hoten'].chua =  hoten_chua;
      }
    } else if (current_type_search == 'gt') {
      var gt = $('select[name="gt"]').val();
      var gt_text = $('select[name="gt"]').text();
      if (gt != '') {
        list_search['gt'] = gt;  
      }
    } else if (current_type_search == 'tuoi') {
      var tuoi_bang = $('input[name="tuoi_bang"]').val();
      var tuoi_tu = $('input[name="tuoi_tu"]').val();
      var tuoi_den = $('input[name="tuoi_den"]').val();
      if (tuoi_bang != '' || tuoi_den != '' || tuoi_tu != '') {
        list_search['tuoi'] = {};
        if (tuoi_bang != '') {
          list_search['tuoi'].bang = tuoi_bang;
        } 
        if (tuoi_tu != '') {
          list_search['tuoi'].tu = tuoi_tu;
        } 
        if (tuoi_den != '') {
          list_search['tuoi'].den = tuoi_den;
        }
      }
      
    } else if (current_type_search == 'donvi') {
      var donvi = $('select[name="donvi"]').val();
      if (donvi != '') {
        list_search['donvi'] = donvi;
      }
    } else if (current_type_search == 'kcb') {
      var kcb = $('select[name="kcb"]').val();
      if (kcb != '') {
        list_search['kcb'] = kcb;
      }
    } else if (current_type_search == 'tthn') {
      var tthn = $('select[name="tthn"]').val();
      if (tthn != '') {
        list_search['tthn'] = tthn;
      }
    } else if (current_type_search == 'ttht') {
      var ttht = $('select[name="ttht"]').val();
      if (ttht != '') {
        list_search['ttht'] = ttht;
      }
    } else if (current_type_search == 'shcc') {
      var shcc_bang = $('input[name="shcc_bang"]').val();
      var shcc_chua = $('input[name="shcc_chua"]').val();
      if (shcc_bang != '' || shcc_chua != '') {
        list_search['shcc'] = {};
        if (shcc_bang != '') {
          list_search['shcc'].bang = shcc_bang;
        }
        if (shcc_chua != '') {
          list_search['shcc'].chua = shcc_chua
        }
      }
    } else if (current_type_search == 'qq') {
      var qq = $('select[name="qq"]').val();
      if (qq != '') {
        list_search['qq'] = qq;
      }
    } else if (current_type_search == 'dt') {
      var dt = $('select[name="dt"]').val();
      if (dt != '') {
        list_search['dt'] = dt;
      }
    } else if (current_type_search == 'tdth') {
      var tdth = $('select[name="tdth"]').val();
      if (tdth != '') {
        list_search['tdth'] = tdth;
      }
    } else if (current_type_search == 'tdllct') {
      var tdllct = $('select[name="tdllct"]').val();
      if (tdllct != '') {
        list_search['tdllct'] = tdllct;
      }
    } else if (current_type_search == 'tdqlnn') {
      var tdqlnn = $('select[name="tdqlnn"]').val();
      if (tdqlnn != '') {
        list_search['tdqlnn'] = tdqlnn;
      }
    } else if (current_type_search == 'tnn') {
      var tnn = $('select[name="tnn"]').val();
      if (tnn != '') {
        list_search['tnn'] = tnn;
      }
    } else if (current_type_search == 'tdnn') {
      var tdnn = $('select[name="tdnn"]').val();
      if (tdnn != '') {
        list_search['tdnn'] = tdnn;
      }
    } else if (current_type_search == 'nvd') {
      var nvd_bang = $('input[name="nvd_bang"]').val();
      var nvd_tu = $('input[name="nvd_tu"]').val();
      var nvd_den = $('input[name="nvd_den"]').val();
      if (nvd_bang != '' || nvd_tu != '' || nvd_den != '') {
        list_search['ndv'] = {};
        if (nvd_bang != '') {
          list_search['ndv'].bang = nvd_bang;
        } 
        if (nvd_tu != '') {
          list_search['ndv'].tu = nvd_tu;
        } 
        if (nvd_den != '') {
          list_search['ndv'].den = nvd_den;
        }
      }
    } else if (current_type_search == 'cvd') {
      var cvd = $('select[name="cvd"]').val();
      if (cvd != '') {
        list_search['cvd'] = cvd;
      }
    } else if (current_type_search == 'cvdt') {
      var cvdt = $('select[name="cvdt"]').val();
      if (cvdt != '') {
        list_search['cvdt'] = cvdt;
      }
    } else if (current_type_search == 'hh') {
      var hh = $('select[name="hh"]').val();
      if (hh != '') {
        list_search['hh'] = hh;
      }
    } else if (current_type_search == 'dhdp') {
      var dhdp = $('select[name="dhdp"]').val();
      if (dhdp != '') {
        list_search['dhdp'] = dhdp;
      }
    } else if (current_type_search == 'np') {
      var np = $('input[name="np"]').val();
      if (np != '') {
        list_search['np'] = np;
      }
    } else if (current_type_search == 'cvcq') {
      var cvcq = $('select[name="cvcq"]').val();
      if (cvcq != '') {
        list_search['cvcq'] = cvcq;
      }
    } else if (current_type_search == 'ncc') {
      var ncc = $('select[name="ncc"]').val();
      if (ncc != '') {
        list_search['ncc'] = ncc;
      }
    } else if (current_type_search == 'mnhn') {
      var mnhn = $('input[name="mnhn"]').val();
      if (mnhn != '') {
        list_search['mnhn'] = mnhn;
      }
    } else if (current_type_search == 'blhn') {
      var blhn = $('select[name="blhn"]').val();
      if (blhn != '') {
        list_search['blhn'] = blhn;
      }
    } else if (current_type_search == 'hspccv') {
      var hspccv_bang = $('input[name="hspccv_bang"]').val();
      var hspccv_tu = $('input[name="hspccv_tu"]').val();
      var hspccv_den = $('input[name="hspccv_den"]').val();
      if (hspccv_bang != '' || hspccv_tu != '' || hspccv_den != '') {
        list_search['hspccv'] = {};
        if (hspccv_bang != '') {
          list_search['hspccv'].bang = hspccv_bang;
        } 
        if (hspccv_tu != '') {
          list_search['hspccv'].tu = hspccv_tu;
        } 
        if (hspccv_den != '') {
          list_search['hspccv'].den = hspccv_den;
        }
      }
    } else if (current_type_search == 'cndt') {
      var cndt = $('select[name="cndt"]').val();
      if (cndt != '') {
        list_search['cndt'] = cndt;
      }
    } else if (current_type_search == 'htdt') {
      var htdt = $('select[name="htdt"]').val();
      if (htdt != '') {
        list_search['htdt'] = htdt;
      }
    } else if (current_type_search == 'vbdt') {
      var vbdt = $('select[name="vbdt"]').val();
      if (vbdt != '') {
        list_search['vbdt'] = vbdt;
      }
    } else if (current_type_search == 'ndt') {
      var ndt = $('select[name="ndt"]').val();
      if (ndt != '') {
        list_search['ndt'] = ndt;
      }
    } else if (current_type_search == 'tgdt') {
      var tgdt = $('input[name="tgdt"]').val();
      if (tgdt != '') {
        list_search['tgdt'] = tgdt;
      }
    } else if (current_type_search == 'htkt') {
      var htkt = $('select[name="htkt"]').val();
      if (htkt != '') {
        list_search['htkt'] = htkt;
      }
    } else if (current_type_search == 'nkt') {
      var nkt = $('input[name="nkt"]').val();
      if (nkt != '') {
        list_search['nkt'] = nkt;
      }
    } else if (current_type_search == 'htkl') {
      var htkl = $('select[name="htkl"]').val();
      if (htkl != '') {
        list_search['htkl'] = htkl;
      }
    } else if (current_type_search == 'ndbd') {
      var ndbd = $('input[name="ndbd"]').val();
      if (ndbd != '') {
        list_search['ndbd'] = ndbd;
      }
    } else {
      var tndt = $('select[name="tndt"]').val();
      if (tndt != '') {
        list_search['tndt'] = tndt;
      }
    }
  }

  // Ham chuyen mang sang dang query
  function export_query () {
    var string_query = '';
    for (var i in list_search) {
      var e = list_search[i];
      if (i == 'hoten') {
        if (e.bang != null) {
          string_query += 'Họ tên bằng "'+e.bang+'" ';
          if (e.chua != null) {
            string_query += 'Hoặc họ tên chứa "'+e.chua+'" \n';
          }
        } else {
          if (e.chua != null) {
            string_query += 'Họ tên chứa "'+e.chua+'" \n';
          }  
        }
      } else if (i == 'tuoi') {
        if (e.bang != null) {
          string_query += 'Và Tuổi bằng "'+e.bang+'" ';
          if (e.tu != null) {
            string_query += 'Hoặc tuổi từ "'+e.tu+'" \n';
          }

          if (e.den != null) {
            string_query += 'Hoặc tuổi đến "'+e.tu+'" \n';
          }
          
        } else {
          if (e.tu != null) {
            string_query += 'Và tuổi từ "'+e.tu+'" ';
            if (e.den != null) {
              string_query += 'Hoặc tuổi đến "'+e.tu+'" \n';
            }
          } else {
            if (e.den != null) {
              string_query += 'Và tuổi đến "'+e.tu+'" \n';
            }
          }

        }
      } else if (i == 'shcc') {
        if (e.bang != null) {
          string_query += 'Và Số hiệu công chức bằng "'+e.bang+'" ';
          if (e.chua != null) {
            string_query += 'Hoặc số hiệu công chức chứa "'+e.chua+'" \n';
          }
        } else {
          if (e.chua != null) {
            string_query += 'Và số hiệu công chức chứa "'+e.chua+'" \n';
          }  
        }
      } else if (i == 'nvd') {
        if (e.bang != null) {
          string_query += 'Và Ngày vào Đảng bằng"'+e.bang+'" ';
          if (e.tu != null) {
            string_query += 'Hoặc Ngày vào Đảng từ "'+e.tu+'" \n';
          }

          if (e.den != null) {
            string_query += 'Hoặc Ngày vào Đảng đến "'+e.tu+'" \n';
          }
          
        } else {
          if (e.tu != null) {
            string_query += 'Và Ngày vào Đảng từ "'+e.tu+'" ';
            if (e.den != null) {
              string_query += 'Hoặc Ngày vào Đảng đến "'+e.tu+'" \n';
            }
          } else {
            if (e.den != null) {
              string_query += 'Và Ngày vào Đảng đến "'+e.tu+'" \n';
            }
          }

        }
      } else if (i == 'hspccv') {
        if (e.bang != null) {
          string_query += 'Và Hệ số phụ cấp chức vụ bằng "'+e.bang+'" ';
          if (e.tu != null) {
            string_query += 'Hoặc Hệ số phụ cấp chức vụ từ "'+e.tu+'" ';
          }

          if (e.den != null) {
            string_query += 'Hoặc Hệ số phụ cấp chức vụ đến "'+e.tu+'" ';
          }
          
        } else {
          if (e.tu != null) {
            string_query += 'Và Hệ số phụ cấp chức vụ từ "'+e.tu+'" ';
            if (e.den != null) {
              string_query += 'Hoặc Hệ số phụ cấp chức vụ đến "'+e.tu+'" \n';
            }
          } else {
            if (e.den != null) {
              string_query += 'Và Hệ số phụ cấp chức vụ đến "'+e.tu+'" \n';
            }
          }
        }
      } else if (i == 'gt') {
        var string = $('select[name="gt"] > option:selected').text();
        string_query += 'Và giới tính là "'+string+'" \n';
      } else if (i == 'donvi') {  
        var string = $('select[name="donvi"] > option:selected').text();
        string_query += 'Và đơn vị là "'+string+'" \n';
      } else if (i == 'kcb') {
        var string = $('select[name="kcb"] > option:selected').text();
        string_query += 'Và khối cán bộ là "'+string+'" \n';
      } else if (i == 'tthn') {
        var string = $('select[name="tthn"] > option:selected').text();
        string_query += 'Và tình trạng hiện nay là "'+string+'"\n';
      } else if (i == 'ttht') {
        var string = $('select[name="ttht"] > option:selected').text();
        string_query += 'Và trạng thái hiện tại là "'+string+'"\n';
      } else if (i == 'qq') {
        var string = $('select[name="qq"] > option:selected').text();
        string_query += 'Và quê quán là "'+string+'" \n';
      } else if (i == 'dt') {
        var string = $('select[name="dt"] > option:selected').text();
        string_query += 'Và dân tộc là "'+string+'" \n';
      } else if (i == 'tdth') {
        var string = $('select[name="tdth"] > option:selected').text();
        string_query += 'Và trình độ tin học là "'+string+'" \n';
      } else if (i == 'tdllct') {
        var string = $('select[name="tdllct"] > option:selected').text();
        string_query += 'Và trình độ lí luận chính trị là "'+string+'" \n';
      } else if (i == 'tdqlnn') {
        var string = $('select[name="tdqlnn"] > option:selected').text();
        string_query += 'Và trình độ quản lí nhà nước là "'+string+'"\n';
      } else if (i == 'tnn') {
        var string = $('select[name="tnn"] > option:selected').text();
        string_query += 'Và tên ngoại ngữ là "'+string+'" \n';
      } else if (i == 'tdnn') {
        var string = $('select[name="tdnn"] > option:selected').text();
        string_query += 'Và trình độ ngoại ngữ là "'+string+'" \n';
      } else if (i == 'cvd') {
        var string = $('select[name="cvd"] > option:selected').text();
        string_query += 'Và chức vụ Đảng là "'+string+'"\n';
      } else if (i == 'cvdt') {
        var string = $('select[name="cvdt"] > option:selected').text();
        string_query += 'Và chức vụ đoàn thể là "'+string+'"\n';
      } else if (i == 'hh') {
        var string = $('select[name="hh"] > option:selected').text();
        string_query += 'Và học hàm là "'+string+'"\n';
      } else if (i == 'dhdp') {
        var string = $('select[name="dhdp"] > option:selected').text();
        string_query += 'Và danh hiệu được phong là "'+string+'"\n';
      } else if (i == 'np') {
        string_query += 'Và năm phong là "'+e+'"\n';
      } else if (i == 'cvcq') {
        var string = $('select[name="cvcq"] > option:selected').text();
        string_query += 'Và chức vụ chính quyền là "'+string+'"\n';
      } else if (i == 'ncc') {
        var string = $('select[name="ncc"] > option:selected').text();
        string_query += 'Và ngạch công chức là "'+string+'"\n';
      } else if (i == 'mnhn') {
        string_query += 'Và mã ngạch hiện nay là "'+e+'"\n';
      } else if (i == 'blhn') {
        string_query += 'Và bậc lương hiện nay là "'+string+'"\n';
      } else if (i == 'cndt') {
        var string = $('select[name="cndt"] > option:selected').text();
        string_query += 'Và chuyên ngành đào tạo là "'+string+'"\n';
      } else if (i == 'htdt') {
        var string = $('select[name="htdt"] > option:selected').text();
        string_query += 'Và hình thức đào tạo là "'+string+'"\n';
      } else if (i == 'vbdt') {
        var string = $('select[name="vbdt"] > option:selected').text();
        string_query += 'Và văn bằng đào tạo là "'+string+'"\n';
      } else if (i == 'ndt') {
        string_query += 'Và nước đào tại là "'+string+'"\n';
      } else if (i == 'tgdt') {
        string_query += 'Và thời gian đào tạo là "'+e+'"\n';
      } else if (i == 'htkt') {
        string_query += 'Và hình thức khen thưởng là "'+string+'"\n';
      } else if (i == 'nkt') {
        string_query += 'Và năm khen thưởng là "'+string+'"\n';
      } else if (i == 'htkl') {
        var string = $('select[name="htkl"] > option:selected').text();
        string_query += 'Và hình thức kỉ luật là "'+string+'"\n';
      } else if (i == 'ndbd') {
        string_query += 'Và nội dung bồi dưỡng là "'+string+'"\n';
      } else {
        var string = $('select[name="tndt"] > option:selected').text();
        string_query += 'Và tên nước đã tới là "'+string+'"\n';
      }
    }

    if (string_query.indexOf('Họ tên bằng') != 0) {
      string_query = string_query.substr(3);
      string_query = string_query.substr(0, 1).toUpperCase() + string_query.substr(1);
    }
    return string_query;
  }

  // Hàm truyền điều kiện tìm kiếm trước khi submit form
  $('form').submit(function (event) {
      var condition = JSON.stringify(list_search);
      $('input[name="condition"]').val(condition);

      var tuoiBang = $('input[name="tuoi_bang"]').val(); 
      var tuoiTu = $('input[name="tuoi_tu"]').val();
      var tuoiDen = $('input[name="tuoi_den"]').val();      

      if (tuoiTu < 0 || tuoiDen < 0 || tuoiBang < 0) {
          alert('Số tuổi phải lớn hơn 0');
          event.preventDefault();
      } else if (tuoiDen < tuoiTu) {
          alert('Số tuổi đến với lớn hơn tuổi từ');
          event.preventDefault();
      } else if (tuoiTu == '' && tuoiDen != '') {
          alert('Phải nhập số tuổi từ khi nhập số tuổi đến');
          event.preventDefault();
      } else if (tuoiDen == '' && tuoiTu != '') {
          alert('Phải nhập số tuổi đến khi nhập số tuổi từ');
          event.preventDefault();
      }
  })
})
</script>
@endsection