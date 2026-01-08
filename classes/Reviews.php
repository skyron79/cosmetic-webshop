<?php
 include_once(__DIR__ . "/database.php");

class Reviews{
    private $id;
    private $customer_id;
    private $product_id;
    private $comment;
    private $date;

    /** setters  */

    public function setId($id){
    $this->id = $id;}

    public function setCustomerId($customer_id){
    $this->customer_id = $customer_id;} 

    public function setProductId($product_id){
    $this->product_id = $product_id;}

    public function setComment($comment){
    $this->comment = $comment;}

    public function setDate($date){
    $this->date = $date;}

    /** getters  */

    public function getId(){
    return $this->id;}  

    public function getCustomerId(){
    return $this->customer_id;}

    public function getProductId(){
    return $this->product_id;}

    public function getComment(){
    return $this->comment;} 

    public function getDate(){
    return $this->date;}

    public function getProductReviews($product_id){
        $db= Database::getConnection();
        $stmt = $db->prepare("
        SELECT c.name, r.comment, r.created_at 
        FROM reviews r
        INNER JOIN customer c
        ON c.customer_id = r.customer_id
        WHERE r.product_id = :product_id
        ORDER BY r.created_at DESC
        LIMIT 5");
        $stmt-> bindParam(':product_id', $product_id);
        $stmt-> execute();

        $reviews = [];

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $reviews[] = $row;
        }
        return $reviews;
    }

    public function saveReview($customer, $product_id, $comment){

        $db= Database::getConnection();
        $stmt = $db->prepare("INSERT INTO reviews (product_id, customer_id, comment)
                            SELECT  
                            p.product_id,
                            c.customer_id,
                            :comment
                            FROM product p
                            JOIN customer c 
                            ON c.name= :customer
                            WHERE p.product_id = :product_id;
                            ");

        $stmt-> bindParam(':customer', $customer);
        $stmt-> bindParam(':product_id', $product_id);
        $stmt-> bindParam(':comment', $comment);

        return $stmt-> execute();
    }

  

}