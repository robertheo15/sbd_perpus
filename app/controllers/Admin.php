<?php

class Admin extends Controller
{
    public function __construct()
    {
        if ($_SESSION['id_role'] != '1') {
            $data['title'] = 'Akses ditolak';
            $this->view('templates/header', $data);
            $this->view('auth/blocked');
            $this->view('templates/footer');
        }
    }
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

        $data = [
            'title' => 'Report',
            'namePicture' => '',
            'titleBook' => '',
            'authorName' => '',
            'yearBook' => '',
            'quantity' => '',
            'bookType' => '',
            'bookPrice' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'judul' => 'Daftar',
                'namePicture' => trim($_POST['namePicture']),
                'titleBook' => trim($_POST['titleBook']),
                'authorName' => trim($_POST['authorName']),
                'yearBook' => trim($_POST['yearBook']),
                'quantity' => trim($_POST['quantity']),
                'bookType' => trim($_POST['bookType']),
                'bookPrice' => trim($_POST['bookPrice']),
            ];

            $nameValidation = "/^[a-zA-Z0-9]*$/";


            //Validate username on letters/numbers
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter username.';
            } else if (!preg_match($nameValidation, $data['username'])) {
                $data['usernameError'] = 'Name can only contain letters and numbers.';
            }
        }
        $this->view('admin/header', $data);
        $this->view('admin/created_book', $data);
        $this->view('admin/footer', $data);
    }

    public function checkSession()
    {
        if (!empty($_SESSION)) {
        }
    }
}
