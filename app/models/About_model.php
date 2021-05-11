<?php
class About_model
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

  public function getSocialById($id_social)
  {
    $query = "SELECT * FROM social WHERE id_social=$id_social";
    $this->db->query($query);

    return $this->db->single();
  }

  public function addSocial($data)
  {

    $query = "INSERT INTO social 
                  (id_social, url, a_class, icon_class, username)
              VALUES 
              ('', 
              '" . $data['url'] . "', 
              '" . $data['aClass'] . "', 
              '" . $data['iconClass'] . "',
              '" . $data['username'] . "')";
    $this->db->query($query);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deleteSocial($id_social)
  {
    $query = "DELETE FROM social WHERE id_social= $id_social ";
    $this->db->query($query);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function updateSocial($data)
  {
    $query = "UPDATE social  SET 
        url='" . $data['url'] . "',
        a_class='" . $data['aClass'] . "',
        icon_class='" . $data['iconClass'] . "',
        username='" . $data['username'] . "'
      WHERE id_social= " . $data['idSocial'] . ";";

    $this->db->query($query);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getAllAbout()
  {
    $query = "SELECT * FROM about";
    $this->db->query($query);
    return $this->db->resultSet();
  }

  public function getAboutById($id_about)
  {
    $query = "SELECT * FROM about WHERE id_about=$id_about";
    $this->db->query($query);
    return $this->db->single();
  }

  public function addAbout($data)
  {
    $query = "INSERT INTO about 
                  (id_about, info, address, email, phone)
              VALUES 
              ('', 
              '" . $data['info'] . "', 
              '" . $data['address'] . "', 
              '" . $data['email'] . "',
              '" . $data['phone'] . "')";
    $this->db->query($query);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deleteAbout($id_about)
  {
    $query = "DELETE FROM about WHERE id_about= $id_about ";
    $this->db->query($query);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function updateAbout($data)
  {
    $query = "UPDATE about  SET 
        info='" . $data['info'] . "',
        address='" . $data['address'] . "',
        email='" . $data['email'] . "',
        phone='" . $data['phone'] . "'
      WHERE id_about= " . $data['idAbout'] . ";";

    // var_dump($query);
    // die;

    $this->db->query($query);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
