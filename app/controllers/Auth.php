<?php
class Auth extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('User_model');
  }

  public function register()
  {
    $data = [
      'title' => 'Daftar',
      'username' => '',
      'email' => '',
      'password' => '',
      'firstName' => '',
      'lastName' => '',
      'confirmPassword' => '',
      'usernameError' => '',
      'emailError' => '',
      'passwordError' => '',
      'confirmPasswordError' => ''
    ];
    if (!empty($_SESSION)) {
      $data['title'] = 'Akses ditolak';
      $this->view('templates/header', $data);
      $this->view('auth/blocked');
      $this->view('templates/footer');
    } else {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'title' => 'Daftar',
          'username' => trim($_POST['username']),
          'email' => trim($_POST['email']),
          'firstName' => trim($_POST['firstName']),
          'lastName' => trim($_POST['lastName']),
          'password' => trim($_POST['password']),
          'confirmPassword' => trim($_POST['confirmPassword']),
          'usernameError' => '',
          'emailError' => '',
          'passwordError' => '',
          'confirmPasswordError' => ''
        ];

        $nameValidation = "/^[a-zA-Z0-9]*$/";
        $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

        //Validate username on letters/numbers
        if (empty($data['username'])) {
          $data['usernameError'] = 'Please enter username.';
        } else if (!preg_match($nameValidation, $data['username'])) {
          $data['usernameError'] = 'Name can only contain letters and numbers.';
        }

        //Validate email
        if (empty($data['email'])) {
          $data['emailError'] = 'Please enter email address.';
        } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
          $data['emailError'] = 'Please enter the correct format.';
        } else {
          //Check if email exists.
          if ($this->userModel->findUserByEmail($data['email'])) {
            $data['emailError'] = 'Email is already taken.';
          }
        }

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
          if ($this->userModel->register($data)) {
            //Redirect to the login page
            header('location: ' . BASEURL . '/auth/login');
          } else {
            die('Something went wrong.');
          }
        }
      }
      $this->view('templates/header', $data);
      $this->view('auth/register', $data);
      $this->view('templates/footer');
    }
  }

  public function login()
  {
    if (!empty($_SESSION)) {
      $data['title'] = 'Akses ditolak';
      $this->view('templates/header', $data);
      $this->view('auth/blocked');
      $this->view('templates/footer');
    } else {
      //Check for post
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Sanitize post data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
          'title' => 'Masuk',
          'id_role' => '',
          'username' => trim($_POST['username']),
          'password' => trim($_POST['password']),
          'usernameError' => '',
          'passwordError' => '',
        ];

        //Validate username
        if (empty($data['username'])) {
          $data['usernameError'] = 'Please enter a username.';
        }

        //Validate password
        if (empty($data['password'])) {
          $data['passwordError'] = 'Please enter a password.';
        }

        //Check if all errors are empty
        if (empty($data['usernameError']) && empty($data['passwordError'])) {
          $loggedInUser = $this->userModel->login($data['username'], $data['password']);
          if ($loggedInUser) {
            $this->createUserSession($loggedInUser);
          } else {
            $data['passwordError'] = 'Password or username is incorrect. Please try again.';
            $this->view('templates/header', $data);
            $this->view('auth/login', $data);
            $this->view('templates/footer');
          }
        }
      } else {
        $data = [
          'title' => 'Masuk',
          'username' => '',
          'password' => '',
          'usernameError' => '',
          'passwordError' => ''
        ];
      }
      $this->view('templates/header', $data);
      $this->view('auth/login', $data);
      $this->view('templates/footer');
    }
  }

  public function createUserSession($user)
  {
    $_SESSION['id_user'] = $user->id_user;
    $_SESSION['id_role'] = $user->id_role;
    $_SESSION['username'] = $user->username;
    $_SESSION['email'] = $user->email;

    if ($_SESSION['id_role'] == '1') {
      header('location:' . BASEURL . '/admin');
    } else {
      header('location:' . BASEURL . '/index');
    }
  }

  public function logout()
  {
    unset($_SESSION['id_user']);
    unset($_SESSION['id_role']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['flash']);
    header('location:' . BASEURL . '/index');
  }
}
