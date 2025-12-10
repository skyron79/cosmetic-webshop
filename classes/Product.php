<?php
include_once(__DIR__ . "/database.php");

class Product{ 

    private $id;
    private $name;
    private $price;
    private $description;
    private $ingredients; 
    private $stock;

    /** setters  */
    public function setName($name){
        $this->name = $name;
    }

    public function setPrice($price) {
        if ($price < 0  ){
            throw new Exception("Price cannot be negative");
        }
        $this->price = $price;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setIngredients($ingredients) {
        $this->ingredients = $ingredients;
    }

    public function setStock($stock) {
        if($stock < 0){
            throw new Exception("Stock cannot be negative");
        }
        $this->stock = $stock;
    }

    /** getters  */

    public function getName(){
    return $this->name;
    }
    public function getPrice(){
    return $this->price;
    }
    public function getDescription(){
    return $this->description;
    }
    public function getIngredients(){
    return $this->ingredients;
    }
    public function getStock(){
    return $this->stock;
    }

}



