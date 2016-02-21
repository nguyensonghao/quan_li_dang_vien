<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0047)http://108.61.160.172/select_fields_extract.php -->
<html private-lock-acoll="true"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta content="Truong An Binh" name="author">
<link href="{{Asset('libs\css\module\excel\xuatdulieutimkiem.css')}}" 
rel="stylesheet" type="text/css">
<title>Xuat du lieu ra Excel</title>
<script language="JavaScript">
<!--

function formsubmit() {
//	alert('Extract');
	rvalue="";
	j=parseInt(document.myform.length);
	for ( i=1 ; i < j ; i++)
		if ( myform.elements[i].type=='checkbox' && myform.elements[i].checked && (myform.elements[i].value =='field') )
		{
			rvalue += myform.elements[i].name + ","
		}
	myform.listoffields.value=rvalue;
	var listDienbien = '';
	if (document.querySelector('input[name="dienbien"]:checked') != null) {
		myform.listDienbien.value = document.querySelector('input[name="dienbien"]:checked').value;
	}	
	myform.submit();
	}

function selectall() {
	j=parseInt(document.myform.length);
	for (i=1; i< j; i++ )
		if (myform.elements[i].type=='checkbox')
			if (myform.elements[i].value =='field')
					myform.elements[i].checked = myform.chkall.checked;
	}

