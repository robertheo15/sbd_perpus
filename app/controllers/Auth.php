<?php

class Auth extends Controller
{
  public function index()
  {
    $data['judul'] = 'Login';
    // $data['nama'] = $this->model('User_model')->getUser();
    $this->view('templates/header', $data);
    $this->view('auth/login', $data);
    $this->view('templates/footer');
  }
}
