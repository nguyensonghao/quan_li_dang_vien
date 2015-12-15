<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:w="urn:schemas-microsoft-com:office:word" xmlns="http://www.w3.org/TR/REC-html40"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="ProgId" content="Word.Document">
<meta name="Generator" content="Microsoft Word 9">
<meta name="Originator" content="Microsoft Word 9">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Hồ sơ cán bộ</title>

<style type="text/css">
body {
  font-size: 10pt;
}
</style>

<style type="text/css"></style></head>

<body>

<table cellpadding="2" cellspacing="4" width="1000px" 
style="border-collapse:collapse;border:none;mso-border-alt:solid windowtext 1pt;mso-padding-alt:0pt 5.4pt 0pt 5.4pt;">
<tbody>
  <tr>
    <td colspan="4"><h1 align="center"> SƠ YẾU LÝ LỊCH</h1></td>
    <td>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="button" id="print_button" value="In trang này" onclick="this.style.display ='none'; window.print()">
    </td>
  </tr>

  <tr>
  </tr>

  <tr>
    <td colspan="4">
      <strong>I. Thông tin chung</strong>
    </td>
  </tr>

  <tr>
    <td colspan="3">
      <table width="100%">
        <tbody>
          <tr>
            <td width="50%"><strong>Họ và tên: </strong>{{ $dv->ttd }}</td>
            <td width="50%">
              <strong>Giới tính: </strong>  
              @if ($dv->gt == 1)
                  nam
              @else
                  nữ
              @endif
            </td>
          </tr>
        </tbody>
      </table>
    </td>
    
    <td width="20%" rowspan="7" align="center">
      <img 
      src="{{ Asset('thongtindangvien/image').'/'.$dv->sohieuchuan }}.jpg" alt="Anh can bo" width="120" height="150">
      &nbsp;&nbsp;&nbsp; 
    </td>
  </tr>

  <tr>
    <td colspan="3"><strong>Tên gọi khác: </strong></td>
  </tr>

  <tr>
    <td colspan="3">
      <table width="100%">
        <tbody><tr><td width="50%">
          <strong>Năm sinh:</strong> {{$dv->ntns}} </td>
      <td><strong>Hôn nhân: </strong> {{$dv->tthn}} 
    </td>
      </tr></tbody></table>
      </td>
  </tr>

  <tr>
    <td height="25" colspan="3">
      <strong>Nơi sinh: </strong>
      {{$dv->ma_ns}}
    </td>
  </tr>
      
  <tr>
    <td colspan="3"><strong>Quê quán:</strong>
      {{$dv->ma_qq}}
    </td>
  </tr>
    
  <tr>
    <td colspan="3"><strong>Hộ khẩu thường trú: </strong>
      {{$dv->ma_hktt}}
    </td>
  </tr>

  <tr>
    <td colspan="3"><strong>Chỗ ở hiện nay:</strong>
      {{$dv->cthktt}}
    </td>
  </tr>

  <tr>
    <td width="30%"><strong>Số CMND:</strong> {{$dv->scmnd}}</td>
      <td width="20%"><strong>Nơi Cấp: </strong>          
        {{$dv->nc}}    
      </td>
      <td colspan="2"><strong>Ngày cấp: </strong>{{$dv->ngay_cap}}</td>
  </tr>

  <tr>
    <td>
      <strong>Dân tộc: </strong>
      {{$dv->ma_dt}}   
    </td>
    <td>
      <strong>Tôn giáo: </strong>
      {{$dv->ma_tg}}
    </td>
    <td width="30%">
      <strong>TP xuất thân:</strong>        
      {{$dv->ma_tpxt}}
    </td>
    <td>
      <strong>Diện ưu tiên:</strong>        
    </td>
  </tr>    

  <tr>
    <td colspan="2"><strong>Số đt:(di động, cố định):</strong> {{$dv->tel}}</td>
    <td colspan="2"><strong>Email: </strong>{{$dv->email}} </td>
  </tr>

  <tr>
    <td colspan="4">
      <table width="100%">
        <tbody>
          <tr>
            <td width="30%"><strong>Ngày hợp đồng: </strong> {{$dv->ntgcm}}</td>
            <td width="35%"><strong>Ngày thi tuyển viên chức: </strong>1/10/1980</td>
            <td width="35%">&nbsp;</td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>

  <tr>
    <td colspan="4"><strong>Cơ quan tiếp nhận làm việc: </strong>Bộ Quốc phòng</td>
  </tr>

  <tr>
    <td colspan="4"><strong>Công việc được giao:</strong> Bộ đội</td>
  </tr>

  <tr>
    <td colspan="2"><strong>Ngày về cơ quan hiện nay:</strong></td>
    <td colspan="2"><strong>Công việc hiện nay:</strong> Giảng viên chính</td>
  </tr>

  <tr>
    <td><strong>Ngạch viên chức: </strong>Giảng viên chính</td>
    <td><strong>Bậc lương: </strong> 5 </td>
    <td><strong>Hệ số lương: </strong>5.76</td>
    <td><strong>Hưởng từ: </strong> 01/11/2013</td>
  </tr>

  <tr>
    <td><strong>Số sổ BHXH:</strong> {{$dv->sbh}}</td>
    <td colspan="3"><strong>Ngày bắt đầu đóng BHXH:</strong> {{$dv->ndbh }}</td>
  </tr>

  <tr>
    <td colspan="4">
      <table width="100%">
        <tbody>
          <tr>
            <td width="30%"><strong>Ngày vào đảng: </strong>{{$dv->nvd}} </td>
            <td width="30%"><strong>Ngày chính thức:  </strong>{{$dv->nct}}</td>
            <td width="40%">&nbsp;</td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>

  <tr>
    <td colspan="4">
      <table width="100%">
        <tbody>
          <tr>
            <td width="30%"><strong>Ngày nhập ngũ: </strong>{{$dv->nnn}}</td>
            <td width="30%"><strong>Ngày xuất ngũ: </strong>{{$dv->nxn}}</td>
            <td width="40%"><strong>Cấp bậc chức vụ: </strong>{{$dv->qh}}</td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>

  <tr>
    <td colspan="4">
      <table width="100%">
        <tbody>
          <tr>
            <td width="30%"><strong>Trình độ LLCT: </strong>{{$dv->ma_tdllct}}</td>
            <td width="30%"><strong>Trình độ QLNN: </strong>{{$dv->ma_tdqlnn}}</td>
            <td width="40%"><strong>Trình độ QLGD: </strong>10/10</td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>

  <tr>
    <td colspan="4">
      <table width="100%">
        <tbody>
          <tr>
            <td width="40%"><strong>Trình độ học vấn phổ thông: </strong>{{$dv->ma_tdhv}}</td>
            <td width="30%"><strong>Tình độ ngoại ngữ: </strong></td>
            <td width="30%"><strong>Trình độ tin học: </strong>{{$dv->ma_tdth}}</td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <table width="100%">
        <tbody>
          <tr>
            <td width="40%"><strong>Chức danh: </strong></td>
            <td width="30%"><strong>Năm phong: </strong>//</td>
            <td width="30%"><strong>Học vị: </strong></td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>

  <tr>
    <td colspan="4"><strong>Sở trường công tác: </strong></td>
  </tr>

  <tr>
    <td colspan="4"><strong>Công việc làm lâu nhất:</strong></td>
  </tr>

  <tr>
    <td colspan="4"><strong>Đặc điểm lịch sử bản thân:</strong> </td>
  </tr>

  <tr>
    <td><strong>Tình trạng sức khỏe: </strong>{{$dv->ma_ttsk}}</td>
    <td><strong>Chiều cao: </strong></td>
    <td><strong>Cân nặng: </strong></td>
    <td><strong>Nhóm máu: {{$dv->ma_nm}}</strong></td>
  </tr>
    
