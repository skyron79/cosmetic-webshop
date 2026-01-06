<?php
session_start();
header('Content-Type: application/json');

if (!isset($_POST['product_id'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing product_id']);
    exit;
}

$productId = (int)$_POST['product_id'];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_SESSION['cart'][$productId])) {
    $_SESSION['cart'][$productId]++;
} else {
    $_SESSION['cart'][$productId] = 1;
}

echo json_encode([
    'success' => true,
    'cart' => $_SESSION['cart']
]);