<?php
/**
 * Health Check Endpoint
 * Simple health check for monitoring and load balancers
 */

header('Content-Type: application/json');

$health = [
    'status' => 'healthy',
    'timestamp' => date('Y-m-d H:i:s'),
    'version' => '2.0.0',
    'checks' => []
];

// Check if configuration is loaded
try {
    require_once './config/database.php';
    $health['checks']['config'] = 'ok';
} catch (Exception $e) {
    $health['checks']['config'] = 'error';
    $health['status'] = 'unhealthy';
}

// Check database connection
try {
    $db = Database::getInstance();
    if ($db->getConnection()) {
        $health['checks']['database'] = 'ok';
    } else {
        $health['checks']['database'] = 'error';
        $health['status'] = 'unhealthy';
    }
} catch (Exception $e) {
    $health['checks']['database'] = 'error';
    $health['status'] = 'unhealthy';
}

// Check if session functionality works
try {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $health['checks']['session'] = 'ok';
} catch (Exception $e) {
    $health['checks']['session'] = 'error';
    $health['status'] = 'unhealthy';
}

// Check file permissions
if (is_writable('./') && is_readable('./config/database.php')) {
    $health['checks']['permissions'] = 'ok';
} else {
    $health['checks']['permissions'] = 'error';
    $health['status'] = 'unhealthy';
}

// Set HTTP status code
if ($health['status'] === 'healthy') {
    http_response_code(200);
} else {
    http_response_code(503);
}

echo json_encode($health, JSON_PRETTY_PRINT);