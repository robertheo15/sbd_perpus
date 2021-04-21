<?php

class Book extends Controller
{
  public function index()
  {
    $data['judul'] = 'Buku';
    // $data['nama'] = $this->model('User_model')->getUser();
    $this->view('templates/header', $data);
    $this->view('home/search', $data);
    $this->view('book/index', $data);
    $this->view('templates/footer');
  }

  // public function detail($id)
  // {
  //   $data['judul'] = 'Detail Mahasiswa';
  //   $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
  //   $this->view('templates/header', $data);
  //   $this->view('mahasiswa/detail', $data);
  //   $this->view('templates/footer');
  // }
}
