<?php
class Order_Controller extends Base_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        // trang danh sach san pham
        $orders = $this->model->order->find();
        $this->layout->set('auth_layout');
        $this->view->load('order/index', [
            'orders' => $orders
        ]);
    }

    function show()
    {
        $this->layout->set('auth_layout');
        $id = getParameter('id');
        $data = [
            'order' => $this->model->order->find_by_id($id)
        ];
        $this->view->load('order/show', $data);
    }
    function edit()
    {
        // trang sua san pham
        // hien thi form sua san pham
        $id = getGetParameter('id');
        $orders = $this->model->order->find_by_id($id);
        $this->layout->set('auth_layout');
        $this->view->load('order/edit', [
            'orders' => $orders
        ]);
    }
    function update()
    {
        $this->layout->set(null);

        $id = getParameter('id');
        $status = getParameter('status');
        $errors = [];

        // if (!$name) {
        // 	$errors['name_err'] = 'Vui lòng nhập tên đối tác';
        // }
        // if (!$address) {
        // 	$errors['address_err'] = 'Vui long nhap địa chỉ';
        // }
        // if (!$phone_number) {
        // 	$errors['phone_err'] = 'Vui lòng nhập số điện thoại';
        // }
        // // if (!$email) {
        // // 	$errors['email_err'] = 'Vui lòng nhập email';
        // // }
        // if (!$area) {
        // 	$errors['area_err'] = 'Vui lòng chọn khu vực hoạt động';
        // }

        if (count($errors) > 0) {
            $this->layout->set('auth_layout');
            $this->view->load(('order/edit'), [
                'errors' => $errors
            ]);
        } else {
            $order = $this->model->order->update($id, [
                'status' => $status
            ]);

            if ($order) {
                redirect('order/index');
            } else {
                $this->layout->set('auth_layout');
                $this->view->load('order/edit', [
                    'error_message' => 'Cập nhật không thành công'
                ]);
            }
        }
    }
}
