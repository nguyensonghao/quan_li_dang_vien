<?php 

	class ManagerUserController extends BaseController {
		public $user;

		public function __construct() {
			$this->beforeFilter('manager.school');
			$this->user = new User();
		}

		public function showListUser () {
			$list['list_user'] = DB::table('cbuser')->where('isadmin', 0)->paginate(20);
			return View::make('module.manager.user.list-user', $list);
		}

		public function showListAdmin () {
			$list['list_admin'] = DB::table('cbuser')->where('isadmin', 1)->paginate(20);
			return View::make('module.manager.user.list-admin', $list);
		}		

		public function showListUserBlock () {
			$list['list_user_block'] = DB::table('cbuser')->where('islock', 1)->paginate(20);
			return View::make('module.manager.user.list-user-block', $list);	
		}

		public function showAddUser () {
			$list['ds_dv'] = $this->user->danhsachDonvi();
			return View::make('module.manager.user.add-user', $list);
		}

		public function showAddUserManager () {
			$list['ds_dv'] = $this->user->danhsachVien();
			return View::make('module.manager.user.add-user-manager', $list);	
		}

		public function showInformationUser ($userId) {
			return View::make('module.manager.user.information-user');
		}	

		public function showResetUser () {
			$list['list_user'] = DB::table('cbuser')->get();
			return View::make('module.manager.user.reset-password-user', $list);
		}		

		public function unblockUser ($user) {
			$user_old = DB::table('cbuser')->where('user', $user)->first();
			if ($user_old->islock == 0) {
				return Redirect::to('list-user-block');
			} else {
				$user_old->islock = 0;
				$user_old = json_decode(json_encode($user_old), true);
				DB::table('cbuser')->where('user', $user)->update($user_old);
				return Redirect::to('list-user-block')->with('result_unlock_user', 1)
				->with('user_unlock', $user);	
			}	
		}

		public function actionBlockUser ($user) {
			$user_old = DB::table('cbuser')->where('user', $user)->first();
			if ($user_old->islock == 1) {
				return Redirect::to('list-user');
			} else {
				$user_old->islock = 1;
				$user_old = json_decode(json_encode($user_old), true);
				DB::table('cbuser')->where('user', $user)->update($user_old);
				return Redirect::to('list-user')->with('result_delete_user', 1)
				->with('user_delete', $user);	
			}	
			
		}

		public function actionDeleteUser ($userId) {
			DB::table('cbuser')->where('id', $userId)->delete();
			return Redirect::back('delete-user', 'Xóa tài khoản thành công');
		}

		public function actionResetPassword () {
			$password = Input::get('password_new');
			$password_confirm = Input::get('password_confirm');
			if (!Input::has('password_new') || !Input::has('password_confirm')) {
				return Redirect::back()->with('result_reset_password', -2);
			} else if ($password != $password_confirm) {
				return Redirect::back()->with('result_reset_password', -1);
			} else {				
				if ($this->user->resetPasswordUser(Input::get('user'), $password)) {
					return Redirect::back()->with('result_reset_password', 1);
				} else {
					return Redirect::back()->with('result_reset_password', -1);
				}				
			}
		}

		public function actionAddUser () {
			$user = Input::all();
			unset($user['pass-confirm']);
			if (Input::get('pass-confirm') != Input::get('password')) {
				return Redirect::back()->with('error', 'Mật khẩu nhập lại không khớp');
			} else {
				if ($this->user->addUser($user)) {
					return Redirect::back()->with('notify', 'Thêm tài khoản thành công');
				} else {
					return Redirect::back()->with('error', 'Có lỗi trong quá trình xử lý');
				}
			}
		}

	}

?>