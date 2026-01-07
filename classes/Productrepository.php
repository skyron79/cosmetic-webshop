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
            $Product->setId((int)$row['product_id']);
            $Product->setName($row['name']);
            $Product->setPrice($row['price']);
            $Product->setDescription($row['description']);
            $Product->setIngredients($row['ingredients']);
            $Product->setStock($row['stock']);

            $products[] = $Product;

         }

            return $products;
        }

        public function searchByName($query){
            $db= Database:: getConnection();

            $stmt= $db->prepare("SELECT * FROM webshop.product WHERE name LIKE :search");
            $stmt->execute([
                ':search' => '%'. $query. '%'
            ]);
            
            $products= [];


            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                $Product = new Product();
                $Product->setId((int)$row['product_id']);
                $Product->setName($row['name']);
                $Product->setPrice($row['price']);
                $Product->setDescription($row['description']);
                $Product->setIngredients($row['ingredients']);
                $Product->setStock($row['stock']);

                $products[] = $Product;

            }

            return $products;
        }

        public function getById($id)  {
            $db= Database:: getConnection();
            $stmt = $db ->prepare("SELECT * FROM webshop.product WHERE product_id = :id");
            $stmt ->execute([':id' => $id]);

            $row= $stmt->fetch(PDO::FETCH_ASSOC);

             if (!$row) {
                return null; // product not found
            }

                $Product = new Product();
                $Product->setId((int)$row['product_id']);
                $Product->setName($row['name']);
                $Product->setPrice((float)$row['price']);
                $Product->setDescription($row['description']);
                $Product->setIngredients($row['ingredients']);
                $Product->setStock((int)$row['stock']);

                return $Product;
            
        }

        public function filterByCategory($category_id){
            $db= Database:: getConnection();
            $stmt = $db->prepare("SELECT * FROM webshop.product WHERE category_id = :category_id");
            $stmt -> execute([':category_id' => $category_id]);
            $products = [];

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

            $Product = new Product();
            $Product->setId((int)$row['product_id']);
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