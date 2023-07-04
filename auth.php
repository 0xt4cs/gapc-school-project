<?php
if (session_status() == PHP_SESSION_NONE) {
    session_set_cookie_params([
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Strict'
    ]);
    session_start();
}

if (!isset($_SESSION['USER_AGENT'])) {
    $_SESSION['USER_AGENT'] = $_SERVER['HTTP_USER_AGENT'];
} elseif ($_SESSION['USER_AGENT'] !== $_SERVER['HTTP_USER_AGENT']) {
    session_destroy();
    header("Location: ../access_denied.php");
    exit;
}

if (!isset($_SESSION['authenticated'])) {
    header("Location: ../access_denied.php");
    exit;
}
