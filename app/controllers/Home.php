<?php

class Home extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Beranda',
      'socials'  => json_decode(json_encode($this->model('About_model')->getAllSocial()), true),
      'abouts' => json_decode(json_encode($this->model('About_model')->getAllAbout()), true),
      'books' => json_decode(json_encode($this->model('Book_model')->getAllBook()), true)
    ];



    $this->view('templates/header', $data);
    $this->view('home/carousell', $data);
    $this->view('home/welcome', $data);
    $this->view('home/search', $data);
    $this->view('home/index', $data);
    $this->view('home/social', $data);
    $this->view('templates/footer', $data);
  }
}