function abc() {
	this.close();
}
-->
</script>
</head>
<body topmargin="5" leftmargin="5">
<center>
<form method="post" name="myform" action="{{Asset('in/xuatdulieu')}}">
<input type="hidden" name="extractlist" value=" ;2190;2136;2162;2119;2137;2120;2198;2152;2197;2150;2151;2141;2101;2100;2167;2193;2102;2200;2110;2199;2113;2112;2111;2133;2138;2183;2104;2106;2105;2144;2107;2184;2153;2131;2179;2194;2132;2116;2126;2173;2134;2135;2115;2114;2174;2163;2171;2130;2172;2157;2160;2161;2156;2159;2158;2185;2148;2177;2165;2166;2140;2176;2175;2182;2181;2191;2125;2127;2128;2129;2180;2168;2154;2103;2139;2195;2108;2196;2123;2109;2118;2186;2146;2147;2187;2188;2189;2142;2143;2169;2170;2122;2121;2164;2192;2117;2149;2155;2178;2124;">
<input type="hidden" name="listoffields">
<input type="hidden" name="listDienbien">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody><tr><td class="bodyline"><br>
	<table cellpadding="4" cellspacing="1" border="0" class="forumline" align="center" style="margin-bottom: 20px">
		<tbody><tr>
			<th class="thHead" colspan="10">Chọn trường dữ liệu để xuất dữ liệu</th>
		</tr>
				<tr>
				<td class="Row3" colspan="10" align="center">
					<input type="button" value="Xuất dữ liệu" onclick="formsubmit();">
					<input type="button" value="Thoát" onclick="abc();">
				</td>
			</tr>
		  <tr><td class="row3">
		  <input name="chkall" type="Checkbox" onclick="selectall();">
		  </td><td class="row3" colspan="9"><font color="#ff0000" face="Verdana"><b>Chọn tất cả</b></font>
		  </td></tr>



			<tr>
				<td class="Row1"><input type="checkbox" name="soyeu_tbl.sohieuchuan" value="field" checked=""></td>
                <td class="Row2">Số hiệu công chức</td>
                            				<td class="Row1"><input type="checkbox" name="soyeu_tbl.ttd" value="field" checked=""></td>
                <td class="Row2">Tên cán bộ</td>
                            				<td class="Row1"><input type="checkbox" name="dm_dv.dv" value="field" checked=""></td>
                <td class="Row2">Đơn vị quản lý</td>
                            				<td class="Row1"><input type="checkbox" name="dm_dv.dv" value="field" checked=""></td>
                <td class="Row2">Thuộc khoa viện</td>
                            				<td class="Row1"><input type="checkbox" name="qtcd_tbl.ma_hh" value="field" checked=""></td>
                <td class="Row2">Học hàm </td>
                </tr>            				<tr><td class="Row1"><input type="checkbox" name="qtdtcm_tbl.vbdtcm" value="field" checked=""></td>
                <td class="Row2">Học vị cao nhất</td>
                            				<td class="Row1"><input type="checkbox" name="qtcd_tbl.nphh" value="field"></td>
				<td class="Row2">Năm phong</td>
			            				<td class="Row1"><input type="checkbox" name="dm_dcb.dcb" value="field"></td>
				<td class="Row2">Diện cán bộ</td>
			            				<td class="Row1"><input type="checkbox" name="dm_ttht.ttht" value="field"></td>
				<td class="Row2">Trạng thái hiện tại</td>
			            				<td class="Row1"><input type="checkbox" name="dm_tt.tt " value="field"></td>
				<td class="Row2">Hiện nay</td>
			</tr>            				<tr><td class="Row1"><input type="checkbox" name="sbh" value="field"></td>
				<td class="Row2">Số sổ bảo hiểm</td>
			            				<td class="Row1"><input type="checkbox" name="ndbh" value="field"></td>
				<td class="Row2">Thời điểm đóng bảo hiểm</td>
			            				<td class="Row1"><input type="checkbox" name="email" value="field"></td>
				<td class="Row2">Email</td>
			            				<td class="Row1"><input type="checkbox" name="tel" value="field"></td>
				<td class="Row2">Điện thoại</td>
			            				<td class="Row1"><input type="checkbox" name="scmnd" value="field"></td>
				<td class="Row2">Số chứng minh nhân dân</td>
			</tr>            				<tr><td class="Row1"><input type="checkbox" name="nc" value="field"></td>
				<td class="Row2">Nơi cấp chứng minh nhân dân</td>
			            				<td class="Row1"><input type="checkbox" name="ngay_cap" value="field"></td>
				<td class="Row2">Ngày cấp chứng minh</td>
			            				<td class="Row1"><input type="checkbox" name="gt" value="field"></td>
				<td class="Row2">Giới tính</td>
			            				<td class="Row1"><input type="checkbox" name="ntns" value="field"></td>
				<td class="Row2">Ngày tháng năm sinh</td>
			            				<td class="Row1"><input type="checkbox" name="dm_ttp.ttp" value="field"></td>
				<td class="Row2">Nơi sinh</td>
			</tr>            				<tr><td class="Row1"><input type="checkbox" name="soyeu_tbl.ma_qq" value="field"></td>
				<td class="Row2">Quê quán</td>
			            				<td class="Row1"><input type="checkbox" name="ctqq" value="field"></td>
				<td class="Row2">Chi tiết quê quán</td>
			            				<td class="Row1"><input type="checkbox" name="dctt" value="field"></td>
				<td class="Row2">Địa chỉ thường trú</td>
			            				<td class="Row1"><input type="checkbox" name="dm_dt.dt" value="field"></td>
				<td class="Row2">Dân tộc</td>
			            				<td class="Row1"><input type="checkbox" name="dm_tg.tg" value="field"></td>
				<td class="Row2">Tôn giáo</td>
			</tr>            				<tr><td class="Row1"><input type="checkbox" name="dm_gdcs.gdcs" value="field"></td>
				<td class="Row2">Gia đình chính sách</td>
			            				<td class="Row1"><input type="checkbox" name="dm_tpxt.tpxt" value="field"></td>
				<td class="Row2">Thành phần xuất thân</td>
			            				<td class="Row1"><input type="checkbox" name="soyeu_tbl.ntgcm" value="field"></td>
				<td class="Row2">Ngày tham gia cách mạng</td>
			            				<td class="Row1"><input type="checkbox" name="ttc" value="field"></td>
				<td class="Row2">Thuộc tổ chức</td>
			            				<td class="Row1"><input type="checkbox" name="vdpc" value="field"></td>
				<td class="Row2">Việc được phân công</td>
			</tr>            				<tr><td class="Row1"><input type="checkbox" name="nvbc" value="field"></td>
				<td class="Row2">Ngày vào biên chế</td>
			            				<td class="Row1"><input type="checkbox" name="nvcqhn" value="field"></td>
				<td class="Row2">Ngày về cơ quan hiện nay</td>
			            				<td class="Row1"><input type="checkbox" name="cqtd" value="field"></td>
				<td class="Row2">Cơ quan tuyển dụng</td>
			            				<td class="Row1"><input type="checkbox" name="cvdn" value="field"></td>
				<td class="Row2">Công việc đảm nhiệm</td>
			            				<td class="Row1"><input type="checkbox" name="soyeu_tbl.daybh" value="field"></td>
				<td class="Row2">Ngày bắt đầu tính thâm niên</td>
			</tr>            				<tr><td class="Row1"><input type="checkbox" name="thanggd" value="field"></td>
				<td class="Row2">Số tháng gián đoạn</td>
			            				<td class="Row1"><input type="checkbox" name="dm_kcb.kcb" value="field"></td>
				<td class="Row2">Khối cán bộ</td>
			            				<td class="Row1"><input type="checkbox" name="nvd" value="field"></td>
				<td class="Row2">Ngày vào Đảng</td>
			            				<td class="Row1"><input type="checkbox" name="nct" value="field"></td>
				<td class="Row2">Ngày chính thức</td>
			            				<td class="Row1"><input type="checkbox" name="nnn" value="field"></td>
				<td class="Row2">Ngày nhập ngũ</td>
			</tr>            				<tr><td class="Row1"><input type="checkbox" name="nxn" value="field"></td>
				<td class="Row2">Ngày xuất ngũ</td>
			            				<td class="Row1"><input type="checkbox" name="dm_tb.tb" value="field"></td>
				<td class="Row2">Diện ưu tiên bản thân</td>
			            				<td class="Row1"><input type="checkbox" name="dm_tdhv.tdhv" value="field"></td>
				<td class="Row2">Trình độ học vấn phổ thông</td>
			            				<td class="Row1"><input type="checkbox" name="dm_tdth.tdth" value="field"></td>
				<td class="Row2">Trình độ tin học</td>
			            				<td class="Row1"><input type="checkbox" name="dm_tdll.tdll" value="field"></td>
				<td class="Row2">Trình độ lý luận chính trị</td>
			</tr>            				<tr><td class="Row1"><input type="checkbox" name="dm_tdql.tdql" value="field"></td>
				<td class="Row2">Trình độ quản lý nhà nước</td>
			            				<td class="Row1"><input type="checkbox" name="dm_ttsk.ttsk" value="field"></td>
				<td class="Row2">Tình trạng sức khoẻ</td>
			            				<td class="Row1"><input type="checkbox" name="dm_nm.nm" value="field"></td>
				<td class="Row2">Nhóm máu</td>
			            				<td class="Row1"><input type="checkbox" name="ngay_kthd" value="field"></td>
				<td class="Row2">Ngày kết thúc hợp đồng</td>
			            				<td class="Row1"><input type="checkbox" name="ngaybhct" value="field"></td>
				<td class="Row2">Ngày nhận bảo hiểm chính thức</td>
			</tr>            				<tr><td class="Row1"><input type="checkbox" name="ld_kthd" value="field"></td>
				<td class="Row2">Lý do kết thúc</td>
			            				<td class="Row1"><input type="checkbox" name="ttk" value="field"></td>
				<td class="Row2">Thông tin khác</td>
			            				<td class="Row1"><input type="checkbox" name="tdnn_tbl.ma_nn" value="field"></td>
				<td class="Row2">Ngoại ngữ</td>
			            				<td class="Row1"><input type="checkbox" name="qtdbl_tbl.ma_ngach" value="field"></td>
				<td class="Row2">Ngạch lương</td>
			            				<td class="Row1"><input type="checkbox" name="qtdbl_tbl.tgbd_dbl" value="field"></td>
				<td class="Row2">Hưởng từ</td>
			</tr>            				<tr><td class="Row1"><input type="checkbox" name="qtdbl_tbl.tgkt_dbl" value="field"></td>
				<td class="Row2">Mốc tính lương lần sau</td>
			            				<td class="Row1"><input type="checkbox" name="qtdbl_tbl.ptldh_dbl" value="field"></td>
				<td class="Row2">Phần trăm lương</td>
			            				<td class="Row1"><input type="checkbox" name="qtdbl_tbl.bl_dbl" value="field"></td>
				<td class="Row2">Bậc lương</td>
			            				<td class="Row1"><input type="checkbox" name="qtdbl_tbl.hsl" value="field"></td>
				<td class="Row2">Hệ số lương</td>
			            				<td class="Row1"><input type="checkbox" name="qtdbl_tbl.hspccv" value="field"></td>
				<td class="Row2">Hệ số phụ cấp chức vụ</td>
			</tr>            				<tr><td class="Row1"><input type="checkbox" name="qtdbl_tbl.hspcth" value="field"></td>
				<td class="Row2">Hệ số phụ cấp TNVK</td>
			            				<td class="Row1"><input type="checkbox" name="qtdbl_tbl.hspctn" value="field"></td>
				<td class="Row2">Thâm niên hiện tại</td>
			            				<td class="Row1"><input type="checkbox" name="qtdtcm_tbl.ma_cndt" value="field"></td>
				<td class="Row2">Chuyên ngành học vị</td>
			            				<td class="Row1"><input type="checkbox" name="qtdtcm_tbl.ndtcm" value="field"></td>
				<td class="Row2">Nước đào tạo chuyên môn</td>
			            				<td class="Row1"><input type="checkbox" name="qtdtcm_tbl.tgdtcm" value="field"></td>
				<td class="Row2">Thời gian đào tạo</td>
			</tr>            				<tr><td class="Row1"><input type="checkbox" name="qtcd_tbl.ma_dhdp" value="field"></td>
				<td class="Row2">Danh hiệu được phong </td>
			            				<td class="Row1"><input type="checkbox" name="qtcd_tbl.npdh" value="field"></td>
				<td class="Row2">Năm phong</td>
			            				<td class="Row1"><input type="checkbox" name="qtcvkn_tbl.ma_cv" value="field"></td>
				<td class="Row2">Chức vụ chính quyền hiện nay</td>
			            				<td class="Row1"><input type="checkbox" name="qtcvkn_tbl.nbncvkn" value="field"></td>
				<td class="Row2">Năm bổ nhiệm</td>
            	<td colspan="10"><hr width="100%"></td>
            </tr>
            <tr>
            	<td colspan="10">Diễn biến:</td>
            </tr>
            <tr>
            	<td class="Row1"><input type="radio" name="dienbien" class="dienbien" value="dienbienluong"></td>
                <td class="Row2">Diễn biến lương</td>
                <td class="Row1"><input type="radio" name="dienbien" class="dienbien" value="quatrinhdaotao"></td>
                <td class="Row2">Quá trình đào tạo</td>



               		<td class="Row1"><input type="radio" class="dienbien" name="dienbien" value="quatrinhcongtac"></td>
                	<td class="Row2">Quá trình công tác</td>

                	<!--<td class="Row1"><input type="radio" class="dienbien" name="dienbien" value="qtct1993"></td>
                	<td class="Row2">Quá trình công tác (có trước năm 1993)</td>-->
            </tr>

            <tr>
                    <td class="Row1"><input type="radio" name="dienbien"  class="dienbien"
                    value="quatrinhboiduong"></td>
                	<td class="Row2">Quá trình bồi dưỡng</td>
               		<td class="Row1"><input type="radio" name="dienbien" class="dienbien" 
               		value="quatrinhkhenthuong"></td>
              		<td class="Row2">Khen thưởng</td>
                	<td class="Row1"><input type="radio" name="dienbien" class="dienbien" value="nuocngoaidaden"></td>
                <td class="Row2">Nước ngòai đã đến</td>
            </tr>
            </tbody></table>

</td></tr>
</tbody></table>
</form></center>


</body>
</html>