</tbody>
</table>

<p></p>
<!-- Bảng Quá trình đào tạo -->
<b>II. Quá trình đào tạo</b>
<table cellpadding="1" cellspacing="3" border="1" width="1000px" style="border-collapse:collapse;
         border:none;mso-border-alt:solid windowtext .5pt;
         mso-padding-alt:0pt 5.4pt 0pt 5.4pt;padding:0pt 5.4pt 0pt 5.4p">
  <tbody>
    <tr>
      <td width="148" align="center">
        Thời gian<br>
          <i><font size="2">(Ghi rõ: từ tháng<br>
          năm đến tháng năm)</font></i>
      </td>

      <td width="125" align="center">
        Hình thức đào tạo<br>
        <i><font size="2">(chính quy, tại chức...)</font></i>
      </td>

      <td width="144" align="center">
        Văn bằng<br>
        được cấp<br>
        <i><font size="2">(CĐ,ĐH,ThS,TS...)</font></i>
      </td>

      <td width="244" align="center">
        Chuyên ngành<br>
        được đào tạo
      </td>

      <td width="187" align="center">
        Nơi đào tạo
      </td>
    </tr>
    
    @foreach ($dt as $value)
    <tr>
      <td align="center" valign="top">{{$value->tgbd_dtcm}} - {{$value->tgkt_dtcm}}</td>
      <td align="center" valign="top">Chính qui</td>
      <td align="center" valign="top">{{$value->vbdtcm}}</td>
      <td align="center" valign="top">{{$value->ma_cndt}}</td>
      <td align="center" valign="top">{{$value->csdtcm}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>

<!-- Bảng Quá trình bồi dưỡng-->
<br>
<b>III. Quá trình bồi dưỡng</b>
<table cellpadding="1" cellspacing="3" border="1" width="1000px" style="border-collapse:collapse;
         border:none;mso-border-alt:solid windowtext .5pt;
         mso-padding-alt:0pt 5.4pt 0pt 5.4pt;padding:0pt 5.4pt 0pt 5.4p">
  <tbody>
    <tr>
      <td width="144" align="center">
        Thời gian<br>
          <i><font size="2">(Ghi rõ: từ tháng<br>
          năm đến tháng năm)</font></i>
      </td>

      <td width="118" align="center">
        Hình thức bồi dưỡng<br>
      </td>

      <td width="83" align="center">
        Văn bằng, chứng chỉ được cấp
      </td>

      <td width="275" align="center">
        Nội dung bồi dưỡng
      </td>

      <td width="228" align="center">
        Nơi bồi dưỡng
      </td>
    </tr>

  @foreach ($qtbd as $value)
    <tr>
      <td align="center" valign="top">{{$value->tgbd_bd}} - {{$value->tgkt_bd}}</td>
      <td align="center" valign="top">{{$value->htbd}}</td>
      <td align="center" valign="top">{{$value->vbbd}}</td>
      <td align="center" valign="top">{{$value->ndbd}}</td>
      <td align="center" valign="top">{{$value->nbd_qtbd}}</td>
    </tr>
  @endforeach

  </tbody>
</table>

<!-- Bảng Quá trình công tác-->
<br>

<b>V. Quan hệ gia đình</b>
<table cellpadding="1" cellspacing="3" border="1" width="1000px" style="border-collapse:collapse;
         border:none;mso-border-alt:solid windowtext .5pt;
         mso-padding-alt:0pt 5.4pt 0pt 5.4pt;padding:0pt 5.4pt 0pt 5.4p">
  <tbody>
    <tr align="center">
      <td width="31" height="30">
        TT
      </td>

      <td width="179" height="30">
        Họ và tên
      </td>

      <td width="89" height="30">
        Ngày tháng năm sinh
      </td>

      <td width="170" height="30">
        Quan hệ
      </td>

      <td width="178" height="30">
        Nghề nghiệp
      </td>

      <td width="185" height="30">
        Nơi công tác, nơi cư trú và các thông tin khác
      </td>
    </tr>   
    
  @foreach($qhgd as $key => $value)    
    <tr>
      <td>{{$key + 1}}</td>
      <td align="center" valign="top">{{$value->ht_qhgd}}</td>
      <td align="center" valign="top">{{$value->ns_qhgd}}</td>
      <td align="center" valign="top">{{$value->qhgd}}</td>
      <td align="center" valign="top">{{$value->nn_qhgd}}</td>
      <td align="center" valign="top">{{$value->no_qhgd}}</td>
    </tr>
  @endforeach
                                        
  </tbody>
</table>

<!-- Bảng đào tạo, bồi dưỡng ở nước ngoài -->
<br>
<b>VII. Đào tạo, bồi dưỡng ở nước ngoài</b> 
<table cellpadding="1" cellspacing="3" border="1" width="1000px" style="border-collapse:collapse;
         border:none;mso-border-alt:solid windowtext .5pt;
         mso-padding-alt:0pt 5.4pt 0pt 5.4pt;padding:0pt 5.4pt 0pt 5.4p">
  <tbody>
    <tr align="center">
      <td width="119" height="30">
        Từ<br>
          dd/mm/yy
      </td>

      <td width="119" height="30">
        Đến <br>dd/mm/yy
      </td>

      <td width="115" height="30">
        Nước đến
      </td>

      <td width="113" height="30">
        Mục đích
      </td>

      <td width="176" height="30">
        Nguồn kinh phí
      </td>

      <td width="91" height="30">
        Gia hạn
      </td>

      <td width="213" height="30">
        Các thông tin khác
      </td>
    </tr>
    
    <tr>
    <td align="center" valign="top">1/1984</td>
      <td align="center" valign="top">1/1986</td>
      <td align="center" valign="top">Thái Lan</td>
      <td align="center" valign="top">Học Thạc sỹ</td>
      <td align="center" valign="top"></td>
      <td align="center" valign="top">Đã hoàn thành</td>
      <td align="center" valign="top"></td>
    </tr>
  </tbody>
</table>

<!-- Danh hiệu được phong -->
<br>
<b>VIII. Danh hiệu được phong</b> 
<table cellpadding="1" cellspacing="3" border="1" width="1000px" style="border-collapse:collapse;
         border:none;mso-border-alt:solid windowtext .5pt;
         mso-padding-alt:0pt 5.4pt 0pt 5.4pt;padding:0pt 5.4pt 0pt 5.4p">
  <tbody>
    <tr align="center">
      <td width="396">
        Danh hiệu, chức danh
      </td>

      <td width="229">
        Năm phong
      </td>

      <td width="349">
        Các thông tin khác
      </td>
    </tr>
    
    <tr>
      <td height="25"></td><td height="25"></td><td height="25"></td>
    </tr>
  </tbody>
</table>

<!-- Chức vụ Đảng -->
<br>
<b>IX. Chức vụ Đảng</b> 
<table cellpadding="1" cellspacing="3" border="1" width="1000px" style="border-collapse:collapse;
         border:none;mso-border-alt:solid windowtext .5pt;
         mso-padding-alt:0pt 5.4pt 0pt 5.4pt;padding:0pt 5.4pt 0pt 5.4p">
  <tbody>
    <tr align="center">
      <td width="131" height="30">
        Từ<br>
          Tháng/năm
      </td>

      <td width="131" height="30">
        Đến <br>Tháng/năm
      </td>

      <td width="154" height="30">
        Chức vụ
      </td>

      <td width="189" height="30">
        Đơn vị quản lý
      </td>

      <td width="243" height="30">
        Các thông tin khác
      </td>

    </tr>
    
    <tr>
      <td height="25"></td><td height="25"></td><td height="25"></td><td height="25"></td><td height="25"></td>
    </tr>
  </tbody>
</table>

<!-- Chức vụ Đảng -->
<br>
<b>X. Chức vụ chính quyền</b> 
<table cellpadding="1" cellspacing="3" border="1" width="1000px" style="border-collapse:collapse;
         border:none;mso-border-alt:solid windowtext .5pt;
         mso-padding-alt:0pt 5.4pt 0pt 5.4pt;padding:0pt 5.4pt 0pt 5.4p">
  <tbody>
    <tr align="center">
      <td width="131" height="30">
        Từ<br>
        Tháng/năm
      </td>

      <td width="131" height="30">
        Đến <br>Tháng/năm
      </td>

      <td width="154" height="30">
        Chức vụ
      </td>

      <td width="189" height="30">
        Đơn vị quản lý
      </td>

      <td width="243" height="30">
        Các thông tin khác
      </td>

    </tr>
    
    @if ($qtcvkn == null || count($qtcvkn) == 0)
      <tr>
        <td height="25"></td>
        <td height="25"></td>
        <td height="25"></td>
        <td height="25"></td>
        <td height="25"></td>
      </tr>
    @else
      @foreach ($qtcvkn as $value)
        <tr>
          <td height="25">{{$value->nbncvkn}}</td>
          <td height="25">{{$value->nktcvkn}}</td>
          <td height="25">{{$value->ma_cv}}</td>
          <td height="25">{{$value->donvi}}</td>
          <td height="25">{{$value->ttk_qtcvkn}}</td>
        </tr>
      @endforeach
    @endif
    
  </tbody>
</table>

<br>
<b>XI. Chức vụ đoàn thể</b> 
<table cellpadding="1" cellspacing="3" border="1" width="1000px" style="border-collapse:collapse;
         border:none;mso-border-alt:solid windowtext .5pt;
         mso-padding-alt:0pt 5.4pt 0pt 5.4pt;padding:0pt 5.4pt 0pt 5.4p">
  <tbody>
    <tr align="center">
      <td width="131" height="30">
        Từ<br>
        Tháng/năm
      </td>

      <td width="131" height="30">
        Đến <br>Tháng/năm
      </td>

      <td width="154" height="30">
        Chức vụ
      </td>

      <td width="189" height="30">
        Đơn vị quản lý
      </td>

      <td width="243" height="30">
        Các thông tin khác
      </td>
    </tr>
    
    @if ($qtcvdt == null || count($qtcvdt) == 0)
      <tr>
        <td height="25"></td>
        <td height="25"></td>
        <td height="25"></td>
        <td height="25"></td>
        <td height="25"></td>
      </tr>
    @else 
      @foreach ($qtcvdt as $value)
        <tr>
          <td height="25">{{$value->nbncvdt}}</td>
          <td height="25">{{$value->nktcvdt}}</td>
          <td height="25">{{$value->ma_cv}}</td>
          <td height="25">{{$value->dn}}</td>
          <td height="25">{{$value->ttk_qtcvdt}}</td>
        </tr>
      @endforeach
    @endif
    
  </tbody>
</table>

<br>
<b>XII. Khen thưởng</b>
<table cellpadding="1" cellspacing="3" border="1" width="1000px" style="border-collapse:collapse;
         border:none;mso-border-alt:solid windowtext .5pt;
         mso-padding-alt:0pt 5.4pt 0pt 5.4pt;padding:0pt 5.4pt 0pt 5.4p">
  <tbody>
    <tr align="center">
      <td width="280">
        Hình thức khen thưởng
      </td>

      <td width="309">
        Năm khen thưởng
      </td>

      <td width="285">
        Các thông tin khác
      </td>
    </tr>
    
    @if (is_null($qtkt) || $qtkt == '' || count($qtkt) == 0)
      <tr>
        <td valign="top" align="center">Chiến sỹ Thi đua cấp trường</td>
        <td valign="top" align="center">1991</td>
        <td valign="top" align="center"></td> 
      </tr>
    @else 
      @foreach ($qtkt as $value)
        <tr>
          <td valign="top" align="center">{{$value->ma_htkt}}</td>
          <td valign="top" align="center">{{$value->nkt_qtkt}}</td>
          <td valign="top" align="center">{{$value->ldkt}}</td> 
        </tr>
      @endforeach
    @endif
    
  </tbody>
</table>

<br>
<b>XIII. Kỷ luật</b>
<table cellpadding="1" cellspacing="3" border="1" width="1000px" style="border-collapse:collapse;
         border:none;">
  <tbody>
    <tr align="center">
        <td width="280">
          Hình thức kỷ luật
        </td>
        <td width="309">
          Năm kỷ luật
        </td>
        <td width="285">
          Các thông tin khác
        </td>
    </tr>
    
    @if(is_null($qtkl) || $qtkl == '' || count($qtkl) == 0)
      <tr>
        <td height="25"></td>
        <td height="25"></td>
        <td height="25"></td>
      </tr>
    @else 
      @foreach ($qtkl as $value)
        <td height="25">{{$value->ma_htkl}}</td>
        <td height="25">{{$value->nkl}}</td>
        <td height="25">{{$value->ldkl}}</td>
      @endforeach
    @endif
    
    </tbody>
</table>

<p><br>
<b>XIV. Quá trình công tác</b>
</p><table cellpadding="1" cellspacing="3" border="1" width="1000px" style="border-collapse:collapse; border:none;">

    <tbody>
      <tr>
        <td align="center" width="90">Thời gian</td>
        <td align="center" width="200">Biên chế tại đơn vị/<br>Nơi lam việc</td>
        <td align="center" width="100">Công việc đảm nhận</td>
        <td align="center" width="150">Diện cán bộ/<br>Tình trạng công tác</td>
      </tr>

    @foreach ($qtcc as $value)
      <tr>
        <td align="center">{{$value->tgbd_qtct}} &gt; {{$value->tgkt_qtct}} </td>
        <td align="center">
          {{$value->nlv}} - {{$value->bctdv}}<br>
        </td>
        <td align="center">{{$value->cvdn}}</td>
        <td align="center">{{$value->ma_ttct}}</td>
      </tr>
    @endforeach

    </tbody>
  </table>
<p><br>

<b>XV. Diễn biến lương</b>
</p>
<table cellpadding="1" cellspacing="3" border="1" width="1000px" style="border-collapse:collapse;
         border:none;">
  <tbody>
    <tr align="center">
      <td width="94">
        Từ <br> <font size="2.5">Tháng/Năm</font>
      </td>

      <td width="94">
        Đến <br> <font size="2.5">Tháng/Năm</font>
      </td>

      <td width="115">
        Mã số ngạch
      </td>

      <td width="38">
        Bậc
      </td>

      <td width="107">
        Hệ số lương
      </td>

      <td width="112">
        Hệ số TNVK
      </td>

      <td width="112">
        Thâm niên
      </td>

      <td width="107">
        Hệ số PCCV
      </td>

      <td width="129">
        % được hưởng
      </td>

      <td width="136">
        Thông tin khác
      </td>
    </tr>
    
    @foreach ($qtdbl as $value)
    <tr>
      <td valign="top" align="center">{{$value->tgbd_dbl}}</td>
      <td valign="top" align="center">{{$value->tgkt_dbl}}</td>
      <td valign="top" align="center">{{$value->ma_ngach}}</td>
      <td valign="top" align="center">{{$value->bl_dbl}}</td>
      <td valign="top" align="center">{{$value->hsl}}</td>
      <td valign="top" align="center">0.00</td>
      <td valign="top" align="center">{{$value->hspctn}}</td>
      <td valign="top" align="center">{{$value->hspccv}}</td>
      <td valign="top" align="center">100</td>
      <td valign="top" align="center"></td>
    </tr>

    @endforeach
                                   
  </tbody>
</table>
<br>

<strong> XVi. Các thông tin khác cần bổ xung</strong>

<strong> XVII. Đánh giá cán bộ viên chức</strong>

</body>
</html>