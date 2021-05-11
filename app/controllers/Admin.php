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
            'socials' => json_decode(json_encode($this->model('About_model')->getAllSocial()), true),
            'abouts' => json_decode(json_encode($this->model('About_model')->getAllAbout()), true),
        ];



        $this->view('admin/header', $data);
        $this->view('admin/index', $data);
        $this->view('admin/footer', $data);
    }

    public function addAbout()
    {
        $data = [
            'title' => 'Detail About',
        ];
        $this->view('admin/header', $data);
        $this->view('admin/about/created_about', $data);
        $this->view('admin/footer', $data);
    }

    public function detailAbout($id_about)
    {
        $data = [
            'title' => 'Detail About',
            'about' => json_decode(json_encode($this->model('About_model')->getAboutById($id_about)), true)
        ];

        // $_POST['id_social'] = $id_social;
        $this->view('admin/header', $data);
        $this->view('admin/about/edit_about', $data);
        $this->view('admin/footer', $data);
    }

    public function editAbout()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                // 'title' => 'Tambah Buku',
                'idAbout' => trim($_POST['idAbout']),
                'info' => trim($_POST['info']),
                'address' => trim($_POST['address']),
                'email' => trim($_POST['email']),
                'phone' => trim($_POST['phone']),

            ];
            if ($this->model('About_model')->updateAbout($data) > 0) {
                Flasher::setFlash('berhasil', 'diubah', 'success', 'Data About');
                header('Location: ' . BASEURL . '/admin');
                exit;
            } else {
                Flasher::setFlash('gagal', 'diubah', 'danger', 'Data About');
                header('Location: ' . BASEURL . '/admin');
                exit;
            }
        }
    }

    public function storeAbout()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'info' => trim($_POST['info']),
                'address' => trim($_POST['address']),
                'email' => trim($_POST['email']),
                'phone' => trim($_POST['phone']),
            ];
        }

        if ($this->model('About_model')->addAbout($data) > 0) {
            Flasher::setFlash('berhasil', 'ditambah', 'success', 'Data About');
            header('Location: ' . BASEURL . '/admin');
            exit();
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'Data About');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    public function deleteAbout($id_about)
    {
        if ($this->model('About_model')->deleteAbout($id_about) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'Data About');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'Data About');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    public function addSocial()
    {
        $data = [
            'title' => 'Detail About',
        ];
        $this->view('admin/header', $data);
        $this->view('admin/social/created_social', $data);
        $this->view('admin/footer', $data);
    }

    public function detailSocial($id_social)
    {
        $data = [
            'title' => 'Detail Social',
            'social' => json_decode(json_encode($this->model('About_model')->getSocialById($id_social)), true)
        ];
        // $_POST['id_social'] = $id_social;
        $this->view('admin/header', $data);
        $this->view('admin/social/edit_social', $data);
        $this->view('admin/footer', $data);
    }

    public function editSocial()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                // 'title' => 'Tambah Buku',
                'idSocial' => trim($_POST['idSocial']),
                'url' => trim($_POST['url']),
                'aClass' => trim($_POST['aClass']),
                'iconClass' => trim($_POST['iconClass']),
                'username' => trim($_POST['username']),

            ];

            if ($this->model('About_model')->updateSocial($data) > 0) {
                Flasher::setFlash('berhasil', 'diubah', 'success', 'Data Buku');
                header('Location: ' . BASEURL . '/admin');
                exit;
            } else {
                Flasher::setFlash('gagal', 'diubah', 'danger', 'Data Buku');
                header('Location: ' . BASEURL . '/admin');
                exit;
            }
        }
    }

    public function storeSocial()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'url' => trim($_POST['url']),
                'aClass' => trim($_POST['aClass']),
                'iconClass' => trim($_POST['iconClass']),
                'username' => trim($_POST['username']),
            ];
        }

        if ($this->model('About_model')->addSocial($data) > 0) {
            Flasher::setFlash('berhasil', 'ditambah', 'success', 'Data Social');
            header('Location: ' . BASEURL . '/admin');
            exit();
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'Data Social');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    public function deleteSocial($id_social)
    {
        if ($this->model('About_model')->deleteSocial($id_social) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'Data Social');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'Data Buku');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    public function dataMember()
    {
        $data['title'] = 'Data Member';
        $data['users'] = json_decode(json_encode($this->model('User_model')->getAllUsers()), true);

        $this->view('admin/header', $data);
        $this->view('admin/dataMember', $data);
        $this->view('admin/footer', $data);
    }

    public function dataBuku()
    {
        $data['title'] = 'Data Buku';
        $data['books'] = json_decode(json_encode($this->userModel->getAllBook()), true);

        $this->view('admin/header', $data);
        $this->view('admin/dataBuku', $data);
        $this->view('admin/footer');
    }

    public function dataPinjam()
    {
        $data = [
            'title' => 'Data Peminjaman',
            'books' => json_decode(json_encode($this->model('Report_model')->getAllRentLate()), true),
        ];

        $this->view('admin/header', $data);
        $this->view('admin/dataPeminjaman', $data);
        $this->view('admin/footer', $data);
    }

    public function laporan()
    {
        $data = [
            'title' => 'Report',
            'reports' => json_decode(json_encode($this->model('Report_model')->getReport()), true),
        ];

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
        $this->view('admin/book/created_book', $data);
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


                if (move_uploaded_file($file['fileTmpPath'], $destPath)) {
                    echo "success";
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
            'books' => json_decode(json_encode($this->model('Book_model')->getBookById($id_book)), true)
        ];

        // $_POST['id_book'] = $id_book;
        $this->view('admin/header', $data);
        $this->view('admin/book/edit_book', $data);
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
