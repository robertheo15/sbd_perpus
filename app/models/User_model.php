<?php
class User_model
{
    private $table = 'users';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($data)
    {
        $query = "INSERT INTO  $this->table  (id_user, id_role, username, email, password, register_date, first_name, last_name) 
                    VALUES('', 2, :username, :email , :password, NOW(), '" . $data['firstName'] . "', '" . $data['lastName'] . "')";
        $this->db->query($query);

        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);


        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($username, $password)
    {
        $query = "SELECT * FROM  $this->table  WHERE username = :username";
        $this->db->query($query);

        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        $hashedPassword = $row->password;

        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    public function getTotalUsers()
    {
        $query = "SELECT COUNT(id_user) FROM $this->table";
        $this->db->query($query);
        return $this->db->single();
    }

    public function getAllUsers()
    {
        $query = "SELECT * FROM $this->table";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getUser()
    {
        $query = "SELECT first_name, last_name, phone_number, address FROM $this->table
                    WHERE id_user=" . $_SESSION['id_user'] . ";";

        $this->db->query($query);
        return $this->db->single();
    }

    public function editUser($data)
    {
        $query = "UPDATE  $this->table SET 
                        first_name= '" . $data['firstName'] . "',
                        last_name= '" . $data['lastName'] . "',  
                        phone_number=" . $data['phoneNumber'] . ",
                        address='" . $data['address'] . "',
                        password='" . $data['password'] . "'
                        WHERE id_user=" . $data['idUser'];

        $this->db->query($query);
        var_dump($query);
        // die;
        // $this->db->bind('first_name', $data['firstName']);
        // $this->db->bind('last_name', $data['lastName']);
        // $this->db->bind('phone_number', $data['phoneNumber']);
        // $this->db->bind('address', $data['address']);
        // $this->db->bind('id_user', $data['idUser']);

        // var_dump($query);
        // die;
        $this->db->execute();
        return $this->db->rowCount();
    }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email)
    {
        //Prepared statement
        $query = "SELECT * FROM $this->table WHERE email = :email";
        $this->db->query($query);

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
