<?php

$requestedFile = $_GET['file'] ?? '';
$requestedFile = str_replace('\\', '/', $requestedFile);
$requestedFile = ltrim($requestedFile, '/');

if (
    $requestedFile === '' ||
    str_contains($requestedFile, '..')
) {
    http_response_code(400);
    exit('Invalid asset path');
}

$filePath = __DIR__ . '/../public/build/' . $requestedFile;

if (!is_file($filePath)) {
    http_response_code(404);
    exit('Asset not found');
}

$extension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));

$contentTypes = [
    'css' => 'text/css; charset=UTF-8',
    'js' => 'application/javascript; charset=UTF-8',
    'json' => 'application/json; charset=UTF-8',
    'svg' => 'image/svg+xml',
    'png' => 'image/png',
    'jpg' => 'image/jpeg',
    'jpeg' => 'image/jpeg',
    'webp' => 'image/webp',
    'gif' => 'image/gif',
    'woff' => 'font/woff',
    'woff2' => 'font/woff2',
    'ttf' => 'font/ttf',
];

header('Content-Type: ' . ($contentTypes[$extension] ?? 'application/octet-stream'));
header('Content-Length: ' . filesize($filePath));
header('Cache-Control: public, max-age=31536000, immutable');

readfile($filePath);
exit;