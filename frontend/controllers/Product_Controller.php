<?php
class Product_Controller extends Base_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->layout->set('auth_layout');
		// trang danh sach san pham
		$products = $this->model->product->find();
		$this->view->load('product/index', [
			'products' => $products
		]);
	}

	function show()
	{
		// trang chi tiet san pham
		$this->layout->set(null);
		$id = getParameter('id');
		$data = [
			'product' => $this->model->product->find_by_id($id)
		];
		$this->view->load('product/show', $data);
	}

	function add()
	{
		// trang them san pham
		// hien thi form them san pham
		$this->layout->set('auth_layout');
		$this->view->load('product/add');
	}

	function store()
	{
		// xu li them san pham
		$name = getParameter('name');
		$price = getParameter('price');
		$quantity = getParameter('quantity');
		$category = getParameter('category');
		$brand = getParameter('brand');

		// if ($category == 'VEST') {
		// 	$category = 1;
		// } elseif ($category == 'SƠ MI') {
		// 	$category = 2;
		// } elseif ($category == 'CARAVAT') {
		// 	$category = 3;
		// } elseif ($category == 'NƠ') {
		// 	$category = 4;
		// } elseif ($category == 'KHĂN CÀI VEST') {
		// 	$category = 5;
		// } elseif ($category == 'GIÀY DA') {
		// 	$category = 6;
		// } elseif ($category == 'ÁO DA') {
		// 	$category = 7;
		// } elseif ($category == 'QUẦN ÂU') {
		// 	$category = 8;
		// }

		// if ($brand == 'Adam') {
		// 	$brand = 1;
		// }

		$errors = [];
		// if (!$name) {
		// 	$errors['name'] = 'Vui long nhap name';
		// }
		// if (!$price) {
		// 	$errors['price'] = 'Vui long nhap price';
		// }

		if (count($errors) > 0) {
			$this->view->load('product/add', [
				'errors' => $errors
			]);
		} else {
			$product = $this->model->product->create([
				'name' => $name,
				'price' => $price,
				// 'image' => $ImageName,
				'quantity' => $quantity,
				'categories_id' => $category,
				'brand_id' => $brand
			]);

			if ($product) {
				redirect('product/index');
			} else {
				$this->view->load('product/add', [
					'error_message' => 'Khong them duoc'
				]);
			}
		}
	}

	function edit()
	{
		// trang sua san pham
		// hien thi form sua san pham
		$id = getParameter('id');
		$product = $this->model->product->find_by_id($id);
		$this->layout->set('auth_layout');
		$this->view->load('product/edit', [
			'product' => $product
		]);
	}

	function update()
	{
		// xu li sua san pham
		$id = getParameter('id');
		$name = getParameter('name');
		$price = getParameter('price');
		$img = $_FILES['image']['tmp_name'];
		$image = file_get_contents($img);
		$quantity = getParameter('quantity');
		$category = getParameter('category');
		$brand = getParameter('brand');
		// if ($category == 'VEST') {
		// 	$category = 1;
		// } elseif ($category == 'SƠ MI') {
		// 	$category = 2;
		// } elseif ($category == 'CARAVAT') {
		// 	$category = 3;
		// } elseif ($category == 'NƠ') {
		// 	$category = 4;
		// } elseif ($category == 'KHĂN CÀI VEST') {
		// 	$category = 5;
		// } elseif ($category == 'GIÀY DA') {
		// 	$category = 6;
		// } elseif ($category == 'ÁO DA') {
		// 	$category = 7;
		// } elseif ($category == 'QUẦN ÂU') {
		// 	$category = 8;
		// }

		// if ($brand == 'Adam') {
		// 	$brand = 1;
		// }


		$errors = [];

		if (count($errors > 0)) {
			$this->view->load('product/edit', [
				'errors' => $errors
			]);
		} else {
			$product = $this->model->product->update($id, [
				'name' => $name,
				'price' => $price,
				'image' => $image,
				'quantity' => $quantity,
				'categories_id' => $category,
				'brand' => $brand
			]);

			if ($product) {
				$this->view->load('product/index');
			} else {
				$this->layout->set('auth_layout');
				$this->view->load('product/edit', [
					'error_message' => 'Cập nhật không thành công'
				]);
			}
		}
	}

	function destroy()
	{
		// xu li xoa san pham
		$id = getParameter('id');
		$this->model->product->destroy($id);
		redirect('product/index');
	}
}
