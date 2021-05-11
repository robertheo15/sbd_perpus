<?php
class Order_model
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllSocial()
  {
    $query = "SELECT * FROM social";
    $this->db->query($query);
    return $this->db->resultSet();
  }

  public function addSocial($data)
  {

    $query = "INSERT INTO  $this->table 
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

  public function deleteSocial($id_book)
  {
    $query = "DELETE FROM $this->table WHERE id_book= $id_book ";
    $this->db->query($query);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function updateSocial($data)
  {
    $query = "UPDATE   $this->table  SET 
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

  public function getAllAbout()
  {
    $query = "SELECT * FROM about";
    $this->db->query($query);
    return $this->db->resultSet();
  }

  public function addAbout($data)
  {

    $query = "INSERT INTO  $this->table 
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

  public function deleteAbout($id_book)
  {
    $query = "DELETE FROM $this->table WHERE id_book= $id_book ";
    $this->db->query($query);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function updateAbout($data)
  {
    $query = "UPDATE   $this->table  SET 
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
}
