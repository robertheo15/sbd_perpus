<?php
class Book_model
{
  private $table = 'books';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllBook()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getBookById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function addDataBook($data)
  {

    $query = "INSERT INTO " . $this->table . "
                  (id_book, name_picture, title_book, author_name, year_book, quantity, book_type, book_price)
              VALUES ('', '', :titleBook, :authorName, :yearBook, :quantity, :bookType, :bookPrice)";


    $this->db->query($query);
    $this->db->bind('titleBook', $data['titleBook']);
    $this->db->bind('authorName', $data['authorName']);
    $this->db->bind('yearBook', $data['yearBook']);
    $this->db->bind('quantity', $data['quantity']);
    $this->db->bind('bookType', $data['bookType']);
    $this->db->bind('bookPrice', $data['bookPrice']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deleteDataBook($id)
  {
    $query = "DELETE FROM " . $this->table . " WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function updateDataBook($data)
  {
    $query = "UPDATE  " . $this->table . " SET 
                    nama= :nama,
                    nim= :nim, 
                    email= :email, 
                    jurusan=:jurusan 
                    WHERE id= :id";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nim', $data['nim']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function searchDataBook()
  {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }
}
