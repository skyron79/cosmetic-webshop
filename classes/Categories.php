<?php

include_once(__DIR__ . "/database.php");

Class Categories {
    private $id;
    private $name;

    /** setters */
    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    /** getters */
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getAllCategories() {    
        $db = Database::getConnection(); 
        $stmt = $db->prepare("SELECT * FROM categories");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
