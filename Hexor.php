<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(404);
    exit;
}

header('Content-Type: text/plain');
echo "HEXORBI8IVSTA6YU";
