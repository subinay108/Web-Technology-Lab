<?php
// file_put_contents("debug.log", "Request Method: " . $_SERVER['REQUEST_METHOD'] . "\n", FILE_APPEND);

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["output" => "Method Not Allowed"]);
    exit;
}

// Read input
$input = json_decode(file_get_contents("php://input"), true);
$code = $input['code'] ?? '';

// Capture output buffer
ob_start();
try {
    eval("?>$code");
    $output = ob_get_clean();
} catch (Throwable $e) {
    $output = "Error: " . $e->getMessage();
    ob_end_clean();
}

echo json_encode(["output" => $output]);
