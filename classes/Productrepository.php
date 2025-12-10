<?php
include_once(__DIR__ .'/database.php');
include_once(__DIR__ .'/Product.php');

class ProductRepository {

    public function getAll(){
        $db= Database:: getConnection();

        $stmt = $db->prepare("SELECT * FROM webshop.product");
        $stmt -> execute();
        $products = [];

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

            $Product = new Product();
            $Product->setName($row['name']);
            $Product->setPrice($row['price']);
            $Product->setDescription($row['description']);
            $Product->setIngredients($row['ingredients']);
            $Product->setStock($row['stock']);

            $products[] = $Product;

         }

        return $products;
    }
}