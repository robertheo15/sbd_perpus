<?php

class Admin extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        // $data['nama'] = $this->model('User_model')->getUser();
        $this->view('admin/header', $data);
        $this->view('admin/index', $data);
        $this->view('admin/footer', $data);
    }

    public function dataMember()
    {
        $data['title'] = 'Data Member';
        // $data['nama'] = $this->model('User_model')->getUser();
        $this->view('admin/header', $data);
        $this->view('admin/dataMember', $data);
        $this->view('admin/footer', $data);
    }

    public function dataBuku()
    {
        $data['title'] = 'Data Buku';
        // $data['nama'] = $this->model('User_model')->getUser();
        $this->view('admin/header', $data);
        $this->view('admin/dataBuku', $data);
        $this->view('admin/footer', $data);
    }

    public function dataPinjam()
    {
        $data['title'] = 'Data Peminjaman';
        // $data['nama'] = $this->model('User_model')->getUser();
        $this->view('admin/header', $data);
        $this->view('admin/dataPeminjaman', $data);
        $this->view('admin/footer', $data);
    }


    public function laporan()
    {
        $data['title'] = 'Report';
        // $data['nama'] = $this->model('User_model')->getUser();
        $this->view('admin/header', $data);
        $this->view('admin/laporan', $data);
        $this->view('admin/footer', $data);
    }

    public function addBook()
    {
        $data['title'] = 'Report';
        // $data['nama'] = $this->model('User_model')->getUser();
        $this->view('admin/header', $data);
        $this->view('admin/created_book', $data);
        $this->view('admin/footer', $data);
    }
}
