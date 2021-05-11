<?php

class Profile extends Controller
{
  public function __construct()
  {
    if (empty($_SESSION)) {
      $data['title'] = 'Akses ditolak';
      $this->view('templates/header', $data);
      $this->view('auth/blocked');
      $this->view('templates/footer');
    }
  }

  public function index()
  {
    $data = [
      'title' => 'Profile',
      'usernameError' => '',
      'emailError' => '',
      'passwordError' => '',
      'confirmPasswordError' => '',
      'profile' => json_decode(json_encode($this->model('User_model')->getUser()), true),
    ];
    // var_dump($_SESSION);
    // var_dump($data['profile']);
    // die;
    $this->view('templates/header', $data);
    $this->view('profile/index', $data);
    $this->view('templates/footer');
  }

  public function edit()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Process form
      // Sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'idUser' => $_SESSION['id_user'],
        'firstName' => trim($_POST['firstName']),
        'lastName' => trim($_POST['lastName']),
        'password' => trim($_POST['password']),
        'address' => trim($_POST['address']),
        'phoneNumber' => trim($_POST['phoneNumber']),
        'confirmPassword' => trim($_POST['confirmPassword']),
        'usernameError' => '',
        'emailError' => '',
        'passwordError' => '',
        'confirmPasswordError' => ''
      ];
      // var_dump($data);
      // die;
      $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

      // Validate password on length, numeric values,
      if (empty($data['password'])) {
        $data['passwordError'] = 'Please enter password.';
      } else if (strlen($data['password']) < 6) {
        $data['passwordError'] = 'Password must be at least 8 characters';
      } else if (preg_match($passwordValidation, $data['password'])) {
        $data['passwordError'] = 'Password must be have at least one numeric value.';
      }

      //Validate confirm password
      if (empty($data['confirmPassword'])) {
        $data['confirmPasswordError'] = 'Please enter password.';
      } else {
        if ($data['password'] != $data['confirmPassword']) {
          $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
        }
      }

      // Make sure that errors are empty
      if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

        // Hash password
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        //Register user from model function
        if ($this->model('User_model')->editUser($data)) {
          //Redirect to the login page
          header('location: ' . BASEURL . '/profile/index');
        } else {
          die('Something went wrong.');
        }
      }
    }
    // var_dump($data);
    // die;
    // $this->view('templates/header', $data);
    // $this->view('auth/register', $data);
    // $this->view('templates/footer');
  }


  public function history()
  {
    $data['title'] = 'Riwayat';

    $this->view('templates/header', $data);
    $this->view('profile/history', $data);
    $this->view('templates/footer');
  }
}
