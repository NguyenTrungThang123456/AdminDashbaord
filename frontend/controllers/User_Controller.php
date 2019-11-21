<?php
class User_Controller extends Base_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$users = $this->model->user->find();
		$this->layout->set('auth_layout');
		$this->view->load('user/index', [
			'users' => $users
		]);
	}

	// view form
	function add()
	{
		$this->layout->set('auth_layout');
		$this->view->load('user/add');
	}



	function store()
	{
		// xu li them san pham

		$name = getParameter('name');
		$address = getParameter('address');
		$phone = getParameter('phone_number');
		$email = getParameter('email');
		$password = getParameter('password');
		$role = 2;

		$user_email = $this->model->user->get_by_email($email);
		$user_phone = $this->model->user->get_by_phone($phone);

		$errors = [];

		if (!$name) {
			$errors['name_err'] = 'Vui lòng nhập tên người dùng';
		}

		if (!$address) {
			$errors['address_err'] = 'Vui lòng nhập địa chỉ';
		}

		if (!$phone || !preg_match('/^[0-9]{3}[0-9]{3}[0-9]{4}$/', $phone)) {
			$errors['phone_err'] = 'Vui lòng nhập đúng số điện thoại';
		} elseif ($user_phone) {
			$errors['phone_err'] = "số điện thoại \"$phone\" đã tồn tại!";
		}

		if (!$email) {
			$errors['email_err'] = 'Vui lòng nhập email';
		} elseif ($user_email) {
			$errors['email_err'] = "email \"$email\" đã tồn tại!";
		}

		if (!$password) {
			$errors['password_err'] = 'Vui lòng nhập password';
		}



		if (count($errors) > 0) {
			$this->layout->set('auth_layout');
			$this->view->load('user/add', [
				'errors' => $errors
			]);
		} else {
			$user = $this->model->user->create([
				'name' => $name,
				'address' => $address,
				'phone_number' => $phone,
				'email' => $email,
				'password' => $password,
				'role' => $role
			]);
			if ($user) {
				redirect('user/index');
				var_dump($user);
			} else {
				$this->view->load('user/add', [
					'error_message' => 'Không thêm được user mới'
				]);
			}
		}
	}

	function edit()
	{
		// trang sua san pham
		// hien thi form sua san pham
		$id = getGetParameter('id');
		$user = $this->model->user->find_by_id($id);
		$this->layout->set('auth_layout');
		$this->view->load('user/edit', [
			'user' => $user
		]);
	}

	function update()
	{
		$this->layout->set(null);
		$id = getParameter('id');
		var_dump($id);
		$name = getParameter('name');
		var_dump($name);
		$address = getParameter('address');
		var_dump($address);
		$phone = getParameter('phone_number');
		var_dump($phone);
		
		$role = 2;

		$errors = [];

		if (!$name) {
			$errors['name_err'] = 'Vui lòng nhập tên người dùng';
		}
		if (!$address) {
			$errors['address_err'] = 'Vui lòng nhập địa chỉ';
		}
		if (!$phone) {
			$errors['phone_err'] = 'Vui lòng nhập số điện thoại';
		}
		if (count($errors) > 0) {
			$this->layout->set('auth_layout');
			$this->view->load(base_url('user/edit'), [
				'errors' => $errors
			]);
			// redirect("user/edit?id={$id}");
		} else {
			$user = $this->model->user->update($id, [
				'name' => $name,
				'address' => $address,
				'phone_number' => $phone,
				'role' => $role
			]);

			if ($user) {
				redirect('user/index');
				// var_dump($user);
			} else {
				$this->layout->set('auth_layout');
				$this->view->load('user/edit', [
					'error_message' => 'Cập nhật không thành công'
				]);
			}
		}
	}

	function destroy()
	{
		// xu li xoa san pham
		$id = getParameter('id');
		$this->model->user->destroy($id);
		redirect('user/index');
	}
}
