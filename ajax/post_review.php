<?php
session_start();
header('Content-Type: application/json');

require_once __DIR__ . '/../classes/Reviews.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

if (!isset($_SESSION['username'])) {
    http_response_code(401);
    echo json_encode(['error' => 'Not logged in']);
    exit;
}

$comment = trim($_POST['review'] ?? '');
$productId = (int)($_POST['product_id'] ?? 0);

if ($comment === '' || $productId === 0) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid input']);
    exit;
}

try {
    $reviews = new Reviews();
    $reviews->saveReview($_SESSION['username'], $productId, $comment);
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    http_response_code(400);
    echo json_encode(['error' => $e->getMessage()]);
}