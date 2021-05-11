<?php
class Order_model
{
  private $table = 'orders';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getOrder($carts)
  {
    $data = [];
    foreach ($carts  as $cart) {
      $query = "SELECT * FROM books WHERE id_book=$cart";
      $this->db->query($query);
      array_push($data, $this->db->single());
    }
    return $data;
  }

  // $this->db->query($query);
  // return $this->db->single();
  // $this->db->query($query);
  // return $this->db->resultSet();

  // $this->db->query($query);
  // return $this->db->single();
  // return $this->db->resultSet();
  // }

  public function setOrder($id_user)
  {
    $query =  "INSERT INTO $this->table (id_order, id_user)
                 VALUES ('', $id_user);";
    $this->db->query($query);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function setOrderDetail($carts, $idOrder)
  {
    foreach ($carts as $cart) {
      $query = "INSERT INTO order_detail (
        id_order_detail, 
        id_order, 
        id_book, 
        date_from, 
        date_return, 
        date_to, 
        status)
      VALUES (
        '', 
        " . $idOrder['id_order'] . ", 
        $cart,
        NOW(),
        '',
        NOW()+ INTERVAL 7 DAY,
        1);";
      $this->db->query($query);
      $this->db->execute();
    }
    return $this->db->rowCount();
  }

  public function getOrderId()
  {
    $query =  "SELECT MAX(id_order) as id_order from orders";

    $this->db->query($query);
    return $this->db->single();
  }
}
