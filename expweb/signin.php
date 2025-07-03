<?php
session_start(); // Start session

$server = "localhost";
$username = "root";
$password = "";
$database = "expweb";

// Connect to the database
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get email and password from POST
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Basic validation
    if (!empty($email) && !empty($password)) {
        // SQL to find user with matching email and password
        $sql = "SELECT * FROM data WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows == 1) {
            $row = $result->fetch_assoc();

            // Set session variable
            $_SESSION['user'] = $row['name']; // or email or id

            // Redirect to dashboard or success page
            echo "✅ Login successful. Welcome, " . $_SESSION['user'];
            // header("Location: dashboard.php"); exit;
        } else {
            echo "❌ Invalid email or password.";
        }
    } else {
        echo "Please enter both email and password.";
    }
} else {
    echo "Form not submitted properly.";
}
?>
