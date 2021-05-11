<?php
class Report_model
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllRentLate()
  {
    $query = "SELECT
              users.first_name,
              users.last_name,
              users.phone_number,
              order_detail.id_book,
              order_detail.date_to
            FROM users
            JOIN orders
              ON users.id_user = orders.id_user
            JOIN order_detail
              ON order_detail.id_order = orders.id_order;";
    $this->db->query($query);
    return $this->db->resultSet();
  }

  public function getReport()
  {
    $query = "SELECT
                  users.first_name,
                  users.last_name,
                  order_detail.id_book,
                  books.title_book,
                  order_detail.date_from,
                  order_detail.date_to  
              FROM users
                JOIN orders
                  ON users.id_user = orders.id_user
                JOIN order_detail
                  ON order_detail.id_order = orders.id_order
                JOIN books
                  ON order_detail.id_book = books.id_book;";
    $this->db->query($query);
    return $this->db->resultSet();
  }

  public function getHistory()
  {
    $query = "SELECT
                  orders.id_order,
                  users.first_name,
                  users.last_name,
                  books.title_book,
                  order_detail.date_from,
                  order_detail.date_to , 
                  order_detail.date_return
              FROM users
                JOIN orders
                  ON users.id_user = orders.id_user
                JOIN order_detail
                  ON order_detail.id_order = orders.id_order
                JOIN books
                  ON order_detail.id_book = books.id_book
                WHERE users.id_user = " . $_SESSION['id_user'] . ";";
    $this->db->query($query);
    return $this->db->resultSet();
  }
}
