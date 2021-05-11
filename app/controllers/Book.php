<?php

class Book extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Book_model');
  }
  public function index()
  {
    $data = [
      'title' => 'Buku',
      'books' => json_decode(json_encode($this->userModel->getAllBook()), true),
      'abouts' => json_decode(json_encode($this->model('About_model')->getAllAbout()), true)
    ];


    $this->view('templates/header', $data);
    $this->view('home/search', $data);
    $this->view('book/index', $data);
    $this->view('templates/footer', $data);
  }

  public function detail($id_book)
  {
    $data = [
      'title' => 'Buku',
      'books' => json_decode(json_encode($this->userModel->getBookById($id_book)), true),
      'abouts' => json_decode(json_encode($this->model('About_model')->getAllAbout()), true)
    ];

    $this->view('templates/header', $data);
    $this->view('book/detail', $data);
    $this->view('templates/footer', $data);
  }
}
