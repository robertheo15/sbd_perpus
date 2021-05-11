<?php
class Order extends Controller
{
  public function __construct()
  {
    if (empty($_SESSION['id_user']) && empty($_SESSION['myArray'])) {
      $data = [
        'title' => 'Akses ditolak',
        'usernameError' => '',
        'emailError' => '',
        'passwordError' => '',
      ];
      unset($_SESSION);
      $this->view('templates/header', $data);
      $this->view('auth/login', $data);
      $this->view('templates/footer');
    }
    $this->userModel = $this->model('Order_model');
  }

  public function index()
  {

    $data = [
      'title' => 'Checkout',
      'carts' => $_SESSION['myArray']
    ];
    if (empty($_SESSION['myArray'])) {
      header('location:' . BASEURL . '/book');
    } else {
      $data['carts'] = json_decode(json_encode($this->model('Order_model')->getOrder($data['carts'])), true);

      $this->view('templates/header', $data);
      $this->view('order/index', $data);
      $this->view('templates/footer');
    }
  }

  public function checkout()
  {

    if (empty($_SESSION['myArray'])) {
      header('location:' . BASEURL . '/book');
    } else {
      $carts = $_SESSION['myArray'];
      $this->model('Order_model')->setOrder($_SESSION['id_user']);
      $idOrder = json_decode(json_encode($this->model('Order_model')->getOrderId()), true);
      $this->model('Order_model')->setOrderDetail($carts, $idOrder);
      unset($_SESSION['myArray']);
      header('Location: ' . BASEURL . '/profile/history');
    }
  }

  public function addToCart()
  {
    var_dump($_SESSION);
    if (isset($_POST['id_book'])) {
      if (!isset($_SESSION['myArray'])) {
        $_SESSION['myArray'] = array();
      }
      if (sizeof($_SESSION['myArray']) < 2) {
        $_SESSION['myArray'][] = $_POST['id_book'];
        header('location:' . BASEURL . '/book/detail/' . $_POST['id_book']);
      }
      if (sizeof($_SESSION['myArray']) > 2) {
        echo 'maximal peminjaman 2 buku';
      }
    }
  }
}
