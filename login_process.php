<?php
// Include secure database configuration
require_once './config/database.php';

function checkUserCredentials($usernameOrEmail, $password)
{
    try {
        $db = Database::getInstance();
        
        $query = "SELECT * FROM users WHERE username = :usernameOrEmail OR email = :usernameOrEmail";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':usernameOrEmail', $usernameOrEmail, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Use secure password verification
            if (verifyPassword($password, $user['password'])) {
                $_SESSION['user'] = $user;
                $_SESSION['authenticated'] = true;
                $_SESSION['USER_AGENT'] = $_SERVER['HTTP_USER_AGENT'];

                $fullname = $user['first_name'] . ' ' . $user['last_name'];
                $_SESSION['welcomeMessage'] = "Welcome! " . $fullname;

                return true;
            }
        }
    } catch (Exception $e) {
        error_log("Login error: " . $e->getMessage());
    }

    return false;
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    session_start();

    // CSRF token validation
    if (!isset($_POST['csrf_token']) || !validateCSRFToken($_POST['csrf_token'])) {
        $_SESSION['message'] = "Invalid request. Please try again.";
        header("Location: ./index.php");
        exit;
    }

    // Rate limiting - simple implementation
    if (!isset($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts'] = 0;
        $_SESSION['last_login_attempt'] = time();
    }

    // Check if too many attempts
    if ($_SESSION['login_attempts'] >= 5 && (time() - $_SESSION['last_login_attempt']) < 300) {
        $_SESSION['message'] = "Too many login attempts. Please try again in 5 minutes.";
        header("Location: ./index.php");
        exit;
    }

    $username = sanitizeInput($_POST['username']);
    $password = $_POST['password'];

    if (checkUserCredentials($username, $password)) {
        // Reset login attempts on successful login
        unset($_SESSION['login_attempts']);
        unset($_SESSION['last_login_attempt']);
        
        header("Location: ./main-index/home/");
        exit;
    } else {
        $_SESSION['login_attempts']++;
        $_SESSION['last_login_attempt'] = time();
        $_SESSION['message'] = "Invalid username or password";
        header("Location: ./index.php");
        exit;
    }
}
