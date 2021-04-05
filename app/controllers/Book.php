<?php

class Book extends Controller
{
  public function index()
  {
    $data['judul'] = 'Buku';
    $data['nama'] = $this->model('User_model')->getUser();
    $this->view('templates/header', $data);
    $this->view('book/index', $data);
    $this->view('templates/footer');
  }
}
