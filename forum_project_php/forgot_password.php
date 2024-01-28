<?php
// Assuming you have a database connection established
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forum_project_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $username = isset($_POST["username"]) ? $_POST["username"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    // Validate input and perform the update if valid
    if (!empty($username) && !empty($email) && !empty($new_password) && ($new_password == $confirm_password)) {
        // Check if the provided username and email exist in the sign_up table
        $check_query = "SELECT * FROM sign_up WHERE username = '$username' AND email = '$email'";
        $result = $conn->query($check_query);

        if ($result->num_rows > 0) {
            // Hash the new password
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

            // If a match is found, update the log_in table with the hashed new password
            $update_query = "UPDATE log_in SET password = '$hashed_password' WHERE username = '$username'";
            if ($conn->query($update_query) === TRUE) {
                echo "Password reset successfully!";
                // Redirect to log_in.php
                header("Location: log_in.php");
                exit();
            } else {
                echo "Error updating password: " . $conn->error;
            }
        } else {
            echo "Invalid username or email.";
        }
    } else {
        echo "Invalid input or passwords do not match.";
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="forgot_password.css">
</head>

<body>
    <div class="center-wrapper">
        <div class="container">
            <form action="#" method="post" accept-charset="utf-8" class="form" role="form">
                <legend>Forgot Password</legend>
                <p>Enter your Email, username and new password to reset the password</p>
                <div class="form-group">
                    <label for="email">username: </label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="text" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="new_password">New Password: </label>
                    <input type="password" id="new_password" name="new_password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password: </label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Reset Password</button>
            </form>
        </div>
    </div>
</body>
</html>
