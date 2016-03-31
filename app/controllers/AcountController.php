<?php 

	class AcountController extends BaseController {

		public function showLogin () {
			if (Auth::check()) {
				return Redirect::to('dang-xuat');
			} else {
				return View::make('module.acount.login');	
			}
		}

		public function showChangePassword () {
			return View::make('module.acount.change-password');
		}

		public function showInformation ($sohieuchuan) {
			$user = DB::table('soyeu_tbl')->where('sohieuchuan', $sohieuchuan)->first();
			return View::make('module.acount.information')->with('dangvien', $user);	
		}

		public function showChangeInformation () {
			$list['user']  = Auth::user();			
			$list['chucvu'] = ServicesController::typeOfUser();
			if ($list['user']->token == 1 || $list['user']->token == 2) {
				$list['donvi'] = DB::table('dm_dv')->where('ma_dv', $list['user']->donvi)->first();
			}
			return View::make('module.acount.change-information', $list);
		}

		public function showError () {
			if (Session::get('error') == null) {
				return Redirect::to('tim-kiem-co-ban');
			} else {
				return View::make('module.error');	
			}
			
		}

		public function actionLogin () {
			$user = array (
				'user' => trim(Input::get('username')),
				'password' => trim(Input::get('password'))
			);
			$rules = array(
				'user' => 'required',
				'password' => 'required'
			);

			$validator = Validator::make($user, $rules);
			if(!$validator->fails()){				
				$remember = Input::get('remember');
				if ($remember == 'on') {
					if (Auth::attempt($user, true)) {
						Session::flash('info-welcome', 1);
						return Redirect::to('tim-kiem-co-ban');
					} else {
						Session::flash('error-login', -1);
						return Redirect::to('dang-nhap');
					}
				} else {

					if (Auth::attempt($user)) {
						Session::flash('info-welcome', 1);
						return Redirect::to('tim-kiem-co-ban');
					} else {
						Session::flash('error-login', -1);
						return Redirect::to('dang-nhap');
					}
				}
				
			} else {
				Session::flash('error-login', 3);
				return Redirect::to('dang-nhap');
			}


		}

		public function actionLogout () {
			Auth::logout();
			Session::flash('error-login', 4);
			return Redirect::to('dang-nhap');
		}

		public function actionChangePassword () {
			$passwordOld     = Input::get('password');
			$passwordReset   = Input::get('password-reset');
			$passwordConfirm = Input::get('password-confirm');
			$password = Input::all();
			$rules = array(
				'password'         => 'required',
				'password-reset'   => 'required',
				'password-confirm' => 'required',
			);

			// Validate password
			$validator = Validator::make($password, $rules);

			if (!$validator->fails()) {
				// Check password confirm
				if ($passwordReset != $passwordConfirm) {
					return Redirect::back()->with('error-change-password', 1);
				} else {
					// Check password old 
					if (Hash::check($passwordOld, Auth::user()->password)) {
						$user = Auth::user();
						$user->password = Hash::make($passwordReset);
						if ($user->save()) {
							return Redirect::back()->with('success-change-password', 1);
						} else {
							return Redirect::back()->with('error-change-password', 3);
						}
					} else {
						return Redirect::back()->with('error-change-password', 2);
					}	
				}
				
			} else {
				return Redirect::back()->with('error-change-password', -1);
			}				
		}

		public function actionChangeInformation () {
			$user = Input::get('user');
			$fullname = Input::get('fullname');
			if ($user == null || $fullname == null || $user == '' || $fullname == '') {
				return Redirect::back()->with('error', 'Không được để trống các trường');
			} else {
				if (DB::table('cbuser')->where('id', Input::get('id'))
				->update(array('user' => $user, 'fullname' => $fullname))) {
					return Redirect::back()->with('notify', 'Thay đổi thông tin thành công');
				} else {
					return Redirect::back()->with('error', 'Có lỗi trong quá trình xử lý');
				}
			}
		}


	}

?>