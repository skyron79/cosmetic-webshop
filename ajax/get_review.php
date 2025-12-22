<?php

header('Content-Type: application/json');
require_once __DIR__ . '/../classes/Reviews.php';

$productId = (int)($_GET['product_id'] ?? 0);

$reviews = new Reviews();
echo json_encode($reviews->getProductReviews($productId));
