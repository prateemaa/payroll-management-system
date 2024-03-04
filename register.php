<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both email and password are provided
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        // Retrieve the submitted email and password
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Perform your validation here, for example, you can check against a database
        // Dummy validation for demonstration purposes
        $valid_email = "admin@gmail.com";
        $valid_password = "password";

        if ($email == $valid_email && $password == $valid_password) {
            // If valid, set session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["email"] = $email;
            // Redirect to a secure page
            header("Location: secure_page.php");
            exit;
        } else {
            // If invalid, redirect back to the login page with an error message
            $_SESSION["error"] = "Invalid email or password";
            header("Location: login.php");
            exit;
        }
    } else {
        // If email or password is not provided, redirect back to the login page
        $_SESSION["error"] = "Email and password are required";
        header("Location: index.php");
        exit;
    }
} else {
    // If someone tries to access this script directly, redirect them to the login page
    header("Location: index.php");
    exit;
}
?>
