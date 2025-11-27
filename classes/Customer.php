<?php
include_once(__DIR__ . "/database.php");

class Customer {
    private $email;
    private $username;
    private $password;

    public function setUsername($username) {
        if(empty($username)){
            throw new Exception("Username cannot be empty");
        }

        $this->username = $username;
    }

      public function setPassword($password) {
        if(empty($password)){
            throw new Exception("Password cannot be empty");
        }   
        
        $this->password = $password;
    }

    public function setEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Invalid email format");
        }
    
        $this->email = $email;

    }


    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function login($p_username, $p_password){

        $db= Database::getconnection();
        $stmt = $db->prepare("SELECT * FROM customer WHERE name = :username AND password = :password");
        $stmt-> bindParam(':username', $p_username);
        $stmt-> bindParam(':password', $p_password);
        $stmt-> execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);


    }
}
