<?php
// Include secure database configuration
require_once __DIR__ . '/config/database.php';

if (session_status() == PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => $_ENV['SESSION_LIFETIME'] ?? 7200,
        'path' => '/',
        'domain' => '',
        'secure' => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on',
        'httponly' => true,
        'samesite' => 'Strict'
    ]);
    session_start();
}

// Session hijacking protection
if (!isset($_SESSION['USER_AGENT'])) {
    $_SESSION['USER_AGENT'] = $_SERVER['HTTP_USER_AGENT'];
} elseif ($_SESSION['USER_AGENT'] !== $_SERVER['HTTP_USER_AGENT']) {
    session_destroy();
    header("Location: ../access_denied.php");
    exit;
}

// Session timeout
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > ($_ENV['SESSION_LIFETIME'] ?? 7200)) {
    session_destroy();
    header("Location: ../access_denied.php");
    exit;
}
$_SESSION['last_activity'] = time();

// Authentication check
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: ../access_denied.php");
    exit;
}
