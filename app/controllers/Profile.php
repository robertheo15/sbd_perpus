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
    $data['title'] = 'Profile';

    $this->view('templates/header', $data);
    $this->view('profile/index', $data);
    $this->view('templates/footer');
  }

  public function history()
  {
    $data['title'] = 'Riwayat';

    $this->view('templates/header', $data);
    $this->view('profile/history', $data);
    $this->view('templates/footer');
  }
}
