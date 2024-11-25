<?php
session_start();

require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/lib/redis.php';
require_once __DIR__ . '/controllers/ThemeController.php';
require_once __DIR__ . '/controllers/CommentController.php';

$request = $_SERVER['REQUEST_URI'];

if ($request === '/') {
    (new ThemeController())->index();
} elseif ($request === '/comment' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    (new CommentController())->store();
} else {
    http_response_code(404);
    echo "Not Found";
}
