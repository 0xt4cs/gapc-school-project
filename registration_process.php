<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gapc_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

if (isset($_POST['username'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $middleInitial = $_POST['middleInitial'];
    $suffix = $_POST['suffix'];
    $address = $_POST['address'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];
    $civilStatus = $_POST['civilStatus'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $birthdate = $_POST['birthdate'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];


    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $message = "User already exists";
    } else {
        if ($password === $confirmPassword) {
            $sql = "INSERT INTO users (first_name, last_name, middle_initial, suffix, address, nationality, religion, civil_status, username, email, password, birthdate, age, sex)
            VALUES ('$firstName', '$lastName', '$middleInitial', '$suffix', '$address', '$nationality', '$religion', '$civilStatus', '$username', '$email', '$password', '$birthdate', '$age', '$sex')";

            if ($conn->query($sql) === TRUE) {
                $message = "User successfully registered";
            } else {
                $message = "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            $message = "Passwords do not match";
        }
    }



    $_SESSION['message'] = $message;
    header('Location: index.php');
    exit();
}
