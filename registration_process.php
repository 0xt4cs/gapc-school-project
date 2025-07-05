<?php
session_start();

// Include secure database configuration
require_once './config/database.php';

$message = "";

if (isset($_POST['username'])) {
    try {
        // CSRF token validation
        if (!isset($_POST['csrf_token']) || !validateCSRFToken($_POST['csrf_token'])) {
            throw new Exception("Invalid CSRF token");
        }

        // Input validation and sanitization
        $firstName = sanitizeInput($_POST['firstName']);
        $lastName = sanitizeInput($_POST['lastName']);
        $middleInitial = sanitizeInput($_POST['middleInitial']);
        $suffix = sanitizeInput($_POST['suffix']);
        $address = sanitizeInput($_POST['address']);
        $nationality = sanitizeInput($_POST['nationality']);
        $religion = sanitizeInput($_POST['religion']);
        $civilStatus = sanitizeInput($_POST['civilStatus']);
        $username = sanitizeInput($_POST['username']);
        $email = sanitizeInput($_POST['email']);
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $birthdate = sanitizeInput($_POST['birthdate']);
        $age = (int)$_POST['age'];
        $sex = sanitizeInput($_POST['sex']);

        // Server-side validation
        if (!validateRequired($firstName) || !validateRequired($lastName) || 
            !validateRequired($username) || !validateRequired($email) || 
            !validateRequired($password)) {
            throw new Exception("All required fields must be filled");
        }

        if (!validateEmail($email)) {
            throw new Exception("Invalid email format");
        }

        if (strlen($password) < 8) {
            throw new Exception("Password must be at least 8 characters long");
        }

        if ($password !== $confirmPassword) {
            throw new Exception("Passwords do not match");
        }

        // Get database instance
        $db = Database::getInstance();

        // Check if username or email already exists
        $checkQuery = "SELECT COUNT(*) FROM users WHERE username = :username OR email = :email";
        $stmt = $db->prepare($checkQuery);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        if ($stmt->fetchColumn() > 0) {
            throw new Exception("Username or email already exists");
        }

        // Hash password securely
        $hashedPassword = hashPassword($password);

        // Insert new user with prepared statement
        $insertQuery = "INSERT INTO users (first_name, last_name, middle_initial, suffix, address, nationality, religion, civil_status, username, email, password, birthdate, age, sex) 
                       VALUES (:firstName, :lastName, :middleInitial, :suffix, :address, :nationality, :religion, :civilStatus, :username, :email, :password, :birthdate, :age, :sex)";
        
        $stmt = $db->prepare($insertQuery);
        $stmt->bindParam(':firstName', $firstName);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':middleInitial', $middleInitial);
        $stmt->bindParam(':suffix', $suffix);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':nationality', $nationality);
        $stmt->bindParam(':religion', $religion);
        $stmt->bindParam(':civilStatus', $civilStatus);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':birthdate', $birthdate);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':sex', $sex);

        if ($stmt->execute()) {
            $message = "User successfully registered";
        } else {
            throw new Exception("Registration failed. Please try again.");
        }

    } catch (Exception $e) {
        $message = $e->getMessage();
        error_log("Registration error: " . $e->getMessage());
    }

    $_SESSION['message'] = $message;
    header('Location: index.php');
    exit();
}
