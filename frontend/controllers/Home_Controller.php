<?php
class Home_Controller extends Base_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	// show all posts
	function index()
	{
		$products = $this->model->product->find_category();
		$this->view->load('home/index', [
			'products' => $products
		]);
	}

	public function login()
	{
		$this->view->load('home/login');
	}

	public function handle_login()
	{
		// xu li dang nhap

		$email = getPostParameter('email');
		$password = getPostParameter('password');

		$errors = [];
		if (!$email) {
			$errors['email'] = 'Vui lòng nhập email';
		}

		if (!$password) {
			$errors['password'] = 'Vui lòng nhập password';
		}

		if (count($errors) > 0) {
			$this->view->load('home/login', [
				'errors' => $errors
			]);
		} else {
			$user = $this->model->user->get_by_email($email);
			if ($email == $user['email']) {
				if ($user['role'] == 2) {
					session_start();
					$_SESSION['name'] = $user['name'];
					redirect('home/index');
				}
				 elseif ($user['role'] == 1) {
					session_start();
					$_SESSION['name'] = $user['name'];
					redirect('home/index');
				}
			} else {
				$this->view->load('home/login', [
					'error_message' => 'Dang nhap that bai'
				]);
			}
		}
	}

	public function handle_logout(){
		session_start();
		unset($_SESSION['name']);
		session_destroy();
		redirect('home/index');
	}
}
