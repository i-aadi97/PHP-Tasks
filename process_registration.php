<?php
// Start a session
session_start();

// Initialize an array to store validation errors
$errors = [];

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect user input
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Validate the input
    if (empty($name)) {
        $errors["name"] = "Full name is required.";
    }

    if (empty($email)) {
        $errors["email"] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format.";
    }

    if (empty($password)) {
        $errors["password"] = "Password is required.";
    }

    if (empty($confirm_password)) {
        $errors["confirm_password"] = "Confirm password is required.";
    } elseif ($password !== $confirm_password) {
        $errors["confirm_password"] = "Passwords do not match.";
    }

    // If there are no validation errors, proceed with registration
    if (empty($errors)) {
        // Registration successful, store user information in session (or a database)
        $_SESSION["user_name"] = $name;
        $_SESSION["user_email"] = $email;

        // Redirect to the welcome page
        header("Location: welcome.php");
        exit();
    }
}

// If there are validation errors, store them in the session and redirect back to the registration form
$_SESSION["validation_errors"] = $errors;
header("Location: registration_form.php");
exit();
?>