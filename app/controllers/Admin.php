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
        $data = [
            'title' => 'Dashboard',
            'totalMember' => json_decode(json_encode($this->model('User_model')->getTotalUsers()), true),
            'totalBook' => json_decode(json_encode($this->userModel->getTotalBooks()), true),
        ];

        $this->view('admin/header', $data);
        $this->view('admin/index', $data);
        $this->view('admin/footer', $data);
    }

    public function dataMember()
    {
        $data['title'] = 'Data Member';
        $data['users'] = json_decode(json_encode($this->model('User_model')->getAllUsers()), true);;;

        $this->view('admin/header', $data);
        $this->view('admin/dataMember', $data);
        $this->view('admin/footer', $data);
    }

    public function dataBuku()
    {
        $data['title'] = 'Data Buku';
        $data['books'] = json_decode(json_encode($this->userModel->getAllBook()), true);;

        $this->view('admin/header', $data);
        $this->view('admin/dataBuku', $data);
        $this->view('admin/footer');
    }

    public function dataPinjam()
    {
        $data['title'] = 'Data Peminjaman';

        $this->view('admin/header', $data);
        $this->view('admin/dataPeminjaman', $data);
        $this->view('admin/footer', $data);
    }


    public function laporan()
    {
        $data['title'] = 'Report';

        $this->view('admin/header', $data);
        $this->view('admin/laporan', $data);
        $this->view('admin/footer', $data);
    }

    public function addBook()
    {
        $data = [
            'title' => 'Tambah Buku',
        ];
        $this->view('admin/header', $data);
        $this->view('admin/created_book', $data);
        $this->view('admin/footer', $data);
    }

    public function store()
    {

        $data = [
            'title' => 'Tambah Buku',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'title' => 'Tambah Buku',
                'namePicture' => trim($_FILES['formFile']['name']),
                'titleBook' => trim($_POST['titleBook']),

                'authorName' => trim($_POST['authorName']),
                'yearBook' => trim($_POST['yearBook']),
                'quantity' => trim($_POST['quantity']),
                'bookType' => trim($_POST['bookType']),
                'bookPrice' => trim($_POST['bookPrice']),
            ];
            $file = [
                'fileTmpPath' => $_FILES['formFile']['tmp_name'],
                'fileSize' => $_FILES['formFile']['size'],
                'fileType' => $_FILES['formFile']['type'],
                'fileNameCmps' => '',
                'fileExtension' => '',
            ];

            $file['fileNameCmps'] = explode(".", $data['namePicture']);
            $file['fileExtension'] = strtolower(end($file['fileNameCmps']));

            $data['namePicture'] = md5(time() . $data['namePicture']) . '.' . $file['fileExtension'];

            $allowedfileExtensions = array('jpg', 'gif', 'png');

            if (in_array($file['fileExtension'], $allowedfileExtensions)) {
                // directory in which the uploaded file will be moved
                //BASEURL
                $uploadFileDir = $_SERVER["DOCUMENT_ROOT"] . '/sbd_perpus/public/uploads/';
                $destPath = $uploadFileDir . $data['namePicture'];

                // var_dump($destPath);
                // die;
                if (move_uploaded_file($file['fileTmpPath'], $destPath)) {
                    echo "success";
                    // die;
                }
            }
        }

        if ($this->userModel->addDataBook($data) > 0) {
            Flasher::setFlash('berhasil', 'ditambah', 'success', 'Data Buku');
            header('Location: ' . BASEURL . '/admin/dataBuku');
            exit();
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'Data Buku');
            header('Location: ' . BASEURL . '/admin/dataBuku');
            exit;
        }
    }

    public function detail($id_book)
    {
        $data = [
            'title' => 'Ubah Buku',
        ];
        $data['books'] = json_decode(json_encode($this->model('Book_model')->getBookById($id_book)), true);;
        $_POST['id_book'] = $id_book;
        $this->view('admin/header', $data);
        $this->view('admin/edit_book', $data);
        $this->view('admin/footer', $data);
    }

    public function edit()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'title' => 'Tambah Buku',
                'namePicture' => trim($_FILES['formFile']['name']),
                'idBook' => trim($_POST['idBook']),
                'titleBook' => trim($_POST['titleBook']),
                'authorName' => trim($_POST['authorName']),
                'yearBook' => trim($_POST['yearBook']),
                'quantity' => trim($_POST['quantity']),
                'bookType' => trim($_POST['bookType']),
                'bookPrice' => trim($_POST['bookPrice']),
            ];
            $file = [
                'fileTmpPath' => $_FILES['formFile']['tmp_name'],
                'fileSize' => $_FILES['formFile']['size'],
                'fileType' => $_FILES['formFile']['type'],
                'fileNameCmps' => '',
                'fileExtension' => '',
            ];

            $file['fileNameCmps'] = explode(".", $data['namePicture']);
            $file['fileExtension'] = strtolower(end($file['fileNameCmps']));

            $data['namePicture'] = md5(time() . $data['namePicture']) . '.' . $file['fileExtension'];

            $allowedfileExtensions = array('jpg', 'gif', 'png');


            if (in_array($file['fileExtension'], $allowedfileExtensions)) {
                // directory in which the uploaded file will be moved
                //BASEURL
                $uploadFileDir = $_SERVER["DOCUMENT_ROOT"] . '/sbd_perpus/public/uploads/';
                $destPath = $uploadFileDir . $data['namePicture'];

                if (move_uploaded_file($file['fileTmpPath'], $destPath)) {
                    echo "success";
                }

                if ($this->model('Book_model')->updateDataBook($data) > 0) {
                    Flasher::setFlash('berhasil', 'diubah', 'success', 'Data Buku');
                    header('Location: ' . BASEURL . '/admin/dataBuku');
                    exit;
                } else {
                    Flasher::setFlash('gagal', 'diubah', 'danger', 'Data Buku');
                    header('Location: ' . BASEURL . '/admin/dataBuku');
                    exit;
                }
            }
        }
    }


    public function delete($id_book)
    {
        if ($this->model('Book_model')->deleteDataBook($id_book) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'Data Buku');
            header('Location: ' . BASEURL . '/admin/dataBuku');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'Data Buku');
            header('Location: ' . BASEURL . '/admin/dataBuku');
            exit;
        }
    }
}
