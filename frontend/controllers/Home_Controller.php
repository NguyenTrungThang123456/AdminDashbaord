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
		// $data = [
		// 	'posts' => $this->model->post->find()
		// ];
		// $this->view->load('post/index', $data);
		$products = $this->model->product->find_category();
		$this->view->load('home/index', [
			'products' => $products
		]);
	}

	public function login()
	{
		$this->layout->set('auth_layout');
		$this->view->load('auth/login');
	}

	public function handle_login()
	{
		$this->layout->set(null);

		$username = getPostParameter('username');
		$password = getPostParameter('password');

		var_dump($username);
		var_dump($password);

		// redirect(base_url('home/index'));
	}
}
