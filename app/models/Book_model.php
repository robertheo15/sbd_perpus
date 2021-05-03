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

  public function getBookById($id_book)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_book=:id_book');
    $this->db->bind('id_book', $id_book);
    return $this->db->single();
  }

  public function addDataBook($data)
  {

    $query = "INSERT INTO " . $this->table . "
                  (id_book, name_picture, title_book, author_name, year_book, quantity, book_type, book_price)
              VALUES ('', '" .  $data['namePicture'] . "', :titleBook, :authorName, :yearBook, :quantity, :bookType, :bookPrice)";


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

  public function deleteDataBook($id_book)
  {
    $query = "DELETE FROM " . $this->table . " WHERE id_book=" . $id_book . "";
    $this->db->query($query);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function updateDataBook($data)
  {
    $query = "UPDATE  " . $this->table . " SET 
        name_picture='" . $data['namePicture'] . "',
        title_book=:titleBook,
        author_name=:authorName,
        year_book=:yearBook,
        quantity=:quantity,
        book_type=:bookType,
        book_price=:bookPrice
      WHERE id_book =:idBook;
      ";

    $this->db->query($query);
    $this->db->bind('idBook', $data['idBook']);
    $this->db->bind('titleBook', $data['titleBook']);
    $this->db->bind('authorName', $data['authorName']);
    $this->db->bind('yearBook', $data['yearBook']);
    $this->db->bind('quantity', $data['quantity']);
    $this->db->bind('bookType', $data['bookType']);
    $this->db->bind('bookPrice', $data['bookPrice']);

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
