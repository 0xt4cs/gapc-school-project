<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gapc_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

function checkUserCredentials($usernameOrEmail, $password)
{
    global $conn;

    $query = "SELECT * FROM users WHERE username = :usernameOrEmail OR email = :usernameOrEmail";
    /** @var PDOStatement $stmt */
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':usernameOrEmail', $usernameOrEmail, PDO::PARAM_STR);

    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($password === $user['password']) {
            $_SESSION['user'] = $user;
            $_SESSION['authenticated'] = true;

            $fullname = $user['first_name'] . ' ' . $user['last_name'];
            $_SESSION['welcomeMessage'] = "Welcome! " . $fullname;

            return true;
        }
    }

    return false;
}


if (isset($_POST['username']) && isset($_POST['password'])) {
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (checkUserCredentials($username, $password)) {
        header("Location: ./main-index/home/");
        exit;
    } else {
        $_SESSION['message'] = "Invalid username or password";
        header("Location: ./index.php");
        exit;
    }
}
