<?php 

	class Users extends Controller {

		public function __construct() {

		}

		public function register() {
			// Check for Posts 
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
					// Process Form

			}else {
				// Init Data 
				$data = [
					'name' => '',
					'email' => '',
					'password' => '',
					'confirm_password' => '',
					'name_err' => '',
					'email_err' => '',
					'password_err' => '',
					'confirm_password_err' => ''
				];

				// Load View
				$this->view('users/register', $data);

			}
		}

		public function login() {
				// Check for Posts 
				if($_SERVER['REQUEST_METHOD'] == 'POST') {
					// Process Form
			}else {
				// Init Data 
				$data = [
					'email' => '',
					'password' => '',
					'email_err' => '',
					'password_err' => '',
				];

				// Load View
				$this->view('users/login', $data);

			}
		}

	}