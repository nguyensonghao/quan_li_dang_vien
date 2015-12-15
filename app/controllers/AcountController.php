<?php 

	class AcountController extends BaseController {

		public function showLogin () {
			if (Auth::check()) {
				return Redirect::to('logout');
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
			return View::make('module.acount.change-information');
		}

		public function showError () {
			if (Session::get('error') == null) {
				return Redirect::to('timkiem');
			} else {
				return View::make('module.error');	
			}
			
		}

		public function actionLogin () {
			$user = array (
				'username' => Input::get('username'),
				'password' => Input::get('password')
			);
			$rules = array(
				'username' => 'required',
				'password' => 'required'
			);

			$validator = Validator::make($user, $rules);
			if(!$validator->fails()){
				// check user remember login
				$remember = Input::get('remember');
				if ($remember == 'on') {
					if (Auth::attempt($user, true)) {
						Session::flash('info-welcome', 1);
						return Redirect::to('timkiem');
					} else {
						Session::flash('error-login', -1);
						return Redirect::to('dangnhap');
					}
				} else {

					if (Auth::attempt($user)) {
						Session::flash('info-welcome', 1);
						return Redirect::to('timkiem');
					} else {
						Session::flash('error-login', -1);
						return Redirect::to('dangnhap');
					}
				}
				
			} else {
				Session::flash('error-login', 3);
				return Redirect::to('dangnhap');
			}


		}

		public function actionLogout () {
			Auth::logout();
			Session::flash('error-login', 4);
			return Redirect::to('login');
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
					return Redirect::to('change-password')->with('error-change-password', 1);
				} else {
					// Check password old 
					if (Hash::check($passwordOld, Auth::user()->password)) {
						$user = Auth::user();
						$user->password = Hash::make($passwordReset);
						if ($user->save()) {
							return Redirect::to('change-password')->with('success-change-password', 1);
						} else {
							return Redirect::to('change-password')->with('error-change-password', 3);
						}
					} else {
						return Redirect::to('change-password')->with('error-change-password', 2);
					}	
				}
				
			} else {
				return Redirect::to('change-password')->with('error-change-password', -1);
			}	

			
		}


	}

?>