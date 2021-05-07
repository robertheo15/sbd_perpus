<?php
class Order extends Controller
{
  // public function __construct()
  // {
  //   if (empty($_SESSION)) {
  //     $data['title'] = 'Akses ditolak';
  //     $this->view('templates/header', $data);
  //     $this->view('auth/blocked');
  //     $this->view('templates/footer');
  //   }
  //    $this->userModel = $this->model('Order_model');
  // }

  public function index()
  {
    $data['title'] = 'Checkout';

    $this->view('templates/header', $data);
    $this->view('order/index', $data);
    $this->view('templates/footer');
  }

  public function checkout()
  {
    $carts = ['72', '73'];


    var_dump($this->model('Order_model')->setOrder($_SESSION['id_user']));
    $idOrder = json_decode(json_encode($this->model('Order_model')->getOrderId()), true);
    var_dump($this->model('Order_model')->setOrderDetail($carts, $idOrder));

    die;
  }
}
