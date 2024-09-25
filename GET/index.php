<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $message = htmlspecialchars($_GET['message'] ?? '');

    if (empty($message)) {
        header('HTTP/1.1 400 Bad Request');
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Message cannot be empty']);
        exit;
    }

    header('HTTP/1.1 200 OK');
    header('Content-Type: application/json');
    echo json_encode(['message' => $message]);
} else {
    header('HTTP/1.1 405 Method Not Allowed');
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Method not allowed']);
}