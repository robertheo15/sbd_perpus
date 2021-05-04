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
        $this->db->query("INSERT INTO " . $this->table . " (id_user, id_role, username, email, password, register_date, first_name, last_name) 
                            VALUES('', 2, :username, :email , :password, NOW(), '" . $data['firstName'] . "', '" . $data['lastName'] . "')");

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
        $this->db->query("SELECT * FROM " . $this->table . " WHERE username = :username");

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
        $query = "SELECT COUNT(id_user)  FROM " . $this->table . "";
        $this->db->query($query);
        return $this->db->single();
    }

    public function getAllUsers()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email)
    {
        //Prepared statement
        $this->db->query('SELECT * FROM " . $this->table . " WHERE email = :email');

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
