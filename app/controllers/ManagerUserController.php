<?php 

	class ManagerUserController extends BaseController {

		public function __construct() {
			$this->beforeFilter('manager.school');
		}

		public function showListUser () {
			$list['list_user'] = DB::table('cbuser')->where('islock', 0)->paginate(20);
			return View::make('module.manager.user.list-user', $list);
		}

		public function showListUserBlock () {
			$list['list_user_block'] = DB::table('cbuser')->where('islock', 1)->paginate(20);
			return View::make('module.manager.user.list-user-block', $list);
		}

		public function showAddUser () {
			return View::make('module.manager.user.add-user');
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

		public function actiondeleteUser ($user) {
			DB::table('cbuser')->where('user', $user)->delete();
			return Redirect::to('list-user-block')->with('result_delete_user', 1)->with('user_delete_forever', $user);
		}

		public function actionResetPassword () {
			$password = Input::get('password_new');
			$password_confirm = Input::get('password_confirm');
			if (!Input::has('password_new') || !Input::has('password_confirm')) {
				return Redirect::to('reset-password-user')->with('result_reset_password', -2);
			} else if ($password != $password_confirm) {
				return Redirect::to('reset-password-user')->with('result_reset_password', -1);
			} else {
				$user = Input::get('user');
				$user_old = DB::table('cbuser')->where('user', $user)->first();
				$user_old->pass = Hash::make(Input::get('password_new'));
				$user_old = json_decode(json_encode($user_old), true);
				DB::table('cbuser')->where('user', $user)->update($user_old);
				return Redirect::to('reset-password-user')->with('result_reset_password', 1);
			}
		}

	}

?>