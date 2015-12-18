<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('AcountController@showLogin');
});

// AcountController

Route::controller('acount', 'AcountController');
Route::get('/dangnhap', 'AcountController@showLogin');
Route::get('/error', 'AcountController@showError');
Route::get('/logout', 'AcountController@actionLogout');
Route::get('/change-password', 'AcountController@showChangePassword');
// Route::get('/dangvien/{sohieuchuan}', 'AcountController@showInformation');
Route::get('/change-information', 'AcountController@showChangeInformation');
Route::post('/login', 'AcountController@actionLogin');
Route::post('/change-password', 'AcountController@actionChangePassword');

// PrintController

Route::controller('print', 'PrintController');
Route::get('/print', 'PrintController@showPrint');
Route::get('/printFile/{name}', 'PrintController@actionPrint');
Route::get('/add-file', 'PrintController@showAddPrint');
Route::post('/addPrint', 'PrintController@actionAddPrint');
Route::post('in/xuatdulieu', 'PrintController@actionPrintArrayByField');

// SearchController 

Route::controller('search', 'SearchController');
Route::get('timkiem', 'SearchController@showSearchSimple');
Route::get('timkiem/nangcao', 'SearchController@showSearchAdvance');
Route::get('timkiem/ketqua', 'SearchController@showSearchResult');
Route::get('dangvien/indanhsach', 'SearchController@actionExportExcel');
Route::get('dangvien/email', 'SearchController@actionSendMail');
Route::get('export-dv', 'SearchController@exportListDv');
Route::get('xuatdulieu/{shc}', 'SearchController@exportInformationOfOneMember');
Route::post('timkiem/ketqua', 'SearchController@actionSearchSimple');
Route::post('timkiem/nangcao', 'SearchController@actionSearchAdvance');

// ManagerUserController 

Route::controller('manager-user', 'ManagerUserController');
Route::get('nguoidung/danhsach', 'ManagerUserController@showListUser');
Route::get('nguoidung/khoa', "ManagerUserController@showListUserBlock");
Route::get('nguoidung/them', 'ManagerUserController@showAddUser');
Route::get('information-user', 'ManagerUserController@showInformationUser');
Route::get('nguoidung/doimatkhau', 'ManagerUserController@showResetUser');
Route::get('delete-user/{user}', 'ManagerUserController@actionBlockUser');
Route::get('un-block-user/{user}', 'ManagerUserController@unblockUser');
Route::get('delete-user-forever/{user}', 'ManagerUserController@actiondeleteUser');
Route::post('reset-password-user', 'ManagerUserController@actionResetPassword');

// ManagerMemberController 

Route::controller('manager-member', 'ManagerMemberController');
Route::get('dangvien/danhsach', 'ManagerMemberController@showListMember');
Route::get('dangvien/them', 'ManagerMemberController@showAddMember');
Route::get('dangvien/themcanbo', 'ManagerMemberController@showAddMemberTeacher');
Route::get('dangvien/inthongtin/{shcc}', 'ManagerMemberController@showInformationMember');
Route::get('dangvien/chuyen', 'ManagerMemberController@showChangedepartmentMember');
Route::get('rate-member', 'ManagerMemberController@showRateMember');
Route::get('dangvien/khaitru', 'ManagerMemberController@showexportMember');
Route::get('dangvien/phuchoi/{shc}', 'ManagerMemberController@actionBackupMember');
Route::get('dangvien/xuatdulieu', 'ManagerMemberController@showXuatDulieuTimKiem');
Route::post('change-department', 'ManagerMemberController@actionChangedepartmentMember');
Route::post('dangvien/khaitru', 'ManagerMemberController@actionexportMember');
Route::post('dangvien/thongtincanbo', 'ManagerMemberController@getInformationtoJson');
Route::post('/dangvien/them', 'ManagerMemberController@actionAddMember');
Route::post('/dangvien/chibo', 'ManagerMemberController@actionGetChibo');

// NotifyController 

Route::controller('/notify', 'NotifyController');
Route::get('/list-notify', 'NotifyController@showListNotify');
Route::get('/detail-notify', 'NotifyController@showDetailNotify');

// ThongtinDangvienController

Route::controller('thongtindangvien', 'ThongtinDangvienController');
Route::get('dangvien/thongtin/{shc}', 'ThongtinDangvienController@showDangvien');
Route::get('dangvien/quatrinh/xoa/{qt_tbl}/{id}', 'ThongtinDangvienController@actionDeleteQuatrinh');

Route::post('dangvien/thongtin/hienthi/chinhsua', 'ThongtinDangvienController@actionThongtinChinhsua');
