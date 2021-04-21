<?php

class Admin extends Controller
{
    public function index()
    {
        $data['judul'] = 'Beranda';
        // $data['nama'] = $this->model('User_model')->getUser();
        $this->view('admin/header', $data);
        $this->view('admin/index', $data);
        $this->view('admin/footer', $data);
    }
}