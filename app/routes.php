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
Route::get('/dang-nhap', 'AcountController@showLogin');
Route::get('/loi', 'AcountController@showError');
Route::get('/dang-xuat', 'AcountController@actionLogout');
Route::get('/doi-mat-khau', 'AcountController@showChangePassword');
Route::get('/thong-tin-ca-nhan', 'AcountController@showChangeInformation');
Route::post('/dang-nhap', 'AcountController@actionLogin');
Route::post('/doi-mat-khau', 'AcountController@actionChangePassword');

// PrintController

Route::controller('print', 'PrintController');
Route::get('/print', 'PrintController@showPrint');
Route::get('/printFile/{name}', 'PrintController@actionPrint');
Route::get('/add-file', 'PrintController@showAddPrint');
Route::post('/addPrint', 'PrintController@actionAddPrint');
Route::post('in/xuatdulieu', 'PrintController@actionPrintArrayByField');

// SearchController 

Route::controller('search', 'SearchController');
Route::get('tim-kiem-co-ban', 'SearchController@showSearchSimple');
Route::get('tim-kiem-nang-cao', 'SearchController@showSearchAdvance');
Route::get('ket-qua-tim-kiem', 'SearchController@showSearchResult');
Route::get('in-danh-sach', 'SearchController@actionExportExcel');
Route::get('in-so-cai', 'SearchController@actionPrintSocai');
Route::get('gui-email', 'SearchController@actionSendMail');
Route::get('export-dv', 'SearchController@exportListDv');
Route::get('xuatdulieu/{shc}', 'SearchController@exportInformationOfOneMember');
Route::post('timkiem/ketqua', 'SearchController@actionSearchSimple');
Route::post('timkiem/nangcao', 'SearchController@actionSearchAdvance');

// ManagerUserController 

Route::controller('manager-user', 'ManagerUserController');
Route::get('danh-sach-nguoi-dung', 'ManagerUserController@showListUser');
Route::get('danh-sach-admin', "ManagerUserController@showListAdmin");
Route::get('danh-sach-tai-khoan-bi-khoa', "ManagerUserController@showListUserBlock");
Route::get('them-nguoi-dung', 'ManagerUserController@showAddUser');
Route::get('them-quan-ly', 'ManagerUserController@showAddUserManager');
Route::get('thong-tin-nguoi-dung', 'ManagerUserController@showInformationUser');
Route::get('cap-lai-mat-khau-nguoi-dung', 'ManagerUserController@showResetUser');
Route::get('khoa-nguoi-dung/{user}', 'ManagerUserController@actionBlockUser');
Route::get('mo-khoa-nguoi-dung/{user}', 'ManagerUserController@unblockUser');
Route::get('xoa-nguoi-dung/{id}', 'ManagerUserController@actionDeleteUser');
Route::post('cap-lai-mat-khau', 'ManagerUserController@actionResetPassword');
Route::post('them-nguoi-dung', 'ManagerUserController@actionAddUser');

// ManagerMemberController 

Route::controller('manager-member', 'ManagerMemberController');
Route::get('danh-sach-dang-vien', 'ManagerMemberController@showListMember');
Route::get('them-dang-vien', array('before' => 'manager.school', 'uses' => 'ManagerMemberController@showAddMember'));
Route::get('them-can-bo', array('before' => 'manager.school', 'uses' => 'ManagerMemberController@showAddMemberTeacher'));
// Route::get('thong-tin-dang-vien/{shcc}', 'ManagerMemberController@showInformationMember');
Route::get('chuyen-dang-vien', array('before' => 'manager.school', 'uses' => 'ManagerMemberController@showChangedepartmentMember'));
Route::get('danh-gia-dang-vien', array('before' => 'manager.school', 'uses' => 'ManagerMemberController@showRateMember'));
Route::get('khai-tru-dang-vien', array('before' => 'manager.school', 'uses' => 'ManagerMemberController@showExportMember'));
Route::get('phuc-hoi-dang-vien/{shc}', 'ManagerMemberController@actionBackupMember');
Route::get('xuat-du-lieu', 'ManagerMemberController@showXuatDulieuTimKiem');
Route::post('change-department', 'ManagerMemberController@actionChangedepartmentMember');
Route::post('khai-tru-dang-vien', 'ManagerMemberController@actionExportMember');
Route::post('dangvien/thongtincanbo', 'ManagerMemberController@getInformationtoJson');
Route::post('dangvien/them', 'ManagerMemberController@actionAddMember');
Route::post('dangvien/chibo', 'ManagerMemberController@actionGetChibo');

// ThongtinDangvienController

Route::controller('thongtindangvien', 'ThongtinDangvienController');
Route::get('thong-tin-dang-vien/{shc}', 'ThongtinDangvienController@showDangvien');
Route::get('dangvien/quatrinh/xoa/{qt_tbl}/{id}', 'ThongtinDangvienController@actionDeleteQuatrinh');
Route::post('dangvien/thongtin/hienthi/chinhsua', 'ThongtinDangvienController@actionThongtinChinhsua');


Route::controller('form', 'FormController');
Route::get('bieumau1', 'FormController@bieumau1');
Route::get('bieumau2', 'FormController@bieumau2');
Route::get('bieumau3', 'FormController@bieumau3');
Route::get('bieumau4', 'FormController@bieumau4');
Route::get('bieumau5', 'FormController@bieumau5');
Route::get('bieumau6', 'FormController@bieumau6');
Route::get('bieumau7A', 'FormController@bieumau7A');
Route::get('bieumau7B', 'FormController@bieumau7B');
Route::get('bieumau8', 'FormController@bieumau8');
Route::get('bieumau9', 'FormController@bieumau9');
Route::get('bieumau10', 'FormController@bieumau10');
Route::get('bieumau11', 'FormController@bieumau11');
