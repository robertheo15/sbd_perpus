<?php

class Home extends Controller
{
  public function index()
  {
    $data['title'] = 'Beranda';
    $this->view('templates/header', $data);
    $this->view('home/carousell', $data);
    $this->view('home/welcome', $data);
    $this->view('home/search', $data);
    $this->view('home/index', $data);
    $this->view('home/social', $data);
    $this->view('templates/footer');
  }
}
