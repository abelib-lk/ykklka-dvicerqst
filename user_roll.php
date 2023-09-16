<?php
// Start the session (if not already started)
session_start();

// Check if the user submitted the login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $epfno = $_POST["epfno"];
    $firstname = $_POST["firstname"];

    // Query the database to check userroll
    $db = new mysqli("localhost", "username", "password", "your_database");
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $sql = "SELECT userroll FROM tblemployees WHERE epfno = ? AND firstname = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("is", $epfno, $firstname);
    $stmt->execute();
    $stmt->bind_result($userroll);

    if ($stmt->fetch()) {
        // User found in the database
        if ($userroll == "normal") {
            // Redirect to request.php for normal users
            header("Location: request.php");
            exit;
        } elseif ($userroll == "special") {
            // Redirect to admin/index.php for special users
            header("Location: admin/index.php");
            exit;
        }
    } else {
        // User not found or incorrect credentials
        echo "Invalid credentials. Please try again.";
    }

    // Close database connection
    $stmt->close();
    $db->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="">
        <label for="epfno">EPF No:</label>
        <input type="text" name="epfno" required><br>

        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
