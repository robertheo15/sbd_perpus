<?php

class Admin extends Controller
{
    public function __construct()
    {
        if ($_SESSION['id_role'] != '1') {
            header('location:' . BASEURL . '/index');
        }
        $this->userModel = $this->model('Book_model');
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
        $data['books'] = json_decode(json_encode($this->model('Book_model')->getAllBook()), true);

        $this->view('admin/header', $data);
        $this->view('admin/dataBuku', $data);
        $this->view('admin/footer');
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
            //'namePicture' => trim($_POST['namePicture']),
            $data = [
                'judul' => 'Daftar',

                'titleBook' => trim($_POST['titleBook']),
                'authorName' => trim($_POST['authorName']),
                'yearBook' => trim($_POST['yearBook']),
                'quantity' => trim($_POST['quantity']),
                'bookType' => trim($_POST['bookType']),
                'bookPrice' => trim($_POST['bookPrice']),
            ];

            var_dump($data);
            die;
            $nameValidation = "/^[a-zA-Z0-9]*$/";


            // //Validate username on letters/numbers
            // if (empty($data['username'])) {
            //     $data['usernameError'] = 'Please enter username.';
            // } else if (!preg_match($nameValidation, $data['username'])) {
            //     $data['usernameError'] = 'Name can only contain letters and numbers.';
            // }
        }
        $this->view('admin/header', $data);
        $this->view('admin/created_book', $data);
        $this->view('admin/footer', $data);
    }

    public function delete($id_book)
    {
        if ($this->model('Book_model')->deleteDataBook($id_book) > 0) {
            // Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/admin/dataBuku');
            exit;
        } else {
            // Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/admin/dataBuku');
            exit;
        }
    }
}
